<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\SaveClienteRequest;
use App\Http\Requests\CrearClienteRequest;


class ClienteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
        {
             $id= auth()->user()->asociado_membrecia;

            return view('dash.cliente.index' , [ 

                    'clientes'=> Cliente ::where("asociado_membrecia","=",$id)->paginate(10)

             ]);

            
        } 

       
        public function destroy(Cliente $cliente)
        {
            // Project::destroy($id);
            $cliente->delete();
            return redirect()->route('dash.cliente.index')->with ('status','El Cliente ha sido Eliminado');  
        } 


        public function edit (Cliente $cliente)
        {
            return view('dash.cliente.edit',[
    
                'cliente'=>$cliente
            ]);
        }  

        public function update(Cliente $cliente ,SaveClienteRequest $request)
        {
          
            $data = [
                'cliente_nombre' => strtolower($request->get('cliente_nombre')),
                'cliente_primerApellido'  =>  strtolower($request->get('cliente_primerApellido')),
                'cliente_segundoApellido'  =>  strtolower($request->get('cliente_segundoApellido')),
                'cliente_direccion'         => $request->get('cliente_direccion'),
                'cliente_telefono'          => $request->get('cliente_telefono'),
                'cliente_correo'            => $request->get('cliente_correo'),
                'cliente_nit'               =>$request->get('cliente_nit')
                
            ];

            try {
                $cliente->update($data);
                return redirect()->route('dash.cliente.index')->with('status','Los Datos del Cliente han sido Actualizados'); 
            } catch (\Throwable $th) {
                return redirect()->route('dash.cliente.edit',$cliente)->with('status','Ha ocurrido un problema para actualizar los Datos'); 
            }


        
    
       
        }  

        public function create(){
            return view('dash.cliente.create',[
                'cliente' => new Cliente 
            ]);
        } 

   

    
    public function store(CrearClienteRequest $request){

        
        Cliente::create($request->validated()); 

        return redirect()->route('dash.cliente.index') ->with('status','El Cliente ha sido creado'); 

        
   
   }
   
    
 
}
