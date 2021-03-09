<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class forntendController extends Controller
{
    // ---------home-----------
    public function home(){
        return view('frontend.index');
    }
    // ---------about-----------
    public function about(){
        return view('frontend.about');
    }
    // ---------structure-----------
    public function structure(){
        return view('frontend.structure');
    }
    // ---------parishad-----------
    public function parishad(){
        return view('frontend.parishad');
    }
    // ---------staff-----------
    public function staff(){
        return view('frontend.staff');
    }
    // ---------service-----------
    public function service(){
        return view('frontend.service');
    }
    // ---------notice-----------
    public function notice(){
        return view('frontend.notice');
    }
    // ---------download-----------
    public function download(){
        return view('frontend.download');
    }
    // ---------contact-----------
    public function contact(){
        return view('frontend.contact');
    }
}
