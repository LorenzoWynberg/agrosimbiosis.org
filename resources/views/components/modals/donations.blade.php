<div id="donationModals">
	@foreach($tokens as $token => $network)
		<div class="modal fade" id="{{strtolower($token)}}-modal" tabindex="-1" aria-labelledby="{{strtolower($token)}}ModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="{{strtolower($token)}}ModalLabel">{{ Lang::get('components/modals/donations.address.title', ['token'=>$token]) }}</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		      	<p class="px-2 mb-0">{{ Lang::get('components/modals/donations.address.disclaimer', ['network'=>$network]) }}</p>
		        <img src="{{ asset('imgs/crypto/addresses/' . strtolower($network) . '-address.jpeg') }}" class="img-fluid" alt=""></a>
		      </div>
		      <div class="modal-footer">
		        <p class="px-2">{{ Lang::get('components/modals/donations.thanks') }}</p>
		      </div>
		    </div>
		  </div>
		</div>
	@endforeach
</div>