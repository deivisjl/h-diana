<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categoria;
use App\User;
class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
        {
            // $id= auth()->user()->asociado_membrecia;

            return view('dash.store.index' , [ 

                'productos'=> Productos ::where('producto_visible','=',1)->paginate(5),
                'usuario'=> User ::findOrFail( auth()->user()->id)

                
      
             ]);

        } 

        public function show($id){

            // $id= auth()->user()->asociado_membrecia;

            return view('dash.store.show',[
    
                'producto'=>Productos::findOrFail($id),
                'usuario'=> User ::findOrFail( auth()->user()->id)
            ]);
        } 
}
