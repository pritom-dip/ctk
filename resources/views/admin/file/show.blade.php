@extends('admin.layouts.layout')
@section('title', 'Show File ')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $file -> name }}</h3>
        <div class="box-tools pull-right">
            <a href="{{route('file.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
        </div>
    </div>
    <iframe src="{{ asset('storage/'. $file->path) }}" height="800px" width="100%"></iframe>
</div>

@endsection
