@extends('layouts_new.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        UPDATE POLI 
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Today</a>
                    </li>
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <hr>

    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-note-list text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Total Seluruh Poli </div>
                                <h5 class="sc-counter mt-3" id="total_kategori">{{ $poli }}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
               
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('danger'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div id="errList"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  white">
                                <strong class="text-capitalize"> Poli : {{$data->nama_poli}} </strong>
                            </div>
                            <div class="card-body p-0">
                                <!-- Big Heading -->
                                <form id="formadd" method="POST" enctype="multipart/form-data"
                                    action="{{ route('be.poli.store') }}">@csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label form="nama_poli">Nama Poli</label>
                                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}" required>
                                            <input type="text" class="form-control" id="nama_poli" value="{{ $data->nama_poli }}" name="nama_poli" onkeyup="createTextSlug()" required>
                                        </div>
                                        <div class="form-group">
                                            <label form="slug_poli">Slug Poli</label><span class="text-danger"> (url / link bersifat unique)</span>
                                            <input type="text" class="form-control" id="slug_poli" value="{{ $data->slug_poli }}" name="slug_poli" required>
                                        </div>
                                        <div class="form-group">
                                            <label form="thumbnail">Thumbnail ?</label>
                                            <select name="thumbnail" class="form-control" id="thumbnail">
                                                <option value="small" @if ($data->thumbnail == 'small') selected @endif >small</option>
                                                <option value="medium" @if ($data->thumbnail == 'medium') selected @endif>medium</option>
                                                <option value="large" @if ($data->thumbnail == 'large') selected @endif>large</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label form="online_registrasi">Registrasi Online ?</label>
                                            <select name="online_registrasi" class="form-control" id="online_registrasi">
                                                <option value="ya">Ya</option>
                                                <option value="tidak">Tidak</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label form="hari">Jadwal Layanan Poli</label>
                                            <select name="hari[]" class="form-control select2"  multiple="multiple" id="hari" required>
                                                @foreach ($hari as $item)
                                                    <option value="{{ $item->id }}" 
                                                        @foreach ($data->hari as $item2)
                                                            {{ $item2->id == $item->id ? 'selected' : ''}}
                                                        @endforeach
                                                    >{{ $item->nama_hari_id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{ $data->img_poli }}
                                        <div class="form-group">
                                            <code form="img_poli">Image Poli </code><br>
                                            <input type="file" class="" id="img_poli" name="img_poli">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{asset('storage/img_poli/'.$data->img_poli)}}" style="max-width: 400px" id="preview2" class="img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary l-s-1 s-12 text-uppercase" value="TAMBAH DATA BARU"
                                            id="btnadd" required>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer white">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Today Tab End-->
            
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
<!-- Right Sidebar -->


@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
        $('#img_poli').change(function(e) {
            var fileName = e.target.files[0].name;
            // $("#img_thumbnail_jenis").val(fileName);
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview2").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        function generateSlug(text)
        {
            return text.toString().toLowerCase()
                .replace(/^-+/, '')
                .replace(/-+$/, '')
                .replace(/\s+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/[^\w\-]+/g, '');
        }
        function createTextSlug()
        {
            var title = document.getElementById("nama_poli").value;
                        document.getElementById("slug_poli").value = generateSlug(title);
                        console.log(title);
        }

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be.poli.store') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disabled', 'disabled');
                    $('#btnadd').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
                        $('#btnadd').attr('disabled', false);
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: "Poli Berhasil Diperbarui!",
                            type: "success"
                        }).then(okay => {
                            if (okay) {
                                window.location.href = "/admin-poli";
                            }
                        });
                    } else {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
                        $('#btnadd').attr('disabled', false);
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
    </script>
@endsection