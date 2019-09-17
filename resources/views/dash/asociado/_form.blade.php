@csrf



<div class="form-group row">
    <label for="nom" class="  col-sm-5 col-form-label">Nombre</label>
    <div class="col-sm-8">
      <input readonly="true"; type="text" name="nombre" class=" text-center text-capitalize form-control"
      value="{{$usuario->asociado->asociado_nombre." ".$usuario->asociado->asociado_primerApellido." ".$usuario->asociado->asociado_segundoApellido}}" >
    </div>

    


  

    <label for="nom" class="col-sm-5 col-form-label">Membresía</label>
    <div class="col-sm-8">
            <input  class="text-center form-control" readonly="true";  type="text" name="mem" value="30125486{{$usuario->asociado->asociado_membrecia}}" >
    </div>
 

  
  
        <label for="nom" class="col-sm-5 col-form-label"> Fecha de Nacimiento</label>
        <div class="col-sm-8">
                <input class=" text-center form-control" readonly="true";  type="text" name="mem" value="{{$usuario->asociado->asociado_nacimiento}}" >   
        </div>
    
    
   
            <label for="nom" class="col-sm-5 col-form-label"> Nivel</label>
            <div class="col-sm-8">
                    <input  class=" text-center form-control" readonly="true";  type="text" name="mem" value="{{$usuario->asociado->nivel->nivel_nombre}}" >
            </div>
   
   
      
                <label for="nom" class="col-sm-5 col-form-label"> Teléfono</label>
                <div class="col-sm-8">
                <input @if ($readonly) readonly="true"  @endif required class=" text-center form-control" type="text" name="asociado_tel" value="{{old('asociado_tel',$usuario->asociado->asociado_tel)}}" >
                
                </div>

            

         
                    <label for="nom" class="col-sm-5 col-form-label"> Email</label>
                    <div class="col-sm-8">
                            <input readonly="true"  class=" text-center form-control" type="email" name="email" value="{{old('email',$usuario->email)}}" >
                    </div>
              

        
                    <label for="nom" class="col-sm-5 col-form-label"> Dirección</label>
                    <div class="col-sm-8">
                            <input class=" text-center form-control"  readonly="true"  type="text" name="direc" value="{{old('direc',$usuario->asociado->direccion->ciudad->pais->pais_nombre.", "
                            .$usuario->asociado->direccion->ciudad->ciudad_nombre.", "
                            .$usuario->asociado->direccion->direccio_domicilio)}}" >
                    </div>
             

             
                    <label for="nom" class="col-sm-5 col-form-label"> Ultima Modificación </label>
                    <div class="col-sm-8">
                            <input readonly="true";  class="text-center form-control text-center"  type="text" name="mem" value="
                            @if ($usuario->updated_at > $usuario->asociado->updated_at)
                            {{$usuario->updated_at->diffForHumans()}}
                            @else  {{$usuario->asociado->updated_at->diffForHumans()}}
                            @endif" >
                    </div>
            

        </div> 
