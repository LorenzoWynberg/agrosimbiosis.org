<div id="donationModals">
	<!-- BTC MODAL -->
	<div class="modal fade" id="btc-modal" tabindex="-1" aria-labelledby="btcModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="btcModalLabel">{{ Lang::get('components/modals/donations.address.title', ['token'=>'BTC']) }}</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	      	<p class="px-2 mb-0">{{ Lang::get('components/modals/donations.address.disclaimer', ['network'=>'BTC']) }}</p>
	        <img src="{{ asset('imgs/crypto/addresses/btc-address.jpeg') }}" class="img-fluid" alt=""></a>
	      </div>
	      <div class="modal-footer">
	        <p class="px-2">{{ Lang::get('components/modals/donations.thanks') }}</p>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ETH MODAL -->
	<div class="modal fade" id="eth-modal" tabindex="-1" aria-labelledby="ethModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="ethModalLabel">{{ Lang::get('components/modals/donations.address.title', ['token'=>'ETH']) }}</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	      	<p class="px-2 mb-0">{{ Lang::get('components/modals/donations.address.disclaimer', ['network'=>'ETH']) }}</p>
	        <img src="{{ asset('imgs/crypto/addresses/eth-address.jpeg') }}" class="img-fluid" alt=""></a>
	      </div>
	      <div class="modal-footer">
	        <p class="px-2">{{ Lang::get('components/modals/donations.thanks') }}</p>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- BNB MODAL -->
	<div class="modal fade" id="bnb-modal" tabindex="-1" aria-labelledby="bnbModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="bnbModalLabel">{{ Lang::get('components/modals/donations.address.title', ['token'=>'BNB']) }}</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	      	<p class="px-2 mb-0">{{ Lang::get('components/modals/donations.address.disclaimer', ['network'=>'BSC']) }}</p>
	        <img src="{{ asset('imgs/crypto/addresses/bsc-address.jpeg') }}" class="img-fluid" alt=""></a>
	      </div>
	      <div class="modal-footer">
	        <p class="px-2">{{ Lang::get('components/modals/donations.thanks') }}</p>
	      </div>
	    </div>
	  </div>
	</div>
</div>