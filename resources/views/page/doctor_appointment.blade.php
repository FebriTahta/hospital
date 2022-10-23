@extends('backend_web.master')

@section('style')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<link href="{{ asset('fe1/css/date_picker.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="{{ asset('fe1/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">
<style>

    .datepicker .disabled.disabled-date.day, .datepicker .disabled.disabled-date.day:hover {
        background-color: #eb525b !important;
        /* color: rgb(177, 177, 177) !important; */
        color: white;

        border-radius: 10px !important;
    }


    .datepicker table tr td.today, .datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled:hover, .datepicker table tr td.today:hover {
        background-color: #9eeb97;
        background-image: -moz-linear-gradient(to bottom,#9eeb97,#9eeb97);
        background-image: -ms-linear-gradient(to bottom,#9eeb97,#9eeb97);
        background-image: -webkit-gradient(linear,0 0,0 100%,from(#9eeb97),to(#9eeb97));
        background-image: -webkit-linear-gradient(to bottom,#9eeb97,#9eeb97);
        background-image: -o-linear-gradient(to bottom,#9eeb97,#9eeb97);
        background-image: linear-gradient(to bottom,#9eeb97,#9eeb97);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#9eeb97', endColorstr='#9eeb97', GradientType=0);
        border-color: #9eeb97 #9eeb97 #9eeb97;
        border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #000;
        border-radius: 20px;
        width: 20px;
    }

    /* .datepicker table tr td.new, .datepicker table tr td.old {
        color: #999;
        background-color: aliceblue;
    } */

    .datepicker table tr td.active.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover.active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active:active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active:hover:active {
        background-color: cadetblue !important;
    }

    th.next {
        font-size: 0px;
    }

    th.prev {
        font-size: 0px;
    }

    th.datepicker-switch {
        font-size: 20px;
    }

    .datepicker.dropdown-menu th, .datepicker.datepicker-inline th, .datepicker.dropdown-menu td, .datepicker.datepicker-inline td {
        padding: 3px 5px;
    }
    #tanggal .datepicker.datepicker-inline, #tanggal .datepicker.datepicker-inline table {
        width: 100%;
    }

    .datepicker table tr th {
        font-weight: 600 !important;
    }

    .datepicker table tr td th {
        margin-right: 1px;
        margin-left: 1px;
    }

    .datepicker table tr td, .datepicker table tr th {
        text-align: center;
        width: 30px;
        height: 30px;
        border: none;
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
                    <a href="/doctor-page">Our Specialists</a>
                    <a>{{ $dokter->spesialis->nama_spesialis }}</a>
                    <span>{{ $dokter->nama_dokter }}</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->    
    <div class="section page-content-first" style="margin-bottom: 50px">
        <div class="container mt-6">
            <div class="row">
                <div class="col-md">
                    <div class="doctor-page-photo text-center">
                        <img src="{{ $dokter->img_dokter }}" class="img-fluid" alt="">
                    </div>
                    <div class="mt-3 mt-md-5"></div>
                    <table class="table doctor-page-table">
                        <tr>
                            <td>Name</td>
                            <td>{{ $dokter->nama_dokter }}</td>
                        </tr>
                        <tr>
                            <td>Speciality</td>
                            <td>{{ $dokter->spesialis->nama_spesialis }}</td>
                        </tr>
                        <tr>
                            <td>Degrees</td>
                            <td>College of Surgeons</td>
                        </tr>
                        <tr>
                            <td>Areas of Expertise</td>
                            <td>
                                <ul class="marker-list-md">
                                    <li>Gygienology</li>
                                    <li>Immunology</li>
                                    <li>Internal Medicine</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Office</td>
                            <td>12 General Office</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>Male</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="doctor-info mb-3 mb-lg-4">
                        <div class="doctor-info-name">
                            <h4 style="margin-bottom: 0;">Buat Janji Temu</h4>
                            <h6 style="margin-top: 10px">Sesuaikan Jadwal & Isi Form</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="main_title_4 text-white" style="padding:10px;border-radius:5px;background-color: rgb(27, 154, 177)"><i class="icon_circle-slelected"></i> Hari & Tanggal</div>
                            <div class="form-group">
                                <div id="tanggal"></div>
                                <input type="hidden" id="my_hidden_input">
                                <input type="hidden" id="jadwal_hari" value="{{ $jadwal_hari }}">
                                <input type="hidden" id="jadwal_hari2" value="{{ $jadwal_hari2 }}">
                                <ul class="legend" style="margin-top: 20px">
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="main_title_4 text-white" style="margin-bottom:10px;padding:10px;border-radius:5px;background-color: rgb(27, 154, 177)"><i class="icon_circle-slelected"></i>  Waktu yang tersedia</div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-4 col-4" style="text-align: center">
                                        <div class=" text-center " style="background-color: rgb(163, 236, 196); text-align: justify; border-radius: 5px">
                                            <label  id="start" style="text-align: center; margin-top: 10px" disabled>--</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-4">
                                        <div class="text-center ">
                                            <label for="radio1" style="text-align: center; margin-top: 10px" id="" disabled>sampai</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-4">
                                        <div class="text-center " style="background-color: rgb(163, 236, 196); text-align: justify; border-radius: 5px">
                                            <label for="radio1" style="text-align: center; margin-top: 10px" id="end" disabled>--</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="main_title_4 mt-5 mb-5" style="color:white;padding:10px;border-radius:5px;background-color: rgb(27, 154, 177)">
                                <i class="icon_circle-slelected"></i> Data Pasien
                            </div>
                            <div class="form-group">
                                <form id="formdaftar"> @csrf
                                    <div class="form-group">
                                        <div class="row" style="margin-top: 20px">
                                            <div class="col-md-4" style="margin-bottom: 10px">
                                                <input type="hidden" name="doctor_id" id="doctor_id" value="{{ $dokter->id }}" required>
                                                <input type="hidden" name="cabang_id" id="cabang_id" value="{{ $dokter->cabang_id }}" required>
                                                <input type="hidden" name="spesialis_id" id="spesialis_id" value="{{ $dokter->spesialis_id }}" required>
                                                <input type="hidden" id="dokter_id" value="{{ $dokter->id }}">
                                                <input type="hidden" name="tanggals" id="tanggals" required>
                                                <input type="number" class="form-control" required name="nik_pasien"  placeholder="NIK..." required>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom: 10px">
                                                <input type="text" class="form-control" required name="nama_pasien"  placeholder="Nama..." required>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom: 10px">
                                                <input type="number" class="form-control" required name="telp_pasien"  placeholder="Nomor Telepon..." required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="tgl_lahir" style="margin-bottom: 10px">Tanggal Lahir Pasien</label>
                                                <div class="row">
                                                    <div class="col-sm-4 col-4">
                                                        <input type="number" name="tgl" class="form-control" placeholder="Tgl" required>
                                                    </div>
                                                    <div class="col-sm-4 col-4">
                                                        <select name="bln" class="form-control" id="bln">
                                                            <option value="">Bln</option>
                                                            <option value="01">Januari</option>
                                                            <option value="02">Februari</option>
                                                            <option value="03">Maret</option>
                                                            <option value="04">April</option>
                                                            <option value="05">Mei</option>
                                                            <option value="06">Juni</option>
                                                            <option value="07">Juli</option>
                                                            <option value="08">Agustus</option>
                                                            <option value="09">September</option>
                                                            <option value="10">Oktober</option>
                                                            <option value="11">November</option>
                                                            <option value="12">Desember</option>
                                                        </select>
                                                        {{-- <input type="text" class="form-control" placeholder="Bln" required> --}}
                                                    </div>
                                                    <div class="col-sm-4 col-4">
                                                        <input type="number" min="1980" max="{{ date('Y') }}" class="form-control" name="thn" placeholder="Thn" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <input type="submit" class="btn_1 medium btn" id="btndaftar" value="Daftar & Buat Janji">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="d-flex flex-column flex-sm-row mt-lg-2">
                        <a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Book Consultation</span><i class="icon-right-arrow"></i></a>
                        <a href="schedule.html" class="btn "><i class="icon-right-arrow"></i><span>Timetable</span><i class="icon-right-arrow"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script_new')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.nl.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
 
        // Below code sets format to the
        // datetimepicker having id as
        // datetime
        

        $('input[type="checkbox"]').on('change', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });

    $(document).ready(function(){

        var dokter_id = $('#dokter_id').val();
        var hari = $('#jadwal_hari2').val();
        var temp = new Array();
        temp = hari.split(",");


        $('#tanggal').datepicker({
            todayHighlight: true,
            daysOfWeekDisabled: temp,
            weekStart: 1,
            format: "yyyy-mm-dd",
            datesDisabled: ["2017/10/20", "2017/11/21", "2017/12/21", "2018/01/21", "2018/02/21"],
        });
        
        $('#tanggal').datepicker().on('changeDate', function (ev) {
            var dateObject = $(this).datepicker("getDate");
            $('#tanggals').val(ev.format(0,"yyyy/mm/dd"));
            $.ajax({
                type: "GET",
                url: "/appointment/search-schedule/"+dokter_id+"/"+ev.format(0,"yyyy/mm/dd"),
                // data: rage,
                dataType: "JSON",
                success: function(response) {
                    $('#start').html(response.start);
                    $('#end').html(response.end);
                    console.log(response);
                }
            });
        });
        
        $('#formdaftar').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/appointment/booking-jadwal",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btndaftar').attr('disabled', 'disabled');
                    $('#btndaftar').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formdaftar")[0].reset();
                        $('#btndaftar').val('Daftar & Buat Janji!');
                        $('#btndaftar').attr('disabled', false);
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: response.message,
                            type: "success"
                        });
                        // .then(okay => {
                        //     if (okay) {
                        //         window.location.href = "/appointment/status-booking/"+response.id;
                        //     }
                        // });
                    
                    } else {
                        swal({
                            title: "Warning!",
                            text: response.message,
                            type: "warning"
                        });
                        $('#btndaftar').val('Submit!!');
                        $('#btndaftar').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $('#errList').append('<div>' + response.message + '</div>');
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formperiksa').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/appointment/cek-data-pasien",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnperiksa').attr('disabled', 'disabled');
                    $('#btnperiksa').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formperiksa")[0].reset();
                        $('#btnperiksa').val('Periksa Data');
                        $('#btnperiksa').attr('disabled', false);
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: response.message,
                            type: "success"
                        })
                        .then(okay => {
                            if (okay) {
                                window.location.href = "/appointment/status-booking/"+response.id;
                            }
                        });
                    } else {
                        swal({
                            title: "Warning!",
                            text: response.message,
                            type: "warning"
                        });
                        $('#btnperiksa').val('Periksa Data');
                        $('#btnperiksa').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $('#errList').append('<div>' + response.message + '</div>');
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    });
    </script>
@endsection