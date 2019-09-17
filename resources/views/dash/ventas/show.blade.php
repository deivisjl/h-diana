@extends('dash.layout-dash')
@section('title','Mis Ventas')
@section ('content') 


 

<div class="container ">

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary ">
                 
               <th >
                 <h5 class="text-right text-muted ">No.  {{$venta->id_venta}}</h5>
               </th>

               <th>
                   <td ><h5 class="text-right text-muted">Fecha: {{$venta->created_at->format('Y-m-d')}}</h5></td>
               </th>
                
              </div>
              <div class="card-body">
                  
                
                <div class="table-responsive">
                  <table class="table text-center ">
                    <thead class=" text-primary ">
                      
                        
                      <th></th>
                      <th></th>
					  <th>
						Producto
					 </th>
                      <th>
                       Costo 
                      </th>
                       <th>
                       Precio Venta
                      </th>
                      <th >
                    Cantidad 
					  </th>
					  
					   <th>
                           Subtotal
                       </th>
                    </thead>
                    <tbody>

                      @foreach($ventas as $item)
                        <tr>
                            <td>
                                {{$num++}}
                            </td>

                    <td><img style="max-width: 3rem;" src="/img/productos/{{$item->producto->producto_imagen}}"></td>
                        <td>
                        {{$item->producto->producto_nombre}}
                        </td>
                        <td>
                            ${{number_format($item->costo_producto,2)}}
                        </td>
                        <td>
                            ${{number_format($item->precio_venta,2)}}
                        </td>
                        <td>
                         {{number_format($item->producto_cantidad)}}
                        </td>

                        <td>
                            ${{number_format($item->precio_venta*$item->producto_cantidad)}}
                        </td>
						 
                        </tr>
                        @endforeach
                        <tr>
                                <td><h6 class="font-weight-bold">Total Venta</h6></td>
                              
                                <td><h6 class="text-muted">${{number_format($total,2)}}</h6></td> <td></td> <td></td><td></td><td></td> <td></td> <td></td>
                        </tr>
                        <tr>
                                <td><h6 class="font-weight-bold">Ganancia </h6></td>
                              
                                <td><h6 class="text-muted">${{number_format($ganancia,2)}}</h6></td> 

                                <a href="#" class="btn btn-round btn-fill btn-default disabled">*Valores Expresados en Dolares Estadounidenses</a>
                        </tr>
                        <tr>
                              <td>@include('partials.back')</td>  
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div> 
  <br>
{{$ventas->links()}} 
</div>
 
@endsection