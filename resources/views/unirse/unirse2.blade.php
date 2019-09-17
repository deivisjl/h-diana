@extends('layout-registro')
@section('title','Unierse')

@section ('content') 
<h4>Datos del Conyugue (2/3) </h4>

                <div class="form-group">
                    <label for="papellidoc">Primer Apellido</label>
                    <input  id="papellidoc" class="form-control bg-light shadow-sm border-0" 
                    name="papellidoc" placeholder="Primer Apellido" value="{{old('papellidoc')}}"> 
                    {!! $errors-> first ('papellidoc','<small>:message</small><br>')!!}
                </div>

                <div class="form-group">
                        <label for="sapellidoc">Segundo Apellido</label>
                        <input  id="sapellidoc" class="form-control bg-light shadow-sm border-0" 
                        name="sapellidoc" placeholder="Segundo Apellido" value="{{old('sapellidoc')}}"> 
                        {!! $errors-> first ('sapellidoc','<small>:message</small><br>')!!}
                </div> 

                    <div class="form-group">
                            <label for="namec">Nombre</label>
                            <input  id="namec" class="form-control bg-light shadow-sm border-0" 
                            name="namec" placeholder="Nombre" value="{{old('namec')}}"> 
                            {!! $errors-> first ('namec','<small style="color:red">:message</small><br>')!!}
                    </div> 

                    <div class="form-group">
                            <label for="cuic">Identificacion Personal</label>
                            <input  id="cuic" class="form-control bg-light shadow-sm border-0" 
                            name="cuic" placeholder="# CUI" value="{{old('cuic')}}"> 
                            {!! $errors-> first ('cuic','<small style="color:red">:message</small><br>')!!}
                    </div> 

                
                 
                        <a  href="{{route('unirse3')}}">Siguiente-></a>
                        <a  href="{{route('unirse1')}}"><-Anterior</a>
@endsection

