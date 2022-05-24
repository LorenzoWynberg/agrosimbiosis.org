@extends('layouts.main')

@section('title', Lang::get('common.contact'))
@section('id', 'contact')

@section('content')

@include('components.main-nav', ['active'=>'contact'])

<div id="hero" class="--full-height">
  <div class="container py-3">
    <div class="row">
      <div class="col-12 col-sm-11 col-md-10 col-lg-7 col-xl-6 mx-auto d-flex align-items-center">
      	<div class="card w-100 overlay-light">
      		<div class="card-header bg-transparent text-secondary"><h3 class="my-2">{{ Lang::get('common.contact-us') }}</h3></div>
      		<div class="card-body">
      			<form action="{{ route(Lang::get('routes.name.contact')) }}" method="post">

              <!-- Success Message -->
              @if(session()->has('success'))
              <div class="alert alert-secondary">
                {{ Lang::get('common.alerts.message-success') }}
              </div>
              @endif
              <!-- Success Message - END -->

              <!-- Name -->
              <div class="form-floating mb-3">
                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                type="name" 
                id="name" 
                name="name" 
                placeholder="{{ Lang::get('common.name') }}" 
                value="{{ old('name') }}{{ auth()->check() && !old('name') ? auth()->user()->name : ''}}">
                <label for="name">{{ Lang::get('common.name') }}</label>
                <div class="invalid-feedback">
                  {!! $errors->first('name') ?? '' !!}
                </div>
              </div>
              <!-- Name - END -->

              <!-- Email -->
              <div class="form-floating mb-3">
                <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="{{ Lang::get('common.email') }}" 
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                value="{{ old('email') }}{{ auth()->check() && !old('email') ? auth()->user()->email : ''}}">
                <label for="email">{{ Lang::get('common.email') }}</label>
                <div class="invalid-feedback">
                  {!! $errors->first('email') ?? '' !!}
                </div>
              </div>
              <!-- Email - END -->

              <!-- Message -->
              <div class="form-floating mb-3">
	  						<textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" 
	  						id="message" 
                name="message" 
	  						placeholder="{{ Lang::get('common.message') }}" 
	  						rows="7">{{ old('message') }}</textarea>
                <label for="message">{{ Lang::get('common.message') }}</label>
                <div class="invalid-feedback">
                  {!! $errors->first('message') ?? '' !!}
                </div>
              </div>
              <!-- Message - END -->

              <!-- Submit -->
              <div class="text-end">
              	@csrf
                <button type="submit" class="btn btn-secondary btn-lg text-white">
                	<span class="fa fa-check me-2"></span>{{ Lang::get('common.continue') }}
                </button>
              <!-- Submit - END -->  
              </div>
            </form>
      		</div>
      	</div>
      </div>
  	</div>
  </div>
</div>

@stop