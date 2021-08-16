@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('All Receiver Addresses')}}</h1>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="{{ route('admin.receiver-addresses.create') }}" class="btn btn-circle btn-info">
				<span>{{translate('Add New Receiver Addresses')}}</span>
			</a>
		</div>
	</div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Receiver Addresses')}}</h5>
    </div>
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th  width="3%">#</th>
                    <th >{{translate('Address')}}</th>
                    <th >{{translate('Address Name')}}</th>
                    <th >{{translate('Phone')}}</th>
                    @if(auth()->user()->user_type == 'customer')
                        <th >{{translate('Default')}}</th>
                    @endif
                    @if(auth()->user()->user_type != 'customer')
                        <th >{{translate('Client')}}</th>
                    @endif
                    <th  width="10%" class="text-center">{{translate('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($receiver_addresses as $key => $receiver_address)

                        <tr>
                            <td  width="3%">{{ ($key+1) + ($receiver_addresses->currentPage() - 1)*$receiver_addresses->perPage() }}</td>
                            <td width="20%">{{$receiver_address->name}}</td>
                            <td width="20%">{{$receiver_address->type}}</td>
                            <td width="20%">{{$receiver_address->phone}}</td>
                            @if(auth()->user()->user_type == 'customer')
                                <td width="20%">
                                    <label class="checkbox">
                                        <input type="checkbox" onchange="update_currency_status(this,{{$receiver_address->id}})" class="form-control" {{($receiver_address->default==1)?'checked':''}} />
                                        <span></span>
                                    </label>
                                </td>
                            @endif

                            @if(auth()->user()->user_type != 'customer')
                                <td width="20%">{{$receiver_address->receiver->name}}</td>
                            @endif
                            <td class="text-center">
		                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('admin.receiver-addresses.edit', $receiver_address->id)}}" title="{{ translate('Edit') }}">
		                                <i class="las la-edit"></i>
		                            </a>
		                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('admin.receiver-addresses.delete-address', ['address'=>$receiver_address->id])}}" title="{{ translate('Delete') }}">
		                                <i class="las la-trash"></i>
		                            </a>
		                        </td>
                        </tr>

                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination">
            {{ $receiver_addresses->appends(request()->input())->links() }}
        </div>
    </div>
</div>
{!! hookView('spot-cargo-shipment-receiver-addon',$currentView) !!}

@endsection
@section('script')
    <script type="text/javascript">
        function update_currency_status(el,id)
        {
            var checked=0;
            if(el.checked){
                checked = 1;
            }

            $.post('{{ route('admin.receiver-addresses.update-status') }}', {_token:'{{ csrf_token() }}', id:id, checked:checked}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Status updated successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
                location.reload();
            });

        }


    </script>
@endsection
@section('modal')
    @include('modals.delete_modal')
@endsection
