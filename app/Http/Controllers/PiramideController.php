<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\Nivel;
use App\Compra;
class PiramideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
        {
                return view('dash.piramide.piramide', [ 
                    'usuario'=> User ::findOrFail( auth()->user()->id),
                    'niveles'=> Nivel ::all(),
                    'volumen'=> $this->volumen ()

                    ]);
        } 
        
        public function show($id){

            return view('dash.piramide.nivel',[
    
                'nivel'=>Nivel::findOrFail($id)
            ]);
        } 



        private function volumen ()
        { 
            $total=0;
            $id= auth()->user()->asociado_membrecia;
            $compras=Compra::where("asociado_membrecia","=",$id)->get();

            foreach ($compras as $compra) {
              
               $total+= $compra->compra_totalVolumen;
            } 

            return $total;
        }
}
