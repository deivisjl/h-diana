<?php

namespace App\Http\Controllers;
use App\VentaDetalle;
use App\Venta;
use App\Asociado;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaldoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if (!\Session::has('arraysaldo')) \Session::put('arraysaldo',array());

    } 

    public function index()
    {    

        $date = Carbon::now();
        $mes = $date->format('m');
        $anio = $date->format('Y');
        $this->linea();

             return view('dash.meta.saldo', [ 
                  
                'ganancia'=>$this->ganancia($mes,$anio),
                'mayoreo'=>$this->mayoreo($mes,$anio),
                'regalias'=>$this->regalias($mes,$anio)
               
                ]);
            
    } 

    private function ganancia($mes,$anio)
    {
      $id= auth()->user()->asociado_membrecia;
      $total=0;
      $ganancia=0;

      $ventas=Venta::whereMonth('created_at', $mes)
      ->whereYear('created_at', $anio)
      ->where("asociado_membrecia","=",$id)
      ->get();

      foreach ($ventas as $venta ) { 
       
         $detalle=VentaDetalle ::where("id_venta","=",$venta->id_venta)->get();

      foreach ($detalle as $item) {
         $costo=$item->costo_producto*$item->producto_cantidad;
         $precio=$item->precio_venta*$item->producto_cantidad;
        $ganancia+=$precio-$costo;
         
      }
        $total+=$ganancia;
      } 

      return $total;
    } 


    private function mayoreo($mes,$anio)
    {   

    $usuario= User ::findOrFail( auth()->user()->id);

    $ventat=0;
    $total=0;

      $car = \Session::get('arraysaldo');

        
                  
          try {
            foreach ($car as $linea ) {
              if (($linea["nombre"]->nivel->nivel_descuento)<($usuario->asociado->nivel->nivel_descuento) ) {
                
               
                 $diferencia= ($usuario->asociado->nivel->nivel_descuento)- ($linea["nombre"]->nivel->nivel_descuento);
             
                 $ventas=Venta::whereMonth('created_at', $mes)
                      ->whereYear('created_at', $anio)
                      ->where("asociado_membrecia","=",$linea["nombre"]->asociado_membrecia)
                      ->get();
                  
                  if (count($ventas)) {
                    foreach ($ventas as $item) {
                      $ventat= $item->venta_total;
                      $total+=$ventat*$diferencia;
                    }
                  } 
                  
                     
                         
                     }
            }
          } catch (\Throwable $th) {
           
          }
      
       
        return $total;
        
    } 

    private function regalias($mes,$anio)
    { 
        
    $usuario= User ::findOrFail( auth()->user()->id);

        $car = \Session::get('arraysaldo');

     
      
         $total=0;
         $idMayorista=5;

         try {

          foreach ($car as $linea ) {
            if ($linea["nombre"]->nivel->id_nivel==$idMayorista ) {
              
             
            
               $ventas=Venta::whereMonth('created_at', $mes)
                    ->whereYear('created_at', $anio)
                    ->where("asociado_membrecia","=",$linea["nombre"]->asociado_membrecia)
                    ->get();
                

                    if (count($ventas)) {
                      foreach ($ventas as $item) {
                        $ventat= $item->venta_total;
                        $total+=$ventat*0.05;
                      }
                    } 
                    
                   
                       
                   }
          }
          
         } catch (\Throwable $th) {
           //throw $th;
         }

      
       
        return $total;
        
    } 




    private function linea()
    {
        $rootId= auth()->user()->asociado_membrecia;
        $data=Asociado ::all();
        $usuario= User ::findOrFail( auth()->user()->id);

        \Session::forget('arraysaldo');

        

          $array = [
              array('id' => '',
              'user' =>  $usuario,
              'parentId' => '')
      
          ]; 

          foreach ($data as $item ) {
              array_push($array, array('id' => $item->asociado_membrecia,
          'nombre' => $item,
          'parentId' => $item->padre));
          }
     

      $tree= $this->arbol($array,$rootId);
          
    $imprimir=  $this->almacenar($tree['root']);
    }

    function almacenar($tree) {

    
        foreach ($tree as $row)
        { 
                $car  = \Session::get('arraysaldo');

                $arrayim =array('id' =>$row['id'],
                'nombre' =>$row['nombre'],
                'parentId' => $row['parentId']);


                    $car [$row['id']] = $arrayim;
            
                \Session::put('arraysaldo',  $car);


                    
                        if (count($row['children'])>0){
                        $this-> almacenar($row['children']);
                        }
            
            
        } 

      
        } 


 
  

  
        function arbol($data, $rootId)
        {
        $tree = array('children' => array(),
        'root' => array()
        );
        foreach ($data as $ndx=>$node)
        {
        $id = $node['id'];
        /* Puede que exista el children creado si los hijos entran antes que el padre */
        $node['children'] = (isset($tree['children'][$id]))?$tree['children'][$id]['children']:array();
        $tree['children'][$id] = $node;

        if ($node['parentId'] == $rootId)
        $tree['root'][$id] = &$tree['children'][$id];
        else
        {
        $tree['children'][$node['parentId']]['children'][$id] = &$tree['children'][$id];
        }

        }
        return $tree;
        }


      
   

          


            
}
