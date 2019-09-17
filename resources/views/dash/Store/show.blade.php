@extends('dash.layout-dash')
@section('title','Producto|'.$producto->producto_nombre)
@section('content')
@include('partials.session-status')


<div class="container ">
    <div class="row justify-content-center align-self-center mb-2">
    <h1> {{$producto->producto_nombre}}</h1> 

    <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/img/productos/{{$producto->producto_imagen}}"  class="card-img" alt="{{$producto->producto_nombre}}">
          </div>
          <div class="col-md-8">
            <div class="card-body">
            
              <h4 class="card-title"><i class="fa fa-{{$producto->categoria->categoria_icon}}"></i>   {{$producto->categoria->categoria_nombre}}</h4>
              
              <p class="card-text">{{$producto->producto_descrip}}</p>
              <h5>Precio: $.{{$producto->producto_precio,2}}</h5>
              <h5 class="text-danger"> Precio con descuento: $.{{number_format(($producto->producto_precio-($producto->producto_precio*$usuario->asociado->nivel->nivel_descuento)),2)}}</h5>
              <h5 >Puntos de Volumen:  {{$producto->producto_puntos}}</h5>

              <a href="{{route('dash.store.car.add',$producto)}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Añadir a la compra</a> 
               @include('partials.back')
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>

@endsection