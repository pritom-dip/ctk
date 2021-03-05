@extends('admin.layouts.layout')
@section('title', 'Edit Abput')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Create Student</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('about.index'))

        <div class="box-tools pull-right">
            <a href="{{route('about.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">
            <form class="form-row col-md-12" method="POST" action="{{route('about.update', $about->id)}}">
                @csrf
                @method('PUT')

                <div class="col-md-12 pt-4">
                    <div class="row p-2 pb-4">
                        <!------------ Single Input ------------>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea id="ck-editor" name="description" class="form-control">{!! $about->description !!}</textarea> 
                            </div>
                        </div>
                    </div>
                

                    {{-- Facilities --}}
                    <div class="repeater pl-3">
                        <div data-repeater-list="information">
                            <div data-repeater-item>
                                <div class="inner-repeater">
                                    <div style="width: 40%; float:left" data-repeater-list="information">
                                        @foreach(json_decode($about->information) as $value)
                                        <div data-repeater-item>
                                            <div class="row mt-3">
                                                
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <label for="inputRole">Information Name</label>
                                                        <input type="text" value="{{$value->description}}" name="description" placeholder="Description" class="form-control form-control-sm" id="inputRole" />
                                                    </div>
                                                </div>
                                               

                                                <div class="col-md-1 pt-5 pl-0" style="padding-top: 26px;">
                                                    <div data-repeater-delete class="btn btn-sm btn-success btn-danger">Delete</div>
                                                </div>
                                            </div>
                                        </div>
                                         @endforeach
                                    </div>
                                    <button style="float: left;margin-left:56px; margin-top:26px;" data-repeater-create type="button" class="btn btn-success btn-sm float-right my-3">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-------------- button -------------->
                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-sm btn-info">Submit</button>
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