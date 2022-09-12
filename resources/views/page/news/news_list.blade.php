@extends('layouts_new.fe1_master')

@section('style')

@endsection

@section('content')
<main>
    <div id="results">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Showing </strong> results</h4>
                </div>
                <div class="col-md-6">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Judul / Kategori Berita">
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
                        <label for="all">Cabang Klinik Sumber Berita</label>
                    </div>
                </li>
                
                <li>
                    <h6>Sort by</h6>
                    <select name="orderby" class="selectbox">
                    <option value="">Kategori Berita</option>
                    <option value="Men">Contoh Kategori</option>
                    <option value="Women">Contoh Kategori</option>
                    </select>
                </li>
            </ul>
        </div>
        <!-- /container -->
    </div>
	<!-- /filters -->
	   
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-4">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="{{ asset('1.jpeg') }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>Kategori Berita</small>
								<h3>Judul Berita</h3>

								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								
							</div>
							<ul>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>
					<!-- /box_list -->

					<div class="col-md-4">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="{{ asset('2.jpeg') }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>Kategori Berita</small>
								<h3>Judul Berita</h3>

								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								
							</div>
							<ul>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>

                    <div class="col-md-4">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="{{ asset('3.jpeg') }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>Kategori Berita</small>
								<h3>Judul Berita</h3>

								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								
							</div>
							<ul>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>
					<!-- /box_list -->
                    <div class="col-md-4">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="{{ asset('4.jpeg') }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>Kategori Berita</small>
								<h3>Judul Berita</h3>

								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								
							</div>
							<ul>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>
					<!-- /box_list -->
                    <div class="col-md-4">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="{{ asset('5.jpeg') }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>Kategori Berita</small>
								<h3>Judul Berita</h3>

								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								
							</div>
							<ul>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>
					<!-- /box_list -->
                    <div class="col-md-4">
						<div class="box_list wow fadeIn">
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="{{ asset('6.jpeg') }}" class="img-fluid" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small>Kategori Berita</small>
								<h3>Judul Berita</h3>

								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
								
							</div>
							<ul>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
								<li><a href="detail-page.html">Book now</a></li>
							</ul>
						</div>
					</div>
					<!-- /box_list -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection