@extends('layout')

@section ('content') 
<h1> Editar   {{$project->title}} </h1>

@include('partials.validation-erros')

<form  method="POST" action="{{route('projects.update',$project)}}">
 @method('PATCH')

    @include('projects._form',['btnText'=>'Guardar'])


</form>

@endsection

@section('title','nuevoProyecto')
