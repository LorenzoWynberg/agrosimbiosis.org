<footer id="footer" class="text-center text-lg-start text-white">
  <div class="d-flex bg-secondary">  
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">

        <!--Footer - Socials/Donations - Start-->
        <div class="col-md-12 col-lg-3 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-3">Redes Sociales</h5>
          <div class="mb-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light p-2"><img src="{{ asset('imgs/icons/fb.png') }}" width="30px" alt=""></a>
            <!-- Instagram -->
            <a type="button" class="btn btn-floating btn-light p-2"><img src="{{ asset('imgs/icons/ig.png') }}" width="30px" alt=""></a>
            <!-- Youtube -->
            <a type="button" class="btn btn-floating btn-light p-2"><img src="{{ asset('imgs/icons/yt.png') }}" width="30px" alt=""></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light p-2"><img src="{{ asset('imgs/icons/twitter.png') }}" width="30px" alt=""></a>
          </div>
          <h5 class="text-uppercase mb-3">Donaciones</h5>
          <div>
            <!-- BTC -->
            <button type="button" class="btn btn-floating btn-light p-2" data-bs-toggle="modal" data-bs-target="#btc-modal">
              <img src="{{ asset('imgs/icons/btc.png') }}" width="30x" alt="">
            </button>
            <button type="button" class="btn btn-floating btn-light p-2" data-bs-toggle="modal" data-bs-target="#eth-modal">
              <img src="{{ asset('imgs/icons/eth.png') }}" width="30px" alt="">
            </button>
            <button type="button" class="btn btn-floating btn-light p-2" data-bs-toggle="modal" data-bs-target="#bnb-modal">
              <img src="{{ asset('imgs/icons/bnb.png') }}" width="30px" alt="">
            </button>
          </div>
        </div>
        <!--Footer - Socials/Donations - End-->

        <!--Footer - Schedule - Start-->
        <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
          <h5 class="text-uppercase">Horario</h5>

          <table class="table text-center">
            <tbody class="fw-normal text-white">
              <tr>
                <td class="text-lg-start">Lun - Vie:</td>
                <td>7am - 3pm</td>
              </tr>
              <tr>
                <td class="text-lg-start">Sab - Sab:</td>
                <td>7am - 1pm</td>
              </tr>
              <tr>
                <td class="text-lg-start">Domingo:</td>
                <td>Cerrado</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Footer - Schedule - End-->

        <!--Footer - Contact - Start-->
        <div class="col-md-6 col-lg-4 col-xl-3 offset-xl-1 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3 pb-1">Contacto</h5>
          <ul class="fa-ul mx-0">
            <li class="mb-3">
              <span class="fa-li position-static"><i class="fas fa-phone"></i></span><span class="ms-2">+506 8329-3003</span>
            </li>
            <li class="mb-3">
              <span class="fa-li position-static"><i class="fas fa-envelope"></i></span><span class="ms-2">agrosimbiosis@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li position-static"><i class="fas fa-home"></i></span><span class="ms-2">Belén, Heredia</span>
            </li>
          </ul>
        </div>
        <!--Footer - Contact - End-->

      </div>
      <!--Grid row - End-->
    </div>
    <!-- Grid container - End -->
  </div>

  <!-- Footer - Copyright - Start -->
  <div class="copyright">
    <div class="text-center p-3 bg-info text-white">
      &copy; {{ date("Y") }} Derechos De Autor:
      <a class="text-white" href="{{ route('home') }}">AgroSimbiosis.org</a>
    </div>
  </div>
  <!-- Footer - Copyright - End -->
</footer>