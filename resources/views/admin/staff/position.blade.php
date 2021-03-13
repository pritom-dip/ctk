@extends('admin.layouts.layout')
@section('title', 'Staff Position')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Staff Position</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('staff.index'))

        <div class="box-tools pull-right">
            <a href="{{route('staff.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">



            <form method="post" action="{{route('staff.savePosition')}}" enctype="multipart/form-data">
                @csrf
                <ul id="mySortable">
                    @php $count = 1; @endphp
                    @foreach($staffs as $staff)
                    <li draggable="true" style="padding: 10px; border: 1px solid grey; margin-bottom: 10px;margin-right: 20px;">
                        <label  for="pro_pic">{{$staff->name}}</label>
                        <input type="hidden" name="position[{{$staff->id}}]" value="{{$count++}}"></li>
                    @endforeach
                    
                </ul>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>

            </form>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>

@endsection

@push('page-scripts')
<script defer src="{{asset('admin_assets/assets/js/jquery-ui.js')}}"></script>
@endpush