@extends('admin.layouts.layout')
@section('title', 'Show Category ')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">About View</h3>
        <div class="box-tools pull-right">
            <a href="{{route('about.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
        </div>
    </div>
    <div class="box-body box-min-height">
        <table class="table table-bordered table-hover table-striped">
            <tbody>
                <tr>
                    <th>Description</th>
                    <th>Information</th>
                </tr>
                <tr>
                    <td>{!! $about->description !!}</td>
                    <th>
                        @php $informations = json_decode($about->information) @endphp
                        @foreach($informations as $value)
                            <p>{{$value->description}}</p>
                        @endforeach
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
