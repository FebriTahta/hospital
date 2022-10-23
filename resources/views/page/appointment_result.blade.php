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
                    <span>Appointment Result</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container">
            <div class="row" style="transform: none;">
                <div class="col-xl-12 col-lg-12">
                    @if($dokter->count() > 0)
                    <div class="alertok" style="border-radius:10px;padding: 2%;margin-bottom:20px;color:white ;background-color: rgb(103, 207, 207)">
                    Menampilkan <strong>{{$dokter->count()}} Jadwal dokter spesialis yang sesuai dengan pencarian anda</strong> 
                    </div>
                    @else
                    <div class="alert" style="border-radius:10px;padding: 2%;margin-bottom:20px;color:white ;background-color: rgb(218, 101, 173)">
                    <strong>Maaf!</strong> Jadwal Dokter Spesialis Pada Rumah Sakit Tersebut Kosong.
                    </div>
                    @endif
                </div>
            </div>
            <div class="prd-grid prd-carousel">
                @foreach ($dokter as $item)
                <div class="prd">
                    <div class="prd-img">
                        <a href="#0"><img src="{{ $item->img_dokter }}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="prd-info">
                        <h3><a href="#0">{{ $item->nama_dokter }}</a></h3>
                        <div style="font-size: 14px">{{ $item->spesialis->nama_spesialis }}</div>

                        <a href="/appointment/choose-doctor/{{ $item->id }}" class="btn"><i class="icon-right-arrow"></i>Buat Janji Temu<i class="icon-right-arrow"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

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

                    
                    {{-- <div class="product-block-info">
                        <div class="row" style="transform: none;">
                            <div class="col-xl-12 col-lg-12">
                                @if($dokter->count() > 0)
                                <div class="alertok" style="border-radius:10px;padding: 2%;margin-bottom:20px;color:white ;background-color: rgb(103, 207, 207)">
                                Menampilkan <strong>{{$dokter->count()}} Jadwal dokter spesialis yang sesuai dengan pencarian anda</strong> 
                                </div>
                                @else
                                <div class="alert" style="border-radius:10px;padding: 2%;margin-bottom:20px;color:white ;background-color: rgb(218, 101, 173)">
                                <strong>Maaf!</strong> Jadwal Dokter Spesialis Pada Rumah Sakit Tersebut Kosong.
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($dokter as $item)
                                <div class="col-xl-4 col-lg-4"  style="margin-bottom: 20px">
                                    <div class="form-group">
                                        <img src="{{ $item->img_dokter }}" style="width: 100%; height: 200px; border-radius: 50%" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8" style="margin-bottom: 20px">
                                    <div class="form-group">
                                        <h6 style="margin: 0; padding: 0">{{ $item->nama_dokter }}</h6>
                                        <h6 style="font-size: 14px;margin: 0; padding: 0">{{ $item->spesialis->nama_spesialis }}</h6>
                                    </div>
                                    <div class="form-group">
                                        <p>{{ $item->deskripsi_dokter }}</p>
                                    </div>
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
                    <hr> --}}

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
                
                            </div>
                            </div>
                        </div>
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
</script>
    
@endsection