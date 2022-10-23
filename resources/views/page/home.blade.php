@extends('backend_web.master')

@section('content')
<div class="page-content">
    <!--section slider-->
    <div class="section mt-0">
        <div id="mainSliderWrapper">
            <div class="loading-content">
                <div class="inner-circles-loader"></div>
            </div>
            <div class="main-slider mb-0 arrows-white" id="mainSlider" data-slick='{"arrows": true, "responsive":[{"breakpoint": 768,"settings":{"arrows": false, "dots": true }}]}'>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="{{ asset('foto_example/HURUP_TIMBUL_SIANG.jpg') }}"></div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="{{ asset('foto_example/x.jpg') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!--//section slider-->

    <!--section special offers-->
    <div class="section mt-5" id="specialOffer">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1">Informasi <span class="theme-color">Menarik</span></h2>
                <div class="h-decor"></div>
            </div>
            <div class="special-carousel js-special-carousel row">
                <div class="col-6">
                    <div class="special-card">
                        <div class="special-card-photo">
                            <img src="images/content/special-photo-03.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="special-card">
                        <div class="special-card-photo">
                            <img src="images/content/special-photo-04.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--section welcome-->
    <div class="section mt-10">
        <div class="container">
            <div class="blog-grid-full  mt-3 mb-0 row">
                <div class="col-md-6 col-lg-4">
                    <div class="title-wrap">
                        <h2 class="h1">Informasi <span class="theme-color">Terkini</span></h2>
                        <div class="h-decor"></div>
                    </div>
                    <div class="blog-post">
                        <div class="post-image">
                            <a href="blog-post-page.html"><img src="{{ asset('foto_example/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-info" style="margin-top: 10px;">
                            <div class="post-date" style="font-size: 18px; max-width: 50px !important;">17<span>JAN</span></div>
                            <div >
                                <h2 class="post-title"><a href="blog-post-page.html">Layanan Home Care RS. Permata Bunda</a></h2>
                            </div>
                        </div>
                        <div class="post-teaser" style="margin-top: 15px; line-height: 18px">Solusi layanan kesehatan anda & keluarga, kami siap untuk datang melayani ke kantor atau kediaman anda ...</div>
                        <div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="title-wrap">
                        <h2 class="h1">Informasi <span class="theme-color">Terkait</span></h2>
                        <div class="h-decor"></div>
                    </div>
                    <div class="blog-post" style="padding: 7px;">
                        <div class="row">
                            <div class="col-5" style="margin-right: 0;">
                                <a href="#"><img style="max-width: 100%" src="{{ asset('foto_example/2.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-7" style="margin-left: 0;">
                                <div class="tanggal-berita-head" style="margin-bottom: 0; padding-bottom: 0;">
                                    <i class="icon-calendar" style="margin-bottom: 0; padding-bottom: 0;"></i><span style="margin-bottom: 0; padding-bottom: 0;"> 16 jan 2022</span>
                                </div>
                                <div class="blog-post-info">
                                    <h2 style="font-size: 18px" class="post-title"><a href="#">PCR SWAB TEST HOME VISIT</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="blog-post" style="padding: 7px;">
                        <div class="row">
                            <div class="col-5 col-sm-5" style="margin-right: 0;">
                                <a href="#"><img style="max-width: 100%" src="{{ asset('foto_example/3.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-7 col-sm-7" style="margin-left: 0;">
                                <div class="tanggal-berita-head" style="margin-bottom: 0; padding-bottom: 0;">
                                    <i class="icon-calendar" style="margin-bottom: 0; padding-bottom: 0;"></i><span style="margin-bottom: 0; padding-bottom: 0;"> 15 jan 2022</span>
                                </div>
                                <div class="blog-post-info">
                                    <h2 style="font-size: 18px" class="post-title"><a href="#">LAYANAN TEST COVID 19</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="blog-post" style="padding: 7px;">
                        <div class="row">
                            <div class="col-5" style="margin-right: 0;">
                                <a href="#"><img style="max-width: 100%" src="{{ asset('foto_example/4.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-7" style="margin-left: 0;">
                                <div class="tanggal-berita-head" style="margin-bottom: 0; padding-bottom: 0;">
                                    <i class="icon-calendar" style="margin-bottom: 0; padding-bottom: 0;"></i><span style="margin-bottom: 0; padding-bottom: 0;"> 14 jan 2022</span>
                                </div>
                                <div class="blog-post-info">
                                    <h2 style="font-size: 18px" class="post-title"><a href="#">SUNAT MODERN TANPA SUNTIK</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-2" style="margin-bottom: 20px"><a href="#" style="width: 100%; color: rgb(48, 187, 187)"><span>Lihat daftar berita... </span> <i class="icon-right-arrow" style="float: right"></i></a></div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="title-wrap">
                        <h2 class="h1">Jadwal <span class="theme-color">Layanan</span></h2>
                        <div class="h-decor"></div>
                    </div>
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6 col-sm-12">
                                        <a href="#"><img style="max-width: 100%" src="{{ asset('foto_example/5.jpg') }}" alt=""></a>
                                    </div>
                                    <hr>
                                    <div class="col-xl-12 col-md-6 col-sm-12">
                                        <div class="h-decor" style="float: right;margin-top: 32px"></div>
                                        <div class="card" style="margin-top: 32px">
                                            <div class="card-body">
                                                <h5 style="line-height: 22px">Anda butuh layanan kesehatan dari rumah ? atau ingin membuat janji temu dan konsultasi dengan dokter kepercayaan anda ?</h5>
                                            </div>
                                            <div class="h-decor" style="margin-bottom: 42px"></div>
                                            <div class="" style="text-align: center; max-width: 100%"><a style="line-height: 5px; width: 100%" href="/appointment/choose-specialist-&-hospital" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Make Appointment</span><i class="icon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section-->
    <div class="section bg-grey py-0 mt-5">
        <div class="container-fluid px-0">
            <div class="row no-gutters flex-wrap flex-md-nowrap">
                <div class="col-md-7 col-lg-6">
                    <div class="services-wrap1 float-right">
                        <div class="service-tab-banner d-md-none">
                            <img src="{{ asset('foto_example/8.JPG') }}" alt="">
                        </div>
                        <div class="title-wrap text-center text-sm-left mt-2 mt-md-0">
                            <h2 class="h1">Daftar <span class="theme-color">Layanan</span></h2>
                        </div>
                        <p class="text-center text-sm-left">Berikut adalah daftar layanan yang tersedia pada RS. Permata Bunda</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="circle-list">
                                    <li>Instalasi Rawat INAP</li>
                                    <li>Instalasi Rawat Jalan</li>
                                    <li>Farmasi 24 Jam</li>
                                    <li>Gizi Klinik</li>
                                    <li>IGD 24 Jam</li>
                                    <li>Kedokteran Fisik</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 mt-1 mt-md-0">
                                <ul class="circle-list">
                                    <li>Rehabilitasi</li>
                                    <li>Laboratorium</li>
                                    <li>Medical Check Up</li>
                                    <li>Radiologi</li>
                                    <li>Rekam Medis</li>
                                    <li>Informasi Kesehatan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 service-tab-banner-alt d-none d-md-block align-items-center bg-cover bg-left" data-bg="{{ asset('foto_example/8.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section achieved-->
    <div class="section mt-5">
        <div class="container">
            <div class="row d-block js-counter-carousel">
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-hand" style="color:#38B6FF ;"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="15" data-speed="1500">0</span>+</div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Daftar Layanan</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><img src="images/news.png" alt="" style="max-width:50px;"></div>
                        <div class="counter-box-number"><span class="count" data-to="40" data-speed="1500">0</span></div>
                        <div class="decor"></div>
                        <div class="counter-box-text">News & Media</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-team" style="color: #38B6FF;"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="50" data-speed="1500">0</span></div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Dokter & Spesialis</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-placeholder3" style="color:#38B6FF ;"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="4" data-speed="1500">0</span></div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Klinik Cabang</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section achieved-->
    <!--section faq-->
    <div class="section bg-grey mt-5 py-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url({{ asset('foto_example/9.jpg') }})"></div>
                <div class="col-xl-6">
                    <div class="faq-wrap">
                        <div class="text-center text-md-left">
                            <div class="title-wrap">
                                <h2 class="h1">Informasi <span class="theme-color">Pasien</span></h2>
                            </div>
                        </div>
                        <div id="faqAccordion1" class="faq-accordion mt-2 mt-lg-3" data-children=".faq-item">
                            <div class="faq-item">
                                <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>Bisakah saya mendaftar secara online untuk periksa maupun kontrol ?</span></a>
                                <div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
                                    <div>
                                        <p>Kami menyediakan layanan buat janji pada website. caranya cek menu buat janji, kemudian pilih jadwal kontrol dan poli layanan. setelah itu pilih dokter dan isi data diri.</p>
                                        <p>Setelah anda mendaftar secara online. anda tinggal datang ke rumah sakit dengan menunjukan bukti janji temu dari pendaftaran online sebelumnya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>Apakah bisa kontrol dan berobat menggunakan BPJS ?</span></a>
                                <div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
                                    <div>
                                        <p>Rumah sakit kami menyediakan penanganan dengan BPJS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>Apakah bisa dokter datang kerumah / kantor disaat kondisi pasien tidak memungkinkan untuk dibawa ke RS ?</span></a>
                                <div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
                                    <div>
                                        <p>Bisa, kami melayani penanganan di luar rumah sakit, kami siap untuk hadir di kantor atau kediaman anda dan dimana saja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ajukan Pertanyaan ?</span><i class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section faq-->
    
    
    <!--section blog posts -->
    <div class="section mt-5">
        <div class="container">
            <div class="title-wrap text-center">
                <h1 class="h1">Daftar <span class="theme-color">Artikel</span></h1>
                <div class="h-decor"></div>
            </div>
            <div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="post-image">
                            <a href="#0"><img src="{{ asset('foto_example/10.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-info">
                            <div class="post-date">17<span>JAN</span></div>
                            <div>
                                <h2 class="post-title"><a href="#0">Pentingnya Imunisasi Pada Anak</a></h2>
                            </div>
                        </div>
                        <div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
                        <div class="mt-2"><a href="#0" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post bg-grey">
                        <div class="post-image">
                            <a href="#0"><img src="{{ asset('foto_example/11.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-info">
                            <div class="post-date">16<span>JAN</span></div>
                            <div>
                                <h2 class="post-title"><a href="#0">Kehamilan adalah sebuah Penantian..</a></h2>
                            </div>
                        </div>
                        <div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
                        <div class="mt-2"><a href="#0" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="post-image">
                            <a href="#0"><img src="{{ asset('foto_example/13.jpeg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-info">
                            <div class="post-date">06<span>JAN</span></div>
                            <div>
                                <h2 class="post-title"><a href="#0">Bagaimana tanda usus kotor ?</a></h2>
                            </div>
                        </div>
                        <div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
                        <div class="mt-2"><a href="#0" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post bg-grey">
                        <div class="post-image">
                            <a href="#0"><img src="{{ asset('foto_example/14.jpg') }}" alt=""></a>
                        </div>
                        <div class="blog-post-info">
                            <div class="post-date">05<span>JAN</span></div>
                            <div>
                                <h2 class="post-title"><a href="#0">Hari Kanker Sedunia</a></h2>
                            </div>
                        </div>
                        <div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
                        <div class="mt-2"><a href="#0" class="btn btn-sm btn-hover-fill">Read more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section blog posts -->

    <!--section testimonials-->
    <div class="section mt-5 py-0">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-7 col-lg-6 mt-2 mt-lg-0">
                    <div class="reviews-wrap-alt ml-auto d-flex flex-column justify-content-center">
                        <div class="title-wrap text-center text-md-right">
                            <div class="h-sub">Pendapat Pasien</div>
                            <h2 class="h1">Pasien <span class="theme-color">Testimonial</span></h2>
                        </div>
                        <div class="js-reviews-carousel reviews-carousel text-center text-md-right">
                            <div class="review">
                                <div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                <p class="review-text">You guys are all amazing! Everyone I have met at your office is kind, thoughtful, and listens to me. Everyone is so friendly from the time you walk in the door to the time you leave the office. </p>
                                <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
                            </div>
                            <div class="review">
                                <div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                <p class="review-text">I Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
                                <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
                            </div>
                            <div class="review">
                                <div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                <p class="review-text">You guys are all amazing! Everyone I have met at your office is kind, thoughtful, and listens to me. Everyone is so friendly from the time you walk in the door to the time you leave the office. </p>
                                <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="reviews-author-carousel">
                        <div>
                            {{-- <div class="img-before"><img src="{{ asset('foto_example/kotak2.png') }}" alt=""><span>BEFORE</span></div> --}}
                            <div class=""><img src="{{ asset('foto_example/test.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section testimonials-->
    
    
    
</div>
@endsection