@extends("backend.sablon/varsayilan")

@section("cssler")
@endsection

@section("javascriptsler")
@endsection

@section("icerik")

<div class="container">
  <div class="row">
    @foreach($haberler_data as $haber)
      <div class="col-lg-3 col-sm-3 col-xs-2 col-xl-3">
        <!--Card Dark-->
        <div class="card card-dark">
            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="{{asset('HaberResimleri/hresim')}}/{{$haber->haber_resmi}}" class="img-fluid" alt="" width="300" height="200">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->
            <!--Card content-->
            <div class="card-body">
                <!--Social shares button-->

                <!--Title-->
                <p class="card-title">{{ $haber->haber_baslik }}</p>
                <hr>
                <!--Text-->
                <p class="card-text white-text"><?= substr($haber->haber_icerik,0,20) ?></p>
                <a href="#" class="d-flex flex-row-reverse">
                  <a href="{{route('admhaberduzenle')}}?haberDuzenle={{$haber->id}}">Haber Düzenle</a>
                </a>
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card Dark-->
      </div>
      @endforeach

  </div>
</div>


@endsection
