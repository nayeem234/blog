<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    function front(){
        return view('frontend.home');
    }
}
