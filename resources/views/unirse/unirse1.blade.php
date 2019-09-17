@extends('layout-registro')
@section('title','Unierse')

@section ('content') 
<h4>Datos del Solicitante (1/3) </h4>

                <div class="form-group">
                    <label for="papellido">Primer Apellido</label>
                    <input  id="papellido" class="form-control bg-light shadow-sm border-0" 
                    name="papellido" placeholder="Primer Apellido" value="{{old('papellido')}}"> 
                    {!! $errors-> first ('papellido','<small>:message</small><br>')!!}
                </div>

                <div class="form-group">
                        <label for="sapellido">Segundo Apellido</label>
                        <input  id="sapellido" class="form-control bg-light shadow-sm border-0" 
                        name="sapellido" placeholder="Segundo Apellido" value="{{old('sapellido')}}"> 
                        {!! $errors-> first ('sapellido','<small>:message</small><br>')!!}
                </div> 

                <div class="form-group">
                        <label for="name">Nombre</label>
                        <input  id="name" class="form-control bg-light shadow-sm border-0" 
                        name="name" placeholder="Nombre" value="{{old('name')}}"> 
                        {!! $errors-> first ('name','<small style="color:red">:message</small><br>')!!}
                </div> 
             <div class="form-row">
               
                        <div class="form-group">
                                <label for="pais">Pais</label>
                                <input  id="pais" class="form-control bg-light shadow-sm border-0" 
                                name="pais" placeholder="Pais" value="{{old('pais')}}"> 
                                {!! $errors-> first ('pais','<small style="color:red">:message</small><br>')!!} 
                        </div>
                        
                        <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                <input  id="ciudad" class="form-control bg-light shadow-sm border-0" 
                                name="ciudad" placeholder="Ciudad" value="{{old('ciudad')}}"> 
                                {!! $errors-> first ('ciudad','<small style="color:red">:message</small><br>')!!}
                        </div> 

                        <div class="form-group">
                                <label for="ciudad">Domicilio</label>
                                <input  id="ciudad" class="form-control bg-light shadow-sm border-0" 
                                name="ciudad" placeholder="Ciudad" value="{{old('ciudad')}}"> 
                                {!! $errors-> first ('ciudad','<small style="color:red">:message</small><br>')!!}
                        </div>
            </div> 

            <div class="form-row">
               
                <div class="form-group">
                        <label for="ptelefono">Telefono #1</label>
                        <input  id="ptelefono" class="form-control bg-light shadow-sm border-0" 
                        name="ptelefono" placeholder="Telefono" value="{{old('ptelefono')}}"> 
                        {!! $errors-> first ('ptelefono','<small style="color:red">:message</small><br>')!!} 
                </div>
                
                <div class="form-group">
                        <label for="stelefono">Telefono #2</label>
                        <input  id="stelefono" class="form-control bg-light shadow-sm border-0" 
                        name="stelefono" placeholder="Telefono" value="{{old('stelefono')}}"> 
                        {!! $errors-> first ('stelefono','<small style="color:red">:message</small><br>')!!} 
                </div>
    </div>
                
                <div class="form-group">
                        <label for="stelefono"> Correo Electronico</label>
                        <input type="email"  id="mail" class="form-control bg-light shadow-sm border-0" 
                        name="mail" placeholder="email" value="{{old('mail')}}"> 
                        {!! $errors-> first ('mail','<small style="color:red">:message</small><br>')!!} 
                </div>

                <div class="form-group">
                        <label for="cui">Identificacion Personal</label>
                        <input  id="cui" class="form-control bg-light shadow-sm border-0" 
                        name="cui" placeholder="# CUI" value="{{old('cui')}}"> 
                        {!! $errors-> first ('cui','<small style="color:red">:message</small><br>')!!}
                </div> 

                        
                        <div class="form-group">
                                <label for="fecha">Fecha de Nacimiento</label>
                                <input  type="date" id="fecha" class="form-control bg-light shadow-sm border-0" 
                                name="fecha" value="{{old('fecha')}}"> 
                                {!! $errors-> first ('fecha','<small style="color:red">:message</small><br>')!!} 
                        </div>
                 
                        <a  href="{{route('unirse2')}}">Siguiente-></a>

@endsection

