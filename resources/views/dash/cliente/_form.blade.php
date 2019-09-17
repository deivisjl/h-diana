@csrf



<div class="form-row">
    <div class="col-md-3 mb-3">
        <label  for="validationServer03">Nombre</label>
        <input type="text" name="cliente_nombre" value="{{old('cliente_nombre',$cliente->cliente_nombre)}}"  class="form-control @error('cliente_nombre') is-invalid @enderror text-capitalize"
          required >

          @error('cliente_nombre')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div> 

     
        <div class="col-md-3 mb-3">
            <label  for="validationServer03"> Primer Apellido</label>
            <input type="text" name="cliente_primerApellido" value="{{old('cliente_primerApellido',$cliente->cliente_primerApellido)}}"  class="text-capitalize form-control  @error('cliente_primerApellido') is-invalid @enderror "
              required>
              @error('cliente_primerApellido')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div> 

         
            <div class="col-md-3 mb-3">
                <label  for="validationServer03">  Segundo Apellido</label>
                <input type="text" name="cliente_segundoApellido" value="{{old('cliente_segundoApellido',$cliente->cliente_segundoApellido)}}"  class="text-capitalize form-control @error('cliente_segundoApellido') is-invalid @enderror"
                required>
                @error('cliente_segundoApellido')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 

      
</div>

<div class="form-row">
<div class="col-md-3 mb-3">
    <label  for="validationServer03">NIT</label>
    <input type="text" name="cliente_nit" value="{{old('cliente_nit',$cliente->cliente_nit)}}"  class="form-control @error('cliente_nit') is-invalid @enderror"
     required>
     @error('cliente_nit')
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
     @enderror
  </div> 

  <div class="col-md-3 mb-3">
    <label  for="validationServer03"> Teléfono</label>
    <input type="text" name="cliente_telefono" value="{{old('cliente_telefono',$cliente->cliente_telefono)}}"   class="form-control @error('cliente_telefono') is-invalid @enderror"
      required>
      @error('cliente_telefono')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
  </div>

</div>


<div class="form-row">
    <div class="col-md-3 mb-3">
        <label  for="validationServer03">Dirección</label>
        <input type="text" name="cliente_direccion" value="{{old('cliente_direccion',$cliente->cliente_direccion)}}"  class="form-control @error('cliente_direccion') is-invalid @enderror"
         required>
         @error('cliente_direccion')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div> 
    
      <div class="col-md-3 mb-3">
        <label  for="validationServer03"> Email</label>
        <input type="email" name="cliente_correo" value="{{old('cliente_correo',$cliente->cliente_correo)}}"  class="form-control @error('cliente_correo') is-invalid @enderror"
         required>
         @error('cliente_correo')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
      </div>
    
    </div>
    


<input style="visibility:hidden" name="asociado_membrecia" value="{{auth()->user()->asociado_membrecia}}" > <br>




 



