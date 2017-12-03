<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>BSM &ndash; Yönetim Sistemi</title>
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css') }}">

	<!-- END CSS FRAMEWORK -->

	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/pace/pace-theme-minimal.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/jquery-gritter/css/jquery.gritter.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css') }}">
	<!-- END CSS PLUGIN -->

	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/main.css') }}">
	<link rel="stylesheet" href="{{asset('backend/assets/css/skins.css') }}">
	<!-- END CSS TEMPLATE -->

  @yield("cssler")
</head>

<body class="skin-dark">
	<!-- BEGIN HEADER -->
	<header class="header">
		<!-- BEGIN LOGO -->
		<a href="{{route('admanasayfa')}}" class="logo">
			<img src="assets/img/logo.png" alt="BSM Teknoloji" height="20">
		</a>
		<!-- END LOGO -->
		<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Açılır Menü</span>
				<span class="fa fa-bars fa-lg"></span>
			</a>


			<!-- BEGIN NEWS TICKER -->
			<div class="ticker">
				<strong>Haberler:</strong>
				<ul>
					<?php
			$veriler = App\HaberlerModel::orderBy("id","DESC")->get();
				foreach($veriler as $v){
							?>
					<li><?php 	echo $v->haber_baslik; ?></li>
					<?php
				}
				?>
				</ul>
			</div>
			<!-- END NEWS TICKER -->
				<?php
					$bugunki_iletisim = App\MusterilerModel::orderBy("numara","DESC")->get();
				?>
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<?php
							$tarih_bugun = date("Y-m-d");
							$musteri_sayi = App\MusterilerModel::whereDate("created_at",$tarih_bugun)->orderBy("numara","DESC")->get();
					?>
					<li class="dropdown navbar-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-envelope fa-lg"></i>
								@if($musteri_sayi->count() == 0)
									<span></span>
							@else
									<span class="badge"><?=  $musteri_sayi->count() ?></span>
							@endif
						</a>
						<ul class="dropdown-menu box inbox">
							<li><div class="up-arrow"></div></li>
							<li>
								<p>Bugunki Mesaj Sayısı <?=  $musteri_sayi->count() == 0 ? " " : $musteri_sayi->count() ?></p>
							</li>
							<li>

								<?php foreach($bugunki_iletisim as $bugun ){ ?>
									<?php

											$kontakt_tarihi = mb_substr($bugun->created_at,0,strpos($bugun->created_at," "));

											if($tarih_bugun == $kontakt_tarihi)
											{	
									 ?>
								<a href="#">
									<span class="photo"><img src="{{ asset('backend/image/kisi-avatar.jpg') }}" alt="User Image"></span>
									<span class="subject">
										<span class="from"><?= $bugun->ad . " ".$bugun->soyad ?></span>
										<span class="time"><?=mb_substr($bugun->created_at,strpos($bugun->created_at," "),strlen($bugun->created_at))?></span>
										<span class="message"><?= $bugun->mesaj ?></span>
									</span>
								</a>
							<?php
						}//İF
						else{
							echo "<i>Bugun İletişime geçen olmadı.</i>";
							break;
						}
					}//FOREACH
							?>
							</li>
							<li class="footer">
								<a href="{{route('admmusteriler')}}">Daha Fazla Mesaj</a>
							</li>
						</ul>
					</li>

					<li class="dropdown profile-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog fa-lg"></i>
							<span class="username">Kullanici İşlemleri</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu box profile">
							<li><div class="up-arrow"></div></li>
							<li class="border-top">
								<a href="pages-user.html"><i class="fa fa-user"></i>Hesabım</a>
							</li>
							<li>
								<!--<a href="{{URL::to('admsistemcikis')}}"><i class="fa fa-power-off"></i>Sistemden Çıkış</a> -->
								<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
										Sistemden Çıkış
								</a>


								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- END NAVBAR -->
	</header>
	<!-- END HEADER -->

	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- BEGIN SIDEBAR -->
		<aside class="left-side sidebar-offcanvas">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left">
						<img src="{{asset('backend/image/logo-inline.png')}}"  width="245" height="150"  class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><strong>{{Auth::user()->name}}</strong>   Kullanıcısı	</p>
						<a href="#"><i class="fa fa-circle text-green"></i> Aktif</a>
					</div>
				</div>

				<ul class="sidebar-menu">
					<li class="active">
						<a href="{{ route('admanasayfa') }}">
							<i class="fa fa-home"></i><span>Anasayfa</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admurunler')}}">
							<i class="fa fa-square-o"></i><span>Ürünler</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admurunekle')}}">
							<i class="fa fa-edit"></i><span>Ürün Ekle</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admmusteriler')}}">
							<i class="fa fa-reorder"></i><span>Müşteriler</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admhaberekle')}}">
							<i class="fa fa-share"></i><span>Haber Ekle</span>
						</a>
					</li>

						<li class="active">
							<a href="{{route('admhaberler')}}">
								<i  class="fa fa-save"></i><span>Haberler</span>
							</a>
						</li>

					<li class="active">
						<a href="{{route('admgaleri')}}">
							<i class="	fa fa-file-picture-o"></i><span>Galeri</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admsosyalmedya')}}">
							<i class="fa fa-share-alt"></i><span>Sosyal Medya</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admfirmabilgi')}}">
							<i class="fa fa-info"></i><span>Firma Bilgi Alanı</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('admiletisimalani')}}">
							<i class="fa fa-ellipsis-h"></i><span>İletişim Bilgileri</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('register')}}">
							<i class="fa fa-user"></i><span>Kullanıcı Oluştur</span>
						</a>
					</li>
					<li class="active">
						<a href="{{ route('admkullanicilar') }}">
							<i class="fa fa-users"></i><span>Kullanıcılar</span>
						</a>
					</li>

				</ul>
			</section>
		</aside>
		<!-- END SIDEBAR -->

		<!-- BEGIN CONTENT -->
		<aside class="right-side">
			<!-- BEGIN CONTENT HEADER -->
			<section class="content-header">
				<i class="fa fa-home"></i>
				<span>Ana Menü</span>
				<ol class="breadcrumb">
					<li><a href="index-2.html">Ev</a></li>
					<li class="active"></li>
				</ol>
			</section>
			<!-- END CONTENT HEADER -->

			<!-- BEGIN MAIN CONTENT -->
          @yield("icerik")
      </div>

			<!-- END MAIN CONTENT -->
		</aside>
		<!-- END CONTENT -->

		<!-- BEGIN SCROLL TO TOP -->
		<div class="scroll-to-top"></div>
		<!-- END SCROLL TO TOP -->
	</div>

	<!-- BEGIN JS FRAMEWORK -->
	<script src="{{ asset('js/jquery-3.2.1.min.js')}}" ></script>
	<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- END JS FRAMEWORK -->

	<!-- BEGIN JS PLUGIN -->
	<script src="{{asset('backend/assets/plugins/pace/pace.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-totemticker/jquery.totemticker.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-resize/jquery.ba-resize.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-blockui/jquery.blockUI.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-gritter/js/jquery.gritter.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<!--[if lte IE 8]>
		<script language="javascript" type="text/javascript" src="assets/plugins/jquery-flot/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{asset('backend/assets/plugins/jquery-flot/jquery.flot.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-flot/jquery.flot.labels.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-flot/jquery.flot.resize.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-flot/jquery.flot.orderBars.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-flot/jquery.flot.pie.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-flot/curvedLines.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/skycons/skycons.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{asset('backend/assets/plugins/jquery-jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
	<script src="{{asset('backend/assets/js/dashboard.js') }}"></script>
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="{{asset('backend/assets/js/main.js') }}"></script>
	<script src="{{asset('backend/assets/js/skin-selector.js') }}"></script>
	<!-- END JS TEMPLATE -->

  @yield("javascriptsler")
</body>

<!-- Mirrored from vergo-kertas.herokuapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2016 21:10:38 GMT -->
</html>
