@extends('admin.layouts.layout')
@section('title', 'Create Parishad')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <div class="box-header pull-left">
            <span class="box-title">Create Parishad Member</span>
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
            <form class="form-row col-md-12" method="POST" action="{{route('parishad.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 pt-4">
                    <div class="row p-2 pb-4">
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="parishad[name]" class="form-control" required/>
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Designation</label>
                                <input type="text" name="parishad[designation]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Fathers Name</label>
                                <input type="text" name="parishad[fathers_name]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cell</label>
                                <input type="text" name="parishad[cell]" class="form-control" />
                            </div>
                        </div>
                        <!------------ Single Input ------------>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="pro_pic"><img id="up_44" width="150px" height="150px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ URL::to('/')}}/admin_assets/defult_image/gallery.png" width="150px" alt=""></label>
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
