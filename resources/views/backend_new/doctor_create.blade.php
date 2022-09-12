@extends('layouts_new.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        REGISTRATION NEW DOCTOR
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
                <form id="formadd" method="POST">@csrf
                    <div class="row" >
                        <div class="col-md-3" style="margin-bottom: 20px;">
                            <div class="card">
                                <div class="card-header  white">
                                    <i class="icon-photo text-blue"></i>
                                    <span style="color:blue; font-size:12px">- Browse Button to Change the Photo</span>
                                </div>
                                <div class="card-body p-0">
                                    <!-- Big Heading -->
                                    <div class="text-center bg-light b-b p-3">
                                        <img src="{{ asset('doctor_listing_1.jpg') }}"
                                            style="max-width: 100%" id="preview" alt="">
                                    </div>
                                    <ul class="list-group list-group-flush no-b">
                                        <li class="list-group-item">
                                            
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="img_dokter" name="img_dokter" required>
                                                <label class="custom-file-label" id="photo_name" for="img_dokter">Change Photo...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer white">
                                    <div class="form-group">
                                        <label for="">Cabang RS</label>
                                        <select name="cabang_id" class="form-control" id="" required>
                                            @foreach ($cabang as $cb)
                                            <option value="{{ $cb->id }}">{{ $cb->nama_cabang }}</option>
                                            @endforeach                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Doctor's Full Name</label>
                                        <input type="text" name="nama_dokter" class="form-control" placeholder="" style="font-size: 14px">
                                    </div>
                                    
                                    {{-- <div class="form-group">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="" style="font-size: 14px">
                                    </div> --}}
                                    <div class="form-group">
                                        <input type="radio" name="gender_dokter" id="male" class="with-gap">
                                        <label for="male">Male</label>
                                        <br>
                                        <input type="radio" name="gender_dokter" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Female</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir_dokter">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir_dokter" placeholder="" style="font-size: 14px">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        
                        
                        <div class="col-md-9">
                            <div class="card" >
                                <div class="card-header white">
                                    <i class="icon-file-text text-blue"></i>
                                    <span style="color:blue; font-size:12px">- Deskripsi singkat penunjang informasi</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea name="deskripsi_dokter" id="deskripsi_dokter" class="form-control" placeholder="Deskripsikan informasi pendukung mengenai profile dokter..." cols="30" rows="7"></textarea>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card" style="margin-top: 20px; min-height: 165px">
                                <div class="card-header white">
                                    <i class="icon-chat text-blue"></i>
                                    <span style="color:blue; font-size:12px">- Tahun Lulus & Asal Pendidikan </span>
                                </div>
                                <div class="card-body bg-light field_wrapper b-b">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="number" name="tahun_pendidikan_end[]" style="margin-bottom: 10px" min="1900" max="2099" id="tanggal_pendidikan" step="1" value="2000" class="form-control" required/>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="alumni_pendidikan[]" style="margin-bottom: 10px" class="form-control" id="alumni_pendidikan" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-primary" type="button"  id="addbtn"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card" style="margin-top: 20px; min-height: 165px">
                                <div class="card-header white">
                                    <i class="icon-award7 text-blue"></i>
                                    <span style="color:blue; font-size:12px">- Prestasi / Penghargaan</span>
                                </div>
                                <div class="card-body bg-light b-b field_wrapper2">
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="number" name="tahun_prestasi[]" style="margin-bottom: 10px" min="1900" max="2099" id="tahun_prestasi" step="1" value="2000" class="form-control" required/>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="nama_prestasi[]" style="margin-bottom: 10px" class="form-control" id="nama_prestasi" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-primary" type="button"  id="btnadd2"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card" style="background: transparent; border:none; margin-top: 20px">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" id="btnsubmit" value="Submit Form!">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
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
    $('#img_dokter').change(function(e) {
        var fileName = e.target.files[0].name;
        // $("#img_thumbnail_jenis").val(fileName);
        $('#photo_name').html(fileName);
        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        
    });
    //Pendidikan
    var maxField = 10; //Input fields increment limitation
    var addButton = $('#addbtn'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="form-group add"><div class="row">';
    fieldHTML=fieldHTML + '<div class="col-md-2"><input type="number" name="tahun_pendidikan_end[]" style="margin-bottom: 10px" min="1900" max="2099" id="tanggal_pendidikan" step="1" value="2000" class="form-control"/></div>';
    fieldHTML=fieldHTML + '<div class="col-md-8"><input class="form-control" placeholder="" style="margin-bottom: 10px" type="text" name="alumni_pendidikan[]" /></div>';
    fieldHTML=fieldHTML + '<div class="col-md-2"><button class="btn btn-danger remove_button"  id="remove_button"><i class="icon-trash"></i></button></div>';
    fieldHTML=fieldHTML + '</div></div>'; 
    var x = 1; //Initial field counter is 1
     
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
     
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('').parent('').remove(); //Remove field html
        x--; //Decrement field counter
    });

    //Prestasi / Penghargaan
    var maxField2 = 10; //Input fields increment limitation
    var addButton2 = $('#btnadd2'); //Add button selector
    var wrapper2 = $('.field_wrapper2'); //Input field wrapper
    var fieldHTML2 = '<div class="form-group add"><div class="row">';
    fieldHTML2=fieldHTML2 + '<div class="col-md-2"><input type="number" name="tahun_prestasi[]" style="margin-bottom: 10px" min="1900" max="2099" step="1" value="2000" class="form-control"/></div>';
    fieldHTML2=fieldHTML2 + '<div class="col-md-8"><input class="form-control" placeholder="" style="margin-bottom: 10px" type="text" name="nama_prestasi[]" /></div>';
    fieldHTML2=fieldHTML2 + '<div class="col-md-2"><button class="btn btn-danger remove_button"  id="remove_button"><i class="icon-trash"></i></button></div>';
    fieldHTML2=fieldHTML2 + '</div></div>'; 

    //Once add button is clicked
    $(addButton2).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper2).append(fieldHTML2); //Add field html
        }
    });
     
    //Once remove button is clicked
    $(wrapper2).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('').parent('').remove(); //Remove field html
        x--; //Decrement field counter
    });

    $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/admin-doctor/store",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnsubmit').attr('disabled', 'disabled');
                    $('#btnsubmit').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formadd")[0].reset();
                        $('#btnsubmit').val('Submit Form!');
                        $('#btnsubmit').attr('disabled', false);
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: "Doctor Registration Successfully!",
                            type: "success"
                        }).then(okay => {
                            if (okay) {
                                window.location.href = "/admin-doctor/list";
                            }
                        });
                    } else {
                        // $("#formadd")[0].reset();
                        $('#btnsubmit').val('Submit Form!');
                        $('#btnsubmit').attr('disabled', false);
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