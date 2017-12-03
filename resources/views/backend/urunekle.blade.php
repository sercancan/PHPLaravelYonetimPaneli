@extends("backend.sablon.varsayilan")

@section("cssler")
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-summernote/summernote.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-summernote/summernote-bs3.css')}}">
<link href="{{ asset('css/sweetalert2.min.css')}}" />
@endsection

@section("javascriptsler")
<script src="{{asset('backend/assets/plugins/bootstrap-summernote/summernote.min.js') }}"></script>
<script	src="{{ asset('js/jquery.form.min.js') }}" ></script>
<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
<script src="{{ asset('js/messages_tr.js') }}" ></script>
<script src="{{ asset('js/sweetalert2.all.min.js')}}" ></script>

<script>
$(document).ready(function(){


			$('#summernote').summernote({
				height: 300
			});

	$('form').validate();
	$('form').ajaxForm({
		beforeSubmit:function(){
			swal({
				title : "<i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><span class='sr-only'>Loading...</span>",
				text : "Resimler Yükleniyor..",
				showConfirmButton:false
			});
		},
		success:function(response){
					swal(response.baslik,response.icerik,response.durum);
		}
	});
});
</script>

@endsection

@section("icerik")

<!-- BEGIN GRID NO-BORDER BOTH BLACK -->
					<div class="col-md-12">
						<div class="grid no-border top bottom black">
							<div class="grid-header">
								<i class="fa fa-laptop"></i>
								<span class="grid-title">Ürün Ekle</span>
							</div>
							<div class="grid-body">


								<img src="{{asset('yuklenen/img/logos.png')}}"  height="200" width="222" />

									{{ Form::open(array("url"=>"yonetici/admurunekle","enctype"=>"multipart/form-data")) }}
								<div class="row">


									{{Form::file("urunresmi[]",["multiple" => "multiple"] ) }}

									<div class="col-md-10 col-sm-10 col-xs-12">
											{{ Form::label("urunad","Ürün ismi") }}
											{{ Form::text("urunad",null,array("class"=>"form-control","placeholder"=>"Ürün ismi giriniz")) }}
									</div>
										<div class="col-md-10 col-sm-10 col-xs-12">
												{{ Form::label("urunkodu","Ürün Kodu") }}
												{{ Form::text("urunkodu",null,array("class"=>"form-control","placeholder"=>"Örnek(LKM-APZ-15)")) }}
										</div>
										<!--{{ Form::bsText('Üretim Tarihi','uruntarih') }} -->
									<!--	{{ Form::bsPassword('Parolaniz','parola',['class'=>"form-control col-md-7 col-xs-12"]) }} -->

									<div class="col-md-10 col-sm-10 col-xs-12 col-lg-12">
											{{ Form::label("aciklama","Ürün Açıklaması") }}
												<textarea id="summernote" name="urunaciklama"></textarea>
											<!--{{ Form::textarea("urunaciklama",null,array("class"=>"form-control")) }} -->
									</div>
										<div class="col-md-10 col-sm-10 col-xs-12">
											{{ Form::label("stokvarmi","Stok Durumu ")}} <br/>
											 {{ Form ::radio("stokvarmi","1",true) }} Stokta Var  <br/>
											 {{ Form::radio("stokvarmi","0",false) }} Stokta Yok <br/>
											 {{ Form::radio("stokvarmi","2",false) }} Stokta Sınırlı <br/>
										</div>


													{{ Form::submit("Ürün Kayıt",array("class"=>"form-control btn btn-primary")) }}

								</div>
								{{ Form::close() }}

							</div>
						</div>
					</div>
					<!-- END GRID NO-BORDER BOTH BLACK -->

@endsection
