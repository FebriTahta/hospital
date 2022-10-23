@extends('backend_web.master')

@section('content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/home-page">Home</a>
                    <span>Profile</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Our dentists working to your smile</div>
                <h1>About Our Clinic</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left pr-md-4">
                    <img src="{{ asset('foto_example/x.jpg') }}" class="w-100" alt="">
                    <div class="row mt-3">
                        <div class="col-6">
                            <img src="{{ asset('foto_example/IMG_4658.jpg') }}" class="w-100" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('foto_example/IMG_4649.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <p>For nearly 16 years, our financial district dentist, Adam Smith, DDS and the dental team at DentCo Dental Clinic have provided cosmetic dentistry as well as family dentistry services. Dr. Adam understands that patients have a variety of practices in the area to choose from.</p>
                    <p>Come and experience dentistry carried out a little differently in our Private Practice. A practice where you will:</p>
                    <ul class="marker-list-md">
                        <li>Be involved in your care and treatment choices</li>
                        <li>Be welcomed and feel relaxed and cared for</li>
                        <li>Appreciate the well qualified, experienced team</li>
                        <li>Want the best dentistry available</li>
                    </ul>
                    <div class="mt-3 mt-md-7"></div>
                    <h3>Mission / Vision <span class="theme-color">Statement</span></h3>
                    <div class="mt-0 mt-md-4"></div>
                    <p>It is our mission to exceed expectations by providing exceptional dental care to our patients and at the same time, building relationships of trust with them.</p>
                    <p>Our vision is to be one of the leading dental clinic in the area, expanding our services to reach additional community members. We work to be trusted by patients, a valued partner in the community.</p>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section bg-grey py-0 mt-5">
        <div class="container-fluid px-0">
            <div class="row no-gutters flex-wrap flex-md-nowrap">
                <div class="col-md-7 col-lg-6">
                    <div class="services-wrap1 float-right">
                        <div class="service-tab-banner d-md-none">
                            <img src="{{ asset('foto_example/8.jpg') }}" alt="">
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
    
    <!--section-->
    <div class="section" style="margin-bottom: 20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="title-wrap">
                        <h2 class="h1">Ruang & Peralatan</h2>
                        <div class="h-decor"></div>
                    </div>
                    <p>Rumah Sakit Permata Bunda dilengkapi dengan berbagai peralatan dan ruangan guna mendukung keperluan pasien. <br><br> Tidak hanya peralatan yang canggih dan mumpuni namun juga dengan ruangan yang nyaman</p>
                    <div class="mt-4"></div>
                    <h3>Fasilitas</h3>
                    <div class="mt-lg-4"></div>
                    <ul class="marker-list-md">
                        <li>TV’s in each treatment room</li>
                        <li>Complimentary coffee, Juice</li>
                        <li>Wireless Internet</li>
                        <li>Warm lavender towels</li>
                        <li>Sova & Table</li>
                    </ul>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="slider-gallery">
                        <ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
                            <li><img src="{{ asset('foto_example/IMG_5808.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4692.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4684.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4681.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4677.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4667.jpg') }}" alt=""></li>
                        </ul>
                        <ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
                            <li><img src="{{ asset('foto_example/IMG_5808.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4692.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4684.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4681.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4677.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('foto_example/IMG_4667.jpg') }}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
<!--footer-->

@endsection