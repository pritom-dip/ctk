@extends('admin.layouts.layout')
@section('title', 'Edit File')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Edit File</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('file.index'))

        <div class="box-tools pull-right">
            <a href="{{route('file.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">
            <form class="form-row col-md-12" method="POST" action="{{route('file.update',$file -> id)}}" enctype="multipart/form-data">
                @csrf
                @method("PUT")

                <div class="col-md-6 pt-4">
                    <div class="row">
                        <!------------ Single Input ------------>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">File Name:</label>
                                <input value="{{ $file -> name }}" name="data[name]" type="text" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                            <label class="control-label">File Category:</label>
                            <select name="data[category_id]" class="form-control">
                                @foreach ($category as $item)
                                    @if (($item -> id)== ($file -> category_id))
                                        <option value="{{ $item -> id }}" selected>{{ $item -> name }}</option>
                                    @else
                                        <option value="{{ $item -> id }}">{{ $item -> name }}</option>
                                    @endif

                                @endforeach


                            </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">Chose File:</label>
                                <input name="file" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <button class="btn btn-primary" type="submit">SAVE</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 pt-4">
                    <iframe src="{{ asset('storage/'. $file->path) }}" height="600" width="500"></iframe>

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
