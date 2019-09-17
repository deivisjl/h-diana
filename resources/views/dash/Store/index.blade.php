@extends('dash.layout-dash')
@section('title','')
@section ('content') 
@include('partials.session-status')

<div class="container text-center">


        <br> <br> 

            <div class="card-deck">
                    
                    @forelse($productos as $producto)
                    <div class="card" style="max-width: 18rem;">
                    <img src="/img/productos/{{$producto->producto_imagen}}"   width="100" class="card-img-top " alt="{{ $producto->producto_nombre}}">
                           
                    <div class="card-body">
                              <h5 class="card-title">{{ $producto->producto_nombre}}</h5>
                              <p class="card-text">{{ $producto->producto_detalle}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item  list-group-item-{{$producto->categoria->categoria_color}}"> <i class="fa fa-{{$producto->categoria->categoria_icon}}"></i> {{$producto->categoria->categoria_nombre}}</li>
                            <li class="list-group-item"> Precio: $.{{number_format($producto->producto_precio,2)}}</li>
                            <li class="list-group-item"> Precio con descuento: $.{{number_format(($producto->producto_precio-($producto->producto_precio*$usuario->asociado->nivel->nivel_descuento)),2)}}</li>
                            <li class="list-group-item">Puntos de Volumen:  {{$producto->producto_puntos}} </li>
                            </ul>
                            <div class="card-body">
                            <a href="{{route('dash.store.car.add',$producto)}}" class="card-link"><i class="fa fa-shopping-cart"></i> Añadir</a>
                              <a href="{{route('dash.store.show',$producto)}}" class="card-link"><i class="fa fa-eye"></i> Ver </a>
                            </div>
                          </div>

                          
                        @empty
                        <li>No hay Productos</li>
                    @endforelse 
                
                  </div>
                  
                  <br>
   
           {{$productos->links()}}  
	
</div>

@endsection