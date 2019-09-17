@extends('dash.layout-dash')
@section('title','MI LINEA DESENDIENTE')
@section ('content') 
@include('partials.session-status')




<br>
<div class="container">
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6">
                <div class="card">
                    <div class=" shadow p-1 mb-2 rounded bg-info text-white card-header card-header-primary">
                        <h4 class="card-title text-center ">Mi Linea </h4>
                    </div>
                           
                     <div class="  card-body">
                        <div class="table-responsive table-upgrade">
                            <table class="table">
                                  <thead>
                                    <th>No.</th>
                                    <th>Nombre</th>
                                    <th>Membresía</th>
                                    <th>Nivel</th>
                                    <th>Patrocinador</th>
                                  </thead>
                                  <tbody>
                                    
                                   
                                    
                                  @forelse ($linea as $item)
                                  <tr>
                                  <td> {{$num++}}</td>
                                        <td> <p class="text-justify">{{$item["nombre"]->asociado_nombre}}</p>  </td>
                                
                                 
                                      <td> <h6 class="text-justify">30125486{{$item["nombre"]->asociado_membrecia}}</h6></td>
                                      
                                      <td> <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="{{$item["nombre"]->nivel->nivel_nombre}}">
                                      <i class="fa fa-{{$item["nombre"]->nivel->icon}}"></i>
                                      </button></td>


                                        <td> 

                                          @if ($item["nombre"]->padre==$user->asociado_membrecia)
                                          <h6 class="text-justify"> Yo </h6>
                                          @else
                                          <h6 class="text-justify">{{$item["nombre"]->asociado->asociado_nombre}} </h6>
                                          @endif
                                         
                                        </td>
                                        
                                      </tr>
                                  @empty
                                      
                                  @endforelse
                                   
                                      <tr>
                                        <td> @include('partials.back')</td>
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


