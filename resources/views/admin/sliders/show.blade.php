@extends('admin.layouts.layout')
@section('title', 'Show Slider Image ')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Image View</h3>
        <div class="box-tools pull-right">
            <a href="{{route('slider.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
        </div>
    </div>
    <div class="box-body box-min-height">
        <img height="100%" width="100%" src={{ asset('storage/'. $slider -> image) }} alt="">
    </div>
</div>

@endsection
