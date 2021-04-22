@extends('admin.layouts.layout')
@section('title', 'Show Parishad ')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Parishad Memeber View</h3>
        <div class="box-tools pull-right">
            <a href="{{route('parishad.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
        </div>
    </div>
    <div class="box-body box-min-height">
        <table class="table table-bordered table-hover table-striped">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Fathers Name</th>
                    <th>Cell</th>
                    <th>Image</th>
                </tr>
                <tr>
                    <td>{{ $parishad->name }}</td>
                    <td>{{ $parishad->designation }}</td>
                    <td>{{ $parishad->fathers_name }}</td>
                    <td>{{ $parishad->cell }}</td>
                    <td><img src={{ asset('storage/'. $parishad->image) }} style="width: 100px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection