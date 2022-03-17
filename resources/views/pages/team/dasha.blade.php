@extends('layouts.main')

@section('title', 'Equipo - Dasha Montcalm')
@section('id', 'team')

@section('content')

@include('components.main-nav', ['active'=>'team'])

<div class="container py-5">
	<h1 class="h2">Dasha Montcalm <small class="h5 text-muted">Ingeniera Agrónoma</small></h1>
	<hr>
	<div class="row d-flex align-items-center">
		<div class="col-md-5 pb-4 pb-md-0">
			<img src="{{ asset('imgs/team/dasha.jpg') }}" class="img-fluid" alt="">
		</div>
		<div class="col-md-7">
			<p>Dasha montcalm ingeniera agrónoma graduada de la universidad earth en costarica. Experiencia en comunidades rurales en sustainable harvest internacional, Honduras. Experiencia como consultora en bio insumos e instalaciones de bio fabricas con Universidad Earth guanacaste.</p>
			<p>&ldquo;Cuando se está en el mundo de la agroecología hay un llamado excepcional por compartir experiencias e ingeniar maneras de producir alimento saludable con el mayor respeto a los ecosistemas, las culturas y sus tradiciones.&rdquo;</p>
		</div>
	</div>
</div>

@stop