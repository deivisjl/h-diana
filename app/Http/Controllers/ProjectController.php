<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Http\Requests\SaveProjetReques;

class ProjectController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $portfolio = [
        //     ['title' => 'Proyecto #1'],
        //     ['title' => 'Proyecto #2'],
        //     ['title' => 'Proyecto #3']
        // ];  

      //  $portfolio =Project ::get(); //importar el modelo arriba
       //$portfolio=Project ::latest('updated_at')->get(); // ordena del ultimo al primero 
       //$portfolio=Project ::latest('updated_at')->paginate(10); // lista segun el numero por defecto es 15 


        return view('projects.index', [ 
            
            'projects'=> Project ::latest('updated_at')->paginate(10)
        ]);
    }

    public function show($id){
        return view('projects.show',[

            'project'=>Project::findOrFail($id)
        ]);
    } 

    public function crear(){
        return view('projects.crear',[
            'project' => new Project 
        ]);
    } 


    public function store(SaveProjetReques $request){

         Project::create($request->validated()); 

         return redirect()->route('projects.index') ->with('status','El proyecto ha sido creado'); 

         
    
    }

    public function edit (Project $project)
    {
        return view('projects.edit',[

            'project'=>$project
        ]);
    } 

    public function update(Project $project , SaveProjetReques $request)
    {
      $project->update($request->validated());
         return redirect()->route('projects.show',$project)->with('status','El proyecto ha sido actualizado'); 

   
    } 

    public function destroy(Project $project)
    {
        // Project::destroy($id);
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto ha sido eliminado');  
    }
 


}  