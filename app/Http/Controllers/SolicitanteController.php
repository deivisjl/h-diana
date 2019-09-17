<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Project;
use App\Http\Requests\SaveProjetReques;

class SolicitanteController extends Controller
{
   
    public function formpart1()
    {
     
        return view('unirse.unirse1');
    } 

    public function formpart2()
    {
       
        return view('unirse.unirse2');
    }
    public function formpart3()
    {
       
        return view('unirse.unirse3');
    }



    public function store(SaveProjetReques $request){
        Input::flash();  
        Project::create($request->validated()); 

        return redirect()->route('projects.index') ->with('status','El proyecto ha sido creado'); 

        
   
   }
}
