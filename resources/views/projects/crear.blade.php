@extends('layout')
@section('title','nuevoProyecto')

@section ('content') 
<h1> CREAR NUEVO PROYECTO</h1>

@include('partials.validation-erros') 

<form  method="POST"  action="{{route('projects.store')}}">


 @include('projects._form',['btnText'=>'Crear'])


</form>

@endsection


