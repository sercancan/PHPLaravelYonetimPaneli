@extends("frontend.sablon.varsayilan")

@section("cssler")

@endsection

@section("javascriptler")

@endsection

@section("dataAlani")
<!-- content -->

<div class="space-80">&nbsp;</div>
  @foreach($bilgiler as $bilgi)
<section id="about">

    <div class="container">
        <div class="row">
            <div class="col-md-6 about-img wow fadeInLeft first">
                <img src="{{asset('frontend/images/hak_resim1.jpg') }}" alt="about">
            </div><!-- / about-img -->
            <div class="col-md-6 about-text wow fadeInRight first">
                <h2 class="text-primary">{{$bilgi->vizyon_baslik}}</h2>
                <div class="separator-line space-bottom text-left">&nbsp;</div>
                <h4 class="sub-title">Alipaşazade <span class="text-primary">olarak</span></h4>
                <p></p>
                <blockquote class="space-top">
                    <p><?= $bilgi->vizyon_aciklama ?></p>
                    <cite>Alipaşa Usta</cite>
                </blockquote>
            </div><!-- / about-text -->
        </div><!-- / row -->
        <div class="row space-top-30">
            <div class="col-md-6 about-text-2 wow fadeInLeft second">
                <h2 class="text-primary">{{ $bilgi->tarih_baslik }}</h2>
                <div class="separator-line space-bottom text-left">&nbsp;</div>
                <h4 class="sub-title"><span class="text-primary">1957</span></h4>
                <p><?=  $bilgi->tarih_aciklama ?></p>
              </div><!-- / about-text-2 -->
            <div class="col-md-6 about-slider wow fadeInRight second">
                <div id="mini-slider" class="carousel slide" data-ride="carousel">
                    <!-- wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{asset('frontend/images/tarihsel1.jpg') }}"  alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/tarihsel2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/tarihsel3.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- / wrapper for slides -->

                    <!-- controls -->
                    <a class="left carousel-control" href="#mini-slider" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                    </a>
                    <a class="right carousel-control" href="#mini-slider" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                    </a>
                    <!-- / controls -->
                </div><!-- / mini-slider -->
            </div><!-- / about-slider -->
        </div><!-- / row -->
    </div><!-- / container -->

</section>
<!-- / about -->

@endforeach

<!-- scroll to top -->
<a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle"><i class="fa fa-angle-up"></i></a>
<!-- / scroll to top -->
@endsection
