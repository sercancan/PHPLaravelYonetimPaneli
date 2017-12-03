<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Alipaşazade Gıda Şirketi">
  <meta name="keywords" content="gida, yemek,lokum,çerez,kahve,şekerleme,şeker" />
  <meta name="author" content="vebateknoloji">

<!-- favicon -->
<link rel="icon" href="{{asset('frontend/images/favicon.png') }}">
<!-- page title -->
<title>Alipaşazade</title>
<!-- bootstrap css -->
<link href="{{asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- css -->
<link href="{{asset('frontend/css/style.css') }}" rel="stylesheet">
<link href="{{asset('frontend/css/animate.css') }}" rel="stylesheet">
<link href="{{asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{asset('frontend/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
<link href="{{asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href='{{asset("frontend/fonts/FontAwesome.otf") }}' rel='stylesheet' type='text/css'>

@yield("cssler")

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<div id="top"></div>
<!-- header -->
<header>
    <nav class="navbar navbar-default dark-bg navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Açılır buton</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('frontend/images/logo-inline.png') }}" alt="logo" class="inline-logo">
                   <img src="{{asset('frontend/images/logo-collapsed.png') }}" alt="logo" class="collapsed-logo"></a>
            </div><!-- / navbar-header -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    <li><a href="{{URL::to('hakkimizda')}}">Hakkımızda</a></li>
                    <li><a href="{{ route('urunler') }}">Ürünler</a></li>
                    <li><a href="{{ URL::to('galeri')}}">Fotoğraflar</a></li>
                    <li><a href="{{ URL::to('haberler')}}">Haberler</a></li>
                    <li><a href="{{ route('bizeulasin')}}">Bize Ulaşın</a></li>
                    <li><a href="{{URL::to('iletisim')}}">İletişim</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!-- / container -->
    </nav>


</header>
<!-- / header -->

@yield("dataAlani")

<script src="{{asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- sticky nav -->
<script src="{{asset('frontend/js/jquery.easing.min.js') }}"></script>
<script src="{{asset('frontend/js/scrolling-nav-sticky.js') }}"></script>
<!-- / sticky nav -->
<!-- preloader -->
<script src="{{asset('frontend/js/preloader.js') }}"></script>
<!-- / preloader -->
<!-- wow -->
<script src="{{asset('frontend/js/wow.min.js')  }}"></script>

<!-- / wow -->

<!-- gallery script -->
<script src="{{asset('frontend/js/custom.js') }}"></script>
<script src="{{asset('frontend/js/jquery.shuffle.min.js') }}"></script>
<!-- lightbox -->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<!-- / lightbox -->
<!-- / gallery script -->
<!-- date-time picker -->
<script src="{{asset('frontend/js/moment.min.js') }}"></script>
<script src="{{asset('frontend/js/bootstrap-datetimepicker.js') }}"></script>


<!-- / date-time picker -->
<!-- contact-form -->
<script src="{{asset('frontend/js/validator.min.js') }}" type="text/javascript"></script>
<script src="{{asset('frontend/js/form-scripts.js') }}" type="text/javascript"></script>
<!-- / contact-form -->
<!-- google-maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA40uewXP25u1A4o9u8ueBimZZwIdNLkY"></script>
<script src="{{asset('frontend/js/map.js') }}"></script>
<!-- / google-maps -->
<!-- hide nav -->
<script src="{{asset('frontend/js/hide-nav.js') }}  "></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.tr.js') }}  "></script> <!-- TURKCE YAP DATE TIMEPICKER -->
<!-- / hide nav -->
<!-- / javascript -->

<script type="text/javascript">
// This will create a single gallery from all elements that have class "lightbox"
$('.lightbox').each(function() {
    $(this).magnificPopup({
        delegate: 'a.open-gallery', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});
</script>

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker( );
    });
</script>
<script>
new WOW().init();
</script>
<!-- footer -->
@yield("javascriptler")

    @php
    $sosyalmedya = \App\SosyalmedyaModel::get();
    @endphp
<footer>
    <div class="container">
        <p class="footer-info">© 2017 - <strong>BSM</strong> Stüdyo Veba Teknoloji
            <span class="social pull-right">

              @foreach($sosyalmedya as $sos)

              @if(!empty( trim($sos->facebook) ) )
                <a href="#"><i class="fa fa-facebook"></i></a>
                @endif
                @if(!empty( trim($sos->twitter)) ) )
                <a href="#"><i class="fa fa-twitter"></i></a>
                @endif
                @if(!empty( trim($sos->instagram) ) )
                <a href="#"><i class="fa fa-instagram"></i></a>
                @endif
                @if(!empty( trim( $sos->pinterest) ) )
                <a href="#"><i class="fa fa-pinterest"></i></a>
                @endif
                @if(!empty( trim($sos->youtube) ) )
                <a href="#"><i class="fa fa-youtube"></i></a>
                @endif
                @if(!empty($sos->linkedin))
                <a href="#"><i class="fa fa-linkedin  "></i></a>
                @endif
                @if(!empty( trim($sos->tumblr) ) )
                <a href="#"><i class="fa fa-tumblr"></i></a>
                @endif
                @if(!empty( trim($sos->vimeo) ) )
                <a href="#"><i class="fa fa-vimeo"></i></a>
                @endif
                @if(!empty( trim($sos->flickr) ) )
                <a href="#"><i class="fa fa-flickr"></i></a>
                @endif
                @if(!empty( trim($sos->vk) ) )
                <a href="#"><i class="fa fa-vk"></i></a>
                @endif
                @if(!empty( trim($sos->google) ) )
                <a href="#"><i class="fa fa-google"></i></a>
                @endif
                @endforeach
            </span>
        </p>
    </div><!-- / container -->
</footer>

<!-- / footer -->
</body>
<!-- Mirrored from kingstudio.ro/demos/mr/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 09:26:15 GMT -->
</html>
