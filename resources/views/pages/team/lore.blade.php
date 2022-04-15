@extends('layouts.main')

@section('title', 'Equipo - Lorenzo Wynberg')
@section('id', 'team')

@section('content')

@include('components.main-nav', ['active'=>'team'])

<div class="container py-5">
	<h1 class="h2">Lorenzo Wynberg <small class="h5 text-muted">{!! Lang::get('pages/team.lore.title') !!}</small></h1>
	<hr>
	<div class="row d-flex align-items-center">
		<div class="col-md-5 pb-4 pb-md-0">
			<img src="{{ asset('imgs/team/lore.jpg') }}" class="img-fluid" alt="">
		</div>
		<div class="col-md-7">
			{!! Lang::get('pages/team.lore.content') !!}
		</div>
	</div>
</div>

@stop