<?php

namespace App\Http\Controllers;


use App\Venta;
use App\User;
use App\VentaDetalle;
use Illuminate\Http\Request;

class VentaController extends Controller
{ 
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
        {
             $id= auth()->user()->asociado_membrecia;
             $total=0;
             $ventas= Venta ::where("asociado_membrecia","=",$id) ->latest()->get();

             foreach ($ventas as $item ) {
              $total+=$item->venta_total;

             }

            return view('dash.ventas.index' , [ 

                    'ventas'=> Venta ::where("asociado_membrecia","=",$id) ->latest()->paginate(5),
                    'total' => $total

             ]);

            
        }  

        public function show($id){


            return view('dash.ventas.show',[
                'ventas'=> VentaDetalle ::where("id_venta","=",$id) ->latest()->paginate(5),
                'venta'=> Venta ::findOrFail($id),
                'num'=>1,
                'usuario'=> User ::findOrFail( auth()->user()->id),
                'total'=>$this->total($id),
                'ganancia'=>$this->ganancia($id)
       
            ]);
        } 

        public function total( $id)
        {
          $total=0;
          $subt=0;
          $detalle=VentaDetalle ::where("id_venta","=",$id)->get();

          foreach ($detalle as $item ) {
            $subt =$item->precio_venta* $item->producto_cantidad;
            $total+=$subt;
          }
        
          return $total;
        }

        public function ganancia($id)
        {
            $total=0;
          $subt=0;
          $detalle=VentaDetalle ::where("id_venta","=",$id)->get();

          foreach ($detalle as $item ) {

            $costo=$item->costo_producto*$item->producto_cantidad;
            $precio=$item->precio_venta*$item->producto_cantidad;
           $ganancia=$precio-$costo;
           $total+=$ganancia;
          }
        
          return $total;
        }
       
         

}
