@extends('layouts.main')

@section('title', 'Catalogo')
@section('id', 'team')

@section('content')

@include('components.main-nav', ['active'=>'catalogue'])

<div class="container py-5">
	<h1 class="h2">Catálogo <small class="h5 text-muted">Abarrotes</small></h1>
	<hr>
	<div class="row">
		@for($i = 0; $i<20; $i++)
			<a href="#" class="col-6 col-sm-4 col-md-3 py-3 text-reset text-decoration-none">
				<img src="https://source.unsplash.com/random/800x800/?img=1&fruit,veggies,harvest,berries,seeds&sig={{$i+1}}" class="img-fluid rounded-circle" alt="">
				<h4 class="text-center mt-3 mb-0">Tomate <br><small class=" text-muted">Chocolate Chesnut</small></h4>
			</a>
		@endfor
	</div>
</div>

@stop