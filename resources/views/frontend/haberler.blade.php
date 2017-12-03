@extends("frontend/sablon/varsayilan")

@section("cssler")
@endsection

@section("javascriptler")

@endsection


@section("dataAlani")

<!-- content -->

<div class="space-80">&nbsp;</div>

@foreach($haberler_data as $haberler)
<section id="starter-menu">
    <div class="container">
        <div class="page-header text-center">
            <h2 class="text-primary">{{$haberler->haber_baslik}}</h2>
        </div><!-- / page-header -->
        <img src="{{asset('HaberResimleri/hresim/')}}/{{$haberler->haber_resmi}}"  alt="" class="food-img wow fadeInUp first">
        <div class="row">
            <div class="col-md-4 col-lg-10 col-xs-3 col-xl-11 menu-items wow fadeIn first">
                  <div class="content">
                      <?php echo $haberler->haber_icerik; ?>
                  </div>
            </div><!-- / menu-items -->
        </div><!-- / row -->
    </div><!-- / container -->
</section>
@endforeach


@endsection
