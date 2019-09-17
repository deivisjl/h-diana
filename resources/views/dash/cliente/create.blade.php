@extends('dash.layout-dash')
@section('title','Cliente-Crear')
@section ('content') 



<h1 class="text-center" >  <i class="fa fa-user-plus"></i> Agregar Cliente </h1>
<br>
<div class="container">

<form  method="POST"  action="{{route('dash.cliente.store')}}" >


        @include('dash.cliente._form',['readonly'=>false])

        
        <div class="text-center">
                <button class="btn btn-info btn-lg "> <i class="fa fa-save"></i> Guardar</button>
        </div>

</form>
</div>

@endsection


