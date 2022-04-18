@extends('layouts.main')

@section('title', Lang::get('common.register'))
@section('id', 'register')

@section('content')

@include('components.main-nav', ['active'=>''])
<div class="container py-5">
  <div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
      <div id="register-card" class="card shadow-sm">
        <div class="card-body">
          
          <!-- Title -->
          <h2 class="text-center text-info mt-2 mb-3">{{ Lang::get('common.register') }}</h2>

          <!-- Spacer -->
          <hr class="text-muted mt-0 mb-4">
          
          <div class="row d-flex align-items-center">

            <!-- Socials -->
            <div class="col-12 col-lg-5 order-lg-3">
              <!-- Facebook -->
              <a href="{{ route('social-redirect', 'facebook') }}" class="btn btn-info btn-lg h5 text-white d-block mb-3">
                <span class="fa fa-facebook me-2"></span> Facebook
              </a>
              <!-- Google -->
              <a href="{{ route('social-redirect', 'google') }}" class="btn btn-danger text-white btn-lg d-block mb-3">
                <span class="fa fa-google me-2"></span> Google
              </a>
            </div>

            <!-- Spacer -->
            <div class="col-12 d-lg-none">
              <hr class="spacer mt-0 mb-4">
            </div>

            <!-- Form -->
            <div class="col-12 col-lg-7 py-lg-3 order-lg-1">
              <form action="{{ route(Lang::get('routes.name.register')) }}" method="post">

                <!-- Name -->
                <div class="form-floating mb-3">

                  <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="{{ Lang::get('common.name') }}" 
                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                    value="{{ isset($errors) && $errors->count() ? old('name') : '' }}">
                  <label for="name">{{ Lang::get('common.name') }}</label>
                  <div class="invalid-feedback">
                    {!! $errors->first('name') ?? '' !!}
                  </div>

                </div>
                <!-- Name - END -->

                <!-- Username -->
                <div class="form-floating mb-3">

                  <input 
                  type="text" 
                  id="username" 
                  name="username" 
                  placeholder="{{ Lang::get('common.username') }}" 
                  class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                  value="{{ isset($errors) && $errors->count() ? old('username') : '' }}">
                  <label for="email">{{ Lang::get('common.username') }}</label>
                  <div class="invalid-feedback">
                    {!! $errors->first('username') ?? '' !!}
                  </div>

                </div>
                <!-- Username - END -->

                <!-- Email -->
                <div class="form-floating mb-3">

                  <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  placeholder="{{ Lang::get('common.email') }}" 
                  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                  value="{{ isset($errors) && $errors->count() ? old('email') : '' }}">
                  <label for="email">{{ Lang::get('common.email') }}</label>
                  <div class="invalid-feedback">
                    {!! $errors->first('email') ?? '' !!}
                  </div>

                </div>
                <!-- Email - END -->

                <!-- Password -->
                <div class="form-floating mb-3">

                  <input 
                  type="password" 
                  id="password" 
                  name="password" 
                  placeholder="{{ Lang::get('common.password') }}" 
                  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                  <label for="password">{{ Lang::get('common.password') }}</label>
                  <div class="invalid-feedback">
                    {!! $errors->first('password') ?? '' !!}
                  </div>

                </div>
                <!-- Password - END -->

                <!-- Submit -->
                <div class="text-end">
                  @csrf
                  <button type="submit" class="btn btn-secondary btn-lg text-white">
                    <span class="fa fa-check me-2"></span>{{ Lang::get('common.continue') }}
                  </button>
                </div>
                <!-- Submit - END -->

              </form>
            </div>
            <!-- Form - END -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop