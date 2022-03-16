<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{ route('home') }}">Agrosimbiosis</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav-links">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link{{ isset($active) && $active == 'home' ? ' active' : ''}}" aria-current="page" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ isset($active) && $active == 'team' ? ' active' : ''}}" href="{{route('home') . '/#team' }}">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ isset($active) && $active == 'contact' ? ' active' : ''}}" href="#">Contacto</a>
        </li>
        @if(Auth::check())
          <li class="nav-item d-lg-none">
            <form action="/logout" method="post">
              <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
            </form>
          </li>
        @else
          <li class="nav-item d-lg-none">
            <a class="nav-link{{ isset($active) && $active == 'login' ? ' active' : ''}}" href="{{ route('login') }}">Inicia Sesión</a>
          </li>
          <li class="nav-item d-lg-none">
            <a class="nav-link{{ isset($active) && $active == 'register' ? ' active' : ''}}" href="{{ route('register') }}">Regístrate</a>
          </li>
        @endif
      </ul>
      <div class="d-none d-flex d-lg-flex">
        <form action="" class="me-2">
          <input class="form-control outline-info" type="search" placeholder="Busqueda" aria-label="Search">
        </form>
        @if(Auth::check())
          <a href="{{ route('logout') }}" class="btn rounded-circle btn-danger text-white"><i class="fa-solid fa-right-from-bracket"></i></a>
        @else
          <div class="dropdown">
            <button class="btn rounded-circle btn-info text-white" type="button" id="dropdown-auth" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-right-to-bracket"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end py-1" aria-labelledby="dropdown-auth">
              <li><a href="{{ route('login') }}" class="dropdown-item" href="#">Inicia sesión</a></li>
              <hr class="m-0">
              <li><a href="{{ route('register') }}" class="dropdown-item" href="#">Regístrate!</a></li>
            </ul>
          </div>
        @endif
      </div>
    </div>
    <!-- .collapse END -->
  </div>
  <!-- .container-fluid END -->
</nav>
<!-- .navbar END -->