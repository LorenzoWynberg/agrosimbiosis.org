@extends('layouts.main')

@section('title', 'Inicio')
@section('id', 'home')

@section('content')

@include('components.main-nav', ['active'=>'home'])

<div id="hero">
  <div class="overlay-gradient">
    <div class="container-fluid">
      <div class="row align-items-end pt-5 pb-5">
        <div class="col-12 col-sm-10 col-md-9 pb-5 pb-sm-0 mx-auto text-center">
          <h1 class="text-white display-2">{!! Lang::get('common.brand') !!}</h1>
          <h2 class="text-white fw-light">
            {!! Lang::get('pages/home.hero.headline') !!}
          </h2>
          <p>
            <a id="hero-cta" href="#hero-cta" class="btn btn-danger text-white text-uppercase py-2 px-4">
              {!! Lang::get('pages/home.hero.cta') !!}
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
       <h3 class="mt-2">{!! Lang::get('pages/home.pillars.health') !!}</h3>
      </div>
      <hr class="d-sm-none">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
        <img src="{{ asset('imgs/icons/regeneration.png') }}" width="200" alt="">
        <h3 class="mt-2">{!! Lang::get('pages/home.pillars.regeneration') !!}</h3>
      </div>
      <hr class="d-lg-none">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
        <img src="{{ asset('imgs/icons/symbiosis.png') }}" width="200" alt="">
        <h3 class="mt-2">{!! Lang::get('pages/home.pillars.symbiosis') !!}</h3>
      </div>
      <hr class="d-sm-none">
      <div class="col-12 col-sm-6 col-lg-3 my-5">
        <img src="{{ asset('imgs/icons/empathy.png') }}" width="200" alt="">
        <h3 class="mt-2">{!! Lang::get('pages/home.pillars.empathy') !!}</h3>
      </div>
    </div>
  </div>
</div>

<div id="hero-2" class="hero parallax"></div>

<div id="about" class="py-5">
  <div class="container py-5">
    <div class="row my-3">
      <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
        <h2 class="mb-3">{!! Lang::get('pages/home.about.title') !!}</h2>
        {!! Lang::get('pages/home.about.content') !!}
      </div>
    </div>
  </div>
</div>

<div id="hero-3" class="hero parallax"></div>

<div id="mission" class="py-5">
  <div class="container py-5">
    <div class="row my-3">
      <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
        <h2 class="mb-3">{!! Lang::get('pages/home.mision.title') !!}</h2>
        {!! Lang::get('pages/home.mision.content') !!}
      </div>
    </div>
  </div>
</div>

<div id="hero-4" class="hero parallax"></div>

<div id="team" class="pt-3">
  <div class="container pt-5 pb-md-5">
    <h2 class="text-center py-3">{!! Lang::get('pages/home.team.title') !!}</h2>
    <div class="row">

      <a href="{{ route(Lang::get('routes.name.team.dasha')) }}" class="team-member col-md-4 my-5 text-body">
        <div class="row d-flex align-items-center">
          <div class="col-4 offset-1 offset-md-0 col-md-12 d-flex align-items-center">
            <img src="{{ asset('imgs/team/dasha.jpg') }}" class="img-fluid rounded-circle" alt="">
          </div>
          <div class="col-7 col-md-12 text-md-center">
            <h5 class="pt-md-3">Dasha Montcalm</h5>
            <h6>{!! Lang::get('pages/home.team.dasha') !!}</h6>
          </div>
        </div>
      </a>

      <hr class="my-0 d-md-none">
      
      <a href="{{ route(Lang::get('routes.name.team.andy')) }}" class="team-member col-md-4 my-5 text-body">
        <div class="row d-flex align-items-center">
          <div class="col-4 col-md-12 order-2 order-md-1 d-flex align-items-center">
            <img src="{{ asset('imgs/team/andy.jpg') }}" class="img-fluid rounded-circle" alt="">
          </div>
          <div class="col-7 col-md-12 order-1 order-md-2 text-end text-md-center">
            <h5 class="pt-md-3">Andres Charpentier</h5>
            <h6>{!! Lang::get('pages/home.team.andy') !!}</h6>
          </div>
        </div>
      </a>

      <hr class="my-0 d-md-none">
      
      <a href="{{ route(Lang::get('routes.name.team.lore')) }}" class="team-member col-md-4 my-5 text-body">
        <div class="row d-flex align-items-center">
          <div class="col-4 offset-1 offset-md-0 col-md-12 d-flex align-items-center">
            <img src="{{ asset('imgs/team/lore.jpg') }}" class="img-fluid rounded-circle" alt="">
          </div>
          <div class="col-7 col-md-12 text-md-center">
            <h5 class="pt-md-3">Lorenzo Wynberg</h5>
            <h6>{!! Lang::get('pages/home.team.lore') !!}</h6>
          </div>
        </div>
      </a>

    </div>
  </div>
</div>

@stop