<?php
// cont for fe controller for be
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\JadwalController;
// cont for fe controller for be
use App\Http\Controllers\AppointmentCont;
use App\Http\Controllers\LandingCont;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/appointment/choose-specialist-&-hospital');
    // return redirect('/home-page');
});

Route::get('/admin-dashboard', function() {
    return view('backend_new.dashboard');
});
//kategori
Route::get('/admin-kategori',[PostingController::class,'index_kategori'])->name('be.kategori.page');
Route::post('/admin-kategori-remove',[PostingController::class,'remove_kategori'])->name('be.kategori.remove');
Route::post('/admin-kategori-store',[PostingController::class,'store_kategori'])->name('be.kategori.store');
//posting
Route::post('/admin-posting-store',[PostingController::class,'store_posting'])->name('be.posting.store');
Route::get('/admin-posting-create',[PostingController::class,'create_posting'])->name('be.posting.create');
Route::get('/admin-posting',[PostingController::class,'index_posting'])->name('be.posting.page');
Route::get('/admin-posting-edit/{id}',[PostingController::class,'edit_posting'])->name('be.posting.edit');
Route::post('/admin-posting-remove',[PostingController::class,'remove_posting'])->name('be.posting.remove');
//poli
Route::get('/admin-poli',[PoliController::class,'index_poli'])->name('be.poli.page');
Route::post('/admin-poli-store',[PoliController::class,'store_poli'])->name('be.poli.store');
Route::get('/admin-poli-edit/{id}',[PoliController::class,'edit_poli']);
Route::post('/admin-poli-remove',[PoliController::class,'remove_poli'])->name('be.poli.remove');
//registration
Route::get('/registrasi/{slug_poli}',[RegistrasiController::class,'registrasi']);
Route::get('/form-registrasi/{slug_poli}/{avail}',[RegistrasiController::class,'form_registrasi']);


//doctor
Route::controller(DoctorController::class)->group(function(){
    Route::get('/admin-doctor/list','doctor_list')->name('be.doctor.list');
    Route::get('/admin-doctor/create','doctor_create')->name('be.doctor.create');
    Route::post('/admin-doctor/store','doctor_store')->name('be.doctor.store');
    Route::get('/admin-doctor/remove/{id}','doctor_remove')->name('be.doctor.remove');
});

Route::controller(JadwalController::class)->group(function(){
    Route::post('/management_jadwal/store','jadwal_store');
});






Route::get('/appointment/choose-specialist-&-hospital',[AppointmentCont::class,'choose_specialist']);
Route::get('/appointment/choose-doctor/{id_dokter}',[AppointmentCont::class,'choose_doctor']);
Route::get('/map-cabang',[AppointmentCont::class,'map_cabang']);
Route::post('/appointment/choose-specialist-&-hospital/result',[AppointmentCont::class,'choose_specialist_result']);
Route::get('/appointment/choose-doctor/search/result',[AppointmentCont::class,'choose_doctor_result']);
Route::get('/appointment/doctor/find-doctor/{doctor_id}',[AppointmentCont::class,'find_doctor']);
Route::get('/appointment/search-schedule/{doctor_id}/{tahun}/{bulan}/{tanggal}',[AppointmentCont::class,'search_schedule']);
Route::post('/appointment/booking-jadwal',[AppointmentCont::class,'booking_jadwal']);
Route::get('/appointment/status-booking/{pasien_id}',[AppointmentCont::class,'status_booking']);
Route::post('/appointment/cek-data-pasien',[AppointmentCont::class,'cek_data_pasien']);


Route::controller(LandingCont::class)->group(function(){
    Route::get('/home-page', [LandingCont::class,'home_page']);
});

Route::controller(DoctorController::class)->group(function(){
    Route::get('/doctor-list','daftar_dokter');
    Route::get('/news-list','daftar_berita');
});
