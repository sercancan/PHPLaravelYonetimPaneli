@extends("backend.sablon/varsayilan")

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

<div class="container">

{{ Form::open(array("id"=>"form","name"=>"form","url"=>"yonetici/admhaberekle","enctype"=>"multipart/form-data")) }}
  <div class="row">
      <div class="col-lg-11 col-xs-5 col-xl-7 col-md-6">
					@foreach($haber_edit as $hbr_edt)

						<img src="{{asset('HaberResimleri/hresim/')}}/{{$hbr_edt->haber_resmi}}" height="300" width="600"  /> <br/>

            {{Form::label("haberresmi","Haber Resmi Seçiniz")}}
            {{ Form::file("haberresmi") }}

            {{ Form::label("haberbaslik","Haber Başlığı") }}
            {{ Form::text("haberbaslik",$hbr_edt->haber_baslik,array("class"=>"form-control","placeholder"=>"Başlık Giriniz.")) }}

            {{ Form::label("habericerigi","Haber İçeriği") }}
            	<textarea id="summernote" name="habericerigi">{{$hbr_edt->haber_icerik}}</textarea>
            <!--{{ Form::textarea("habericerigi",null,array("class"=>"form-control","placeholder"=>"Haber içerigi giriniz ")) }} -->
						@endforeach
              	{{ Form::submit("Haber Yayınla",array("class"=>"form-control btn btn-success btn-lg")) }}
      </div>
  </div>
  {{Form::close() }}
</div>
@endsection
