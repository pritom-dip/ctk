<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Category;
use App\Model\File;
use App\Model\Notice;
use App\Model\Parishad;
use App\Model\Shava;
use App\Model\Staff;
use Illuminate\Http\Request;

class forntendController extends Controller
{
    // ---------home-----------
    public function home(){
        $notice = Notice::latest() -> get();
        $about = About::latest() -> first();
        return view('frontend.index',compact('about','notice'));
    }
    // ---------about-----------
    public function about(){
        $about = About::latest() -> first();

        return view('frontend.about',compact('about'));
    }
    // ---------structure-----------
    public function structure(){
        return view('frontend.structure');
    }
    // ---------parishad-----------
    public function parishad(){
        $parishad = Parishad::all();
        return view('frontend.parishad',compact('parishad'));
    }
    // ---------staff-----------
    public function staff(){
        $staff = Staff::all();
        return view('frontend.staff',compact('staff'));
    }
    // ---------service-----------
    public function service(){
        $service = Shava::latest() -> first();
        return view('frontend.service',compact('service'));
    }
    // ---------notice-----------
    public function notice(){
        $notice = Notice::latest() -> get();
        return view('frontend.notice',compact('notice'));
    }
    // ---------notice single-----------
    public function noticeSingle($id){
        $data = Notice::find($id);
        return view('frontend.notice-single',compact('data'));
    }
    // ---------download-----------
    public function download(){
        $category = Category:: all();
        return view('frontend.download',compact('category'));
    }
    // ---------file view-----------
    public function fileView($id){
        $data = File::find($id);
        return view('frontend.download-view',compact('data'));
    }
    // ---------contact-----------
    public function contact(){
        return view('frontend.contact');
    }
}
