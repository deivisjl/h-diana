<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asociado; 
use App\Volumen;
use App\User;

class LineaController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth'); 

         if (!\Session::has('arrayim')) \Session::put('arrayim',array());

       
    }



        function index()
        { 

            \Session::forget('arrayim');

            $rootId= auth()->user()->asociado_membrecia;
            $data=Asociado ::all();

            $usuario= User ::findOrFail( auth()->user()->id);

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
        
      $car = \Session::get('arrayim');
            $num=1;
       
        return view('dash.linea.linea', [ 
            'linea'=> $car,
            'user'=> Asociado ::findOrFail($rootId),
            'num' =>$num
            
            ]);

    //     $estructura[] = ['name '];

    //     $c=0;
    //     foreach($car as  $value)
    //  {
    //   $estructura[$c++] = [$value["nombre"]->asociado_nombre];
    //  }

    //     return view('dash.linea.arbol', [ 
    //         'linea'=> json_encode($car["nombre"]),
    //         'user'=> Asociado ::findOrFail($rootId)
            
    //         ]);
     }


    function almacenar($tree) {

    
          foreach ($tree as $row)
          { 

            //   echo $row['nombre'].$row['id'].'-'.$row['parentId'];
            //   echo '<br>'; 
      
        //       array_push($arrayim, array('id' =>$row['id'],
        // 'nombre' =>$row['nombre'],
        // 'parentId' => $row['parentId']));

        
        $car  = \Session::get('arrayim');

        $arrayim =array('id' =>$row['id'],
        'nombre' =>$row['nombre'],
        'parentId' => $row['parentId']);


             $car [$row['id']] = $arrayim;
     
         \Session::put('arrayim',  $car);


            
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
