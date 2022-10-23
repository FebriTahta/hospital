@extends('backend_web.master')

@section('content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a>
                    <span>Our Specialists</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first" style="margin-bottom: 50px">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Meet the Team</div>
                <h1>Our Specialists</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="text-center mb-2 mb-md-3">
                <p>At Medin Dental Clinic we strive to give you the best possible treatment and experience to help<br>you achieve your dental goals</p>
            </div>
            <div class="filters-by-category mb-2">
                <ul class="option-set justify-content-center" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                    @foreach ($spesialis as $item)
                    <li><a href="#filter" data-option-value=".category{{ $item->id }}">{{ $item->nama_spesialis }}</a></li>    
                    @endforeach
                </ul>
            </div>
            <div class="gallery-specialist gallery-isotope" id="gallery-specialist">
                @foreach ($dokter as $item)
                <div class="gallery-item category{{ $item->spesialis_id }}">
                    <div class="doctor-box text-center" style="text-transform: capitalize">
                        <div class="doctor-box-photo">
                            <a href="doctor-page.html"><img src="{{ $item->img_dokter }}" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="doctor-page.html">{{ $item->nama_dokter }}</a></h5>
                        <div class="doctor-box-position">{{ $item->spesialis->nama_spesialis }}</div>
                        <div class="doctor-box-text">
                            <p>{!! $item->deskripsi_dokter !!}</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <div class="mt-2"><a href="/appointment/choose-doctor/{{ $item->id }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Buat Janji Temu</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--//section-->
   
</div>
@endsection