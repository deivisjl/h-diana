@extends('layout-registro')
@section('title','Unierse')

@section ('content') 
<h4>Datos del Patrocinador (3/3) </h4>

                <div class="form-group">
                    <label for="codigo">Codigo Procinador</label>
                    <input  id="codigo" class="form-control bg-light shadow-sm border-0" 
                    name="codigo" placeholder="Codigo Patrocinador" value="{{old('codigo')}}"> 
                    {!! $errors-> first ('codigo','<small>:message</small><br>')!!}
                </div>

               
                        <a  href="{{route('unirse2')}}"><-Anterior</a>
                        
@endsection

