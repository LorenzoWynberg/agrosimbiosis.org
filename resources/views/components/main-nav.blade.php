<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{ route(Lang::get('routes.name.home')) }}">{{ Lang::get('common.brand') }}</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav-links">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link{{ isset($active) && $active == 'team' ? ' active' : '' }}" href="{{ route(Lang::get('routes.name.home')) . '/#team' }}">
            {{ Lang::get('common.team') }}
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link{{ isset($active) && $active == 'catalogue' ? ' active' : '' }}" href="{{ route(Lang::get('routes.name.catalogue')) }}">
            {{ Lang::get('common.catalogue') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            {{ Lang::get('common.blog') }}
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link{{ isset($active) && $active == 'contact' ? ' active' : '' }}" href="{{ route(Lang::get('routes.name.contact')) }}">
            {{ Lang::get('common.contact') }}
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown-lang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Lang::get('common.lang') }}
          </a>
          <ul id="lang-dropdown" class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdown-lang">
            @foreach(config('langs') as $lang)
              <li class="nav-item">
                @if(isset($routeParams))
                  @if(isset($routeParams[$lang]))
                    <a class="dropdown-item nav-link" href="{{ translateCurrentRoute($lang, $routeParams[$lang]) }}">{{ Str::upper($lang) }}</a>
                  @endif
                @else
                  <a class="dropdown-item nav-link" href="{{ translateCurrentRoute($lang) }}">{{ Str::upper($lang) }}</a>
                @endif
              </li>
            @endforeach
          </ul> 
        </li>
        @auth
          <li class="nav-item d-lg-none">
            <form action="/logout" method="post">
              <a class="nav-link" href="{{ route(Lang::get('routes.name.logout')) }}">
                {{ Lang::get('common.logout') }}
              </a>
            </form>
          </li>
        @endauth
        @guest
          <li class="nav-item d-lg-none">
            <a class="nav-link{{ isset($active) && $active == 'login' ? ' active' : '' }}" href="{{ route(Lang::get('routes.name.login')) }}">
              {{ Lang::get('common.login') }}
            </a>
          </li>
          <li class="nav-item d-lg-none">
            <a class="nav-link{{ isset($active) && $active == 'register' ? ' active' : '' }}" href="{{ route(Lang::get('routes.name.register')) }}">
              {{ Lang::get('common.register') }}
            </a>
          </li>
        @endguest
      </ul>
      <div class="d-none d-flex d-lg-flex">
        <form action="" class="me-2">
          <input class="form-control outline-info" type="search" placeholder="{{ Lang::get('common.search') }}" aria-label="Search">
        </form>
        @auth
          <a href="{{ route(Lang::get('routes.name.logout')) }}" class="btn rounded-circle btn-danger text-white">
            <i class="fa-solid fa-right-from-bracket"></i>
          </a>
        @endauth
        @guest
          <div class="dropdown">
            <button class="btn rounded-circle btn-info text-white" type="button" id="dropdown-auth" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-right-to-bracket"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end py-1" aria-labelledby="dropdown-auth">
              <li>
                <a href="{{ route(Lang::get('routes.name.login')) }}" class="dropdown-item" href="#">
                  {{ Lang::get('common.login') }}
                </a>
              </li>
              <hr class="m-0">
              <li>
                <a href="{{ route(Lang::get('routes.name.register')) }}" class="dropdown-item" href="#">
                  {{ Lang::get('common.register') }}
                </a>
              </li>
            </ul>
          </div>
        @endguest
      </div>
    </div>
    <!-- .collapse END -->
  </div>
  <!-- .container-fluid END -->
</nav>
<!-- .navbar END -->