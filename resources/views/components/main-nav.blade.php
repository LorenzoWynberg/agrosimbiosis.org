<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{ route('home') }}">Agrosimbiosis</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav-links">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mision</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
      <form class="d-none d-flex d-lg-flex">
        <input class="form-control outline-info me-2" type="search" placeholder="Busqueda" aria-label="Search">
        <button class="btn btn-info text-white" type="submit">Busqueda</button>
      </form>
    </div>
    <!-- .collapse END -->
  </div>
  <!-- .container-fluid END -->
</nav>
<!-- .navbar END -->