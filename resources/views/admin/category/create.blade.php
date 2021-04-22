@extends('admin.layouts.layout')
@section('title', 'Create Category')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Create Category</span>
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
            <form class="form-row col-md-8" method="POST" action="{{route('category.store')}}">
                @csrf

                <div class="col-md-12 pt-4">
                    <div class="row">
                        <!------------ Single Input ------------>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Category Name:</label>
                                <input name="name" type="text" class="form-control">

                            </div>
                        </div>
                        <!------------ button ------------>
                        <div class="col-md-4">
                            <button type="submit" style="margin-top:25px" class="btn btn-info">Submit</button>
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
