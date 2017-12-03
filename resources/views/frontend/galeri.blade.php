@extends("frontend.sablon.varsayilan")


@section("cssler")
@endsection

@section("javascriptler")
@endsection

@section("dataAlani")

<!-- content -->

<section id="gallery" class="full-gallery">
    <div class="container-fluid no-padding">
        <h2 class="text-center hidden">Gallery</h2>



        <div id="grid" class="row lightbox wow fadeIn first">
          <?php
            foreach($galeriResimler = Storage::disk("galeriuploads")->files("gresim/") as $ver){
          ?>
            <div class="col-xs-6 col-md-3 gallery-item">
                <figure>
                    <div class="hovereffect">
                        <img class="img-responsive" src="{{ asset('GaleriResimleri/') }}/<?= $ver ?>" alt="">
                        <a href="{{ asset('GaleriResimleri/') }}/<?= $ver ?>" class="open-gallery">
                            <div class="overlay">
                                <div class="hovereffect-title">
                                    <i class="fa fa-plus gallery-icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </figure>
            </div><!-- / gallery-item -->

            <?php
          }
            ?>
          </div>

            <!-- sizer -->
            <div class="col-xs-6 col-md-3 shuffle_sizer"></div>
        </div><!-- / row -->
    </div><!-- / container-fluid -->
</section>
<!-- / gallery -->

<!-- / content -->

@endsection
