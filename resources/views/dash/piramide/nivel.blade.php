@extends('dash.layout-dash')
@section('title','Nivel')
@section ('content') 
@include('partials.session-status')

{{-- 
<h3> Nivel : {{$nivel->nivel_nombre}}</h3>
<p> Descripción: {{$nivel->nivel_descrip}} </p>
<h5> Volumen Meta Total : {{number_format($nivel->puntosP+$nivel->puntosL)}}</h5>

<h6>Volumen Personal : {{number_format($nivel->puntosP)}}</h6>
<h6>Volumen de Linea Desendiente: {{number_format($nivel->puntosL)}}</h6>
<h5> Descuento: {{number_format($nivel->nivel_descuento*100)}}%</h5> --}}

<br>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="  bg-success text-white card-header card-header-primary">
                  <h4 class="card-title text-center"><i class="fa fa-{{$nivel->icon}}"></i> {{$nivel->nivel_nombre}}</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                      <thead>
                      
                      </thead>
                      <tbody>
                    <tr>
                        <td> <h5>Descripción </h5></td>
                         <td class="text-justify"> <p>{{$nivel->nivel_descrip}}</p></td>
                        </tr>

                        <tr>
                          <td> <h5>Descuento </h5></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                          <td ><h5> {{number_format($nivel->nivel_descuento*100)}}%</h5></td>
                        </tr>

                        <tr>
                                <td> <h5>Volumen Personal </h5></td>
                                <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                <td class="text-center"><h5>{{number_format($nivel->puntosP)}} PV</h5></td>
                        </tr>
                        <tr>
                                <td> <h5>Volumen de Linea Desendiente </h5></td>
                                @if ($nivel->puntosL<=0)
                                <td class="text-center"><i class="fa fa-times text-danger"></i></td> 
                                @else
                                <td class="text-center"><i class="fa fa-check text-success"></i></td>
                                @endif
                                <td class="text-center"><h5>{{number_format($nivel->puntosL)}} PV</h5></td>  
                        </tr>


                        <tr>
                          <td><h5>Volumen Total</h5></td>
                          <td></td>
                          <td class="text-center"><h5>{{number_format($nivel->puntosP+$nivel->puntosL)}} PV</h5></td>
                        </tr>

                       
                      
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center">
                            <a href="#" class="btn btn-round btn-fill btn-default disabled">*PV= Puntos de Volumen</a>
                          </td> 

                          <td class="text-center">
                                @include('partials.back')

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