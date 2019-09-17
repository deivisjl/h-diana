@extends('dash.layout-dash')
@section('title','Mis Compras')
@section ('content') 


 

<div class="container text-center">

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center ">Mis Ventas</h4>
                
              </div>
              <div class="card-body">
                  
                
                <div class="table-responsive">
                  <table class="table ">
                    <thead class=" text-primary ">
                      
                        
                      <th>
                        Codigo de Venta
                      </th>
                      
                      <th>
                        Nombre Cliente
                       </th>

                       <th>
                        Nit Cliente
                       </th>
                      
					  <th>
						Total
					 </th>
                     
                     
					  <th>
						Fecha
					   </th>
					  
					   <th></th>
                    </thead>
                    <tbody>

                      @foreach($ventas as $venta)
                        <tr>
                          <td class="text-capitalize">
                          {{$venta->id_venta}}
						  </td>

                        <td class="text-capitalize">
                          {{$venta->cliente->cliente_nombre}}

                        </td>

                         <td>
                            {{$venta->cliente->cliente_nit}}
                          </td>
						
						  
                          <td>
                          ${{number_format($venta->venta_total,2)}}
                          </td>
                         

						  <td>
								{{$venta->created_at->format('Y-m-d')}}
						</td>

                          
						  <td>
							<a rel="tooltip" class="btn btn-success btn-link" href="{{route('dash.venta.show',$venta)}}" data-original-title="" title="">
									<i class="fa fa-eye"></i>
                                <div class="ripple-container"></div>
                              </a>
                            
                          </td>
                         
                        </tr>
                        @endforeach

                        <tr>
                          <td>Total: ${{number_format($total,2)}}</td>
                        </tr>

                        <a href="#" class="btn btn-round btn-fill btn-default disabled">*Valores Expresados en Dolares Estadounidenses</a>
                        
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