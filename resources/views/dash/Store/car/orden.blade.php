@extends('dash.layout-dash')
@section('title','')
@section ('content') 
@include('partials.session-status')

<div class="container text-center">
<br><br>
<div class="content text-center">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-12">
                  <h4 class="card-title mt-0 text-center"> Datos del Envío</h4>
                 
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover ">
                      <thead >
                       
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-capitalize font-weight-bold">
                            Nombre
                          </td>
                          <td>
                                {{$usuario->asociado->asociado_nombre." "
                                .$usuario->asociado->asociado_primerApellido." "
                                .$usuario->asociado->asociado_segundoApellido}}
                          </td>
                        </tr>

                            <tr>
                            <td class="text-capitalize font-weight-bold">
                                 Membrecía
                                </td>
                                <td>
                                {{$usuario->asociado->asociado_membrecia}}
                                </td>
                              </tr>

                              <tr>
                                    <td class="text-capitalize font-weight-bold">
                                     Dirección
                                    </td>
                                    <td>
                                            {{$usuario->asociado->direccion->ciudad->pais->pais_nombre.", "
                                            .$usuario->asociado->direccion->ciudad->ciudad_nombre.", "
                                            .$usuario->asociado->direccion->direccio_domicilio}}
                                    </td>
                                  </tr>
                        
                                  <tr>
                                        <td class="text-capitalize font-weight-bold">
                                        Costo de Envío
                                        </td>
                                        <td>
                                         $150.00
                                        </td>
                                      </tr>

                      
                      </tbody>
                    </table>
                  </div>
                </div>
             
            
          </div>
        </div>
      </div>
<br>
        
		<div class="page-header">
          <h4>Datos del Pedido</h4>
        </div> 

                <div class="table-responsive">
                <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Producto </th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @forelse ($car as $item)
                        
                            <th scope="row">{{$num+=1}}</th>
                            <td>{{$item->producto_nombre}}</td>
                            <td> $.{{number_format($item->producto_precio,2)}}</td>
                            <td>{{$item->cantidad}}</td>
                         
                            <td> $.{{number_format(($item->producto_precio*$item->cantidad),2)}}</td>
                           
                        </tr>

                        
                            @empty

                            @endforelse
                           
                        </tbody>

                        
                       
                    </table>


                    
                    <h5>
                            <span class="label label-success">
                                Total Compra: ${{ number_format($total,2) }}
                            </span>
                    </h5> 

                    <h5>
                            <span class="label label-success">
                                Total (Compra + Envio): ${{ number_format((($total)+150),2) }}
                            </span>
                    </h5> 

                    
                
                            <a href="#" class="btn btn-round btn-fill btn-default disabled">*Valores Expresados en Dolares Estadounidenses</a>
                          

                </div> 
                      
                <h5>
                  <a href="{{ route('paypal.compra') }}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pagar  </a>
                  @include('partials.back')
                </h5> 
                
            
                

        </form>
                    
                   

        </div>
    </div>  
        
        
       
               

@endsection