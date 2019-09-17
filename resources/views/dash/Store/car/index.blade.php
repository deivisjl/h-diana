@extends('dash.layout-dash')
@section('title','')
@section ('content') 
@include('partials.session-status')

        <div class="container text-center">
        
            
        <div class="page-header">
          <h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
        </div> 
   
       
        @if(count($car))

  

                <div class="table-responsive">
                <table class="table table-hover">
                        <thead>
                        <tr class="">
                            <th scope="col"></th>
                            <th scope="col"> </th>
                            <th scope="col">Producto </th>
                            <th scope="col">Puntos de Volumen</th>
                            <th scope="col">Precio con Descuento</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Subtotal de Puntos</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @forelse ($car as $item)
                        
                            <th scope="row">{{$num+=1}}</th>
                            <td><img style="max-width: 3rem;" src="/img/productos/{{$item->producto_imagen}}" ></td>
                            <td>{{$item->producto_nombre}}</td>
                            <td>{{$item->producto_puntos}}</td>
                            {{--  <td> Q.{{number_format(($item->producto_precio-($item->producto_precio*$usuario->asociado->nivel->nivel_descuento)),2)}}</td>  --}}
                           
                             
                                <td> $.{{number_format($item->producto_precio,2)}}</td>
                          
                                <td> 
                                        <script type="text/javascript">
                                            
                                                function isNumberKey(evt)
                                                {
                                                 var charCode = (evt.which) ? evt.which : event.keyCode
                                                 if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                    return false;
                                         
                                                 return true;
                                                }
                                            
                                            </script>

                                        <input 
                                            type="number"
                                            min="1"
                                            max="100"
                                            value="{{ $item->cantidad }}"
                                            id="product_{{ $item->id_producto }}"
                                            onkeypress="return isNumberKey(this);"
                                        >
                                        <a 
                                            href="#" 
                                            class="btn btn-warning btn-update-item"
                                            data-href="{{ route('dash.store.car.update', $item->id_producto) }}"
                                            data-id = "{{ $item->id_producto }}"
                                        >
                                        <i class="fa fa-undo"></i> 
                                        </a>

                                        

                                    </td>
                            <td>{{ number_format($item->producto_puntos * $item->cantidad) }}</td>
                            <td> $.{{number_format($item->producto_precio*$item->cantidad,2)}}</td>
                            <td>
									<a href="{{ route('dash.store.car.delete', $item) }}" class="btn btn-danger">X</a>
							</td>
                        </tr>
                            @empty

                            @endforelse
                           
                        </tbody>
                       
                    </table>

                    <h3>
                            <span class="label label-success">
                                Total: ${{ number_format($total,2) }}
                            </span>
                        </h3>

                        <h5>
                                <span class="label label-success">
                                  Total  Puntos de Volumen: {{ number_format($totalpv) }}
                                </span>
                        </h5>

                        <a href="#" class="btn btn-round btn-fill btn-default disabled">*Valores Expresados en Dolares Estadounidenses</a>

                </div> 
                      <br>
                <h5>
                  <a href="{{ route('dash.store.car.orden') }}" class="btn btn-primary"> Comprar </a>
                  <a href="{{ route('dash.store.car.trash') }}" class="btn btn-danger"> <i class="fa fa-trash-alt"></i> Vaciar  </a>
                </h5> 
                
                @else
                <h3><span class="label label-warning">Aun no has agregado Productos al Carrito</span></h3>
                @endif
                @include('partials.back')

        </form>
                  
                   

               
               

@endsection