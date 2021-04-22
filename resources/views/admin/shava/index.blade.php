@extends('admin.layouts.layout')
@section('title', 'Services')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Services</span>
        </div>

        {{-- @if(App\Model\Permission::roleHasSpecificPermission('about.create'))
        <div class="box-tools pull-right">
            <a href="{{route('about.create')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-plus"></i> <span class="text-capitalize">Add About</span></a>
        </div>
        @endif --}}

    </div>
<div class="box-body box-min-height">
@if ($datas -> count() > 0)
        @foreach ($datas as $item)
        <form class="form-row col-md-12 " method="POST" action="{{ route('shava.update',$item -> id) }}">
            @csrf
            @method('PUT')
                <div class="repeater pl-3">
                    <div data-repeater-list="information">
                        <div data-repeater-item>
                            <div class="inner-repeater">
                                <div style="width: 40%; float:left" data-repeater-list="information">

                                        @php
                                            $array = json_decode($item -> data);
                                        @endphp
                                            @foreach ($array as $val)

                                            <div data-repeater-item>
                                                <div class="row mt-3">
                                                    <div class="col-md-11">
                                                        <div class="form-group">
                                                            <label for="inputRole">Service Name</label>
                                                            <input type="text" name="service" value="{{ $val -> service }}" placeholder="Description" class="form-control form-control-sm" id="inputRole" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1 pt-5 pl-0" style="padding-top: 26px;">
                                                        <div data-repeater-delete class="btn btn-sm btn-success btn-danger">Delete</div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                </div>
                                <button style="float: left;margin-left:56px; margin-top:26px;" data-repeater-create type="button" class="btn btn-success btn-sm float-right my-3">Add New</button>
                                <button style="float: left;margin-left:30px; margin-top:26px;" type="submit" class="btn btn-sm btn-info">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    @endforeach
@else
    <form class="form-row col-md-12 " method="POST" action="{{ route('shava.store') }}">
        @csrf

            <div class="repeater pl-3">
                <div data-repeater-list="information">
                    <div data-repeater-item>
                        <div class="inner-repeater">
                            <div style="width: 40%; float:left" data-repeater-list="information">
                                <div data-repeater-item>
                                    <div class="row mt-3">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <label for="inputRole">Service Name</label>
                                                <input type="text" name="service" placeholder="Description" class="form-control form-control-sm" id="inputRole" />
                                            </div>
                                        </div>

                                        <div class="col-md-1 pt-5 pl-0" style="padding-top: 26px;">
                                            <div data-repeater-delete class="btn btn-sm btn-success btn-danger">Delete</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button style="float: left;margin-left:56px; margin-top:26px;" data-repeater-create type="button" class="btn btn-success btn-sm float-right my-3">Add New</button>
                            <button style="float: left;margin-left:30px; margin-top:26px;" type="submit" class="btn btn-sm btn-info">SAVE</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
@endif


</div>
    {{-- <div class="box-footer clearfix">
        <div class="row mx-0">
            <div class="col-sm-12 col-md-5 px-0">
                <div role="status" aria-live="polite">Showing
                    {{$datas->firstItem()}} to
                    {{$datas->lastItem()}} of
                    {{$datas->total()}} entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7 p-0 ">
                <div class="float-right">{{$datas->links()}}</div>
            </div>
        </div>
    </div> --}}
</div>

@endsection
@push('page-scripts')
<script defer src="{{asset('admin_assets/assets/js/jquery.repeater.min.js')}}"></script>
@endpush
