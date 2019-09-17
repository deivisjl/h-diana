@extends('layout')
@section('title','CONTACTO')
@section ('content') 
 <div class="container">
<h1> CONTACTO</h1> 
<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('messages.store')}}"> 
    @csrf

    <div class="form-group">
        <label for="name">Nombre</label>
            <input  id="name" class="form-control bg-light shadow-sm border-0" name="name" placeholder="nombre" value="{{old('name')}}"> 
            {!! $errors-> first ('name','<small>:message</small><br>')!!}
    </div>
    <input type="email" name="mail" placeholder="mail" value="{{old('mail')}}"> <br>
    {!! $errors-> first ('mail','<small>:message</small><br>')!!}

    <input name="subjet" placeholder="asunto" value="{{old('subjet')}}" > <br>
    {!! $errors-> first ('subjet','<small>:message</small><br>')!!}

    <textarea name="content"  placeholder="mensaje"> {{old('content')}}</textarea>  <br>
    {!! $errors-> first ('content','<small>:message</small><br>')!!}

    <button  >Enviar</button>

</form>
@endsection
</div>

