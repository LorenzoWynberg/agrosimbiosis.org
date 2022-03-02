@extends('layouts.main')

@section('title', 'Equipo - Lorenzo Wynberg')
@section('id', 'team')

@section('content')

@include('components.main-nav', ['active'=>'team'])

<div class="container py-5">
	<h1 class="h2">Lorenzo Wynberg <small class="h5 text-muted">Hackerman</small></h1>
	<hr>
	<div class="row d-flex align-items-center">
		<div class="col-md-5 pb-4 pb-md-0">
			<img src="{{ asset('imgs/team/lore.jpg') }}" class="img-fluid" alt="">
		</div>
		<div class="col-md-7">
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt autem, ad amet corrupti magni vitae mollitia porro totam illum, natus dignissimos ipsum quibusdam in, suscipit dicta aliquid at laborum sapiente.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. At repudiandae ipsam sapiente architecto consectetur, eos temporibus autem alias! Ut ea ex veniam repellat deserunt consequuntur voluptatibus corrupti? Molestias, labore, fugit.</p>
		</div>
	</div>
</div>

@stop