@extends("frontend.sablon.varsayilan")

@section("cssler")

@endsection



@section("javascriptler")

@endsection

@section("dataAlani")
<!-- slider -->
<div id="slider" class="carousel slide has-top-menu dark-slider">
    <div class="carousel-inner">

        <!-- slide 1 -->
        <div class="item active slide1">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-12 slider-content">
                            <img src="{{asset('frontend/images/slide-img1.png') }}" alt="" class="animated fadeInDown first">
                            <h2 class="slide-title fadeInUp animated second space-top-30"><span class="text-primary">Lokum</span></h2>
                            <div class="separator-line-center-2x primary-bg-color animated fadeInDown third"></div>
                            <p class="slide-text flipInX animated third">Doğal Meyve Katkıları ve aromaları kullanlmış Lokumlar.</p>
                        </div><!-- slider-content -->
                    </div><!-- / row -->
                </div><!-- / carousel-caption -->
            </div><!-- / container -->
        </div><!-- / slide 1 -->

        <!-- slide 2 -->
        <div class="item slide2">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-12 slider-content">
                            <img src="{{asset('frontend/images/slide-img2.png') }}" alt="" class="animated fadeInDown first">
                            <h2 class="slide-title fadeInUp animated second space-top-30"><span class="text-primary"></span> Kuruyemiş</h2>
                            <div class="separator-line-center-2x primary-bg-color animated fadeInDown third"></div>
                            <p class="slide-text flipInX animated third">Taze ve Sımsıcak kuruyemişler</p>
                        </div><!-- slider-content -->
                    </div><!-- / row -->
                </div><!-- / carousel-caption -->
            </div><!-- / container -->
        </div><!-- / slide 2 -->

        <!-- slide 3 -->
        <div class="item slide3">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-12 slider-content">
                            <img src="{{asset('frontend/images/slide-img3.png') }}" alt="" class="animated fadeInDown first">
                            <h2 class="slide-title fadeInUp animated second space-top-30"><span class="text-primary">Kah</span>ve</h2>
                            <div class="separator-line-center-2x primary-bg-color animated fadeInDown third"></div>
                            <p class="slide-text flipInX animated third">Ellerimiz ile öğütülmüş Kahve.</p>
                        </div><!-- slider-content -->
                    </div><!-- / row -->
                </div><!-- / carousel-caption -->
            </div><!-- / container -->
        </div><!-- / slide 3 -->

    </div><!-- /carousel-inner -->

    <!-- controls -->
    <a class="left carousel-control" href="#slider" data-slide="prev"><span class="fa fa-angle-left"></span></a>
    <a class="right carousel-control" href="#slider" data-slide="next"><span class="fa fa-angle-right"></span></a>
    <!-- / controls -->

      <div class="container">

            -----

      </div>

</div>
<!-- / slider-->

@endsection
