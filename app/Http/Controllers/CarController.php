<?php

namespace App\Http\Controllers;
use App\Productos;
use App\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    if (!\Session::has('car')) \Session::put('car',array());
       
    
    } 

    public function index()
        {

            $car = \Session::get('car');
  
            return view('dash.store.car.index' , [ 

                'car'=> $car,
                'total'=>$total = $this->total(),
                'totalpv'=>$totalV = $this->totalVolumen(),
                'usuario'=> User ::findOrFail( auth()->user()->id),
                'num'=>0
                
                
      
             ]);
        } 

        public function add(Productos $producto)
        {
            $car = \Session::get('car');
            $producto->cantidad = 1;
            $producto->producto_precio= $this->precio($producto);
            $car[$producto->id_producto] = $producto;
            \Session::put('car', $car);
    
            return redirect()->route('dash.store.car.index');
        }

        public function delete(Productos $producto)
            {
                $car = \Session::get('car');
                unset($car[$producto->id_producto]);
                \Session::put('car', $car);

                return redirect()->route('dash.store.car.index');
            }

            public function trash()
            {
                \Session::forget('car');
        
                return redirect()->route('dash.store.car.index');
            } 

           
            public function update(Productos $producto,$cantidad)
            {
               
               
                $car = \Session::get('car');
                $car[$producto->id_producto]->cantidad = $cantidad;
                \Session::put('car', $car);
        
                return redirect()->route('dash.store.car.index');
            }
           
        
            public function orden()
            {
                if(count(\Session::get('car')) <= 0) return redirect()->route('dash.store.index');
                $car = \Session::get('car');
                $total = $this->total();
                return view('dash.store.car.orden' , [ 

                    'car'=> $car,
                    'total'=>$total,
                    'num'=>0,
                    'usuario'=> User ::findOrFail( auth()->user()->id)

                 ]);
            }

            

        private function totalVolumen()
        {
            $car = \Session::get('car');
            $total = 0;
            

            foreach($car as $item){
                $total += $item->producto_puntos * $item->cantidad;
            }
    
            return $total;
        } 

        private function total()
        {
            $car = \Session::get('car');
            $total = 0;
           // $usuario= User ::findOrFail( auth()->user()->id);

            foreach($car as $item){
            
              $total += $item->producto_precio * $item->cantidad;
            }
       
            return $total;
        } 

            private function precio(Productos $item)
            {
               $precio=0;
                $usuario =User ::findOrFail( auth()->user()->id);
                $precio=$item->producto_precio-($item->producto_precio*$usuario->asociado->nivel->nivel_descuento);

                return $precio;
            }

            
        

}
