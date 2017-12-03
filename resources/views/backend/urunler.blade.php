@extends("backend.sablon.varsayilan")

@section("cssler")
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/jquery-datatables/css/dataTables.bootstrap.css') }}">
<link href="{{ asset('css/sweetalert2.min.css')}}" />
@endsection

@section("javascriptsler")

<script>
  //${document}.ready(function(){

      //var form = document.getElementById('form');
    //  var d = form.elements[1].value;
    //  alert(d);
//  });
</script>

<script src="{{ asset('backend/assets/plugins/jquery-datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('backend/assets/js/datatables.js') }}"></script>

<script	src="{{ asset('js/jquery.form.min.js') }}" ></script>
<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
<script src="{{ asset('js/messages_tr.js') }}" ></script>
<script src="{{ asset('js/sweetalert2.all.min.js')}}" ></script>

<script>

/*
$(document).ready(function(){

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

*/
</script>


@endsection

@section("icerik")

<div classs="container">
  <div class="row">
  					<!-- BEGIN BASIC DATATABLES -->
  					<div class="col-md-7 col-lg-12 col-xl-10 col-xs-10">
  						<div class="grid no-border">
  							<div class="grid-header bg-yellow">
  								<i class="fa fa-table"></i>
  								<span class="grid-title">Kayıtlı Ürünler</span>
  								<div class="pull-right grid-tools">
  									<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
  									<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
  									<a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
  								</div>
  							</div>
  							<div class="grid-body">
  								<table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Ürün Resmi </th>
                        <th>Ürün İsmi</th>
                        <th>Ürün Stok Durumu</th>
                        <th>Eklenme Tarihi</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($datas as $tablo_urun)
                      <tr>
                        <td>{{$tablo_urun->numara}}</td>
                        <!--<td> <img src="{{ 'UrunResimleri/uresim/'.$tablo_urun->vitrin_resmi }}"  width="50" height="50" /> </td> -->
                         <td> <img src="{{asset('UrunResimleri/uresim/')}}/{{$tablo_urun->vitrin_resmi}}"  width="50" height="50" /> </td>
                        <td>{{ $tablo_urun->urun_adi }}</td>

                                            @if($tablo_urun->stok_durumu == 1)
                                                <td> Tedarikli <span class="label label-primary">12</span></td>
                                            @elseif($tablo_urun->stok_durumu == 2)
                                                <td> Stok Sınırlı <span class="label label-warning">74</span></td>
                                            @elseif($tablo_urun->stok_durumu == 0)
                                                <td> Stokta Yok  <span class="label label-danger">10</span> </td>
                                            @endif
                                              <td>{{$tablo_urun->urun_eklenmedurumu}}</td>

                                              <td >
                                                {{ Form::open(array("url"=>"yonetici/admurunler")) }}

                                              <input type="hidden" name="silinecek_id" value="<?= $tablo_urun->numara ?>" />
                                              {{ Form::submit("Sil",array("class"=>"form-control btn-danger")) }}
                                                    {{ Form::close() }}

                                            <a href="{{ route('admurunduzenle')}}?numDuzenle={{$tablo_urun->numara}}"class="form-control btn-warning">Düzenle</a>
                                              </td>
                      </tr>
                      @endforeach
                    </tbody>

  								</table>
  							</div>
  						</div>
  					</div>
  					<!-- END BASIC DATATABLES -->
  				</div>
</div>





@endsection
