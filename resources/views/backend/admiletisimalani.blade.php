@extends("backend.sablon/varsayilan")

@section("cssler")
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-summernote/summernote.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-summernote/summernote-bs3.css')}}">
@endsection

@section("javascriptsler")
<script src="{{asset('backend/assets/plugins/bootstrap-summernote/summernote.min.js') }}"></script>
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
  <div class="row">

    <?php

    $sirket_adi="";
    $sirket_adres="";
    $sirket_tel="";

  foreach($tablo_iletisim as $data)
	{
    $sirket_adi = $data->sirket_adi;
    $sirket_adres = $data->adres;
    $sirket_tel = $data->telefon;
	}

	    ?>
    <div class="col-lg-10 col-sm-7 col-xs-4">
{{ Form::open(array("url"=>"yonetici/admiletisimalani")) }}

  {{Form::label("sirketadi","Şirket Adı") }}
    <input type="text" name="sirketadi"   value="{{$sirket_adi}}" class="form-control" placeholder="Şirketi Adı Giriniz" />
  {{Form::label("adres","Adres") }}
  <textarea id="summernote" name="adres">   {{$sirket_adres}}  </textarea>

  {{Form::label("telefon","Telefon") }}
  <input type="text" name="telefon"  required value="{{$sirket_tel}}" class="form-control"  placeholder="(0000) 555 55 55" />
  <br/>


  {{Form::submit("Kaydetiniz",array("class"=>"form-control btn btn-primary")) }}

{{ Form::close() }}
</div>
</div>
</div>
@endsection
