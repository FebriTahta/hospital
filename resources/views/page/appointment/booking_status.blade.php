@extends('layouts_new.fe1_master')

@section('style')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<style>
    #datetimepicker .datepicker.datepicker-inline,
    #datetimepicker .datepicker.datepicker-inline table {
    width: 100%;
    }

    .leaflet-container {
		height: 200px;
		max-width: 100%;
		max-height: 100%;
	}
      
        .select2-selection__rendered {
            line-height: 31px !important;
        }
        .select2-container .select2-selection--single {
            height: 35px !important;
        }
        .select2-selection__arrow {
            height: 34px !important;
        }
        /* @media screen and (max-width: 600px) {
            
        } */
        @media screen and (min-width: 601px) {
            #detailweb {
                display: none;
            }
        }
        
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="">
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
@endsection

@section('content')
<main>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Booking</a></li>
                <li>Status</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
            <div class="box_general_3 cart">
                <div class="message">
                    <p>Berikut adalah jadwal janji temu dokter anda. Silahkan lakukan konfirmasi ke petugas resepsionis front desk </p>
                </div>
                <div class="form_title">
                    <h3><strong>1</strong>{{ $data_booking_terbaru->doctor->nama_dokter }}</h3>
                    <p>
                        {{ $data_booking_terbaru->spesialis->nama_spesialis }}
                    </p>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>NIK...</label>
                                <input type="text" class="form-control" id="nik_pasien" name="nik_pasien" placeholder="Jhon" value="{{ $data_pasien->nik_pasien }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Jhon" value="{{ $data_pasien->nama_pasien }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telp Pasien</label>
                                <input type="text" class="form-control" id="telp_pasien" name="telp_pasien" placeholder="Doe" value="{{ $data_pasien->telp_pasien }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="email" id="tanggal_lahir_pasien" name="tanggal_lahir_pasien" class="form-control" placeholder="jhon@doe.com" value="{{ \Carbon\Carbon::parse($data_pasien->tanggal_lahir_pasien)->format('d F Y') }}" readonly>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <hr>
                <!--End step -->
            </div>
            </div>
            <!-- /col -->
            <aside class="col-xl-4 col-lg-4" id="sidebar">
                <div class="box_general_3 booking">
                    <form>
                        <div class="title">
                            <h3>Your booking</h3>
                        </div>
                        <div class="summary">
                            <ul>
                                <li>Date: <strong class="float-right">{{ \Carbon\Carbon::parse($data_booking_terbaru->tanggal_booking)->format('d F Y') }}</strong></li>
                                <li>Time: <strong class="float-right">
                                @php
                                    $jadwal = strtolower(\Carbon\Carbon::parse($data_booking_terbaru->tanggal_booking)->format('l'));
                                    $dokter =  App\Models\Doctor::where('id',$data_booking_terbaru->doctor_id)->with('jadwal',function($q) use ($jadwal) {
                                        $q->where('hari_en', $jadwal);
                                    })->first();

                                    $hari_start = [];
                                    $hari_end = [];
                                    foreach ($dokter->jadwal as $key => $value) {
                                        # code...
                                        $hari_start[] = $value->hari_jam_start;
                                        $hari_end[] = $value->hari_jam_end;
                                    }
                                    $start = implode(',',$hari_start);
                                    $end = implode(',',$hari_end);
                                @endphp    
                                {{ $start }} - {{ $end }}
                                </strong></li>
                                <li>Dr. Name: <strong class="float-right">{{ $data_booking_terbaru->doctor->nama_dokter }}</strong></li>
                            </ul>
                        </div>
                        <ul class="treatments checkout clearfix">
                            <li>
                                Rs : <strong class="float-right">{{ $data_booking_terbaru->doctor->cabang->nama_cabang }}</strong>
                            </li>
                            <li>
                                Spesialis <strong class="float-right">{{ $data_booking_terbaru->doctor->spesialis->nama_spesialis }}</strong>
                            </li>
                        </ul>
                        <hr>
                        <a href="#" class="btn_1 full-width" disabled>Hanya Demo</a>
                    </form>
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /asdide -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->s
@endsection

@section('script')

@endsection