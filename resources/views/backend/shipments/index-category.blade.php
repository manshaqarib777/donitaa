@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('All Package Category')}}</h1>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="{{ route('admin.categories.create') }}" class="btn btn-circle btn-info">
				<span>{{translate('Add New Category')}}</span>
			</a>
		</div>
	</div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Categories')}}</h5>
    </div>
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th  width="3%">#</th>
                    <th >{{translate('Name')}}</th>
                    <th >{{translate('Icon')}}</th>

                    <th class="text-center">{{translate('Options')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $category)

                        <tr>
                            <td  width="3%">{{ ($key+1) + ($categories->currentPage() - 1)*$categories->perPage() }}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                @if($category->icon)
                                    <img src="{{ url('public/'.\App\Upload::find($category->icon)->file_name) }}" alt="Image" style="width:60px;height:60px;">
                                @endif
                            </td>


                            <td class="text-center">

		                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('admin.categories.edit', $category->id)}}" title="{{ translate('Edit') }}">
		                                <i class="las la-edit"></i>
		                            </a>
		                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('admin.categories.delete-category', ['category'=>$category->id])}}" title="{{ translate('Delete') }}">
		                                <i class="las la-trash"></i>
		                            </a>
		                        </td>
                        </tr>

                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination">
            {{ $categories->appends(request()->input())->links() }}
        </div>
    </div>
</div>
{!! hookView('shipment_addon',$currentView) !!}

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
