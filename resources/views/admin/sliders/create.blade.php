@extends('admin.layouts.layout')
@section('title', 'Add Slider Photo')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Add Slider Photo</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('category.index'))

        <div class="box-tools pull-right">
            <a href="{{route('slider.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">
            <form class="form-row col-md-12" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 pt-4">
                    <div class="row">
                        <!------------ Single Input ------------>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Select Multiple Image</label>
                                <input class="form-control" type="file" name="photo[]" multiple>

                            </div>
                        </div>
                        <!------------ button ------------>
                        <div class="col-md-4">
                            <button type="submit" style="margin-top:25px" class="btn btn-info">UPLOAd</button>
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


