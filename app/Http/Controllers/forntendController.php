<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Category;
use App\Model\File;
use App\model\Gallery;
use App\Model\Notice;
use App\Model\Parishad;
use App\Model\Shava;
use App\Model\Slider;
use App\Model\Staff;
use App\Model\Structure;
use Illuminate\Http\Request;

class forntendController extends Controller
{
    // ---------home-----------
    public function home()
    {
        $slider = Slider::latest()->get();
        $gallery = Gallery::orderby('serial', 'ASC')->get();
        $notice = Notice::latest()->get();
        $about = About::latest()->first();
        return view('frontend.index', compact('about', 'notice', 'slider', 'gallery'));
    }
    // ---------about-----------
    public function about()
    {
        $about = About::latest()->first();

        return view('frontend.about', compact('about'));
    }
    // ---------structure-----------
    public function structure()
    {
        $structure = Structure::latest()->first();

        return view('frontend.structure',compact('structure'));
    }
    // ---------parishad-----------
    public function parishad()
    {
        $parishad = Parishad::orderby('serial', 'ASC')->get();
        return view('frontend.parishad', compact('parishad'));
    }
    // ---------staff-----------
    public function staff()
    {
        $staff = Staff::orderby('serial', 'ASC')->get();
        return view('frontend.staff', compact('staff'));
    }
    // ---------service-----------
    public function service()
    {
        $service = Shava::latest()->first();
        return view('frontend.service', compact('service'));
    }
    // ---------notice-----------
    public function notice()
    {
        $notice = Notice::latest()->get();
        return view('frontend.notice', compact('notice'));
    }
    // ---------notice single-----------
    public function noticeSingle($id)
    {
        $data = Notice::find($id);
        return view('frontend.notice-single', compact('data'));
    }
    // ---------download-----------
    public function download()
    {
        $category = Category::all();
        return view('frontend.download', compact('category'));
    }
    // ---------file view-----------
    public function fileView($id)
    {
        $data = File::find($id);
        return view('frontend.download-view', compact('data'));
    }
    // ---------contact-----------
    public function contact()
    {
        return view('frontend.contact');
    }



}
