<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asociado;
use App\Nivel;
use App\User; 
use App\Http\Requests\SaveAsociadoRequest;

class AsociadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
        {
           // $id= auth()->user()->asociado_membrecia;

           // $asociado=Asociado ::findOrFail($id);

                return view('dash.asociado.index', [ 

                   
                    'usuario'=> User ::findOrFail( auth()->user()->id)
                    

                    ]);
        } 

    
        // public function edit (Asociado $asociado)
        // {
        //     return view('dash.asociado.edit',[
    
        //         'usuario'=> User ::findOrFail( auth()->user()->id)
            
        //     ]);
        // } 
        
        public function edit ()
        {
            return view('dash.asociado.edit',[
    
                'usuario'=> User ::findOrFail( auth()->user()->id)
            
            ]);
        }  

        public function update(Asociado $asociado , SaveAsociadoRequest $request)
        {
         
            // $id= auth()->user()->asociado_membrecia;

            $asociado->update($request->validated());
           
            return redirect()->route('dash.asociado.index', [ 

                'usuario'=> User ::findOrFail( auth()->user()->id)

                ]) ->with('status','Sus datos han sido Actualizados');
          
               
        }  

}
