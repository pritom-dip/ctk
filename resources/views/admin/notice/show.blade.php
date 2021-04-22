@extends('admin.layouts.layout')
@section('title', 'Show Notice ')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Notice View</h3>
        <div class="box-tools pull-right">
            <a href="{{route('notice.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
        </div>
    </div>
    <div class="box-body box-min-height">
        <table class="table table-bordered table-hover table-striped" style="margin-bottom: 40px;">
            <tbody>
                <tr>
                    <th>Notice Name</th>
                    <th>Notice Headline</th>
                </tr>
                <tr>
                    <td>{{ $notice -> name }}</td>
                    <td>{{ $notice -> short_desc }}</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-hover table-striped">
            <tbody>

                <tr>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>{!! $notice->long_desc !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
