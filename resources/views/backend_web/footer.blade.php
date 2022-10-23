<!--footer-->
<div class="footer mt-0">
    <div class="container">
        <div class="row py-1 py-md-2 px-lg-0">
            <div class="col-lg-4 footer-col1">
                <div class="row flex-column flex-md-row flex-lg-column">
                    <div class="col-md col-lg-auto">
                        <div class="footer-logo">
                            <img src="{{ asset('foto_example/panjang2.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="mt-2 mt-lg-0"></div>
                        <div class="footer-social d-lg-none">
                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                            <a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                            <a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-text mt-1 mt-lg-2">
                            <p>Untuk mendapatkan informasi up to date
                                <br>Tinggalkan whatsapp anda</p>
                            <form action="#" class="footer-subscribe">
                                <div class="input-group">
                                    <input name="subscribe_mail" type="text" class="form-control" placeholder="whatsapp number" />
                                    <span><i class="icon-telephone"></i></span>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="footer-social d-none d-lg-block">
                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                            <a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                            <a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <h3>Informasi Terkait</h3>
                <div class="h-decor"></div>
                <div class="footer-post d-flex">
                    <div class="footer-post-photo"><img src="{{ asset('foto_example/1.jpg') }}" alt="" class="img-fluid"></div>
                    <div class="footer-post-text">
                        <div class="footer-post-title"><a href="#0">Layanan Home Care Permata Bunda</a></div>
                        <p>Januari 17, 2022</p>
                    </div>
                </div>
                <div class="footer-post d-flex">
                    <div class="footer-post-photo"><img src="{{ asset('foto_example/2.jpg') }}" alt="" class="img-fluid"></div>
                    <div class="footer-post-text">
                        <div class="footer-post-title"><a href="#0">PCR Swab Test Home Visit</a></div>
                        <p>Januari 18, 2022</p>
                    </div>
                </div>
                <div class="footer-post d-flex">
                    <div class="footer-post-photo"><img src="{{ asset('foto_example/3.jpg') }}" alt="" class="img-fluid"></div>
                    <div class="footer-post-text">
                        <div class="footer-post-title"><a href="#0">Layanan Test Covid 19</a></div>
                        <p>Janiari 15, 2022</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <h3>Kontak Kami</h3>
                <div class="h-decor"></div>
                <ul class="icn-list">
                    <li><i class="icon-placeholder2"></i>Jl Berlian Raya, Wanajaya Bekasi. 17520
                        <br>
                        <a href="#" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get directions on the map</span><i class="icon-right-arrow"></i></a>
                    </li>
                    <li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">02188322064</span></span></b>
                        <br>(CS Permata Bunda)</li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-sm">Copyright © {{ date(('Y')) }} <a href="#">Permata Bunda</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                    </div>
                <div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b>02188322064</b></div>
            </div>
        </div>
    </div>
</div>
<!--//footer-->
<div class="backToTop js-backToTop">
    <i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label='Close' class='close' data-dismiss='modal'>
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <h3>Ask a Question</h3>
                    <form class="mt-15" id="questionForm" method="post" novalidate>
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="input-group">
                            <span>
                            <i class="icon-user"></i>
                        </span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <!-- <div class="input-group">
                            <span>
                                <i class="icon-email2"></i>
                            </span>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
                        </div> -->
                        <div class="input-group">
                            <span>
                                <i class="icon-smartphone"></i>
                            </span>
                            <input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                        </div>
                        <textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
                        <div class="text-right mt-2">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Submit Pertanyaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label='Close' class='close' data-dismiss='modal'>
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <h3>Book an Appointment</h3>
                    <form class="mt-15" id="bookingForm" method="post" novalidate>
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="input-group">
                            <span>
                            <i class="icon-user"></i>
                        </span>
                            <input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-email2"></i>
                                    </span>
                                    <input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*" />
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1 mt-sm-0">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-smartphone"></i>
                                    </span>
                                    <input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-birthday"></i>
                                    </span>
                                    <input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age" />
                                </div>
                            </div>
                        </div>
                        <div class="selectWrapper input-group mt-1">
                            <span>
                                <i class="icon-tooth"></i>
                            </span>
                            <select name="bookingservice" class="form-control">
                                <option selected="selected" disabled="disabled">Select Service</option>
                                <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                <option value="General Dentistry">General Dentistry</option>
                                <option value="Orthodontics">Orthodontics</option>
                                <option value="Children`s Dentistry">Children`s Dentistry</option>
                                <option value="Dental Implants">Dental Implants</option>
                                <option value="Dental Emergency">Dental Emergency</option>
                            </select>
                        </div>
                        <div class="input-group flex-nowrap mt-1">
                            <span>
                                <i class="icon-calendar2"></i>
                            </span>
                            <div class="datepicker-wrap">
                                <input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
                            </div>
                        </div>
                        <div class="input-group flex-nowrap mt-1">
                            <span>
                                <i class="icon-clock"></i>
                            </span>
                            <div class="datepicker-wrap">
                                <input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
                            </div>
                        </div>
                        <textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
                        <div class="text-right mt-2">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendors -->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/jquery-migrate/jquery-migrate-3.0.1.min.js') }}"></script> --}}
<script src="{{ asset('vendor/cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datetimepicker/moment.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/sticky.min.js') }}"></script>
<script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('vendor/scroll-with-ease/jquery.scroll-with-ease.min.js') }}"></script>
<script src="{{ asset('vendor/countTo/jquery.countTo.js') }}"></script>
<script src="{{ asset('vendor/form-validation/jquery.form.js') }}"></script>
<script src="{{ asset('vendor/jquery.elevateZoom/jquery.elevateZoom-3.0.8.min.js') }}"></script>
<script src="{{ asset('vendor/form-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!-- Custom Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app-shop.js') }}"></script>
<script src="{{ asset('form/forms.js') }}"></script>

@yield('script_new')
</body>

</html>