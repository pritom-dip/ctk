<?php

namespace App\Http\Controllers\Backend;

use App\Model\HomeSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*use App\Http\Controllers\Controller*/;

class HomeSettingController extends Controller
{
    private $path;
    private $model;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query  = HomeSetting::latest();

        if(!empty($request->field_name) && !empty($request->value)){
            $query->where($request->field_name,'like','%'.$request->value.'%');
        }

        $breadcumbs = $this->breadcumbs($this->model, 'index');
        $datas      = $query->paginate(10);

        return view( $this->path .'.index', compact('datas', 'breadcumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcumbs = $this->breadcumbs($this->model, 'create');
        return view( $this->path . '.create', compact('breadcumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        HomeSetting::create($request->all());

        return redirect()->route( $this->route . '.index')
                ->with('success', $this->model . ' successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\HomeSetting  $homeSetting
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSetting $homeSetting)
    {
        $breadcumbs = $this->breadcumbs($this->model, 'show');

        return view($this->path .'.show', compact( "homeSetting", "breadcumbs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\HomeSetting  $homeSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSetting $homeSetting)
    {
        $breadcumbs = $this->breadcumbs($this->model, 'edit');
        return view( $this->path . '.edit',
                compact( "homeSetting" , "breadcumbs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\HomeSetting  $homeSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSetting $homeSetting)
    {   $data = $request->input('home');

        dd( $data);
        $homeSetting->update([
            "site_name" => "test site",
            "fb_url" => "test data",
            "twiter_url" => "test data",
            "linkdin_url" => "test data",
            "google_url" => "test data",
            "youtube_url" => "test data",
            "mayor_name" => "test data",
            "address" => "test data",
            "app_url" => "test data",
        ]);
        return redirect()->back()->with('success', $this->model. ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\HomeSetting  $homeSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSetting $homeSetting)
    {
        $homeSetting->delete();
        return redirect()->route( $this->route . '.index')
                ->with('success', $this->model .' deleted');
    }

    public function __construct()
    {
        $this->path  = "admin.homeSetting";
        $this->model = "HomeSetting";
        $this->route = "homesetting";
    }

    private function validation($request, $homeSetting = null){
        $this->validate($request,[
            'name'  => "required|unique:homeSettings,name," . $homeSetting
        ]);
    }
}
