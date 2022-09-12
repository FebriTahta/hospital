@extends('layouts_new.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        DAFTAR DOKTER
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
                                    <span class="icon icon-meeting text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title">Total Seluruh Dokter </div>
                                <h5 class="sc-counter mt-3" id="total_kategori">{{ $total_doctor }}</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div id="errList"></div>
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                <h5> DATA POSTING</h5>
                            </div>
                            <div class="row my-3">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead style="font-size: 12px; font-weight: bold">
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th style="width: 10%">Photo</th>
                                                <th>Nama</th>
                                                <th>Asal RS</th>
                                                <th>Jadwal</th>
                                                <th style="width: 12%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- data --}}
                                        </tbody>
                                        <tfoot style="font-size: 12px; font-weight: bold">
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th style="width: 12%">Photo</th>
                                                <th>Nama</th>
                                                <th>Asal RS</th>
                                                <th>Jadwal</th>
                                                <th style="width: 15%">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-danger fade" id="modaljadwal" tabindex="-1" role="dialog" aria-labelledby="modal_5"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="#" id="formjadwal" enctype="multipart/form-data" method="POST"> @csrf
                <div class="modal-header bg-primary text-white" >
                    <h5 class="modal-title" id="modal_title_6">Management Jadwal Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body field_wrapper">
                    <h5><b> Nama Dokter : <span class="text-capitalize" id="nama_dokter"></span></b></h5>
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-6">
                                <label for="hari_kerja">Hari Kerja</label>
                                <select name="hari_vl" class="form-control" id="hari_kerja_1" required>
                                    <option value="">Tentukan hari kerja</option>
                                    <option value="1">Minggu</option>
                                    <option value="2">Senin</option>
                                    <option value="3">Selasa</option>
                                    <option value="4">Rabu</option>
                                    <option value="5">Kamis</option>
                                    <option value="6">Jumat</option>
                                    <option value="7">Sabtu</option>
                                </select>
                            </div>
                            <input type="hidden" name="hari_id" id="hari_id">
                            <input type="hidden" name="hari_en" id="hari_en">
                            <div class="col-md-3">
                                <label for="hari_jam_start">Jam Awal</label>
                                <input type="time" class="form-control" name="hari_jam_start">
                            </div>
                            <div class="col-md-3">
                                <label for="hari_jam_end">Jam Akhir</label>
                                <input type="time" class="form-control" name="hari_jam_end">
                            </div>
                            {{-- <div class="col-md-1">
                                <button class="btn btn-primary" style="margin-top: 27px" id="btnadd" type="button"><i class="icon-plus"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-sm" id="btnjadwal" value="Submit!!">
                </div>
            </form>
        </div>
    </div>
</div>

<form id="delete_form"
    method="POST">
    <input type="hidden" name="id" id="id">
    @method('delete') 
    @csrf
</form>
@endsection

@section('script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#modaljadwal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nama = button.data('nama')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #nama_dokter').html(nama);
        })

        

        var x = 1; //Initial field counter is 1
        
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#btnadd'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="form-group add"><div class="row">';
        fieldHTML=fieldHTML + '<div class="col-md-5"><select name="hari_vl[]" class="form-control" id="hari_kerja_'+x+'">'
                                    +'<option value="1">Minggu</option>'
                                    +'<option value="2">Senin</option>'
                                    +'<option value="3">Selasa</option>'
                                    +'<option value="4">Rabu</option>'
                                    +'<option value="5">Kamis</option>'
                                    +'<option value="6">Jumat</option>'
                                    +'<option value="7">Sabtu</option>'
                                +'</select></div>';
        fieldHTML=fieldHTML + '<div class="col-md-3"><input type="time" class="form-control" name="hari_jam_start[]"></div>';
        fieldHTML=fieldHTML + '<div class="col-md-3"><input type="time" class="form-control" name="hari_jam_end[]"></div>';
        fieldHTML=fieldHTML + '<div class="col-md-1"><button class="btn btn-danger remove_button"  id="remove_button"><i class="icon-trash"></i></button></div>';
        fieldHTML=fieldHTML + '</div></div>';

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

        $('#hari_kerja_'+x).on('change',function () {
            
            if (this.value == 1) {
                var hari_id = $('#hari_id').val('minggu');
                var hari_en = $('#hari_en').val('sunday');
            }
            if (this.value == 2) {
                var hari_id = $('#hari_id').val('senin');
                var hari_en = $('#hari_en').val('monday');
            }
            if (this.value == 3) {
                var hari_id = $('#hari_id').val('selasa');
                var hari_en = $('#hari_en').val('tuesday');
            }
            if (this.value == 4) {
                var hari_id = $('#hari_id').val('rabu');
                var hari_en = $('#hari_en').val('wednesday');
            }
            if (this.value == 5) {
                var hari_id = $('#hari_id').val('kamis');
                var hari_en = $('#hari_en').val('thursday');
            }
            if (this.value == 6) {
                var hari_id = $('#hari_id').val('jumat');
                var hari_en = $('#hari_en').val('friday');
            }
            if (this.value == 7) {
                var hari_id = $('#hari_id').val('sabtu');
                var hari_en = $('#hari_en').val('saturday');
            }
        })
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('be.doctor.list') }}",
                columns: [{
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'img',
                        name: 'img'
                    },
                    {
                        data: 'nama_dokter',
                        name: 'nama_dokter'
                    },
                    {
                        data: 'cabang',
                        name: 'cabang.nama_cabang'
                    },
                    {
                        data: 'jadwal',
                        name: 'jadwal'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        })

        function confirmDelete(e) {
            
            // e.preventDefault();
            var url = $(e).data('url');

            swal({
                title: "Watch Out!",
                text: "Data akan dihapus dari sistem!",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Hapus!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((willDelete) =>  {
                if (willDelete) {
                    $.ajax({
                        url: url,
                        dataType: "json",
                        success:function(data) {                      
                            var oTable = $('#example').dataTable();
                            oTable.fnDraw(false);
                            swal({
                                title: "SUCCESS!",
                                text: "Removed Successfully!",
                                type: "success"
                            });
                        }
                    });
                    
                } else {
                    swal("Cancelled", "Remove Cancelled :)", "error");
                }
            });
        
        // return false;
        }


        $('#formjadwal').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "/management_jadwal/store",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnjadwal').attr('disabled', 'disabled');
                    $('#btnjadwal').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formjadwal")[0].reset();
                        $('#btnjadwal').val('SUBMIT!');
                        $('#btnjadwal').attr('disabled', false);
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: response.message,
                            type: "success"
                        });
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#modaljadwal').modal('hide');
                    } else {
                        $("#formjadwal")[0].reset();
                        $('#btnjadwal').val('Submit!!');
                        $('#btnjadwal').attr('disabled', false);
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