@extends('layouts_new.form_master')

@section('tittle')
<title>{{$poli->nama_poli}}</title>

<!-- Favicons-->
<link rel="shortcut icon" href="{{asset('storage/img_poli/thumbnail/_'.$poli->thumbnail.'_'.$poli->img_poli)}}" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('storage/img_poli/thumbnail/_'.$poli->thumbnail.'_'.$poli->img_poli)}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('storage/img_poli/thumbnail/_'.$poli->thumbnail.'_'.$poli->img_poli)}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('storage/img_poli/thumbnail/_'.$poli->thumbnail.'_'.$poli->img_poli)}}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('storage/img_poli/thumbnail/_'.$poli->thumbnail.'_'.$poli->img_poli)}}">
@endsection

@section('style')
<style>
@media(min-width: 600px) {
    #img_form {
        max-width: 100% !important;
    }
}
@media(max-width: 599px) {
    #img_form {
        width: 300px !important;
    }
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
@endsection

@section('informasi_form')
{{-- <figure style="max-width: 100%"><img id="img_form" src="{{asset('storage/img_poli/thumbnail/_'.$poli->thumbnail.'_'.$poli->img_poli)}}" alt="" class="img-fluid" style="max-width: 100%"></figure> --}}
<h2 class="text-capitalize">Registrasi Online</h2>
<p class="text-capitalize" style="font-size: 18px"> {{$poli->nama_poli}}</p>
@endsection

@section('content')
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <div id="top-wizard">
            <span id="location"></span>
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">

                <div class="submit step" data-state="end">
                    <h2 class="section_title">Data calon pasien</h2>
                    <h3 class="main_question">Pilih salah satu dari opsi berikut</h3>
                    <input type="hidden" id="slug_poli" value="{{ $poli->slug_poli }}">
                    <div class="form-group">
                        <label class="container_radio version_2">Sudah Pernah Mendaftar
                            <input type="radio" name="availability" value="old-registraion" id="sudah"  class="avail required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Belum Pernah Mendaftar
                            <input type="radio" name="availability" value="new-registration" id="belum" class="avail required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <small>* Apakah sebelumnya sudah pernah mendaftar melalui online ? </small>
                </div>

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <a href="" id="btnsubmit" type="submit" class="button btn btn-success">Submit</a>
            </div>
            <!-- /bottom-wizard -->
        
    </div>
    <!-- /Wizard container -->
</div>
<!-- /content-right-->
</div>
<!-- /row-->
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var slug_poli = $('#slug_poli').val();
            $('[name=availability]').change(function() {

                var a = document.getElementById('btnsubmit');
                a.href = '/form-registrasi/'+slug_poli+'/'+this.value;
                console.log(slug_poli+this.value);
            });
        })
    </script>
@endsection