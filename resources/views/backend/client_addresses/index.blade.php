@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('All Client Addresses')}}</h1>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="{{ route('admin.client-addresses.create') }}" class="btn btn-circle btn-info">
				<span>{{translate('Add New Client Addresses')}}</span>
			</a>
		</div>
	</div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Client Addresses')}}</h5>
    </div>
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th  width="3%">#</th>
                    <th >{{translate('Address')}}</th>
                    <th >{{translate('Address Type')}}</th>
                    <th >{{translate('Phone')}}</th>

                    <th  width="10%" class="text-center">{{translate('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($client_addresses as $key => $client_address)

                        <tr>
                            <td  width="3%">{{ ($key+1) + ($client_addresses->currentPage() - 1)*$client_addresses->perPage() }}</td>
                            <td width="20%">{{$client_address->name}}</td>
                            <td width="20%">{{$client_address->type}}</td>
                            <td width="20%">{{$client_address->phone}}</td>

                            <td class="text-center">
		                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('admin.client-addresses.edit', $client_address->id)}}" title="{{ translate('Edit') }}">
		                                <i class="las la-edit"></i>
		                            </a>
		                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('admin.client-addresses.delete-address', ['address'=>$client_address->id])}}" title="{{ translate('Delete') }}">
		                                <i class="las la-trash"></i>
		                            </a>
		                        </td>
                        </tr>

                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination">
            {{ $client_addresses->appends(request()->input())->links() }}
        </div>
    </div>
</div>
{!! hookView('spot-cargo-shipment-client-addon',$currentView) !!}

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
