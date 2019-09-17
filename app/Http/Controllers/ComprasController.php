<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\User;
use App\CompraDetalle;


class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
        {
             $id= auth()->user()->asociado_membrecia;
             $total=0;

             $compras= Compra ::where("asociado_membrecia","=",$id) ->latest()->get();

             foreach ($compras as $item ) {
              $total+=$item->compra_total;

             }

            return view('dash.compras.index' , [ 

                    'compras'=> Compra ::where("asociado_membrecia","=",$id) ->latest()->paginate(5),
                    'total'=>$total

             ]);

            
        }  

        public function show($id){
            return view('dash.compras.show',[
                'compras'=> CompraDetalle ::where("id_compra","=",$id) ->latest()->paginate(5),
                'compra'=> Compra ::findOrFail($id),
                'num'=>1,
                'usuario'=> User ::findOrFail( auth()->user()->id),
                'total'=>$total=$this->total($id,'producto_precio'),
                'totalv'=>$totalv=$this->total($id,'producto_volumen')
       
            ]);
        } 

        public function total( $id,$campo)
        {
          $total=0;
          $subt=0;
          $detalle=CompraDetalle ::where("id_compra","=",$id)->get();

          foreach ($detalle as $item ) {
            $subt +=$item->$campo* $item->producto_cantidad;
          }
          $total+=$subt;
          return $total;
        }

       

}
