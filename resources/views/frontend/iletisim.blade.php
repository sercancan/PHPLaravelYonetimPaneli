@extends("frontend.sablon.varsayilan")

@section("cssler")
@endsection

@section("javascriptler")
@endsection

@section("dataAlani")


<div id="top"></div>
<!-- content -->

<section id="contact">
    <div class="space-80">&nbsp;</div>

    <!-- google-maps
        <div id="map">
    </div>
    <!-- / google-maps -->


    <div class="container">
      @foreach($iletisim_data as $iletisim_bilgi)
        <div class="page-header dark text-center">
            <h2>İletişim Bilgileri</h2>


            <div class="separator-line-center primary-bg-color medium-spacing">&nbsp;</div>
            <div class="sub-title">{{ $iletisim_bilgi->sirket_adi }} </div>
            <h4 class="sub-title"> {{ $iletisim_bilgi->adres}}  <a href="#"><i class="fa fa-phone"></i><span>{{ $iletisim_bilgi->telefon}}</span></a></h4>
            <div class="space-50">&nbsp;</div>
        </div>
       @endforeach
       <!--
        <div id="contact-form" class="wow fadeIn first">
            <form id="contactForm" data-toggle="validator">
                <div class="row">
                    <div class="col-sm-6 contact-left-area">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Ad Soyad" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="E-Posta" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="msg_subject" placeholder="Mesajınız">
                        </div>
                    </div>
                    <div class="col-sm-6 contact-right-area">
                        <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="MESSAGE" required=""></textarea>
                        <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit">SEND MESSAGE</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </form>
              <!-- / row -->
        </div><!-- contact-form -->
    </div><!-- / container -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-sm-5 col-xs-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d501.08747754490025!2d28.50474807926707!3d41.175295127854056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e6!4m4!1s0x14b550143be3d863%3A0xb22cadd28ef6dd21!3m2!1d41.175461999999996!2d28.504993!4m5!1s0x14b550143be3d863%3A0xb22cadd28ef6dd21!2s%C4%B0zzettin+Mahallesi%2C+Alipa%C5%9Fazade+Lokumculuk+G%C4%B1da+%C4%B0n%C5%9Faat+ve+Sanayi+Ticaret+LTD.%C5%9ET%C4%B0%2C+%C4%B0zzettin+Mahallesi+Doburca+Sokak+No%3A23%2C+34540+%C3%87atalca%2F%C4%B0stanbul!3m2!1d41.175461999999996!2d28.504993!5e0!3m2!1str!2str!4v1509448111027" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

</section>
<!-- / contact -->
@endsection
