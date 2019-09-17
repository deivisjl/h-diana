@extends('dash.layout-dash')
@section('title','Piramide Hierbalife')
@section ('content') 
@include('partials.session-status')


<br>
<h1 class="text-center">  <i class="fa fa-spa"></i>  Niveles Hierbalife</h1>



@forelse ($niveles as $nivel)
<div class="content  text-center">
                <div class="container-fluid">
                  <div class="row justify-content-center align-self-center mb-2">
                    
                 <div class="col-lg-{{$nivel->piramide}} mb-2 ">
                        <div class="card">
                            <div class=" shadow p-1 mb-2 rounded bg-info text-white card-header card-header-primary">
                             <a href="{{route('dash.piramide.show',$nivel)}}"> <h5 class="text-white card-title text-center "> {{$nivel->nivel_nombre}} </h5> </a>
                            </div>
                                   
                             <div class="  card-body">
                                <div class="table-responsive ">
                                    <table class="table  ">
                                          <thead>
                                             

                                          </thead>
                                          <tbody>
                                               <tr>
                                                  <td>
                                                      <a  class="btn btn-dark" href="{{route('dash.piramide.show',$nivel)}}">  <h1 > <i class="fa fa-{{$nivel->icon}}"></i> </h1> </a> @if ($nivel->id_nivel==$usuario->asociado->nivel->id_nivel)
                                                          <h5 class=" text-danger "> <i class="fa fa-map-pin"></i> Estoy Aquí </h5>
                                                          @endif
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
        
        

        @empty
                        
        @endforelse
    
@endsection
