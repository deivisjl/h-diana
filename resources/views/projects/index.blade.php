@extends('layout')

@section ('content') 
@include('partials.session-status')


<h1> PORTAFOLIO</h1>
@auth
<a href="{{route('projects.crear')}}">Crear Proyecto </a>
@endauth


<ul>
     @forelse ($projects as $project)
         <li> <a href="{{route('projects.show',$project)}}"> {{ $project['title'] }}</a> </li> 

            {{-- <li>
                {{ $project['title'] }} <br> <small> {{$project->description}}</small> <br> {{$project->created_at->format('d-m-Y')}}
               <br> {{$project->updated_at->diffForHumans()}}</li> --}}
     @empty
         <li>No hay Proyectos</li>
     @endforelse 

        {{$projects->links()}}  
        {{-- para que se muestre los links de pagina siguiente --}}
</ul>
@endsection

@section('title','PORTAFOLIO')
