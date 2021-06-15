@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('All Countries')}}</h1>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="{{ route('admin.countries.create') }}" class="btn btn-circle btn-info">
				<span>{{translate('Add New Country')}}</span>
			</a>
		</div>
	</div>
</div>

<div class="card">
    <div class="card-header row gutters-5">
        <div class="text-center col text-md-left">
            <h5 class="mb-md-0 h6">{{ translate('All Countries') }}</h5>
        </div>
        <div class="col-md-4">
            <form class="" id="sort_countries" action="" method="GET">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th  width="3%">#</th>
                    <th >{{translate('Name')}}</th>
                    <th >{{translate('Code')}}</th>
                    <th >{{translate('Email')}}</th>
                    <th >{{translate('Phone')}}</th>
                    <th >{{translate('Cell Phone')}}</th>
                    <th >{{translate('Address')}}</th>
                    <th >{{translate('Currency')}}</th>
                    <th  width="10%" class="text-center">{{translate('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $key => $country)

                        <tr>
                            <td  width="3%">{{ ($key+1) + ($countries->currentPage() - 1)*$countries->perPage() }}</td>
                            <td width="20%">{{$country->name}}</td>
                            <td width="20%">{{$country->iso2}}</td>
                            <td width="20%">{{$country->email}}</td>
                            <td width="20%">{{$country->phone}}</td>
                            <td width="20%">{{$country->cell_phone}}</td>
                            <td width="20%">{{$country->address}}</td>
                            <td width="20%">{{ in_array($country->currency,$currencies)?$country->currency:''}}</td>

                            <td class="text-center">
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('admin.countries.edit', $country->id)}}" title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('admin.countries.delete-country', ['country'=>$country->id])}}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>

                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination">
            {{ $countries->appends(request()->input())->links() }}
        </div>
    </div>
</div>
{!! hookView('spot-cargo-shipment-country-addon',$currentView) !!}

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
