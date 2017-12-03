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

	// SUMMERNOTE WYSIWYG */

		$('#summernote').summernote({
			height: 300
		});


		$('#summernote1').summernote({
			height: 300
		});

		$('#airmode').summernote({
			height: 300,
			airMode: true
		});

/////////////
	$('form').validate();
	$('form').ajaxForm({
		beforeSubmit:function(){

		},
		success:function(response){
					swal(response.baslik,response.icerik,response.durum);
		},
		error:function(hata){
		    alert("HATALANDI :"+hata);
		}
	});
});

</script>


	<script type="text/javascript">


</script>

@endsection
@section("icerik")
<!-- BEGIN MAIN CONTENT -->
    <section class="content">
      <div class="row">
        <!-- BEGIN BASIC WYSIWYG -->
        <div class="col-md-12">
          <div class="grid">
            <div class="grid-header">
              <i class="fa fa-align-left"></i>
              <span class="grid-title">Hakkimizda Bölümü Düzenle</span>

            </div>
            <div class="grid-body">
							{{ Form::open(array("id"=>"form ","url"=>"yonetici/admfirmabilgi")) }}				
						@foreach($show_data as $veri)
							{{ Form::label("vizyon_baslik","Konu Başlığı ") }}
							{{ Form::text("vizyon_baslik",$veri->vizyon_baslik,array("class"=>"form-control")) }}

							{{ Form::label("vizyon_aciklama","Vizyon Açıklama") }}
							<textarea id="summernote" name="vizyon_aciklama">{{ $veri->vizyon_aciklama}}</textarea>
						<!--{{ Form::textarea("vizyon_aciklama",$veri->vizyon_aciklama,array("class"=>"form-control")) }} -->


								<!--<button id="save" class="btn btn-primary">Kayıt </button><br/> -->


							{{ Form::label("tarihce_baslik","Konu Başlığı") }}
							{{ Form::text("tarihce_baslik",$veri->tarih_baslik,array("class"=>"form-control")) }}

							{{ Form::label("tarihce_aciklama","Tarihçe Açıklama") }}
							<textarea id="summernote1" name="tarihce_aciklama">{{ $veri->tarih_aciklama}}</textarea>
							<!--{{ Form::textarea("tarihce_aciklama",$veri->tarih_aciklama,array("class"=>"form-control")) }} -->
						@endforeach
								{{Form::submit("Bilgileri Kaydet",array("class"=>"form-control btn btn-success"))}}
							{{ Form::close()}}

            </div>
          </div>
        </div>
        <!-- END BASIC WYSIWYG -->
      </div>
    </section>
    <!-- END MAIN CONTENT -->
@endsection
