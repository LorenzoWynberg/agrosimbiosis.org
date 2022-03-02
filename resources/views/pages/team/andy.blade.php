@extends('layouts.main')

@section('title', 'Equipo - Andy Charpentier')
@section('id', 'team')

@section('content')

@include('components.main-nav', ['active'=>'team'])

<div class="container py-5">
	<h1 class="h2">Andres Charpentier <small class="h5 text-muted">Ingeniero Agrónomo</small></h1>
	<hr>
	<div class="row d-flex align-items-center">
		<div class="col-md-5 pb-4 pb-md-0">
			<img src="{{ asset('imgs/team/andy.jpg') }}" class="img-fluid" alt="">
		</div>
		<div class="col-md-7">
			<p>José Andres Charpentier Jiménez, Agricultor, ingeniero agrónomo graduado de la Universidad Earth, experiencia internacional en Kaima organic farming, Israel, amante de la naturaleza las plantas medicinales y la agroecología.</p>
			<p>&ldquo;Somos lo que comemos y si no sabemos que estamos comiendo no sabemos quién somos, perdimos la conexión con nuestra comida, recuperar esa conexión con nuestro alimento saludable la protección y regeneración del planeta son pilares muy importantes para mí.&rdquo;</p>
		</div>
	</div>
</div>

@stop