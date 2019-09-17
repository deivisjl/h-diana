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
                <h4 class="card-title text-center ">Mis Compras</h4>
                
              </div>
              <div class="card-body">
                  
                
                <div class="table-responsive">
                  <table class="table ">
                    <thead class=" text-primary ">
                      
                        
                      <th>
                       Codigo de Compra
					  </th>
					  <th>
						Total
					 </th>
                      <th>
                       Total Puntos de Volumen  
                      </th>
                      <th >
                     Envío 
					  </th>
					  <th>
						Fecha
					   </th>
					  
					   <th></th>
                    </thead>
                    <tbody>

                      @foreach($compras as $compra)
                        <tr>
                          <td class="text-capitalize">
                          {{$compra->id_compra}}
						  <td>
							  ${{number_format($compra->compra_total,2)}}
						  </td>
                          <td>
                            {{number_format($compra->compra_totalVolumen)}}
                          </td>
                          <td>
								${{number_format($compra->compra_envio,2)}}
						  </td>

						  <td>
								{{$compra->created_at->format('Y-m-d')}}
						</td>

                          
						  <td>
							<a rel="tooltip" class="btn btn-success btn-link" href="{{route('dash.store.compra.show',$compra)}}" data-original-title="" title="">
									<i class="fa fa-eye"></i>
                                <div class="ripple-container"></div>
                              </a>
                            
                          </td>
                       
                        </tr>
                        @endforeach
                        <a href="#" class="btn btn-round btn-fill btn-default disabled">*Valores Expresados en Dolares Estadounidenses</a>
                       
                        <tr>
                          <td>Total: ${{number_format($total,2)}}</td>
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
