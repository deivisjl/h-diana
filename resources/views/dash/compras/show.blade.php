@extends('dash.layout-dash')
@section('title','Mis Compras')
@section ('content') 


 

<div class="container ">

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary ">
                 
               <th >
                 <h5 class="text-right text-muted ">No.  {{$compra->id_compra}}</h5>
               </th>

               <th>
                   <td ><h5 class="text-right text-muted">Fecha: {{$compra->created_at->format('Y-m-d')}}</h5></td>
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
                       Precio 
                      </th>
                      <th>
                       PV 
                      </th>
                      <th >
                    Cantidad 
					  </th>
					  <th>
						Total PV
					   </th>
					  
					   <th>
                           Subtotal
                       </th>
                    </thead>
                    <tbody>

                      @foreach($compras as $item)
                        <tr>
                            <td>
                                {{$num++}}
                            </td>

                    <td><img style="max-width: 3rem;" src="/img/productos/{{$item->producto->producto_imagen}}"></td>
                        <td>
                        {{$item->producto->producto_nombre}}
                        </td>
                        <td>
                            ${{number_format($item->producto_precio,2)}}
                        </td>
                        <td>
                            {{number_format($item->producto_volumen)}}
                        </td>
                        <td>
                         {{number_format($item->producto_cantidad)}}
                        </td>

                        <td>
                            {{number_format($item->producto_volumen*$item->producto_cantidad)}}
                        </td>   
                        <td>
                            ${{number_format($item->producto_precio*$item->producto_cantidad,2)}}
                        </td>
						 
                        </tr>
                        @endforeach
                        <tr>
                                <td><h6 class="font-weight-bold">Total PV</h6></td>
                              
                                <td><h6 class="text-muted">{{number_format($totalv)}}</h6></td> <td></td> <td></td><td></td><td></td> <td></td> <td></td>
                        </tr>
                        <tr>
                                <td><h6 class="font-weight-bold">Total </h6></td>
                              
                                <td><h6 class="text-muted">${{number_format($total,2)}}</h6></td> 
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
{{$compras->links()}} 
</div>
 
@endsection
