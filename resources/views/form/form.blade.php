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
@if ($avail == 'new-registration')
<h2 class="text-capitalize">Registrasi Baru</h2>
@else
<h2 class="text-capitalize">Konfirmasi & Pilih Jadwal</h2>
@endif
<p class="text-capitalize" style="font-size: 18px">POLI : {{$poli->nama_poli}} 
</p>
@endsection

@section('content')
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container">
        <div id="top-wizard">
            <span id="location"></span>
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form id="wrapped" method="post" enctype="multipart/form-data">
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="step">
                    <h2 class="section_title">Presentation</h2>
                    <h3 class="main_question">Personal info</h3>
                    <div class="form-group add_top_30">
                        <label for="name">First and Last Name</label>
                        <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control required">
                    </div>
                    <label>Gender</label>
                    <div class="form-group radio_input">
                        <label class="container_radio mr-3">Male
                            <input type="radio" name="gender" value="Male" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio">Female
                            <input type="radio" name="gender" value="Female" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group add_bottom_30 add_top_20">
                        <label>Upload Resume<br><small>(File accepted: .pdf, .doc/docx - Max file size: 150KB for demo limit)</small></label>
                        <div class="fileupload">
                            <input type="file" name="fileupload" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="required">
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <!-- /Start Branch ============================== -->
                <div class="step" data-state="branchtype">
                    <h2 class="section_title">Work Availability</h2>
                    <h3 class="main_question">Are you available for work?</h3>
                    <div class="form-group">
                        <label class="container_radio version_2">Full time availability
                            <input type="radio" name="availability" value="Full-time" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Part time availability
                            <input type="radio" name="availability" value="Part-time" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio version_2">Freelance / Contract availability
                            <input type="radio" name="availability" value="Freelance-Contract" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <small>* Start branch radio based </small>
                </div>

                <!-- /Work Availability > Full-time ============================== -->
                <div class="branch" id="Full-time">
                    <div class="step" data-state="end">
                        <h2 class="section_title">Work Availability</h2>
                        <h3 class="main_question">Additional info about "Full Time" availability</h3>
                        <div class="form-group add_bottom_30">
                            <label>Minimum salary? (in USD)</label>
                            <label for="minimum_salary_full_time">Choose a range</label>
                            <div class="styled-select">
                                <select class="form-control required" id="minimum_salary_full_time" name="minimum_salary_full_time">
                                    <option value="">Choose a range</option>
                                    <option value="&lt;10k">&lt;10k</option>
                                    <option value="10-15k">10-15k</option>
                                    <option value="15-20k">15-20k</option>
                                    <option value="20-25k">20-25k</option>
                                    <option value="25-30k">25-30k</option>
                                    <option value="30-35k">30-35k</option>
                                    <option value="35-40k">35-40k</option>
                                    <option value="45-50k">45-50k</option>
                                    <option value="&gt;50k">&gt;50k</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group add_bottom_30">
                            <label>How soon would you be looking to start?</label>
                            <label for="start_availability_full_time">Choose your availability</label>
                            <div class="styled-select">
                                <select class="form-control required" id="start_availability_full_time" name="start_availability_full_time">
                                    <option value="">Choose your availability</option>
                                    <option value="I can start immediately">I can start immediately</option>
                                    <option value="I need to give 2 or 4 weeks notice">I need to give 2???4 weeks notice</option>
                                    <option value="I am passively browsing">I am passively browsing</option>
                                    <option value="I will be available in a couple months">I will be available in a couple months</option>
                                    <option value="I am not sure">I am not sure</option>
                                </select>
                            </div>
                        </div>
                        <label class="custom">Are you willing to work remotely?</label>
                        <div class="form-group radio_input">
                            <label class="container_radio mr-3">Yes
                                <input type="radio" name="remotely_full_time" value="Yes" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">No
                                <input type="radio" name="remotely_full_time" value="No" class="required">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <!-- /Work Availability > Part-time ============================== -->
                <div class="branch" id="Part-time">
                    <div class="step" data-state="end">
                        <h2 class="section_title">Work Availability</h2>
                        <h3 class="main_question">Additional info about "Part Time" availability</h3>
                        <div class="form-group add_bottom_30">
                            <label>Minimum salary? (in USD)</label>
                            <label for="minimum_salary_part_time">Choose a range</label>
                            <div class="styled-select clearfix">
                                <select class="form-control required" id="minimum_salary_part_time" name="minimum_salary_part_time">
                                    <option value="">Choose a range</option>
                                    <option value="&lt;2k">&lt;2k</option>
                                    <option value="3-5k">3-5k</option>
                                    <option value="5-7k">5-7k</option>
                                    <option value="7-10k">7-10k</option>
                                    <option value="&gt;10k">&gt;10k</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group add_bottom_30">
                            <label>How soon would you be looking to start?</label>
                             <label for="start_availability_part_time">Choose your availability</label>
                            <div class="styled-select clearfix">
                                <select class="form-control required" id="start_availability_part_time" name="start_availability_part_time">
                                    <option value="">Choose your availability</option>
                                    <option value="I can start immediately">I can start immediately</option>
                                    <option value="I need to give 2 or 4 weeks notice">I need to give 2???4 weeks notice</option>
                                    <option value="I am passively browsing">I am passively browsing</option>
                                    <option value="I will be available in a couple months">I will be available in a couple months</option>
                                    <option value="I am not sure">I am not sure</option>
                                </select>
                            </div>
                        </div>
                        <label class="custom">When you prefer to work?</label>
                        <div class="form-group radio_input">
                            <label class="container_radio mr-3">Morning
                                <input type="radio" name="day_preference_part_time" value="Morning" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio mr-3">Afternoon
                                <input type="radio" name="day_preference_part_time" value="Afternoon" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">No Preferences
                                <input type="radio" name="day_preference_part_time" value="No Preferences" class="required">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <!-- /Work Availability > Freelance-Contract ============================== -->
                <div class="branch" id="Freelance-Contract">
                    <div class="step" data-state="end">
                        <h2 class="section_title">Work Availability</h2>
                        <h3 class="main_question">Additional info about "Freelance/Contract" availability</h3>
                        <div class="form-group">
                            <label for="fixed_rate_contract">Minimum fixed rate? (in USD)</label>
                            <input type="text" name="fixed_rate_contract" id="fixed_rate_contract" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="hourly_rate_contract">Minimum hourly rate? (in USD)</label>
                            <input type="text" name="hourly_rate_contract" id="hourly_rate_contract" class="form-control required">
                        </div>
                        <div class="form-group">
                            <label for="minimum_hours_conctract">Minimum hours for a contract?</label>
                            <input type="text" name="minimum_hours_conctract" id="minimum_hours_conctract" class="form-control required">
                        </div>
                        <label class="custom">Are you willing to work remotely?</label>
                        <div class="form-group radio_input">
                            <label class="container_radio mr-3">Yes
                                <input type="radio" name="remotely_contract" value="Yes" class="required">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">No
                                <input type="radio" name="remotely_contract" value="No" class="required">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /step-->

                <div class="submit step" id="end">
                    <div class="summary">
                        <div class="wrapper">
                            <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
                            <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
                        </div>
                        <div class="text-center">
                            <div class="form-group terms">
                                <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /step last-->

            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button type="submit" name="process" class="submit">Submit</button>
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
    <!-- /Wizard container -->
</div>
@endsection

@section('script')
<script src="{{ asset('asset_form/js/func_1.js') }}"></script>
@endsection