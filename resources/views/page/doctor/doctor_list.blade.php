@extends('layouts_new.fe1_master')

@section('style')

@endsection

@section('content')
<main>
    <div id="results">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Showing {{ $data->count() }}</strong> results</h4>
                </div>
                <div class="col-md-6">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
                        <input type="submit" value="Search">
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /results -->

    <div class="filters_listing">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <h6>Type</h6>
                    <div class="switch-field">
                        <input type="radio" id="all" name="type_patient" value="all" checked>
                        <label for="all">All</label>
                        <input type="radio" id="doctors" name="type_patient" value="doctors">
                        <label for="doctors">Doctors</label>
                        <input type="radio" id="clinics" name="type_patient" value="clinics">
                        <label for="clinics">Clinics</label>
                    </div>
                </li>
                
                <li>
                    <h6>Sort by</h6>
                    <select name="orderby" class="selectbox">
                    <option value="">Gender Dokter</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    </select>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /filters -->
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-7">
                @foreach ($data as $item)
                    <div class="strip_list wow fadeIn">
                        <figure>
                            <a href="detail-page.html"><img src="{{ $item->img_dokter }}" alt=""></a>
                        </figure>
                        <small>{{ $item->spesialis->nama_spesialis }}</small>
                        <h3>{{ $item->nama_dokter }}</h3>
                        <p>{{ $item->deskripsi_dokter }}</p>
                        <ul>
                            <li><a id="detailmobile" href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">Detail</a></li>
                            {{-- <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Detail</a></li> --}}
                            <li><a href="appointment/choose-doctor/{{ $item->id }}">Buat Janji</a></li>
                        </ul>
                    </div>
                    <!-- /strip_list -->
                @endforeach
                
                <!-- /strip_list -->
            </div>

            <aside class="col-xl-5 col-lg-5" id="sidebar">
                <div class="box_general_3 booking">
                    <form>
                        <div class="title">
                            <h3>Lokasi Rumah Sakit</h3>
                        </div>
                        <div class="summary">
                            {{-- <div id="map"></div> --}}
                            <div id="map" style="max-width: 600px; height: 400px; position: relative; outline: none;" class="leaflet-container "></div>
                        </div>
                        <hr>
                        {{-- <a href="#payment" class="btn_1 full-width">Confirm and pay</a> --}}
                    </form>
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /col -->
        </div>
    </div>
</main>
@endsection

@section('script')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="">
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script>
    var map = L.map('map').setView([-6.3005585, 106.913321], 11);
    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
    // GET DATA CABANG
    $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/map-cabang",
            // data: rage,
            dataType: "JSON",
            success: function(response) {
                $.each( response.maps_cabang, function( key, value ) {
                    var marker = L.marker([value.longitude,value.latitude]).addTo(map)
                    .bindPopup('<b>'+value.nama_cabang+'</b> <br />Alamat : '+value.alamat_cabang+' <br /> Telp : '+value.telp_cabang+'').openPopup();
                    console.log(value);
                });
            }
        });
    </script>
@endsection