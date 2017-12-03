<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kingstudio.ro/demos/mr/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 09:21:12 GMT -->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Minimal Restaurant Template">
<meta name="keywords" content="responsive, retina ready, html5, css3, restaurant, food, bar, events" />
<meta name="author" content="KingStudio.ro">

<!-- favicon -->
<link rel="icon" href="images/favicon.png">
<!-- page title -->
<title>MR - Minimal Restaurant Template</title>
<!-- bootstrap css -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>

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
    <nav class="navbar navbar-default dark-bg page-nav navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo-inline.png" alt="logo" class="inline-logo"> <img src="images/logo-collapsed.png" alt="logo" class="collapsed-logo"></a>
            </div><!-- / navbar-header -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index4.html">HOME</a></li>
                    <li><a href="about2.html">ABOUT</a></li>
                    <li><a href="menu2.html">MENU</a></li>
                    <li><a href="order.html">ORDER</a></li>
                    <li class="active"><a href="contact2.html">CONTACT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!-- / container -->
    </nav>
</header>
<!-- / header -->

<!-- content -->

<section id="contact">
    <div class="space-80">&nbsp;</div>
    <!-- google-maps -->
    <div id="map">
    </div><!-- / google-maps -->
    <div class="container">
        <div class="page-header dark text-center">
            <h2>Contact</h2>
            <div class="separator-line-center primary-bg-color medium-spacing">&nbsp;</div>
            <h4 class="sub-title">Miami, S Miami Ave, SW 20th, Nr. 33 <a href="tel:0123456789"><i class="fa fa-phone"></i><span>0123-456-789</span></a></h4>
            <div class="space-50">&nbsp;</div>
        </div>
        <div id="contact-form" class="wow fadeIn first">
            <form id="contactForm" data-toggle="validator">
                <div class="row">
                    <div class="col-sm-6 contact-left-area">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="FULL NAME" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="msg_subject" placeholder="SUBJECT">
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
                </div><!-- / row -->
            </form>
        </div><!-- contact-form -->
    </div><!-- / container -->
</section>
<!-- / contact -->

<!-- / content -->

<!-- scroll to top -->
<a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle"><i class="fa fa-angle-up"></i></a>
<!-- / scroll to top -->

<!-- footer -->
<footer>
    <div class="container">
        <p class="footer-info">© 2017 - <strong>MR</strong> - Minimal Restaurant.
            <span class="social pull-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </span>
        </p>
    </div><!-- / container -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- sticky nav -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav-sticky.js"></script>
<!-- / sticky nav -->

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<!-- wow -->
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<!-- / wow -->

<!-- contact-form -->
<script src="js/validator.min.js" type="text/javascript"></script>
<script src="js/form-scripts.js" type="text/javascript"></script>
<!-- / contact-form -->

<!-- google-maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA40uewXP25u1A4o9u8ueBimZZwIdNLkY"></script>
<script src="js/map.js"></script>
<!-- / google-maps -->

<!-- hide nav -->
<script src="js/hide-nav.js"></script>
<!-- / hide nav -->

<!-- / javascript -->

</body>


<!-- Mirrored from kingstudio.ro/demos/mr/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 09:21:23 GMT -->
</html>
