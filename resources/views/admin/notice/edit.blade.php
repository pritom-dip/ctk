@extends('admin.layouts.layout')
@section('title', 'Edit Notice')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Create Notice</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('about.index'))

        <div class="box-tools pull-right">
            <a href="{{route('notice.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">
            <form class="form-row col-md-12" method="POST" action="{{route('notice.update',$notice ->id)}}">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="inputRole">Name</label>
                        <input type="text" value="{{ $notice -> name }}" name="notice[name]" placeholder="Description" class="form-control form-control-sm" id="inputRole" />
                    </div>
                </div>
                <div class="col-md-11">
                    <div class="form-group">
                        <label for="inputRole">Short Description</label>
                        <input type="text" value="{{ $notice -> short_desc }}" name="notice[short_desc]" placeholder="Description" class="form-control form-control-sm" id="inputRole" />
                    </div>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="row p-2 pb-4">
                        <!------------ Single Input ------------>
                        <div class="col-3" style="margin-left: 20px; ">
                            <div class="form-group">
                                <label class="control-label">Long Description</label>
                                <textarea id="ck-editor" name="notice[long_desc]" class="form-control">{{ $notice -> long_desc }}</textarea>
                            </div>
                        </div>



                <!-------------- button -------------->
                <div class="col-12 mb-3 mt-4" style="margin-left: 20px; margin-bottom: 100px;">
                    <button type="submit" class="btn btn-sm btn-info">UPDATE</button>
                </div>
                <!-------------- button -------------->
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
