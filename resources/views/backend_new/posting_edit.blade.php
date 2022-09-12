@extends('layouts_new.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        EDIT POST
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

    
    
    <div class="container-fluid relative animatedParent animateOnce" style="margin-top: 20px">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div id="errList"></div>
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <form id="formadd" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="col-md-12">
                            <div class="white" style="padding: 20px">
                                <div class="card-title">
                                    <h5> UPDATE POSTING : <span>{{ $posting->judul_posting }}</span></h5>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="judul"><b>Judul Postingan</b></label>
                                            <input type="text" name="judul_posting" value="{{ $posting->judul_posting }}" id="judul" class="form-control" required>
                                            <input type="hidden" name="id" value="{{ $posting->id }}" id="judul" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="judul"><b>Kategori / Tag</b></label>
                                            <select class="select2" name="kategori_id[]" multiple="multiple" required>
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->id }}" 
                                                        @foreach ($posting->kategori as $item2)
                                                            {{ $item2->id == $item->id ? 'selected' : ''}}
                                                        @endforeach
                                                    >{{ $item->nama_kategori }}</option>
                                                @endforeach
                                             </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="deskripsi"><b>Deskripsi</b></label>
                                            <textarea name="deskripsi_posting" id="deskripsi" class="my-editor form-control" cols="30" rows="30">{!! $posting->deskripsi_posting !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="thumbnail"><b>Thumbnail</b></label>
                                            <select name="thumbnail" class="form-control" id="thumbnail">
                                                <option value="small" @if ($posting->thumbnail == 'small') selected @endif>small</option>
                                                <option value="medium" @if ($posting->thumbnail == 'medium') selected @endif>medium</option>
                                                <option value="large" @if ($posting->thumbnail == 'large') selected @endif>large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="img_posting" class="custom-file-input" id="inputGroupFile01"
                                                        accept="image/*" onchange="showPreview(event);">
                                                    <p class="custom-file-label" id="label_img" for="inputGroupFile01">Chose Image</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="preview" style="max-width: 300px">
                                                <img style="max-width: 300px" src="{{ asset('storage/img_posting/'.$posting->img_posting) }}" id="inputGroupFile01-preview">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="btnadd" class="form-control btn btn-primary" value="POSTING!">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--Today Tab End-->
        </div>
    </div>
</div>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script src="https://cdn.tiny.cloud/1/ugxr3g858dujcaxkbpc955v096pyy3twc4qp21awzic10swl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $(document).ready(function () {
        tinymce.init({
            selector: 'textarea#deskripsi',
            
            plugins: 'image code',
            toolbar: 'undo redo | bold italic underline | link image | code',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            },
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    })
   
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("inputGroupFile01-preview");
                preview.src = src;
                preview.style.display = "block";
                $('#label_img').html(src.substr(0, 30));
            }
        }
        
        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be.posting.store') }}",
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
                            text: "TULISAN TELAH DIPUBLIKASI!",
                            type: "success"
                        }).then(okay => {
                            if (okay) {
                                window.location.href = "/admin-posting";
                            }
                        });
                    } else {
                        // $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
                        $('#btnadd').attr('disabled', false);
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