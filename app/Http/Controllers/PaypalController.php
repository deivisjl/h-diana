<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Compra;
use App\Asociado;
use App\Volumen;
use App\CompraDetalle;
use Carbon\Carbon;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends Controller
{
    private $_api_context;

	public function __construct()
	{     $this->middleware('auth');
		$paypal_conf = \Config::get('paypal');
		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);
	}

	public function postPayment()
        {
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $items = array();
            $subtotal = 0;
            $car = \Session::get('car');
            $currency = 'MXN';
            

            foreach($car as $producto){
                $item = new Item();
            
                $item->setName($producto->producto_nombre)
                ->setCurrency($currency)
                ->setDescription($producto->producto_detalle)
                ->setQuantity($producto->cantidad)
                ->setPrice($producto->producto_precio);

                $items[] = $item;
                $subtotal += $producto->cantidad * $producto->producto_precio;
            }

            $item_list = new ItemList();
            $item_list->setItems($items);

            $details = new Details();
            $details->setSubtotal($subtotal)
            ->setShipping(150);

            $total = $subtotal + 150;

            $amount = new Amount();
            $amount->setCurrency($currency)
                ->setTotal($total)
                ->setDetails($details);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Pedido de productos Hierbalife');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(\URL::route('paypal.status'))
                ->setCancelUrl(\URL::route('paypal.status'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));

            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (\Config::get('app.debug')) {
                    echo "Exception: " . $ex->getMessage() . PHP_EOL;
                    $err_data = json_decode($ex->getData(), true);
                    exit;
                } else {
                    die(' Algo salió mal');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            // add payment ID to session
            \Session::put('paypal_payment_id', $payment->getId());

            if(isset($redirect_url)) {
                // redirect to paypal
                return \Redirect::away($redirect_url);
            }

            return \Redirect::route('dash.store.car.orden')
                ->with('error', ' Error desconocido.');

    } 
    
    public function getPaymentStatus()
	{
            // Get the payment ID before session clear
            $payment_id = \Session::get('paypal_payment_id');

            // clear the session payment ID
            \Session::forget('paypal_payment_id');

            $payerId = \Input::get('PayerID');
            $token = \Input::get('token');

            //if (empty(\Input::get('PayerID')) || empty(\Input::get('token'))) {
            if (empty($payerId) || empty($token)) {
                return \Redirect::route('dash.store.index')
                    ->with('status', 'Hubo un problema al intentar pagar con Paypal');
            }

            $payment = Payment::get($payment_id, $this->_api_context);

            // PaymentExecution object includes information necessary 
            // to execute a PayPal account payment. 
            // The payer_id is added to the request query parameters
            // when the user is redirected from paypal back to your site
            $execution = new PaymentExecution();
            $execution->setPayerId(\Input::get('PayerID'));

            //Execute the payment
            $result = $payment->execute($execution, $this->_api_context);

            //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

            if ($result->getState() == 'approved') { // payment made
             

                $this->saveCompra(\Session::get('car'));

                \Session::forget('car');


                return \Redirect::route('homdash.store.indexe')
                    ->with('status', 'Compra realizada de forma correcta');
            }
            return \Redirect::route('dash.store.index')
                ->with('status', 'La compra fue cancelada');
        }


        private function saveCompra($car)
        {
            $subtotal = 0;
            $subtotalV=0;
            $envio=150;
            foreach($car as $item){
                $subtotal += $item->producto_precio * $item->cantidad;
                $subtotalV += $item->producto_puntos * $item->cantidad;
            }
           
            DB::beginTransaction();
 
                try {
                    $compra = Compra::create([
                        'asociado_membrecia' => auth()->user()->asociado_membrecia,
                        'compra_total' => $subtotal,
                        'compra_totalVolumen' =>  $subtotalV,
                        'compra_envio'=> $envio
                    ]);
                    
                    foreach($car as $item){
                        $this->saveCompraDetalle($item, $compra->id_compra);
                    }  
        
                    $this->volumenInsert();

                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollback();
                    throw $e;
                } catch (\Throwable $e) {
                    DB::rollback();
                    throw $e;
                }


            \Session::forget('car');
        }
        
        private function saveCompraDetalle($item, $id_compra)
        {
            CompraDetalle::create([
                'id_producto' => $item->id_producto,
                'id_compra' => $id_compra,
                'producto_precio' => $item->producto_precio,
                'producto_volumen' => $item->producto_puntos,
                'producto_cantidad' =>  $item->cantidad
            ]);
        } 


        public function volumenInsert()
        {
            volumen::updateOrInsert(
                ['asociado_membrecia' => auth()->user()->asociado_membrecia],
                ['volumen_l' => $this->volumenL()]
            );
        }

        public function volumenL()
        { 
            $date = Carbon::now();
            $mes = $date->format('m');
            $anio = $date->format('Y');
            $totalcompras=0;
            $total=0;

            
            $linea=Asociado::where("padre","=",auth()->user()->asociado_membrecia)->get();
          
            foreach ($linea as $asociado) {

                $compras=Compra::whereMonth('created_at', $mes)
                ->whereYear('created_at', $anio)
                ->where("asociado_membrecia","=",$asociado->asociado_membrecia)
                ->get();

                foreach ($compras as $compra) {
              
                    $totalcompras+= $compra->compra_totalVolumen;
                 }
                
                $total+=$totalcompras;
          } 
           return $total;

        }

     


        public function compra()
        {
            $this->saveCompra(\Session::get('car'));
            return \Redirect::route('dash.store.compra.index')
                    ->with('status', 'Compra realizada de forma correcta');
        }


}
