@extends('dash.layout-dash')
@section('title','MI INFORMACION')
@section ('content') 




<br>
<div class="container">

        <div class="form-group row mb-0">
                <div class="col-md- offset-md-4">
                   
                        <h1 class="col-md- offset-md-1" >  <i class="fa fa-user"></i> MI INFORMACION   </h1>
                        <form  method="#" action="#" >
        
                                @include('dash.asociado._form',['readonly'=>true])
                            
                     </form> 
                   
                </div>
            </div>





</div>

@endsection
