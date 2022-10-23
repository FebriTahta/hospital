@extends('backend_web.master')

@section('style')
@section('style')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<link href="{{ asset('fe1/css/date_picker.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    .select2-selection__rendered {
            line-height: 31px !important;
        }
        .select2-container .select2-selection--single {
            height: 35px !important;
        }
        .select2-selection__arrow {
            height: 34px !important;
        }
</style>
@endsection

@section('content')
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/home-page">Home</a>
                    <span>Appointment</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container mt-6">
            <div class="row product-block">
                
                <div class="col-md-5">
                    <div class="product-block-gallery">
                        <div class="product-previews" id="productPreviews">
                            <a href="#" class="product-previews-item active" data-image="{{ asset('foto_example/5808.JPG') }}" data-zoom-image="{{ asset('foto_example/5808.JPG') }}">
                                <img src="{{ asset('foto_example/5808.JPG') }}" />
                            </a>
                            <a href="#" class="product-previews-item" data-image="{{ asset('foto_example/4677.JPG') }}" data-zoom-image="{{ asset('foto_example/4677.JPG') }}">
                                <img src="{{ asset('foto_example/4677.JPG') }}" />
                            </a>
                            <a href="#" class="product-previews-item" data-image="{{ asset('foto_example/4667.JPG') }}" data-zoom-image="{{ asset('foto_example/4667.JPG') }}">
                                <img src="{{ asset('foto_example/4667.JPG') }}" />
                            </a>
                        </div>
                        <div class="product-block-mainimage">
                            <img id="mainImage" src="{{ asset('foto_example/4667.JPG') }}" data-zoom-image="{{ asset('foto_example/4667.JPG') }}" />
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-block-info">
                        <div class="row" style="transform: none;">
                            <div class="col-xl-12 col-lg-12">
                            <div class="box_general_3 cart">
                                <div class="form_title">
                                    <h3><strong> - </strong>Tentukan Klinik / Spesialis</h3>
                                </div>
                                <hr>
                                <div class="step">
                                    <form action="/appointment/choose-specialist-&amp;-hospital/result" method="POST"> <input type="hidden" name="_token" value="sAtfuwBUrl0HNV3AbTb9bqNW0AYi0cT2CN9ezm5x">                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Hari</label>
                                                    <select name="hari" class="form-control" id="hari" required="">
                                                        <option value="">Tentukan hari</option>
                                                        <option value="0">Minggu</option>
                                                        <option value="1">Senin</option>
                                                        <option value="2">Selasa</option>
                                                        <option value="3">Rabu</option>
                                                        <option value="4">Kamis</option>
                                                        <option value="5">Jumat</option>
                                                        <option value="6">Sabtu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Rumah Sakit</label>
                                                    <select name="cabang_id" class="form-control" id="cabang_id" required="">
                                                            <option value="">Tentukan Rumah Sakit</option>
                                                            @foreach ($cabang as $item)
                                                            <option value="{{$item->id }}">{{ $item->nama_cabang }}</option>    
                                                            @endforeach                             
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Spesialis</label>
                                                    <div class="row">
                                                        <div class="col-md-6" style="margin-bottom: 10px">
                                                            <select name="spesialis_id" class="form-control" id="spesialis_id" required="">
                                                                <option value="">Tentukan Spesialis</option>
                                                                @foreach ($spesialis as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nama_spesialis }}</option>    
                                                                @endforeach
                                                                </select>
                                                        </div>
                                                        <div class="col-md-6" style="margin-bottom: 10px">
                                                            <input type="submit" style="width: 100%" id="btncari1" class="btn btn-sm btn-primary" value="Cari Dokter & Periksa Jadwal">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                <hr>

                                <!--End step -->
                
                                {{-- <div class="form_title">
                                    <h3><strong>2. </strong>Cari Dokter</h3>
                                    <p>
                                        Anda dapat mencari dokter tujuan anda / dokter yang anda kenal
                                    </p>
                                </div>
                                <div class="step">
                                    <div class="form-group">
                                        <label>Nama Dokter</label>
                                        <div class="row">
                                            <div class="col-md-10" style="margin-bottom: 10px">
                                                <select name="dokter" data-width="100%" id="dokter" class="select2-choices form-control select2-hidden-accessible" data-select2-id="select2-data-dokter" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="select2-data-2-knyn"></option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-bxhl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dokter-container" aria-controls="select2-dokter-container"><span class="select2-selection__rendered" id="select2-dokter-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <div class="col-md-2" id="btnreset" style="margin-bottom: 10px; display:none">
                                                <input type="submit" style="width: 100%" class="btn btn-warning text-white" value="Reset">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="find_dokter" style="display: none">
                                        <div class="strip_list " style="visibility: visible;">
                                            <figure>
                                                <a href="#"><img id="img_dokter" src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                                            </figure>
                                            <small id="spesialis_dokter">Pediatrician</small>
                                            <h3 id="nama_dokter">Dr. Cornfield</h3>
                                            <p id="deskripsi_dokter">Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                            <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="badge_list_1" data-bs-original-title="Badge Level" aria-label="Badge Level"></a>
                                            <ul>
                                                <li><a id="detailweb" href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
                                                <li><a id="detailmobile" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Detail Profile</a></li>
                                                <li><a id="buatjanji" href="#">Buat Janji</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            </div>
                        </div>
{{--                         
                        <div class="product-block-actions">
                            <div class="qty-count">
                                <span class="count-reduce">–</span>
                                <input type="text" class="count-input" value="1" readonly>
                                <span class="count-add">+</span>
                            </div>
                            <a href="#" class="btn btn-fill btn-noanimate product-block-add-to-cart ">Add To Cart<i class="icon-cart"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    
    <!--//section-->
</div>
@endsection

@section('script_new')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    // var map = L.map('map').setView([-6.3005585, 106.913321], 11);
    // var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	// 	maxZoom: 19,
	// 	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	// }).addTo(map);
    // GET DATA CABANG
        // $.ajax({
        //     type: "GET",
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     url: "/map-cabang",
        //     // data: rage,
        //     dataType: "JSON",
        //     success: function(response) {
        //         $.each( response.maps_cabang, function( key, value ) {
        //             var marker = L.marker([value.longitude,value.latitude]).addTo(map)
        //             .bindPopup('<b>'+value.nama_cabang+'</b> <br />Alamat : '+value.alamat_cabang+' <br /> Telp : '+value.telp_cabang+'').openPopup();
        //             // console.log(value);
        //         });
        //     }
        // });

        $('#dokter').select2({
            width: 'resolve',
            ajax: {
                url: '/appointment/choose-doctor/search/result',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.nama_dokter,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
    </script>
    <script type="text/javascript">
        $('#dokter').on('change', function() {
            var dokter_id = $(this).val();
            document.getElementById('btnreset').style.display = "";
            if (dokter_id !== null || dokter_id !== "" || dokter_id !== " ") {
                document.getElementById('find_dokter').style.display = "";
                $.ajax({
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/appointment/doctor/find-doctor/" + dokter_id,
                    // data: rage,
                    dataType: "JSON",
                    success: function(response) {
                        var img = document.getElementById('img_dokter'); //or grab it by tagname etc
                        img.src = response.img_dokter;
                        
                        var id = '<?php echo Crypt::encrypt('.dokter_id.') ?>';
                        
                        var a = document.getElementById('buatjanji'); //or grab it by tagname etc
                        a.href = '/appointment/choose-doctor/'+dokter_id;
                        $('#spesialis_dokter').html(response.spesialis.nama_spesialis);
                        $('#nama_dokter').html(response.nama_dokter);
                        $('#deskripsi_dokter').html(response.deskripsi_dokter);
                        
                    }
                });
            }else{
                document.getElementById('find_dokter').style.display = "none";
            }
        });

        $('#btnreset').click(function () {
            document.getElementById('find_dokter').style.display = "none";
            document.getElementById('btnreset').style.display = "none";
        })

        // $(document).ready(function () {
        //     swal({
        //         title: "Warning!",
        //         text: "Demo Uji Coba Find Doctor / Buat Janji & registrasi Online",
        //         type: "warning"
        //     });
        // })
    </script>
@endsection