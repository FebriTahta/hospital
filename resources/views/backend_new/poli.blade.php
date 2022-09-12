@extends('layouts_new.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        DAFTAR POLI
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
                                <h5 class="sc-counter mt-3" id="total_kategori">{{ count($poli) }}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <button class="btn btn-primary btn-sm" style="margin-bottom: 20px" data-toggle="modal"
                    data-target="#modaladd">Create New Poli</button>
                
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
                    @foreach ($poli as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header  white">
                                    <strong class="text-capitalize"> Poli : {{$item->nama_poli}} </strong>
                                </div>
                                <div class="card-body p-0">
                                    <!-- Big Heading -->
                                    <div class="text-center bg-light b-b p-3">
                                        <img src="{{asset('storage/img_poli/'.$item->img_poli)}}"
                                            style="max-width: 100%" alt="">
                                    </div>
                                    <ul class="list-group list-group-flush no-b">
                                        <li class="list-group-item">
                                            <i class="icon-settings text-blue"></i>
                                            @if($item->online_registrasi == 'ya')
                                            <span style="color:blue; font-size:12px">- Online Registration</span>
                                            @else
                                            <span style="color:red; font-size:12px"> - Without Online Registration</span>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer white">
                                    <a href="/registrasi/{{ $item->slug_poli }}" target="_blank"
                                        class="btn btn-xs text-white btn-info">Link
                                        Registrasi</a>
                                    <a href="/admin-poli-edit/{{ $item->id }}" class="btn btn-outline-primary btn-xs">Update</a>
                                    <a href="#" class="btn btn-outline-danger btn-xs" data-toggle="modal" data-id="{{$item->id}}" 
                                        data-target="#modaldel">Hapus</a>
                                    <a href="#" class="btn btn-outline-info btn-xs" data-toggle="modal" data-id="{{$item->id}}" 
                                        data-img_form="{{$item->img_poli}}" 
                                        data-target="#modaldel">Data Pasien</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Today Tab End-->
            <div class="tab-pane animated fadeInUpShort" id="v-pills-3">
                <div class="row">
                    <div class="col-md-4 mx-md-auto m-5">
                        <div class="card no-b shadow">
                            <div class="card-body p-4">
                                <div>
                                    <i class="icon-calendar-check-o s-48 text-primary"></i>
                                    <code class="p-t-b-20">Hey Soldier welcome back signin now there is lot
                                        of new stuff
                                        waiting
                                        for you</code>
                                </div>
                                <form action="dashboard2.html">
                                    <div class="form-group has-icon"><i class="icon-calendar"></i>
                                        <input class="form-control form-control-lg datePicker" placeholder="Date From"
                                            type="text">
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-calendar"></i>
                                        <input class="form-control form-control-lg datePicker" placeholder="Date TO"
                                            type="text">
                                    </div>
                                    <input class="btn btn-success btn-lg btn-block" value="Get Data" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Yesterday Tab Start-->
        </div>
    </div>
</div>
<!-- Right Sidebar -->

<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">DATA BARU</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formadd" method="POST" enctype="multipart/form-data"
                action="{{ route('be.poli.store') }}">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label form="nama_poli">Nama Poli</label>
                        <input type="text" class="form-control" id="nama_poli" name="nama_poli" onkeyup="createTextSlug()" required>
                    </div>
                    <div class="form-group">
                        <label form="slug_poli">Slug Poli</label><span class="text-danger"> (url / link bersifat unique)</span>
                        <input type="text" class="form-control" id="slug_poli" name="slug_poli" required>
                    </div>
                    <div class="form-group">
                        <label form="thumbnail">Thumbnail ?</label>
                        <select name="thumbnail" class="form-control" id="thumbnail">
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>
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
                            <option value="{{ $item->id }}">{{ $item->nama_hari_id }}</option>    
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <code form="img_poli">Image Poli </code><br>
                        <input type="file" class="" id="img_poli" name="img_poli" required>
                    </div>
                    <div class="form-group">
                        <img src="" id="preview2" class="img-thumbnail">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary l-s-1 s-12 text-uppercase" value="TAMBAH DATA BARU"
                        id="btnadd" required>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modalCreateMessage">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">UPDATE DATA</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form id="formadd" method="POST" enctype="multipart/form-data"
                action="#">@csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label form="nama_form">Nama Form Baru</label>
                        <input type="text" class="form-control" id="nama_form" onkeyup="createTextSlug2()" name="nama_form" required>
                    </div>
                    <div class="form-group">
                        <label form="slug_form">Slug (url / link bersifat unique)</label>
                        <input type="text" class="form-control" id="slug_form" name="slug_form" required>
                    </div>
                    <div class="form-group">
                        <label form="jenis_form">Jenis Form ?</label>
                        <select name="jenis_form" class="form-control" id="jenis_form">
                            <option value="survey">Survey (isian bebas)</option>
                            <option value="multi_poin">Penilaian (multi poin)</option>
                            <option value="single_poin">Penilaian (single poin)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <code form="nama_jenis">Image Thumbnail </code><br>
                        <input type="file" class="" name="img_form">
                    </div>
                    <div class="form-group">
                        <img src="" id="img_form" class="img-thumbnail">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary l-s-1 s-12 text-uppercase" value="TAMBAH DATA BARU"
                        id="btnadd" required>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" id="modaldel" tabindex="-1" role="dialog" aria-labelledby="modal_5"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#" id="formremove" enctype="multipart/form-data" method="POST"> @csrf
                <div class="modal-header bg-danger text-white" >
                    <h5 class="modal-title" id="modal_title_6">This is way to dangerous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="fa fa-exclamation-circle fa-4x"></i>
                        <h4 class="heading mt-4 text-danger">Yakin akan menghapus Poli tersebut ?</h4>
                        <p class="text-bold">Apabila ada data pasien yang melakukan registrasi online, maka data registrasi pasien tersebut juga akan terhapus</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">YA HAPUS!.. SAYA YAQIN!</button> --}}
                    <input type="submit" class="btn btn-danger btn-sm" id="btndell" value="YA HAPUS!!">
                </div>
            </form>
        </div>
    </div>
</div>
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

        $('#modaldel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#formremove').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be.poli.remove') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btndell').attr('disabled', 'disabled');
                    $('#btndell').val('Processing');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formremove")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btndell').val('YA HAPUS!!');
                        $('#btndell').attr('disabled', false);
                        $('#modaldel').modal('hide');
                        toastr.warning(response.message);
                        swal({
                            title: "WARNING!",
                            text: "Poli Berhasil Dihapus!",
                            type: "warning"
                        }).then(okay => {
                            if (okay) {
                                window.location.href = "/admin-poli";
                            }
                        });
                    } else {
                        $("#formremove")[0].reset();
                        $('#btndell').val('YA HAPUS!!');
                        $('#btndell').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    </script>
@endsection