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

<div id="mission" class="py-5">
  <div class="container">
    <div class="row mt-5 mb-3">
      <div class="col-md-8">
        <h2>Misión</h2>
        <p>Somos una organización que busca rescatar practicas ancestrales que se han ido perdiendo al igual que implementar practicas mas modernas con un enfoque en traer la mayor nutricion posible al igual que regnerar los suelos.</p>
      </div>
    </div>
  </div>
</div>

@stop