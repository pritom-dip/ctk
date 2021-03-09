@extends('admin.layouts.layout')
@section('title', 'Home settings')

@section('content')

<div class="box box-success">
      <div class="box-body box-min-height">
        <div class="row">
            @foreach ($datas as $item)


            <form class="col-md-12" method="POST" action="{{route('homesetting.update',$item ->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row col-md-12">
                    <!------------ col ------------>
                    <div class="col-md-4">
                        <div class="col-4 mb-5">
                            <label  for="pro_pic1"><img id="up_44" width="150px" height="150px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ URL::to('/')}}/admin_assets/defult_image/gallery.png" width="150px" alt=""></label>
                            <input name="q" id="pro_pic1" class="upload_image" code="up_44"  type="file" >
                            <br>
                            <br>


                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">Site Name</label>
                                <input value="{{ $item -> site_name}}" type="text" name="home[site_name]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">Facebook Link</label>
                                <input value="{{ $item -> fb_url}}" type="text" name="home[fb_url]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">Twitter Link</label>
                                <input value="{{ $item -> twiter_url}}" type="text" name="home[twiter_url]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">Linkedin Link</label>
                                <input value="{{ $item -> linkdin_url}}" type="text" name="home[linkdin_url]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">Google+ Link</label>
                                <input value="{{ $item -> google_url}}" type="text" name="home[google_url]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="control-label">Youtube Link</label>
                                <input value="{{ $item -> youtube_url}}" type="text" name="home[youtube_url]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn btn btn-primary">UPDATE</button>
                        </div>
                    </div>

                   <!------------ col ------------>
                    <div class="col-md-4">
                        <div class="col-6 mb-5">
                            <label  for="pro_pic3"><img id="up_46" width="150px" height="150px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ URL::to('/')}}/admin_assets/defult_image/gallery.png" width="150px" alt=""></label>
                            <input name="4" id="pro_pic3" class="upload_image" code="up_46"  type="file" >
                            <br>
                            <br>


                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">Mayor Name</label>
                                <input value="{{ $item -> mayor_name}}" type="text" name="home[mayor_name]" class="form-control" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">Adress</label>
                                <input value="{{ $item -> address}}" type="text" name="home[address]" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <!------------ col ------------>
                   <div class="col-md-4">
                    <div class="col-4 mb-5">
                        <label  for="pro_pic2"><img id="up_45" width="150px" height="150px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ URL::to('/')}}/admin_assets/defult_image/gallery.png" width="150px" alt=""></label>
                        <input name="3" id="pro_pic2" class="upload_image" code="up_45"  type="file" >
                        <br>
                        <br>


                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="control-label">App url</label>
                            <input value="{{ $item ->app_url}}" type="text" name="home[app_url]" class="form-control" />
                        </div>
                    </div>
               </div>
                </div>
            </form>

            @endforeach
        </div>
        <!-- /.row -->
    </div>
</div>

@endsection
