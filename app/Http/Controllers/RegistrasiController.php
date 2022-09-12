<?php

namespace App\Http\Controllers;
use App\Models\Poli;
use Illuminate\Http\Request;
use Carbon;

class RegistrasiController extends Controller
{
    public function registrasi($slug_poli)
    {
        $poli = Poli::where('slug_poli', $slug_poli)->first();
        return view('form.index',compact('poli'));
    }

    public function form_registrasi(Request $request,$slug_poli,$avail)
    {
        $avail = $avail;
        $poli  = Poli::where('slug_poli', $slug_poli)->first();

        return view('form.form',compact('poli','avail'));
    }
}
