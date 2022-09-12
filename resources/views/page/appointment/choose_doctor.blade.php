@extends('layouts_new.fe1_master')

@section('style')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<style>
    #tanggal .datepicker.datepicker-inline,
    #tanggal .datepicker.datepicker-inline table {
    width: 100%;
    }
</style>
@endsection

@section('content')
<main>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Buat Janji</a></li>
                <li>{{ $dokter->nama_dokter }}</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->
    
    <div class="container margin_60">
        <div class="row">
            <aside class="col-xl-3 col-lg-4" id="sidebar">
                <div class="box_profile">
                    <figure>
                        <img src="{{ $dokter->img_dokter }}" alt="" class="img-fluid">
                    </figure>
                    <small>{{ $dokter->spesialis->nama_spesialis }}</small>
                    <h1>{{ $dokter->nama_dokter }}</h1>
                    <ul class="contacts">
                        <li><h6>Rumah Sakit :</h6>{{ $dokter->cabang->alamat_cabang }}</li>
                        <li><h6>Phone</h6><a style="color: primary" href="tel://{{ $dokter->cabang->telp_cabang }}">{{ $dokter->cabang->telp_cabang }}</a></li>
                    </ul>
                </div>
            </aside>
            <!-- /asdide -->
            
            <div class="col-xl-9 col-lg-8">
                
                <div class="box_general_2 add_bottom_45">
                    <div class="row add_bottom_45">
                        <div class="col-lg-7">
                            <div class="main_title_4 text-white" style="background-color: rgb(27, 154, 177)">Hari & Tanggal</div>
                            <div class="form-group">
                                <div id="tanggal"></div>
                                <input type="hidden" id="my_hidden_input">
                                <input type="hidden" id="jadwal_hari" value="{{ $jadwal_hari }}">
                                <input type="hidden" id="jadwal_hari2" value="{{ $jadwal_hari2 }}">
                                <ul class="legend" style="margin-top: 20px">
                                    <li><strong></strong>Tidak Tersedia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <div class="main_title_4 text-white" style="background-color: rgb(27, 154, 177)">Jam yang tersedia</div>
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
                    <!-- /row -->
                    
                    <div class="main_title_4" style="background-color: rgb(48, 167, 127)">
                        <h3><i class="icon_circle-slelected" ></i>Data Pasien</h3>
                    </div>
                    {{-- <div class="form-group">
                        <label for="pertanyaan">Sudah pernah melakukan janji temu sebelumnya ?</label>
                    </div>
                    <ul class=" clearfix">
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" class="css-checkbox" id="visit8" name="visit8">
                                <label for="visit8" class="css-label">Belum Pernah</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" class="css-checkbox" id="visit9" name="visit8">
                                <label for="visit9" class="css-label">Pernah</label>
                            </div>
                        </li>
                    </ul> --}}
                    
                    <form id="formperiksa">@csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <input type="number" class="form-control" style="margin-bottom: 10px" placeholder="NIK " name="nik" required>
                                </div>
                                <div class="col-md-4 col-12">
                                    <input type="number" class="form-control" style="margin-bottom: 10px" placeholder="Telp yang didaftarkan" name="telp" required>
                                </div>
                                <div class="col-md-4 col-6">
                                    <input type="submit" class="btn text-white" id="btnperiksa" style="margin-bottom: 10px;width:100%;background-color:rgb(48, 167, 127) " value="Periksa Data">
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <hr>
                    <form id="formdaftar"> @csrf
                        <div class="form-group">
                            <h4>Lengkapi Data Pasien Berikut Ini</h4>
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
                            <input type="submit" class="btn_1 medium" id="btndaftar" value="Daftar & Buat Janji">
                        </div>
                    </form>
                </div>
                <!-- /box_general -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->
@endsection

@section('script')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script>

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
                        $('#btndaftar').val('SUBMIT!');
                        $('#btndaftar').attr('disabled', false);
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