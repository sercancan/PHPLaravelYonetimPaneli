 @extends("frontend/sablon/varsayilan")

@section("cssler")

@endsection

@section("javascriptler")

@endsection


@section("dataAlani")

<!-- content -->

<div class="space-80">&nbsp;</div>

<div class="container">
  <div class="row">
    @foreach($urunler_data as $urun)
      <div class="col-lg-4 col-sm-3 col-xs-2 col-xl-3">
        <!--Card Dark-->
        <div class="card card-dark">
            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="{{asset('UrunResimleri/uresim')}}/{{$urun->vitrin_resmi}}" class="img-fluid" alt="">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->
            <!--Card content-->
            <div class="card-body">
                <!--Social shares button-->

                <!--Title-->
                <p class="card-title">{{ $urun->urun_adi }}</p>
                <hr>
                <!--Text-->
                <p class="card-text white-text"><?= $urun->urun_aciklama ?></p>
                <a href="#" class="d-flex flex-row-reverse">
                    <p class="waves-effect waves-light p-2">Ürün Detay<i class="fa fa-chevron-right"></i></p>
                </a>
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card Dark-->
      </div>
      @endforeach

  </div>
</div>

<!-- / content -->

@endsection
