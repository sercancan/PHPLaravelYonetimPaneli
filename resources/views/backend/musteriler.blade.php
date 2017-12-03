@extends("backend.sablon/varsayilan")

@section("cssler")
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/jquery-datatables/css/dataTables.bootstrap.css') }}">

@endsection

@section("javascriptsler")
<script src="{{ asset('backend/assets/plugins/jquery-datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('backend/assets/js/datatables.js') }}"></script>
@endsection

@section("icerik")
<br/>

<div classs="container">
  <div class="row">
  					<!-- BEGIN BASIC DATATABLES -->
  					<div class="col-md-12">
  						<div class="grid no-border">
  							<div class="grid-header bg-yellow">
  								<i class="fa fa-table"></i>
  								<span class="grid-title">İletişime Geçen Müşteriler</span>
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
  											<th>Adı</th>
  											<th>Soyadı</th>
  											<th>Şehir</th>
  											<th>Telefon</th>
  											<th>E-Posta</th>
                        <th>İletişim Tarihi</th>
  										</tr>
  									</thead>

  									<tbody>
                      @foreach($musteriler_data as $musteriler)
  										<tr>
  											<td>{{$musteriler->ad}}</td>
  											<td>{{$musteriler->soyad}}</td>
  											<td>{{$musteriler->adres}}</td>
  											<td>{{$musteriler->telefon}}</td>
                        <td>{{$musteriler->eposta}}</td>
  											<td>{{$musteriler->created_at}}</td>
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
