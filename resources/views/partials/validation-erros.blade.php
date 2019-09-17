
@if ($errors->any())
<div class="container text-center ">
<ul>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger " role="alert"> {{$error}}</div>
    @endforeach
</ul>

</div>
    
@endif 