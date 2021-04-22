@extends('admin.layouts.layout')
@section('title', 'Structure')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Structure</span>
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
        <form class="form-row col-md-12 " method="POST" action="{{ route('structure.update',$item -> id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-4 mb-5">
                <label  for="pro_pic"><img id="up_44" width="300px" height="400px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('storage/'. $item ->image)}}" width="150px" alt=""></label>
                <input name="image" id="pro_pic" class="upload_image" code="up_44"  type="file" >
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary form-control" value="SAVE">
            </div>
        </form>
    @endforeach
@else
    <form class="form-row col-md-12 " method="POST" action="{{ route('structure.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4 mb-5">
            <label  for="pro_pic"><img id="up_44" width="300px" height="400px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ URL::to('/')}}/admin_assets/defult_image/gallery.png" width="150px" alt=""></label>
            <input name="image" id="pro_pic" class="upload_image" code="up_44"  type="file" >
        </div>
        <div class="col-md-2">
            <input type="submit" class="btn btn-primary form-control" value="SAVE">
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
