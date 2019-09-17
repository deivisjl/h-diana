@extends('layout-home')
@section('title','Mision')

@section ('content') 
<h1> Nuestros Valores</h1>

   <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="/img/v1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ética</h5>
              <p class="card-text">Hacemos las cosas de manera correcta,
                    honesta y ética. Actuamos debidamente.</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="/img/v2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Trabajo Duro</h5>
              <p class="card-text">Tomamos decisiones basadas en hechos, no
                    en rumores. Trabajamos arduamente y somos
                    responsables. Nos esforzamos en alcanzar la
                    excelencia.</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="/img/v3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Buena Actitud</h5>
              <p class="card-text">Lo hacemos ¡simple, divertido y mágico!</p>
            </div>
          </div>
        </div>
@endsection

