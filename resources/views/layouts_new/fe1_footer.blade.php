<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <p>
                    <a href="index.html" title="Findoctor">
                        <img src="{{ asset('fe1/img/logo.png') }}" alt="" width="163" height="36" class="img-fluid">
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>About</h5>
                <ul class="links">
                    <li><a href="">About This Demo</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="/appointment/choose-specialist-&-hospital">Make Appointment</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://+6281329146514"><i class="icon_mobile"></i> + 62 81 329 146 514</a></li>
                    <li><a href="mailto:demos@findoctor.com"><i class="icon_mail_alt"></i> demos@findoctor.com</a></li>
                </ul>
                <div class="follow_us">
                    <h5>Follow us</h5>
                    <ul>
                        <li><a href="#0"><i class="social_facebook"></i></a></li>
                        <li><a href="#0"><i class="social_twitter"></i></a></li>
                        <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        <li><a href="#0"><i class="social_instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2021 Findoctor</div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('fe1/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('fe1/js/common_scripts.min.js')}}"></script>
<script src="{{ asset('fe1/js/functions.js')}}"></script>
   
<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('fe1/js/bootstrap-datepicker.js')}}"></script>

@yield('script')

 
</body>
</html>