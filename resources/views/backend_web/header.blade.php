<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no"> --}}
	<title style="text-transform: capitalize">RS. Permata Bunda</title>
    <meta property="og:title" content="Layanan Rumah Sakit Permata Bunda" style="text-transform: capitalize" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('xxx.jpeg') }}" />
    <meta property="og:description" content="Kami berkomitmen untuk mewujudkan indonesia sehat dan berkarakter" />
    <meta property="og:url" content="https://hopital.coffinashop.com" />
    <meta name="theme-color" content="#8CC0DE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary_large_image">
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />

	<title>Permata Bunda</title>
	<!-- Stylesheets -->
	<link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/animate/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('icons/style.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="{{ asset('foto_example/kotak.jpeg') }}" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>

	@yield('style')
</head>

<body class="shop-page">
	<!--header-->
	<header class="header">
		<div class="header-mobile-info">
			<div class="header-mobile-info-content js-info-content">
				<ul class="icn-list-sm">
					<li><i class="icon-placeholder2"></i>1560 Holden Street San Diego,
						<br> CA 92139
					</li>
					<li><i class="icon-telephone"></i><span class="text-nowrap">1-800-267-0000</span>, <span class="text-nowrap">1-800-267-0001</span></li>
					<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
					<li><i class="icon-clock"></i>Mon-Fri: 08:00 - 20:00
						<br> Saturday: 08:00 - 18:00</li>
				</ul>
			</div>
		</div>
		<div class="header-mobile-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-3">
						<div class="header-mobile-info-toggle js-info-toggle"></div>
					</div>
					<div class="col-auto header-button-wrap ml-auto"><a href="/appointment/choose-specialist-&-hospital" class="btn" ><i class="icon-right-arrow"></i>BUAT JANJI<i class="icon-right-arrow"></i></a></div>
				</div>
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:1-847-555-5555">1-800-267-0000</a></div>
						<div class="header-info"><i class="icon-placeholder2"></i>1560 Holden Street San Diego, CA 92139</div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-instagram-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="/" class="header-logo"><img src="{{ asset('foto_example/panjang.jpeg') }}" alt="" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="/home-page">Home</a>
										</li>
										<li class="nav-item">
											<a href="#0" class="nav-link dropdown-toggle" data-toggle="dropdown">Klinik</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Klinik cabang 1</a></li>
												<li><a class="dropdown-item" href="#">Klinik cabang 2</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="/profile-page">Profile</a>
										</li>
										<li class="nav-item">
											<a href="/service-page" class="nav-link">Layanan</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dokter</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="/doctor-page">Semua Spesialis</a></li>
												<li><a class="dropdown-item" href="/schedule">Jadwal Dokter</a></li>
											</ul>
										</li>										
										
										<li class="nav-item dropdown">
											<a href="#0" class="nav-link dropdown-toggle" data-toggle="dropdown">Media</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Berita Terkait</a></li>
												<li><a class="dropdown-item" href="#">Informasi Terkati</a></li>
												<li><a class="dropdown-item" href="#">Galeri</a></li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link" href="/appointment/choose-specialist-&-hospital">Buat Janji</a>
										</li>
                                    </ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--//header-->