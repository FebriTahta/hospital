<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> --}}

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('fe4/css/bootstrap_customized.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fe4/css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('fe4/css/home.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    {{-- <link href={{ asset('"css/custom.css') }}" rel="stylesheet"> --}}
</head>

<body>
                
    <header class="header clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="/appointment/choose-specialist-&-hospital">
                    <img src="{{ asset('fe1/img/logo.png') }}" width="162" height="35" alt="" class="logo_normal">
                    <img src="{{ asset('fe1/img/logo.png') }}" width="162" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            {{-- <ul id="top_menu">
                <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
                <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
            </ul> --}}
            <!-- /top_menu -->
            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
            <nav class="main-menu">
                <div id="header_menu" style="background-color: white">
                    <a href="#0" class="open_close" style="color: blue">
                        <i class="icon_close" style="color: blue"></i><span>Menu</span>
                    </a>
                    <a href="/appointment/choose-specialist-&-hospital"><img src="{{ asset('fe1/img/logo.png') }}" width="162" height="35" alt=""></a>
                </div>
                <ul>
                    <li><a href="/home-page">Home</a></li>
							<li><a href="/appointment/choose-specialist-&-hospital">Buat Janji</a></li>
							<li><a href="/doctor-list">Daftar Dokter</a></li>
							<li><a href="/news-list">Daftar Berita</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                <div class="owl-slide cover" style="background-image: url({{ asset('fe1/1.jpg') }});"><!-- /Would probably better not use LazyLoad fo the first item -->
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-right white">
                                        <h2 class="owl-slide-animated owl-slide-title">Enjoy<br>Our Service</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            we offer the best service
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover owl-lazy" data-src="{{ asset('fe1/33.jpg') }}">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title">Discover<br>The Best Doctor</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            From their experienced become our health
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->               
                
            </div>
            <div id="icon_drag_mobile"></div>
            <div class="wave hero"></div>
        </div>
        <!--/carousel-->

        

        <div class="bg_gray">
            <div class="container margin_60">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Our Services</h2>
                    <p>we offer the best service</p>
                    <a href="#0">View All</a>
                </div>
                <div class="owl-carousel owl-theme carousel_4">
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('fe2/img/icon_home_7.svg') }}" data-src="{{ asset('fe2/img/icon_home_7.svg') }}" style="max-width: 100px" class="owl-lazy" alt="" width="460" height="310">
                                <a href="#x" class="strip_info">
                                    <small>KIA</small>
                                    <div class="item_title">
                                        <h3>Kandungan</h3>
                                        <small>Pantau pertumbuhan buah hati</small>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('fe2/img/icon_home_6.svg') }}" data-src="{{ asset('fe2/img/icon_home_6.svg') }}" style="max-width: 100px" class="owl-lazy" alt="" width="460" height="310">
                                <a href="#x" class="strip_info">
                                    <small>Comfortable</small>
                                    <div class="item_title">
                                        <h3>Ruang Tunggu</h3>
                                        <small>Nyaman dan tertib</small>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('fe2/img/icon_home_5.svg') }}" data-src="{{ asset('fe2/img/icon_home_5.svg') }}" style="max-width: 100px" class="owl-lazy" alt="" width="460" height="310">
                                <a href="#x" class="strip_info">
                                    <small>Professional</small>
                                    <div class="item_title">
                                        <h3>Best Doctor</h3>
                                        <small>full of experience</small>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('fe2/img/icon_home_4.svg') }}" data-src="{{ asset('fe2/img/icon_home_4.svg') }}" style="max-width: 100px" class="owl-lazy" alt="" width="460" height="310">
                                <a href="#x" class="strip_info">
                                    <small>Library</small>
                                    <div class="item_title">
                                        <h3>Best Information</h3>
                                        <small>Free book to read</small>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('fe2/img/icon_home_3.svg') }}" data-src="{{ asset('fe2/img/icon_home_3.svg') }}" style="max-width: 100px" class="owl-lazy" alt="" width="460" height="310">
                                <a href="#x" class="strip_info">
                                    <small>friendly</small>
                                    <div class="item_title">
                                        <h3>receptionist</h3>
                                        <small>friendly and smiley</small>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <img src="{{ asset('fe2/img/icon_home_2.svg') }}" data-src="{{ asset('fe2/img/icon_home_2.svg') }}" style="max-width: 100px" class="owl-lazy" alt="" width="460" height="310">
                                <a href="#x" class="strip_info">
                                    <small>Professional</small>
                                    <div class="item_title">
                                        <h3>Best Doctor</h3>
                                        <small>full of experience</small>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- /carousel -->
            </div>
        </div>
        <!-- /bg_gray -->

        <img src="{{ asset('fe1/xx.png') }}" style="max-width: 100%" alt="">
        <!-- /shape_element_2 -->

        <div class="shape_element_2">
            <div class="container margin_60_0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_how">
                                    <figure><img src="{{ asset('1.jpeg') }}" data-src="{{ asset('1.jpeg') }}" alt="" width="150" height="167" class="lazy"></figure>
                                    <h3>Judul Berita</h3>
                                    <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin.</p>
                                </div>
                                <div class="box_how">
                                    <figure><img src="{{ asset('3.jpeg') }}" data-src="{{ asset('3.jpeg') }}" alt="" width="150" height="167" class="lazy"></figure>
                                    <h3>Judul Berita</h3>
                                    <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="box_how">
                                    <figure><img src="{{ asset('2.jpeg') }}" data-src="{{ asset('2.jpeg') }}" alt="" width="150" height="167" class="lazy"></figure>
                                    <h3>Judul Berita</h3>
                                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros.</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-3 d-block d-lg-none"><a href="/news-list" class="btn_1 medium gradient pulse_bt mt-2">Read More</a></p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Read all news</h2>
                            </div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p><a href="/news-list" class="btn_1 medium gradient pulse_bt mt-2">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->

    {{-- <footer>
        <div class="wave footer"></div>
        <div class="container margin_60_40 fix_mobile">

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="submit-restaurant.html">Add your restaurant</a></li>
                            <li><a href="help.html">Help</a></li>
                            <li><a href="register.html">My account</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="grid-listing-filterscol.html">Top Categories</a></li>
                            <li><a href="grid-listing-filterscol-full-masonry.html">Best Rated</a></li>
                            <li><a href="grid-listing-filterscol-full-width.html">Best Price</a></li>
                            <li><a href="grid-listing-filterscol-full-masonry.html">Latest Submissions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="icon_mobile"></i>+94 423-23-221</li>
                            <li><i class="icon_mail_alt"></i><a href="#0">info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_4">Keep in touch</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
                                <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© FooYes</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> --}}
    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->
    
<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="register.html">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('fe4/js/common_scripts.min.js')}}"></script>
<script src="{{ asset('fe4/js/slider.js')}}"></script>
<script src="{{ asset('fe4/js/common_func.js')}}"></script>
<script src="{{ asset('fe4/assets/validate.js')}}"></script>

<!-- Autocomplete -->
<script>
function initMap() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script>

</body>
</html>