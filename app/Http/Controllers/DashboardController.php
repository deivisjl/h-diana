<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asociado; 
use App\Nivel;
use App\User; 
use App\Cliente; 
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //METODOS INDEX  
    
    public function index()
    {
        $id= auth()->user()->asociado_membrecia;

        $asociado=Asociado ::findOrFail($id);

            return view('dash.index', [ 

                'asociado'=> Asociado ::findOrFail($id)]);

  
    } 


    

//////////////////////////////COMPRAS///////////////////////////////////////////////

    public function compra()
    {
    
        return view('dash.compra', [ 
            
            'projects'=> Project ::latest('updated_at')->paginate(10)
        ]);
    } 

    public function inventario()
    {
    
        return view('dash.inventario', [ 
            
            'projects'=> Project ::latest('updated_at')->paginate(10)
        ]);
    }



    public function meta()
    {
    
        return view('dash.meta', [ 
            
            'projects'=> Project ::latest('updated_at')->paginate(10)
        ]);
    } 

    public function venta()
    {
    
        return view('dash.venta', [ 
            
            'projects'=> Project ::latest('updated_at')->paginate(10)
        ]);
    }

    public function mcompra()
    {
    
        return view('dash.micompra', [ 
            
            'projects'=> Project ::latest('updated_at')->paginate(10)
        ]);
    } 


    //METODOS UPDATE 

   //METODO PARA EL ARBOL 

   

}
