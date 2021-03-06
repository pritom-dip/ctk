@extends('admin.layouts.layout')
@section('title', 'List Parishad')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">

        @if(App\Model\Permission::roleHasSpecificPermission('staff.create'))
        <div class="box-tools pull-right">
            <a href="{{route('staff.create')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-plus"></i> <span class="text-capitalize">Add Parishad Member</span></a>
        </div>
        @endif

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped list-data">
                <thead class="bg-purple text-white">
                    <tr>
                        <th class="serial">#</th>
                        <th>iamge</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Married</th>
                        <th>Telephone</th>
                        <th>Phone</th>
                        <th class="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 0 @endphp
                	@forelse($staffs as $item)

                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td><img  style="cursor: pointer; border: 1px solid; #605CA8; border-radius:50%; padding: 4px; width: 40px; height:40px;" src={{ asset('storage/'. $item -> image) }} ></td>
                        <td>{{ $item -> name }}</td>
                        <td>{{ $item -> designation }}</td>
                        <td>{{ $item -> father }}</td>
                        <td>{{ $item -> mother }}</td>
                        <td>
                        @if (($item -> marriage_status) == 1)
                            <p>হ্যা</p>
                        @else
                            <p>না</p>
                        @endif
                        </td>
                        <td>{{ $item -> office_phone }}</td>
                        <td>{{ $item -> personal_phone }}</td>

                        <td>

                            @if(App\Model\Permission::roleHasSpecificPermission('staff.show'))

                        	<a href="{{route('staff.show', $item->id)}}" class="btn btn-xs btn-success action-view" title="View"><i class="fa fa-eye"></i></a>

                            @endif

                            @if(App\Model\Permission::roleHasSpecificPermission('staff.edit'))

                        	<a href="{{route('staff.edit', $item->id)}}" class="btn btn-xs btn-primary action-pencil" title="Edit"><i class="fa fa-pencil"></i></a>

                            @endif

                            @if(App\Model\Permission::roleHasSpecificPermission('staff.destroy'))

                        	<form action="{{route('staff.destroy', $item->id)}}" method="POST" class="d-inline-block">
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
                    {{$staffs->firstItem()}} to
                    {{$staffs->lastItem()}} of
                    {{$staffs->total()}} entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7 p-0 ">
                <div class="float-right">{{$staffs->links()}}</div>
            </div>
        </div>
    </div>
</div>

@endsection
