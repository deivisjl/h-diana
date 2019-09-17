@extends('dash.layout-dash')
@section('title','Mi Saldo')
@section ('content') 
@include('partials.session-status')

<br>
<div class="container">
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class=" shadow p-1 mb-2 rounded bg-info text-white card-header card-header-primary">
                        <h4 class="card-title text-center ">Venta directa </h4>
                    </div>
                           
                     <div class="  card-body">
                        <div class="table-responsive table-upgrade">
                            <table class="table">
                                  <thead></thead>
                                  <tbody>
                                    
                                    <tr>
                                        <td>
                                            <p class="text-justify">La sumatoria de las Ganancias obtenidas en las ventas realizadas en el mes</p>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td> <h4 class="text-center">${{number_format($ganancia,2)}} </h4></td>
                                      
                                    </tr>
            
                                   
                                   
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card">
                                <div class=" shadow p-1 mb-2 rounded bg-info text-white card-header card-header-primary">
                                    <h4 class="card-title text-center ">Diferencia por Mayoreo </h4>
                                </div>
                                       
                                 <div class="  card-body">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                              <thead></thead>
                                              <tbody>
                                                
                                                <tr>
                                                    <td>
                                                        <p class="text-justify">Porcentaje (diferencia entre descuentos) de las ventas de cada uno de mis asociados en  mi linea desendiente que no son Mayoristas</p>
                                                    </td>
                                                </tr>
            
                                                <tr>
                                                  <td> <h4 class="text-center"> ${{number_format($mayoreo,2)}} </h4></td>
                                                  
                                                </tr>
                        
                                               
                                               
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                </div>


                                <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class=" shadow p-1 mb-2 rounded bg-info text-white card-header card-header-primary">
                                                <h4 class="card-title text-center ">Regalías </h4>
                                            </div>
                                                   
                                             <div class="  card-body">
                                                <div class="table-responsive table-upgrade">
                                                    <table class="table">
                                                          <thead></thead>
                                                          <tbody>
                                                            
                                                            <tr>
                                                                <td>
                                                                    <p class="text-justify"> 5% de las ventas de todos mis asociados en mi linea desendiente que son Mayoristas</p>
                                                                </td>
                                                            </tr>
                        
                                                            <tr>
                                                              <td> <h4 class="text-center">${{number_format($regalias,2)}} </h4></td>
                                                              
                                                            </tr>
                                    
                                                           
                                                           
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>


                 <div class="col-lg-12 col-md-5 col-sm-5 p-3">
                     <div class="card">
                        <div class=" shadow p-1 mb-2 rounded  bg-danger text-white card-header card-header-primary">
                            <h4 class="card-title">Total : </h4>
                            </div>
                                                               
                            <div class="  card-body">
                            <div class="table-responsive table-upgrade">
                             <table class="table">
                            <thead></thead>
                            <tbody>
                                                                        
                            <tr>
                            <td> <h5>Venta Directa </h5></td>
                            @if ($ganancia>0)
                            <td class="text-center"><i class="fa fa-check text-success"></i></td>
                            @else
                            <td class="text-center"><i class="fa fa-times text-danger"></i></td> 
                            @endif
                            
                            <td class="text-center"><h5> ${{number_format($ganancia,2)}}</h5></td>
                            </tr>

                            <tr>
                                    <td> <h5>Diferencia por Mayoreo </h5></td>
                                    @if ($mayoreo>0)
                                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                    @else
                                    <td class="text-center"><i class="fa fa-times text-danger"></i></td> 
                                    @endif
                                    
                                    <td class="text-center"><h5> ${{number_format($mayoreo,2)}}</h5></td>
                            </tr> 

                            <tr>
                                    <td> <h5>Regalias </h5></td>
                                    @if ($regalias>0)
                                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                    @else
                                    <td class="text-center"><i class="fa fa-times text-danger"></i></td> 
                                    @endif
                                    
                                    <td class="text-center"><h5> ${{number_format($regalias,2)}}</h5></td>
                            </tr>

                            <tr>
                                    <td> <h5>Total </h5></td>
                                    <td></td>
                                    <td class="text-center"><h5> ${{number_format($regalias+$mayoreo+$ganancia,2)}}</h5></td>
                            </tr>
                            
                            <tr>
                                <td >
                                    <a href="#" class="btn btn-round btn-fill btn-default disabled">*Valores Expresados en Dolares Estadounidenses</a>
                                  </td>

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
</div>

          


@endsection


