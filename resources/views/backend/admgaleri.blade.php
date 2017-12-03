@extends("backend.sablon/varsayilan")

@section("cssler")

<link rel="stylesheet" href="{{ asset('backend/assets/plugins/jquery-magnific-popup/magnific-popup.css') }}">
<link href="{{ asset('css/sweetalert2.min.css')}}" />
@endsection

@section("javascriptsler")
<script src="{{asset('backend/assets/plugins/pace/pace.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-totemticker/jquery.totemticker.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-resize/jquery.ba-resize.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-blockui/jquery.blockUI.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>

	<script	src="{{ asset('js/jquery.form.min.js') }}" ></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
	<script src="{{ asset('js/messages_tr.js') }}" ></script>
	<script src="{{ asset('js/sweetalert2.all.min.js')}}" ></script>


<script type="text/javascript">
  /* MAGNIFIC POPUP */
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Ryan McGuire</small>';
      }
    }
  });
</script>

<script>
$(document).ready(function(){

	$('form').validate();
	$('form').ajaxForm({
		beforeSubmit:function(){

		},
		success:function(response){
					swal(response.baslik,response.icerik,response.durum);
		},
		error:function(){
		    alert("HATALANDI");
		}
	});
});
</script>

@endsection

@section("icerik")
<section class="content">
				<div class="row">
					<label>Galeri Resim Yükle</label>

					{{ Form::open(array("id"=>"form","url"=>"admgaleri","enctype"=>"multipart/form-data")) }}
						{{Form::file("galeriresim[]",["multiple"=>"multiple"] ) }}
						<br/>
						{{Form::submit("Resim Kaydet",array("class"=>"form-control btn btn-success")) }}

					{{ Form::close() }}
					<!-- BEGIN GALLERY -->
					<div class="col-xl-12">
						<div class="popup-gallery">
								<?php
									foreach($galeriResimler = Storage::disk("galeriuploads")->files("gresim/") as $ver){
								?>

							<a href="{{ asset('GaleriResimleri/') }}/<?= $ver ?>" title="Photo 1">
								<img src="{{ asset('GaleriResimleri/') }}/<?= $ver ?>"width="123" height="100"  alt=""></a>
								<?php
							}
								?>

						</div>
						<br>

					</div>
					<!-- END GALLERY -->
				</div>
			</section>
@endsection
