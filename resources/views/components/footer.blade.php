<footer id="footer" class="text-center text-lg-start text-white">
  <div class="d-flex bg-secondary">  
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">

        <!--Footer - Socials/Donations - Start-->
        <div class="col-md-12 col-lg-3 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-3">{{ Lang::get('common.socials') }}</h5>
          <div class="mb-4">
            <!-- Facebook -->
            <a href="https://www.facebook.com/Agro-simbiosis-100102512649645" class="btn btn-floating btn-light p-2 external-link">
              <img src="{{ asset('imgs/icons/fb.png') }}" width="30px" alt="">
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/agrosimbiosis/" class="btn btn-floating btn-light p-2 external-link">
              <img src="{{ asset('imgs/icons/ig.png') }}" width="30px" alt="">
            </a>
            <!-- Youtube -->
            {{-- <a href="#" class="btn btn-floating btn-light p-2"><img src="{{ asset('imgs/icons/yt.png') }}" width="30px" alt=""></a> --}}
            <!-- Twitter -->
            {{-- <a href="#" class="btn btn-floating btn-light p-2"><img src="{{ asset('imgs/icons/twitter.png') }}" width="30px" alt=""></a> --}}
          </div>
          <h5 class="text-uppercase mb-3">{{ Lang::get('common.donations') }}</h5>
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
          <h5 class="text-uppercase">{{ Lang::get('common.schedule') }}</h5>

          <table class="table text-center">
            <tbody class="fw-normal text-white">
              <tr>
                <td class="text-lg-start">{{ Lang::get('common.mon') }} - {{ Lang::get('common.fri') }}:</td>
                <td>7am - 3pm</td>
              </tr>
              <tr>
                <td class="text-lg-start">{{ Lang::get('common.saturday') }}:</td>
                <td>7am - 1pm</td>
              </tr>
              <tr>
                <td class="text-lg-start">{{ Lang::get('common.sunday') }}:</td>
                <td>{{ Lang::get('common.closed') }}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Footer - Schedule - End-->

        <!--Footer - Contact - Start-->
        <div class="col-md-6 col-lg-4 col-xl-3 offset-xl-1 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3 pb-1">{{ Lang::get('common.contact') }}</h5>
          <ul class="fa-ul mx-0">
            <li class="mb-3">
              <a href="tel:+506-8329-3003" class="text-white">
                <span class="fa-li position-static"><i class="fas fa-phone"></i></span><span class="ms-2">+506 8329-3003</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="mailto: info@agrosimbiosis.org" class="text-white">
                <span class="fa-li position-static"><i class="fas fa-envelope"></i></span><span class="ms-2">info@agrosimbiosis.org</span>
              </a>
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
      &copy; {{ date("Y") }} {{ Lang::get('common.copyright') }}:
      <a class="text-white" href="{{ route(Lang::get('routes.name.home')) }}">AgroSimbiosis.org</a>
    </div>
  </div>
  <!-- Footer - Copyright - End -->
</footer>