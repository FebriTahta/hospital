<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingCont extends Controller
{
    public function home_page()
    {
        return view('page.home.index2');
    }
}
