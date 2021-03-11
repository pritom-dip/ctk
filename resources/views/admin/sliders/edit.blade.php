@extends('admin.layouts.layout')
@section('title', 'Update Slider Image')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Update Image</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('category.index'))

        <div class="box-tools pull-right">
            <a href="{{route('category.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">
            <form class="form-row col-md-8" method="POST" action="{{route('slider.update',$slider -> id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-12 pt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label  for="pro_pic"><img id="up_44" width="200px" height="200px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('storage/'. $slider -> image)}}"  alt=""></label>
                            <input name="image" id="pro_pic" class="upload_image" code="up_44"  type="file" >
                        </div>
                        <!------------ button ------------>
                        <div class="col-md-4">
                            <button type="submit" style="margin-top:25px" class="btn btn-info">UPDATE</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>

@endsection

@push('page-scripts')
<script defer src="{{asset('admin_assets/assets/js/jquery.repeater.min.js')}}"></script>
@endpush
