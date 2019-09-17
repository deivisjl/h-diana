
@csrf

<label >
    Titulo del proyecto <br>
    <input type="text" name="title" value="{{old('title',$project->title)}}" >
</label> <br> 

<label >
  URL proyecto <br>
  <input type="text" name="url" >
</label> <br>

<label >
  Descripcion proyecto <br>
  <textarea name="description"> {{old('description',$project->description)}} </textarea>
</label> <br>

<button> {{$btnText}}</button>