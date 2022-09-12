@extends('layouts_new.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        CREATE PRODUCT
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
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row" style="padding: 20px">
                    <!--Grafik Berita Artikel-->
                   
                    <div class="white col-lg-12">
                        <form id="formadd" method="POST"> @csrf
                            <div class="white col-lg-12" style="margin-top: 20px; margin-bottom: 20px">
                                <div id="errList"></div>
                            </div>
                            <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px">
                                <h5> PRODUCT BARU</h5>
                            </div>
                            <div class="row my-12" style="width: 100%">
                                <div class="col-xl-12 row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="judul"><b>Nama Product</b></label>
                                            <input type="text" placeholder="Nama Product" name="product_name" id="judul" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="katalog"><b>Katalog</b></label>
                                            <select name="katalog_id[]" class="form-control text-capitalize select2" id="katalog" required multiple="multiple">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="deskripsi"><b>Deskripsi Product</b></label>
                                            <textarea name="product_desc" id="deskripsi" class="my-editor form-control" cols="30" rows="30"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="product_img" class="custom-file-input" id="inputGroupFile01"
                                                        accept="image/*" onchange="showPreview(event);" required>
                                                    <p class="custom-file-label" id="label_img" for="inputGroupFile01">Chose Image</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="preview" style="max-width: 300px">
                                                <img style="max-width: 300px" id="inputGroupFile01-preview">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="btnadd" class="form-control btn btn-primary" value="POSTING!">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <!--Today Tab End-->
        </div>
    </div>
</div>
@endsection