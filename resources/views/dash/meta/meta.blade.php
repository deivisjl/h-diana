@extends('dash.layout-dash')
@section('title','Mi Meta')
@section ('content') 
@include('partials.session-status')


<br>
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="  bg-success text-white card-header card-header-primary">
                  <h4 class="card-title text-center"><i class="fa fa-{{$asociado->nivel->icon}}"></i> {{$asociado->nivel->nivel_nombre}}</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                      <thead>
                      
                      </thead>
                      <tbody>
                        

                        <tr>
                          <td> <h5>Descuento </h5></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                          <td class="text-center"><h5> {{number_format($asociado->nivel->nivel_descuento*100)}}%</h5></td>
                        </tr>

                        <tr>
                                <td> <h5>Volumen Personal </h5></td>
                                <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                <td class="text-center"><h5>{{number_format($asociado->nivel->puntosP)}} PV</h5></td>
                        </tr>
                        <tr>
                                <td> <h5>Volumen de Linea Desendiente </h5></td>
                                @if ($asociado->nivel->puntosL<=0)
                                <td class="text-center"><i class="fa fa-times text-danger"></i></td> 
                                @else
                                <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                @endif
                                <td class="text-center"><h5>{{number_format($asociado->nivel->puntosL)}} PV</h5></td>  
                        </tr>


                        <tr>
                          <td><h5>Volumen Total</h5></td>
                          <td></td>
                          <td class="text-center"><h5>{{number_format($asociado->nivel->puntosP+$asociado->nivel->puntosL)}} PV</h5></td>
                        </tr>

                        <tr class="bg-success text-white ">
                          
                            <td class="text-center"></td>
                          <td><h3 >Avance de mi Meta {{$fecha}}</h3></td>
                         
                          <td class="text-center"></td>
                        </tr>

                        
                        <tr >
                          <td><h3 class="text-primary ">Volumen Personal</h3></td>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                        </tr>
                        <tr>
                            <td> <h5>Acumulado </h5></td>
                            <td class="text-center"><h5>{{number_format($volumen)}} PV</h5></td>
                            <td class="text-center">
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{$porcenP}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($porcenP)}}%</div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> <h5>Restante </h5></td>
                            
                            @if ($volumen>=$asociado->nivel->puntosP)
                                <td class="text-center"><h5>0 PV</h5></td>
                                @else
                                
                                <td class="text-center"><h5> {{number_format($asociado->nivel->puntosP-$volumen)}} PV</h5></td>
                                @endif
                               
                                <td class="text-center"><h5>{{number_format(100-$porcenP)}}%</h5></td>
                        </tr>

                      
                        @if ($asociado->nivel->puntosL!=0)
                        <tr >
                                <td><i class="fa fa-info-circle"></i><a href="{{route('dash.linea.index')}}"><h3 class="text-primary ">Volumen Linea Desendiente</h3></a></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                              </tr>
                              <tr>
                                  <td> <h5>Acumulado </h5></td>
                                  <td class="text-center"><h5> {{number_format($volumenl)}} PV</h5></td>
                                  <td class="text-center">
                                      <div class="progress">
                                      <div class="progress-bar progress-bar-striped bg-danger bg-warning progress-bar-animated" role="progressbar" style="width: {{$porcenL}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($porcenL)}}%</div>
                                      </div>
                                  </td>
                              </tr>
      
                              <tr>
                                  <td> <h5>Restante </h5></td>
                                  
                                  @if ($volumenl>=$asociado->nivel->puntosL)
                                      <td class="text-center"><h5>0 PV</h5></td>
                                      @else
                                      
                                      <td class="text-center"><h5> {{number_format($asociado->nivel->puntosL-$volumen)}} PV</h5></td>
                                      @endif
                                     
                                      <td class="text-center"><h5>{{number_format(100-$porcenL)}}%</h5></td>
                              </tr>  
                        @endif
                       

                              
                      
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center">
                            <a href="#" class="btn btn-round btn-fill btn-default disabled">*PV= Puntos de Volumen</a>
                          </td>
                          <td class="text-center">
                            <a  href="{{route('dash.meta.saldo.index')}}" aria-disabled="true" class="btn btn-round btn-fill btn-info">Saldo Acumulado</a>
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


@endsection


