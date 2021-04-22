@extends('admin.layouts.layout')
@section('title', 'Photo Gallery')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">

        @if(App\Model\Permission::roleHasSpecificPermission('gallery.create'))
        <div class="box-tools pull-right">
            <a href="{{route('gallery.create')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-plus"></i> <span class="text-capitalize">Add photo</span></a>
        </div>
        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="table-responsive col-md-12">
            <table class="table table-bordered table-hover table-striped list-data">
                <thead class="bg-purple text-white">
                    <tr>
                        <th class="serial">#</th>
                        <th style="width: 180px;">Gallery Image</th>

                        <th class="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 0 @endphp
                	@forelse($datas as $item)

                    <tr>
                        <td>{{ $count + $datas->firstItem() }}</td>
                        <td><img  style="cursor: pointer; border: 1px solid; #605CA8; border-radius:5%; padding: 1px; width: 80px; height:80px;" src={{ asset('storage/'. $item -> image) }} ></td>



                        <td style="width: 20%">

                            @if(App\Model\Permission::roleHasSpecificPermission('gallery.show'))

                        	<a href="{{route('gallery.show', $item->id)}}" class="btn btn-xs btn-success action-view" title="View"><i class="fa fa-eye"></i></a>

                            @endif

                            @if(App\Model\Permission::roleHasSpecificPermission('gallery.edit'))

                        	<a href="{{route('gallery.edit', $item->id)}}" class="btn btn-xs btn-primary action-pencil" title="Edit"><i class="fa fa-pencil"></i></a>

                            @endif

                            @if(App\Model\Permission::roleHasSpecificPermission('gallery.destroy'))

                        	<form action="{{route('gallery.destroy', $item->id)}}" method="POST" class="d-inline-block">
    						    @csrf
    						    @method('DELETE')
    						    <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
    						    	<i class="fa fa-trash"></i>
    						    </button>
    						</form>

                            @endif

                        </td>
                    </tr>

                    @php $count++ @endphp

                    @empty
                    <tr>
                        <td colspan="6" align="center">
                            No data available, create one
                        </td>
                    </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>
    <div class="box-footer clearfix">
        <div class="row mx-0">
            <div class="col-sm-12 col-md-5 px-0">
                <div role="status" aria-live="polite">Showing
                    {{$datas->firstItem()}} to
                    {{$datas->lastItem()}} of
                    {{$datas->total()}} entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7 p-0 ">
                <div class="float-right">{{$datas->links()}}</div>
            </div>
        </div>
    </div>
</div>

@endsection
