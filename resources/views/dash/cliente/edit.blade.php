@extends('dash.layout-dash')
@section('title','Cliente-Editar|'.$cliente->cliente_nombre)
@section ('content') 



<h1 class="text-center" >   <i class="fa fa-user-edit"></i> Editar:  {{$cliente->cliente_nombre." ".$cliente->cliente_primerApellido}} </h1>
<br>


<div class="container">
<form  method="POST"  action="{{route('dash.cliente.update',$cliente)}}">
   
 @method('PATCH')

    @include('dash.cliente._form',['readonly'=>false])

    <div class="text-center">
        <button class="btn btn-info btn-lg  ">   <i class="fa fa-save"></i> Actualizar</button>
    </div>
</form>
</div>

@endsection


