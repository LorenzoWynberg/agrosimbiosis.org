@extends('layouts.main')

@section('title', 'Inicio')
@section('id', 'home')

@section('content')

<div id="hero">
  <div class="overlay-gradient">
    <div class="container-fluid">
      <div class="row align-items-end pt-5 pb-5">
        <div class="col-9 mx-auto text-center">
          <h1 class="text-white display-2">Agrosimbiosis</h1>
          <h2 class="text-white fw-light">
            Cosechando Ciclos
          </h2>
          <p>
            <a id="hero-cta" href="#" class="btn btn-primary text-white text-uppercase py-2 px-4">
                Conocenos
            </a>
          </p>
        </div>
    	</div>
    </div>
  </div>
</div>

<div id="pillars">
  <div class="container">
    <div class="row text-center my-5">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
       <img src="{{ asset('imgs/icons/health.png') }}" width="200" alt="">
       <h3 class="mt-2">Salud</h3>
      </div>
      <hr class="d-sm-none">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
        <img src="{{ asset('imgs/icons/regeneration.png') }}" width="200" alt="">
        <h3 class="mt-2">Regeneración</h3>
      </div>
      <hr class="d-lg-none">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
        <img src="{{ asset('imgs/icons/symbiosis.png') }}" width="200" alt="">
        <h3 class="mt-2">Symbiosis</h3>
      </div>
      <hr class="d-sm-none">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
        <img src="{{ asset('imgs/icons/empathy.png') }}" width="200" alt="">
        <h3 class="mt-2">Empatía</h3>
      </div>
    </div>
  </div>
</div>

<div id="hero-2" class="hero parallax"></div>

<div id="about" class="py-5">
  <div class="container py-4">
    <div class="row mt-5 mb-3">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h2>Acerca de Nosotros</h2>
        <p>Agrosimbiosis nace con una idea de un modelo holistico que busca integrar la educación, alimentación saludable y un espacio de convivencia comunitario en medio de la ciudad.</p>
        <p>La idea fue tomando forma en la feria de inovacion y sostenibilidad impartida en la <a href="https://www.earth.ac.cr/es/">Universidad Earth</a>, Guacimo, Costa Rica.</p>
        <p>El proyecto fue uno de los ganadores de la feria financiada por <a href="http://www.sustainabilitylabs.org/">Sustainable Laboratory</a>, empresa israelita. Con estos fondos se planta la semilla y nace Agrosimbiosis</p>
      </div>
    </div>
  </div>
</div>

<div id="hero-3" class="hero parallax"></div>

<div id="mission" class="py-5">
  <div class="container">
    <div class="row mt-5 mb-3">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h2>Misión</h2>
        <p>Como respuesta a la desvalorizacion de la agricultura y la perdida de sus practicas ancestrales a los daños que la agricultura ha generado a los ecosistemas naturales, a la salud y el buen vivir de la humanidad.</p>
        <p>Decidimos soñar en la creacion de un sistema agricola integrado y en armonia con los ecosistemas aun en medio de la ciudad, que brindara alimento sano a la comunidad y habitad seguro a las especies desplazadas por la industralizacion.</p>
        <p>Tras haber sido uno de los ganadores en la feria de innovacion y sostenibilidad, el proyecto agrosimbiosis emprende un camino para cumplir el sueño. Gracias al apoyo de la <a href="https://www.earth.ac.cr/es/">Universidad Earth</a> y <a href="http://www.sustainabilitylabs.org/">Sustainable Laboratory</a>.</p>
      </div>
    </div>
  </div>
</div>

@stop