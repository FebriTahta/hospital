<?php

namespace App\Http\Controllers;
use App\Models\Cabang;
use App\Models\Doctor;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class LandingCont extends Controller
{
    public function home_page()
    {
        return view('page.home');
    }

    public function profile_page()
    {
        return view('page.profile');
    }

    public function service_page()
    {
        return view('page.service');
    }

    public function doctor_page(Request $request)
    {
        $dokter = Doctor::get();
        $spesialis = Spesialis::get();
        return view('page.doctor',compact('dokter','spesialis'));
    }
}
