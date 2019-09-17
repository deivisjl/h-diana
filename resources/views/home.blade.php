@extends('layout-home')

@section ('content') 


  <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators my-4">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item ">
              <img src="/img/home1.jpg" class="d-block w-100"alt="First slide">
              <div class="carousel-caption d-none d-md-block bg-dark mb-4">
                <h5>Comienza tu Construcción</h5>
                <p>Alimentación saludable, actividad física regular y los suplementos para llenar
                        los vacíos nutricionales.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/home4.jpg" class="d-block w-100"alt="Third slide">
              <div class="carousel-caption d-none d-md-block bg-dark mb-4">
                <h5>Ciencia y Calidad de la Mano </h5>
                <p> Productos basados en la CIENCIA y de una ALTA CALIDAD.</p>
              </div>
            </div>
            <div class="carousel-item active">
              <img src="/img/home3.jpg" class="d-block w-100" alt="Second slide">
              <div class="carousel-caption d-none d-md-block bg-dark mb-4">
                <h5>De la Semilla a la Mesa </h5>
                <p>Calidad en todos nuestros productos.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

{{-- @auth
{{auth()->user()->asociado_membrecia}}  
@endauth --}}


@endsection 


@section('title','INICIO')

