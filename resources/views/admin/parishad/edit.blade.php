@extends('admin.layouts.layout')
@section('title', 'Edit Parishad')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Edit Parishad Member</span>
        </div>

        @if(App\Model\Permission::roleHasSpecificPermission('parishad.index'))

        <div class="box-tools pull-right">
            <a href="{{route('parishad.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
        </div>

        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="row">
            <form class="form-row col-md-12" method="POST" action="{{route('parishad.update', $parishad->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-12 pt-4">
                    <div class="row p-2 pb-4">
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" value="{{$parishad->name}}" name="parishad[name]" class="form-control" required/>
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Designation</label>
                                <input type="text" value="{{$parishad->designation}}" name="parishad[designation]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Fathers Name</label>
                                <input type="text" value="{{$parishad->fathers_name}}" name="parishad[fathers_name]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cell</label>
                                <input type="text" value="{{$parishad->cell}}" name="parishad[cell]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" value="{{$parishad->address}}" name="parishad[address]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                @if(!empty($parishad->image))
                                <label  for="pro_pic"><img id="up_44" width="150px" height="150px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('storage/'. $parishad->image) }}" width="150px" alt=""></label>
                                @endif
                                <input name="image" id="pro_pic" class="upload_image" code="up_44"  type="file" >
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
