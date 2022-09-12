<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika"> --}}
	<title>Find Doctor - Appointment</title>
	<title style="text-transform: capitalize">Find Doctor</title>
    <meta property="og:title" content="Find Doctor" style="text-transform: capitalize" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('doctor_listing_1.jpg') }}" />
    <meta property="og:description" content="Uji Coba demonstrasi buat janji dokter & registrasi online" />
    <meta property="og:url" content="http://hospital.coffinashop.com" />
    <meta name="theme-color" content="#8CC0DE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary_large_image">
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('fe1/img/favicon.ico')}}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('fe1/img/apple-touch-icon-57x57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('fe1/img/apple-touch-icon-72x72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('fe1/img/apple-touch-icon-114x114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('fe1/img/apple-touch-icon-144x144-precomposed.png')}}">
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ asset('fe1/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fe1/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('fe1/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('fe1/css/vendors.css') }}" rel="stylesheet">
	<link href="{{ asset('fe1/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">
   
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('fe1/css/date_picker.css') }}" rel="stylesheet">
    
	<!-- SPECIFIC CSS -->
    <link href="{{ asset('fe1/css/blog.css') }}" rel="stylesheet">
	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('fe1/css/custom.css') }}" rel="stylesheet">

	
	@yield('style')
</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<header class="header_sticky">
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo">
						<a href="/appointment/choose-specialist-&-hospital" title="Findoctor"><img src="{{ asset('fe1/img/logo.png') }}" alt="" width="163" height="36"></a>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					{{-- <ul id="top_access">
						<li id="user">
							<a href="#0">
								<figure><img src="http://via.placeholder.com/150x150.jpg" alt=""></figure>
								Jhon Smith
							</a>
						</li>
					</ul> --}}
					<div class="main-menu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="/appointment/choose-specialist-&-hospital">Buat Janji</a></li>
							{{-- <li><a href="/appointment/choose-doctor">Berita</a></li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
								<ul>
									<li class="third-level"><a href="#0">List pages</a>
										<ul>
                                            <li><a href="list.html">List page</a></li>
											<li><a href="grid-list.html">List grid page</a></li>
											<li><a href="list-map.html">List map page</a></li>
                                        </ul>
									</li>
									<li class="third-level"><a href="#0">Detail pages</a>
										<ul>
                                            <li><a href="detail-page.html">Detail page 1</a></li>
                                            <li><a href="detail-page-2.html">Detail page 2</a></li>
                                    		<li><a href="detail-page-3.html">Detail page 3</a></li>
											<li><a href="detail-page-working-booking.html">Detail working booking</a></li>
                                        </ul>
									</li>
									<li><a href="submit-review.html">Submit Review</a></li>
									<li><a href="blog-1.html">Blog</a></li>
									<li><a href="badges.html">Badges</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="login-2.html">Login 2</a></li>
									<li><a href="register-doctor.html">Register Doctor</a></li>
									<li><a href="register-doctor-working.html">Working doctor register</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contacts.html">Contacts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#0" class="show-submenu">Extra Elements<i class="icon-down-open-mini"></i></a>
								<ul>
                                    <li><a href="booking-page.html">Booking page</a></li>
                                    <li><a href="confirm.html">Confirm page</a></li>
                                	<li><a href="faq.html">Faq page</a></li>
                                    <li><a href="coming_soon/index.html">Coming soon</a></li>
									<li class="third-level"><a href="#0">Pricing tables</a>
										<ul>
											<li><a href="pricing-tables-3.html">Pricing tables 1</a></li>
                                    		<li><a href="pricing-tables.html">Pricing tables 2</a></li>
                                    		<li><a href="pricing-tables-2.html">Pricing tables 3</a></li>
										</ul>
									</li>
									<li><a href="icon-pack-1.html">Icon pack 1</a></li>
									<li><a href="icon-pack-2.html">Icon pack 2</a></li>
									<li><a href="icon-pack-3.html">Icon pack 3</a></li>
									<li><a href="404.html">404 page</a></li>
								</ul>
							</li> --}}
							
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- container -->
	</header>
	<!-- /Header -->