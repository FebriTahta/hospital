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
        @media screen and (min-width: 601px) {
            #detailweb {
                display: none;
            }
        }
        .alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
        }
        
        .alertok {
          padding: 20px;
          background-color: #8CC0DE;
          color: white;
        }
        
        .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
        }
        
        .closebtn:hover {
          color: black;
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
                <li><a href="#">Buat Janji</a></li>
                <li><a href="#">Pilih Spesialis / Rumah Sakit / Dokter</a></li>
                <li> Daftar Dokter </li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_60" id="payment">
        <div class="row">
            <div class="col-lg-8" style="margin-bottom: 20px">
                @if($dokter->count() > 0)
                <div class="alertok" style="margin-bottom:20px">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  Menampilkan <strong>{{$dokter->count()}} Jadwal dokter spesialis yang sesuai dengan pencarian anda</strong> 
                </div>
                @else
                <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <strong>Maff!</strong> Jadwal Dokter Spesialis Pada Rumah Sakit Tersebut Kosong. Silahkan Pilih Jadwal Lain
                </div>
                @endif

                @foreach ($dokter as $key => $item)
                <div class="strip_list wow fadeIn animated" style="margin-bottom:0; ;visibility: visible; animation-name: fadeIn; border-bottom-left-radius: 0; border-bottom-right-radius: 0">
                    <figure>
                        <a href="#"><img src="{{ $item->img_dokter }}" alt=""></a>
                    </figure>
                    <small>{{ $item->spesialis->nama_spesialis }}</small>
                    <h3>{{ $item->nama_dokter }}</h3>
                    <p>{{ $item->deskripsi_dokter }}</p>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="badge_list_1" data-bs-original-title="Badge Level" aria-label="Badge Level"></a>
                    <ul>
                        <li></li>
                        <li><a id="detailmobile" href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">Detail Dokter</a></li>
                        {{-- <li><a href="/appointment/choose-doctor/{{ Crypt::encrypt($item->id) }}">Buat Janji</a></li> --}}
                        <li><a href="/appointment/choose-doctor/{{ $item->id }}">Buat Janji</a></li>
                    </ul>
                </div>
                <div class="card" style="margin-bottom:50px;;display: flex; border-top-left-radius: 0; border-top-right-radius: 0">
                    <div class="jadwal" style="margin-left: 15px; margin-right: 15px">
                        <table class="table table-stripless table-hover">
                            <thead style="background-color: rgb(103, 199, 162);">
                                <tr style="color: white">
                                    <th>Hari yang tersedia</th>
                                    <th>Jadwal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item->jadwal as $sc)
                                    <tr>
                                        <td>{{ $sc->hari_id }}</td>
                                        <td>{{ $sc->hari_jam_start }} - {{ $sc->hari_jam_end }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
            <aside class="col-xl-4 col-lg-4" id="sidebar">
                <div class="box_general_3 booking">
                    <form>
                        <div class="title">
                            <h3>Lokasi Rumah Sakit</h3>
                        </div>
                        <div class="summary">
                            {{-- <div id="map"></div> --}}
                            {{-- <div id="map" style="width: 600px; height: 400px; position: relative; outline: none;" class="leaflet-container "></div> --}}
                        </div>
                        <hr>
                        {{-- <a href="#payment" class="btn_1 full-width">Confirm and pay</a> --}}
                    </form>
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
@endsection

@section('script')
<script>
    // var map = L.map('map').setView([-6.3005585, 106.913321], 11);
    // var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	// 	maxZoom: 19,
	// 	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	// }).addTo(map);
    // // GET DATA CABANG
    // $.ajax({
    //         type: "GET",
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         url: "/map-cabang",
    //         // data: rage,
    //         dataType: "JSON",
    //         success: function(response) {
    //             $.each( response.maps_cabang, function( key, value ) {
    //                 var marker = L.marker([value.longitude,value.latitude]).addTo(map)
    //                 .bindPopup('<b>'+value.nama_cabang+'</b> <br />Alamat : '+value.alamat_cabang+' <br /> Telp : '+value.telp_cabang+'').openPopup();
    //                 console.log(value);
    //             });
    //         }
    //     });
    </script>
@endsection