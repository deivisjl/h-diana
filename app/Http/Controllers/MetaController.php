<?php

namespace App\Http\Controllers;
use App\Volumen; 
use App\Asociado; 
use App\Compra;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MetaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {   

        $date = Carbon::now();
        $fecha = $date->format('d-m-Y');
        $mes = $date->format('m');
        $anio = $date->format('Y');
        $volumenl=0;

        $volumen= $this->volumen($mes,$anio);
        $asociado = Asociado ::findOrFail( auth()->user()->asociado_membrecia);

        try {
           $volumenl=$this->volumenlinea();
        } catch (\Throwable $th) {
            //throw $th;
        }
        
             return view('dash.meta.meta', [ 
                 'volumen'=> $volumen,
                 'asociado'=>$asociado,
                 'volumenl'=> $volumenl,
                  'porcenP' =>$porcenP=$this->porcentaje($volumen,$asociado->nivel->puntosP),
                  'porcenL' =>$porcenL=$this->porcentaje($volumenl,$asociado->nivel->puntosL),
                  'fecha'=> $fecha
                 ]);
        
    } 


    //CALCULO DE VALORES RESTANTES Y TOTALES 


    private function volumen ($mes,$anio)
    {  
        $total=0;
        $id= auth()->user()->asociado_membrecia;
        
      $compras=Compra::whereMonth('created_at', $mes)
                      ->whereYear('created_at', $anio)
                      ->where("asociado_membrecia","=",$id)
                      ->get();

         
foreach ($compras as $compra) {
          
           $total+= $compra->compra_totalVolumen;
        }
        return $total;
    }


    public function porcentaje($acumulado,$total)
    {   
        $porcen=0;
        
        if ($total!=0) {
            $porcen= (($acumulado*100)/$total);
        }
       
        // if ($porcen>100) {
        //     $porcen=100;
        // }
        return $porcen;
    }

   
 private function volumenlinea()
 {
    $volumen =Volumen ::findOrFail( auth()->user()->asociado_membrecia);

    return $volumen->volumen_l;

 }

    // private function volumenlineaE($mes,$anio)
    // {
    //     $rootId= auth()->user()->asociado_membrecia;
    //     $data=Asociado ::all();
    //     $volumen=0;
    //     $total=0;

    //         //RECORRIDO DE ARBOL 
    //         $tree = array('children' => array(),
    //                         'root' => array());
    //             foreach ($data as $ndx => $node) {
    //                 $id = $node['asociado_membrecia'];
    //                 /* Puede que exista el children creado si los hijos entran antes que el padre */
    //                 $node['children'] = (isset($tree['children'][$id]))?$tree['children'][$id]['children']:array();
    //                 $tree['children'][$id] = $node;

    //                 if ($node['padre'] == $rootId)
    //                     $tree['root'][$id] = &$tree['children'][$id];
    //                     else
    //                     {
    //                 // $tree['children'][$node['padre']]['children'][$id] = &$tree['children'][$id];
    //                     }

    //             } 

    //             foreach ($tree['root'] as $linea ) {

          
    //               $compras=Compra::whereMonth('created_at', $mes)
    //               ->whereYear('created_at', $anio)
    //               ->where("asociado_membrecia","=",$linea->asociado_membrecia)
    //               ->get();
                
                 
    //               foreach ($compras as $compra) {
          
    //                 $total+= $compra->compra_totalVolumen;
                    
    //              }
                  
                  
    //             } 

    //             $volumen+=$total;

    //             return $volumen;
    //          }

}
