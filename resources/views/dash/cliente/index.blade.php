@extends('dash.layout-dash')
@section('title','PORTAFOLIO DE CLIENTES')
@section ('content') 


 

<div class="container">

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center "> <i class="fa fa-address-book"> </i> Clientes</h4>
                
              </div>
              <div class="card-body">
                  
                
                <div class="row">
                  <div class="col-12 text-right">
                     <a  href="{{route('dash.cliente.create')}}" class="btn btn-primary btn-sm"> <i class="fa fa-user-plus"></i> </a> 
                  </div>
				</div>
				
                <div class="table-responsive">
                  <table class="table ">
                    <thead class=" text-primary text-left">
                      
                      <th>
                        Nombre
					  </th>
					  <th>
						Nit
					 </th>
                      <th>
                       Direccion 
                      </th>
                      <th >
                      Telefono 
					  </th>
					  <th>
						Email
					   </th>
					   <th>Fecha de Creación</th>
					   <th></th>
                    </thead>
                    <tbody>

                      @foreach($clientes as $cliente)
                        <tr>
                          <td class="text-capitalize">
                           {{$cliente->cliente_nombre." ".$cliente->cliente_primerApellido." ".$cliente->cliente_segundoApellido}}
						              </td>
						  <td>
							  {{$cliente->cliente_nit}}
						  </td>
                          <td>
                            {{$cliente->cliente_direccion}}
                          </td>
                          <td>
								{{$cliente->cliente_telefono}}
						  </td>
						  <td>
							  {{$cliente->cliente_correo}}
						  </td>

						  <td>
								{{$cliente->created_at->format('Y-m-d')}}
						</td>

                          <td >

							
                              <form action="{{ route('dash.cliente.destroy', $cliente) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  
                                  <button  class="btn btn-danger "  >
										<i class="fa fa-window-close"></i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                           
                            
						  </td>
						  <td>
							<a rel="tooltip" class="btn btn-success " href="{{route('dash.cliente.edit',$cliente)}}" data-original-title="" title="">
                  <i class="fa fa-edit"></i>
                                <div class="ripple-container"></div>
                              </a>
                            
						  </td>
                        </tr>
						@endforeach
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
{{$clientes->links()}} 
</div>
 
@endsection
