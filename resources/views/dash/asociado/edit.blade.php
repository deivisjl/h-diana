@extends('dash.layout-dash')
@section('title','Mi Cuenta-Editar|')
@section ('content') 
@include('partials.validation-erros')


{{-- @if ($usuario->asociado->asociado_estado=="i")
    <h3> Su cuenta está inactiva , por favor comuniquese con las oficinas TEl. 502+56321325</h3> 
@else
     --}}




<br>
<div class="container ">
        
    <div class="form-group row mb-0">
     <div class="col-md- offset-md-4">

        
<h1 class="col-md- offset-md-1" > <i class="fa fa-user-edit"></i> Editar Mis Datos  </h1>

<form  method="POST"  action="{{route('dash.asociado.update',$usuario->asociado)}}">
 @method('PATCH')

    @include('dash.asociado._form',['readonly'=>false])

    <div class="col-md- offset-md-3">
    <button class="btn btn-info btn-lg ">  <i class="fa fa-undo"></i> Actualizar</button>
    </div>
</form>
     </div>
    </div>
</div>


{{-- @endif --}}
@endsection
