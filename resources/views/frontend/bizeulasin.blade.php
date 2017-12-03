  @extends("frontend.sablon.varsayilan")
  @section("cssler")
  <link href="{{ asset('css/sweetalert2.min.css')}}" />
  @endsection

  @section("javascriptsler")
  <script	src="{{ asset('js/jquery.form.min.js') }}" ></script>
  <script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
  <script src="{{ asset('js/messages_tr.js') }}" ></script>
  <script src="{{ asset('js/sweetalert2.all.min.js')}}" ></script>
  <script>
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
  </script>
  @endsection
@section("dataAlani")

<!-- content -->

<section id="opening" class="parallax-background">
    <div class="container">
        <div class="space-80">&nbsp;</div>

    </div><!-- / container -->
</section>
<!-- / opening -->

<!-- reservations -->
<section id="reservations">
    <div class="container">
        <img src="{{asset('frontend/images/reservations.png') }}" alt="" class="reservations-img wow fadeInDown first">
        <div class="page-header text-center">
            <h2 class="text-primary">İstediğiniz Zaman</h2>
            <div class="separator-line-center large-spacing">&nbsp;</div>
            <h4 class="sub-title">Bizimle  <span class="text-primary">iletişime</span>&nbsp; | &nbsp;Geçebilirsiniz <span class="text-primary">Zaman farkı olmadan  </span></h4>
        </div><!-- / page-header -->

        <div id="reservation-form" class="wow fadeIn first">
            <form id="zaman" name="zaman" method="POST" action="{{ route('bizeulasin') }}">
              {{ csrf_field() }}
                <div class="row">

                    <div class="col-sm-6 col-lg-8 col-sm-4 col-xs-2 reservation-right-area">
                        <div class="form-group">
                            <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad">
                        </div><!-- / form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad">
                        </div><!-- / form-group -->
                        <div class="form-group">
                            <input type="email" class="form-control" id="eposta" name="eposta"  placeholder="E-Posta">
                        </div><!-- / form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres">
                        </div><!-- / form-group -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon">
                        </div><!-- / form-group -->
                    </div>
                    <!-- textarea and button -->
                    <div class ="col-xs-12 textarea-button">
                        <div class="form-group">
                            <textarea id="mesaj" name="mesaj" class="form-control" rows="5" placeholder="Mesajınız"></textarea>
                            <div class="help-block with-errors"></div>
                        </div><!-- / form-group -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary-filled btn-form-submit btn-pill wow fadeInUp first"><i class="fa fa-calendar"></i><span><b>İletinizi Gönderin</b></span></button>
                            <div class="clearfix"></div>
                        </div><!-- / text-center -->
                    </div>
                    <!-- / textarea and button -->
                </div><!-- / row -->
            </form><!-- / reservationForm -->
        </div><!-- / reservetion-form -->
    </div><!-- / container -->
</section>
<!-- / reservations -->

<!-- / content -->

<!-- scroll to top -->
<a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle">
  <i class="fa fa-angle-up"></i></a>
<!-- / scroll to top -->

@endsection
