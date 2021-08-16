@extends('backend.layouts.app')
@php
$user_type = Auth::user()->user_type;
$staff_permission = json_decode(Auth::user()->staff->role->permissions ?? '[]');
$auth_user = Auth::user();
@endphp

@section('sub_title'){{ translate('Shipments') }}@endsection
@section('subheader')
    <!--begin::Subheader-->
    <div class="py-2 subheader py-lg-6 subheader-solid" id="kt_subheader">
        <div class="flex-wrap container-fluid d-flex align-items-center justify-content-between flex-sm-nowrap">
            <!--begin::Info-->
            <div class="flex-wrap mr-1 d-flex align-items-center">
                <!--begin::Page Heading-->
                <div class="flex-wrap mr-5 d-flex align-items-baseline">
                    <!--begin::Page Title-->
                    <h5 class="my-1 mr-5 text-dark font-weight-bold">{{ translate('Shipments') }}</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul
                        class="p-0 my-2 mr-5 breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted">{{ translate('Dashboard') }}</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">{{ translate('Shipments') }}</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                    <a href="{{ route('admin.shipments.create') }}"
                        class="btn btn-light-primary font-weight-bolder btn-sm"><i class="flaticon2-add-1"></i>
                        {{ translate('Add New Shipment') }}</a>
                    @if (in_array($auth_user->user_type, ['admin']))
                        <a href="{{ route('admin.shipments.import') }}"
                            class="btn btn-light-primary font-weight-bolder btn-sm ml-3">{{ translate('Import Shipments') }}</a>
                    @endif
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-custom gutter-b">


        <div class="card-body">
            <!--begin::Search Form-->
            <form method="GET" action="{{ url()->current() }}" id="search_form">
                <div class="mb-7">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-xl-12">
                            <div class="row align-items-center">
                                <div class="my-2 col-md-4 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" name="code" value="<?php if (isset($_GET['code'])) {
                                            echo $_GET['code'];
                                        } ?>" class="form-control"
                                            placeholder="{{ translate('Shipment Code') }}"
                                            id="kt_datatable_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                @if ($auth_user->user_type != 'customer')
                                    <div class="my-2 col-md-4 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mb-0 mr-3 d-none d-md-block">{{ translate('Client') }}:</label>
                                            <select name="client_id" class="form-control" id="kt_datatable_search_status">
                                                <option value="">{{ translate('All') }}</option>
                                                @foreach (\App\Client::withoutGlobalScope('restriction')->get() as $client)
                                                    <option @if (isset($_GET['client_id']) && $_GET['client_id'] == $client->id) selected @endif value="{{ $client->id }}">
                                                        {{ $client->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="my-2 col-md-4 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mb-0 mr-3 d-none d-md-block">{{ translate('Type') }}:</label>
                                        <select name="type" class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            @if ($type == null || $type == \App\Shipment::PICKUP)
                                                <option @if (isset($_GET['type']) && $_GET['type'] == \App\Shipment::PICKUP) selected @endif
                                                    value="{{ \App\Shipment::PICKUP }}">{{ translate('Pickup') }}</option>
                                            @endif
                                            @if ($type == null || $type == \App\Shipment::DROPOFF)
                                                <option @if (isset($_GET['type']) && $_GET['type'] == \App\Shipment::DROPOFF) selected @endif
                                                    value="{{ \App\Shipment::DROPOFF }}">{{ translate('Dropoff') }}
                                                </option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                @if ($auth_user->user_type != 'branch')
                                    <div class="my-2 col-md-4 my-md-5">
                                        <div class="d-flex align-items-center">
                                            <label class="mb-0 mr-3 d-none d-md-block">{{ translate('Branch') }}:</label>
                                            <select name="branch_id" class="form-control" id="kt_datatable_search_type">
                                                @foreach (\App\Branch::all() as $Branch)
                                                    <option @if (isset($_GET['branch_id']) && $_GET['branch_id'] == $Branch->id) selected @endif value="{{ $Branch->id }}">
                                                        {{ $Branch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="mt-5 col-lg-7 col-xl-7 mt-lg-7">
                            <button type="submit"
                                class="px-6 btn btn-light-primary font-weight-bold">{{ translate('Search') }}</button>
                            <button id="reset_search"
                                class="px-6 btn btn-light-primary font-weight-bold">{{ translate('Reset') }}</button>
                        </div>
                        <div class="mt-5 col-lg-5 col-xl-5 mt-lg-5 text-right">
                            <div class="flex-wrap py-3 card-header">
                                {{-- <div class="card-title">
                                    <h3 class="card-label">
                                        {{ $page_name }}
                                    </h3>
                                </div> --}}
                                @if (count($actions) > 0)
                                    <div class="card-toolbar" id="actions-button">
                                        <!--begin::Dropdown-->
                                        <div class="mr-2 dropdown dropdown-inline">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>{{ translate('Actions') }}</button>
                                            <!--begin::Dropdown Menu-->
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="py-2 navi flex-column navi-hover">
                                                    <li class="pb-2 navi-header font-weight-bolder text-uppercase font-size-sm text-primary">
                                                        {{ translate('Choose an option:') }}</li>
                                                    <li class="navi-item">
                                                        @php
                                                            $action_counter = 0;
                                                        @endphp
                                                        @foreach ($actions as $action)
                                                            @if (in_array($auth_user->user_type, $action['user_role']) || in_array($action['permissions'] ?? '', json_decode($auth_user->staff->role->permissions ?? '[]')))
                                                                @if ($action['index'] == true)
                                                                    @php
                                                                        $action_counter++;
                                                                    @endphp
                                                                    <a href="#" class="action_checker navi-link @if (!isset($action['js_function_caller'])) action-caller @endif" @if (isset($action['js_function_caller']))
                                                                        onclick="{{ $action['js_function_caller'] }}" @endif
                                                                        @if (isset($action['status']))
                                                                            data-status="{{ $action['status'] }}"
                                                                        @endif
                                                                        @if (isset($action['text']))
                                                                            data-text="{{ $action['text'] }}"
                                                                        @endif
                                                                        data-url="{{ $action['url'] }}" data-method="{{ $action['method'] }}">
                                                                        <span class="navi-icon">
                                                                            <i class="{{ $action['icon'] }}"></i>
                                                                        </span>
                                                                        <span class="navi-text">{{ $action['title'] }}</span>
                                                                    </a>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </li>

                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                            <!--end::Dropdown Menu-->
                                        </div>
                                        @if ($action_counter == 0)
                                            <script>
                                                document.getElementById("actions-button").style.display = "none";
                                            </script>
                                        @endif
                                        <!--end::Dropdown-->
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
            </form>
        </div>
        <!--end::Search Form-->
        <form id="tableForm">
            @csrf()
            <table class="table mb-0 aiz-table">
                <thead>
                    <tr>
                        <th width="3%"></th>
                        <th width="3%">#</th>
                        <th>{{ translate('Code') }}</th>
                        @if ($status == 'all')
                            <th>{{ translate('Status') }}</th>
                        @endif
                        <th>{{ translate('Type') }}</th>
                        @if ($auth_user->user_type != 'branch')
                            <th>{{ translate('Branch') }}</th>
                        @endif

                        <th>{{ translate('Shipping Cost') }}</th>
                        <th>{{ translate('Payment Method') }}</th>
                        <th>{{ translate('Paid') }}</th>
                        <th>{{ translate('Shipping Date') }}</th>
                        @if ($status == \App\Shipment::CAPTAIN_ASSIGNED_STATUS || $status == \App\Shipment::RECIVED_STATUS)
                            <th>{{ translate('Captain') }}</th>
                        @endif
                        @if ($status == \App\Shipment::APPROVED_STATUS || $status == \App\Shipment::CAPTAIN_ASSIGNED_STATUS || $status == \App\Shipment::RECIVED_STATUS)
                            <th>{{ translate('Mission') }}</th>
                        @endif
                        <th class="text-center">{{ translate('Created At') }}</th>
                        @if ($status != 'all')
                            <th class="text-center">{{ translate('Options') }}</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $client_id = 0;
                    @endphp

                    @foreach ($shipments as $key => $shipment)
                        @if ($client_id != $shipment->client_id)
                            <tr class="bg-light">
                                <td><label class="checkbox checkbox-success"><input type="checkbox"
                                            onclick="check_client(this,{{ $shipment->client_id }})" /><span></span></label>
                                </td>
                                <th colspan="4">
                                    @if ($user_type == 'admin' || in_array('1100', $staff_permission) || in_array('1005', $staff_permission))
                                        <a
                                            href="{{ route('admin.clients.show', $shipment->client_id) }}">{{ @$shipment->client->name }}</a>
                                    @else
                                        {{ @$shipment->client->name }}
                                    @endif
                                </th>
                            </tr>
                            @php
                                $client_id = $shipment->client_id;
                            @endphp
                        @endif
                        @php
                            $client_address = \App\ClientAddress::withoutGlobalScope('restriction')->where('name', $shipment->client_address)
                                ->get()
                                ->first();
                        @endphp
                        @php
                            $receiver_address = \App\ReceiverAddress::withoutGlobalScope('restriction')->where('name', $shipment->receiver_address)
                                ->get()
                                ->first();
                        @endphp
                        <tr>
                            <td>
                                @if ($shipment->mission_id)
                                    -
                                @else
                                    <label class="checkbox checkbox-success"><input
                                            data-missionid="{{ $shipment->mission_id }}"

                                            data-clientid="{{ @$shipment->client->id }}"
                                            data-clientaddress="{{ @$client_address->name }}"
                                            data-clientaddress2="{{ @$client_address->address }}"
                                            data-clientname="{{ @$shipment->client->name }}"
                                            data-clientcountry="{{ $shipment->from_country->name ?? '' }}"
                                            data-clientcountryid="{{ $shipment->from_country_id }}"
                                            data-clientstate="{{ $shipment->from_state->name ?? '' }}"
                                            data-clientstateid="{{ $shipment->from_state_id }}"
                                            data-clientarea="{{ $shipment->from_area->name ?? '' }}"
                                            data-clientareaid="{{ $shipment->from_area_id }}"
                                            data-clientzipcode="{{ @$client_address->zip_code }}"
                                            data-clientemail="{{ $shipment->client->email }}"
                                            data-clientphone="{{ $shipment->client->responsible_mobile }}"
                                            data-pickupdate="{{ $shipment->pickup_date }}"


                                            data-receiverid="{{ @$shipment->receiver->id }}"
                                            data-receiveraddress="{{ @$receiver_address->name }}"
                                            data-receiveraddress2="{{ @$receiver_address->address }}"
                                            data-receivername="{{ @$shipment->receiver->name }}"
                                            data-receivercountry="{{ $shipment->to_country->name ?? '' }}"
                                            data-receivercountryid="{{ $shipment->to_country_id }}"
                                            data-receiverstate="{{ $shipment->to_state->name ?? '' }}"
                                            data-receiverstateid="{{ $shipment->to_state_id }}"
                                            data-receiverarea="{{ $shipment->to_area->name ?? '' }}"
                                            data-receiverareaid="{{ $shipment->to_area_id }}"
                                            data-receiverzipcode="{{ @$receiver_address->zip_code }}"
                                            data-receiveremail="{{ $shipment->receiver->email }}"
                                            data-receiverphone="{{ $shipment->receiver->responsible_mobile }}"


                                            data-branchid="{{ $shipment->branch_id }}"
                                            data-branchname="{{ @$shipment->branch->name }}" type="checkbox"
                                            class="sh-check checkbox-client-id-{{ $shipment->client_id }}"
                                            name="checked_ids[]" value="{{ $shipment->id }}" /><span></span></label>
                                @endif
                            </td>
                            @if ($user_type == 'admin' || in_array('1100', $staff_permission) || in_array('1009', $staff_permission))
                                <td width="3%"><a
                                        href="{{ route('admin.shipments.show', ['shipment' => $shipment->id]) }}">{{ $key + 1 + ($shipments->currentPage() - 1) * $shipments->perPage() }}</a>
                                </td>
                                <td width="5%"><a
                                        href="{{ route('admin.shipments.show', ['shipment' => $shipment->id]) }}">{{ $shipment->code }}</a>
                                </td>
                            @else
                                <td width="3%">{{ $key + 1 + ($shipments->currentPage() - 1) * $shipments->perPage() }}
                                </td>
                                <td width="5%">{{ $shipment->code }}</td>
                            @endif
                            @if ($status == 'all')
                                <td>{{ $shipment->getStatus() }}</td>
                            @endif
                            <td>{{ $shipment->type }}</td>
                            @if ($auth_user->user_type != 'branch')
                            @if (isset($shipment->branch_id))
                                @if (in_array($user_type, ['admin']) || in_array('1100', $staff_permission) || in_array('1006', $staff_permission))
                                    <td><a
                                            href="{{ route('admin.branchs.show', @$shipment->branch_id) }}">{{ @$shipment->branch->name }}</a>
                                    </td>
                                @else
                                    <td>{{ @$shipment->branch->name }}</td>
                                @endif
                            @else
                                <td></td>
                            @endif
                            @endif

                            <td>{{ format_price(convert_price($shipment->tax + $shipment->shipping_cost + $shipment->insurance)) }}
                            </td>
                            <td>{{ $shipment->pay->name ?? '' }}</td>
                            <td>
                            @if ($shipment->paid == 1) {{ translate('Paid') }} @else -
                                @endif
                            </td>
                            <td>{{ $shipment->shipping_date }}</td>
                            @if ($status == \App\Shipment::CAPTAIN_ASSIGNED_STATUS || $status == \App\Shipment::RECIVED_STATUS)
                                <td><a href="{{ route('admin.captains.show', $shipment->captain_id) }}">@isset($shipment->captain_id)
                                        {{ $shipment->captain->name }} @endisset</a></td>
                            @endif
                            @if ($status == \App\Shipment::APPROVED_STATUS || $status == \App\Shipment::CAPTAIN_ASSIGNED_STATUS || $status == \App\Shipment::RECIVED_STATUS)
                                <td>@isset($shipment->current_mission->id) <a
                                            href="{{ route('admin.missions.show', $shipment->current_mission->id) }}">
                                        {{ $shipment->current_mission->code }}</a> @endisset</td>
                            @endif
                            <td class="text-center">
                                {{ $shipment->created_at->format('Y-m-d') }}
                            </td>
                            @if ($status != 'all')
                                <td class="text-center">
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        href="{{ route('admin.shipments.print', ['shipment' => $shipment->id, 'invoice']) }}"
                                        title="{{ translate('Print') }}">
                                        <i class="las la-print" style="color: #f9732c;font-size: 20px;"></i>
                                    </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        href="{{ route('admin.shipments.show', $shipment->id) }}"
                                        title="{{ translate('View') }}">
                                        <i class="las la-eye" style="color: #f9732c;font-size: 20px;"></i>
                                    </a>

                                    @if ($status != \App\Shipment::APPROVED_STATUS && $status != \App\Shipment::CAPTAIN_ASSIGNED_STATUS && $status != \App\Shipment::CLOSED_STATUS && $status != \App\Shipment::RECIVED_STATUS && $status != \App\Shipment::IN_STOCK_STATUS && $status != \App\Shipment::DELIVERED_STATUS && $status != \App\Shipment::SUPPLIED_STATUS && $status != \App\Shipment::RETURNED_STATUS)
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            href="{{ route('admin.shipments.edit', $shipment->id) }}"
                                            title="{{ translate('Edit') }}">
                                            <i class="las la-edit" style="color: #f9732c;font-size: 20px;"></i>
                                        </a>
                                    @endif

                                </td>
                            @endif
                        </tr>

                    @endforeach

                </tbody>
            </table>

            <!-- Assign-to-captain Modal -->
            <div id="assign-to-captain-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        @if (isset($status))
                            @if ($status == \App\Shipment::SAVED_STATUS || $status == \App\Shipment::REQUESTED_STATUS)
                                <div class="modal-header">
                                    <h4 class="modal-title h6">{{ translate('Confirm Shipment') }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <input type="hidden" name="Mission[to_branch_id]"
                                            class="form-control branch_hidden" />
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Client/Sender') }}:</label>
                                                <input type="hidden" name="Mission[client_id]" value=""
                                                    id="pick_up_client_id_hidden">
                                                <select class="form-control" id="pick_up_client_id" disabled>
                                                    @foreach (\App\Client::withoutGlobalScope('restriction')->get() as $client)
                                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="">{{ translate('Pickup Date') }}:</label>
                                                <input type="text" placeholder="{{ translate('Pickup Date') }}"
                                                    id="pick_up_date" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">{{ translate('Address') }}:
                                                    <small>{{ translate('Building, Street Name etc') }}</small></label>
                                                <div class="form-group">
                                                    <input placeholder="{{ translate('Address') }}"
                                                        id="pick_up_client_address" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">{{ translate('Address') }}:
                                                    <small>{{ translate('Store, Dept, Apt No, Floor etc') }}</small></label>
                                                <div class="form-group">
                                                    <input placeholder="{{ translate('Address') }}"
                                                        id="pick_up_client_address2" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Country') }}:</label>
                                                <input type="text" placeholder="{{ translate('Country') }}"
                                                    id="pick_up_client_country" id="country" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Region') }}:</label>
                                                <input type="text" placeholder="{{ translate('Region') }}"
                                                    id="pick_up_client_state" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Area') }}:</label>
                                                <input type="text" placeholder="{{ translate('Area') }}"
                                                    id="pick_up_client_area" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Zip/Postal Code') }}:</label>
                                                <input type="text" placeholder="{{ translate('Zip/Postal Code') }}"
                                                    id="pick_up_client_zip_code"  class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Email') }}:</label>
                                                <input type="text" placeholder="{{ translate('Email') }}"
                                                    id="pick_up_client_email" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Phone') }}:</label>
                                                <input type="text" placeholder="{{ translate('Phone') }}"
                                                    id="pick_up_client_phone" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Type') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Pickup') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Status') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Shipment Pending') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @elseif($status == \App\Shipment::APPROVED_STATUS || $status == \App\Shipment::PACKAGE_DEPARTED || $status == \App\Shipment::DOMESTIC_FACILITY)
                                <div class="modal-header">
                                    <h4 class="modal-title h6">{{ translate('Create Delivery Mission to Receiver') }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <input type="hidden" name="Mission[to_branch_id]"
                                            class="form-control branch_hidden" />
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Client/Sender') }}:</label>
                                                <input type="hidden" name="Mission[client_id]" value=""
                                                    id="pick_up_client_id_hidden">
                                                <select style="background:#f3f6f9;color:#3f4254;" name="Mission[client_id]"
                                                    class="form-control" id="pick_up_client_id" disabled>
                                                    @foreach (\App\Client::withoutGlobalScope('restriction')->get() as $client)
                                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Reciver') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    name="Mission[name]" class="form-control" id="delivery_receiver_name" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">{{ translate('Address') }}:
                                                    <small>{{ translate('Building, Street Name etc') }}</small></label>
                                                <div class="form-group">
                                                    <input placeholder="{{ translate('Address') }}"
                                                        id="delivery_receiver_address" name="Mission[address]" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">{{ translate('Address') }}:
                                                    <small>{{ translate('Store, Dept, Apt No, Floor etc') }}</small></label>
                                                <div class="form-group">
                                                    <input placeholder="{{ translate('Address') }}"
                                                        id="delivery_receiver_address2" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Country') }}:</label>
                                                <input type="text" placeholder="{{ translate('Country') }}"
                                                    id="delivery_receiver_country" id="country" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Region') }}:</label>
                                                <input type="hidden" name="Mission[state]" class="form-control"
                                                    id="delivery_receiver_state_id" disabled />
                                                <input type="text" placeholder="{{ translate('Region') }}"
                                                    id="delivery_receiver_state" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Area') }}:</label>
                                                <input type="hidden" name="Mission[area]" class="form-control"
                                                id="delivery_receiver_area_id" disabled />
                                                <input type="text" placeholder="{{ translate('Area') }}"
                                                    id="delivery_receiver_area" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Zip/Postal Code') }}:</label>
                                                <input type="text" placeholder="{{ translate('Zip/Postal Code') }}"
                                                    id="delivery_receiver_zip_code"  class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Email') }}:</label>
                                                <input type="text" placeholder="{{ translate('Email') }}"
                                                    id="delivery_receiver_email" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Phone') }}:</label>
                                                <input type="text" placeholder="{{ translate('Phone') }}"
                                                    id="delivery_receiver_phone" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Type') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Delivery') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Status') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled update_status" value="{{ translate('PACKAGE DEPARTED') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @elseif($status == \App\Shipment::DELIVERED_STATUS)
                                <div class="modal-header">
                                    <h4 class="modal-title h6">{{ translate('Create Supply Mission') }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <input type="hidden" name="Mission[to_branch_id]"
                                            class="form-control branch_hidden" />
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Client/Sender') }}:</label>
                                                <input type="hidden" name="Mission[client_id]" value=""
                                                    id="supply_client_id_hidden">
                                                <select name="Mission[client_id]" class="form-control"
                                                    id="supply_client_id" disabled>
                                                    @foreach (\App\Client::withoutGlobalScope('restriction')->get() as $client)
                                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>






                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Reciver') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    name="Mission[name]" class="form-control" id="supply_receiver_name" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">{{ translate('Address') }}:
                                                    <small>{{ translate('Building, Street Name etc') }}</small></label>
                                                <div class="form-group">
                                                    <input placeholder="{{ translate('Address') }}"
                                                        id="supply_receiver_address" name="Mission[address]" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">{{ translate('Address') }}:
                                                    <small>{{ translate('Store, Dept, Apt No, Floor etc') }}</small></label>
                                                <div class="form-group">
                                                    <input placeholder="{{ translate('Address') }}"
                                                        id="supply_receiver_address2" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Country') }}:</label>
                                                <input type="text" placeholder="{{ translate('Country') }}"
                                                    id="supply_receiver_country" id="country" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Region') }}:</label>
                                                <input type="hidden" name="Mission[state]" class="form-control"
                                                    id="supply_receiver_state_id" disabled />
                                                <input type="text" placeholder="{{ translate('Region') }}"
                                                    id="supply_receiver_state" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Area') }}:</label>
                                                <input type="hidden" name="Mission[area]" class="form-control"
                                                id="supply_receiver_area_id" disabled />
                                                <input type="text" placeholder="{{ translate('Area') }}"
                                                    id="supply_receiver_area" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Zip/Postal Code') }}:</label>
                                                <input type="text" placeholder="{{ translate('Zip/Postal Code') }}"
                                                    id="supply_receiver_zip_code"  class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Email') }}:</label>
                                                <input type="text" placeholder="{{ translate('Email') }}"
                                                    id="supply_receiver_email" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="">{{ translate('Phone') }}:</label>
                                                <input type="text" placeholder="{{ translate('Phone') }}"
                                                    id="supply_receiver_phone" class="form-control" disabled style="background:#f3f6f9;color:#3f4254;" />

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Type') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Supply') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Status') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Requested') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @elseif($status == \App\Shipment::RETURNED_STOCK)
                                <div class="modal-header">
                                    <h4 class="modal-title h6">{{ translate('Create Return Mission') }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Client/Sender') }}:</label>
                                                <input type="hidden" name="Mission[client_id]" value=""
                                                    id="pick_up_client_id_hidden">
                                                <select name="Mission[client_id]" class="form-control"
                                                    id="pick_up_client_id" disabled>
                                                    @foreach (\App\Client::withoutGlobalScope('restriction')->get() as $client)
                                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Address') }}:</label>
                                                <input type="text" name="Mission[address]" class="form-control" />

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ translate('Amount') }}:</label>
                                                <input type="number" name="Mission[amount]" class="form-control"
                                                    value="0" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Type') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Return') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Status') }}:</label>
                                                <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                                    class="form-control disabled" value="{{ translate('Requested') }}"
                                                    disabled="disabled" readonly />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                            @if (isset($status))
                                @if ($status == \App\Shipment::SAVED_STATUS || $status == \App\Shipment::REQUESTED_STATUS)
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{ translate('Close') }}</button>
                                        <button type="submit" class="btn btn-primary">{{ translate('Confirm Shipment') }}</button>
                                    </div>
                                @else
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">{{ translate('Close') }}</button>
                                        <button type="submit" class="btn btn-primary">{{ translate('Create Mission') }}</button>
                                    </div>

                                @endif
                            @else
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">{{ translate('Close') }}</button>
                                    <button type="submit" class="btn btn-primary">{{ translate('Create Mission') }}</button>
                                </div>
                            @endif
                    </div>
                </div>
            </div><!-- /.modal -->
            @endif

            <div id="transfer-to-branch-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title h6">{{ translate('Create Transfer Mission') }}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('From Branch') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" id="from_branch_transfer"
                                            type="text" class="form-control disabled" value="{{ translate('Transfer') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('To Branch') }}:</label>

                                        <select name="Mission[to_branch_id]" id="to_branch_id" class="form-control">
                                            <option value="" disabled selected hidden>Choose Branch...</option>
                                            @foreach (\App\Branch::all() as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Type') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                            class="form-control disabled" value="{{ translate('Transfer') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Status') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                            class="form-control disabled" value="{{ translate('Requested') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ translate('Close') }}</button>
                            <input type="submit" class="btn btn-primary" value="{{ translate('Create Mission') }}"
                                id="submit_transfer" />
                        </div>
                    </div>
                </div>
            </div>

            <div id="transfer-to-branch--modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title h6">{{ translate('Create Transfer Mission') }}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('From Branch') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;"
                                            type="text" class="form-control disabled" value="{{ translate('Transfer') }}"
                                            disabled="disabled" readonly />
                                        <input  type="hidden" class="branch_status_id" name="Mission[status_id]" disabled="disabled" readonly />

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('To Branch') }}:</label>
                                        <select class="form-control">
                                            <option value="" disabled selected hidden>Choose Branch...</option>
                                            @foreach (\App\Branch::all() as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Type') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                            class="form-control disabled" value="{{ translate('Transfer') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Status') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                            class="form-control disabled" value="{{ translate('Requested') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ translate('Close') }}</button>
                            <input type="submit" class="btn btn-primary" value="{{ translate('Create Mission') }}"
                                id="submit_transfer_branch" />
                        </div>
                    </div>
                </div>
            </div>
            <div id="transfer-to-country--modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title h6">{{ translate('Create Transfer Mission') }}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('From Branch') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" id="from_branch_transfer"
                                            type="text" class="form-control disabled" value="{{ translate('Transfer') }}"
                                            disabled="disabled" readonly />
                                            <input type="hidden" class="country_status_id"  name="Mission[status_id]" disabled="disabled" readonly />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('To Country') }}:</label>

                                        <select  class="form-control">
                                            <option value="" disabled selected hidden>Choose Country...</option>
                                            @foreach (\App\Country::where('covered',1)->get() as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Type') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                            class="form-control disabled" value="{{ translate('Transfer') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Status') }}:</label>
                                        <input style="background:#f3f6f9;color:#3f4254;" type="text"
                                            class="form-control disabled" value="{{ translate('Requested') }}"
                                            disabled="disabled" readonly />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ translate('Close') }}</button>
                            <input type="submit" class="btn btn-primary" value="{{ translate('Create Mission') }}"
                                id="submit_transfer_country" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="aiz-pagination">
            {{ $shipments->appends(request()->input())->links() }}
        </div>
    </div>
    </div>
    {!! hookView('shipment_addon', $currentView) !!}

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
    <script type="text/javascript">
        $(document).on('click', '#submit_transfer', function() {
            $('#tableForm').submit();
        });
        $(document).on('click', '#submit_transfer_branch', function() {
            $('#tableForm').submit();
        });
        $(document).on('click', '#submit_transfer_country', function() {
            $('#tableForm').submit();
        });
        $('#reset_search').click(function(e) {
            e.preventDefault();
            $('#search_form')[0].reset();
        });

        function openCaptainModel(element, e) {

            var selected_receiver_address = [];

            var selected_client_id = [];
            var selected_client_address = [];
            var selected_client_address2 = [];
            var selected_client_name = [];
            var selected_client_country = [];
            var selected_client_country_id = [];
            var selected_client_state = [];
            var selected_client_state_id = [];
            var selected_client_area = [];
            var selected_client_area_id = [];
            var selected_client_email = [];
            var selected_client_zip_code = [];
            var selected_client_phone = [];
            var selected_client_pickup_date = [];


            var selected_receiver_id = [];
            var selected_receiver_address = [];
            var selected_receiver_address2 = [];
            var selected_receiver_name = [];
            var selected_receiver_country = [];
            var selected_receiver_country_id = [];
            var selected_receiver_state = [];
            var selected_receiver_state_id = [];
            var selected_receiver_area = [];
            var selected_receiver_area_id = [];
            var selected_receiver_email = [];
            var selected_receiver_zip_code = [];
            var selected_receiver_phone = [];


            var selected_branch_id = [];
            var mission_id = [];
            $('.sh-check:checked').each(function() {

                selected_client_id.push($(this).data('clientid'));
                selected_client_address.push($(this).data('clientaddress'));
                selected_client_address2.push($(this).data('clientaddress2'));
                selected_client_name.push($(this).data('clientname'));
                selected_client_country.push($(this).data('clientcountry'));
                selected_client_country_id.push($(this).data('clientcountryid'));
                selected_client_state.push($(this).data('clientstate'));
                selected_client_state_id.push($(this).data('clientstateid'));
                selected_client_area.push($(this).data('clientarea'));
                selected_client_area_id.push($(this).data('clientareaid'));
                selected_client_zip_code.push($(this).data('clientzipcode'));
                selected_client_email.push($(this).data('clientemail'));
                selected_client_phone.push($(this).data('clientphone'));
                selected_client_pickup_date.push($(this).data('pickupdate'));



                selected_receiver_id.push($(this).data('receiverid'));
                selected_receiver_address.push($(this).data('receiveraddress'));
                selected_receiver_address2.push($(this).data('receiveraddress2'));
                selected_receiver_name.push($(this).data('receivername'));
                selected_receiver_country.push($(this).data('receivercountry'));
                selected_receiver_country_id.push($(this).data('receivercountryid'));
                selected_receiver_state.push($(this).data('receiverstate'));
                selected_receiver_state_id.push($(this).data('receiverstateid'));
                selected_receiver_area.push($(this).data('receiverarea'));
                selected_receiver_area_id.push($(this).data('receiverareaid'));
                selected_receiver_zip_code.push($(this).data('receiverzipcode'));
                selected_receiver_email.push($(this).data('receiveremail'));
                selected_receiver_phone.push($(this).data('receiverphone'));


                selected_branch_id.push($(this).data('branchid'));
                mission_id.push($(this).data('missionid'));
            });

            if (mission_id[0] == "") {
                var sum = selected_client_id.reduce(function(acc, val) {
                    return acc + val;
                }, 0);
                var check_sum = selected_client_id[0] * selected_client_id.length;

                if (selected_client_id.length == 1 || sum == check_sum) {
                    $('#tableForm').attr('action', $(element).data('url'));
                    $('#tableForm').attr('method', $(element).data('method'));

                    $('#pick_up_client_id').val(selected_client_id[0]).change();
                    $('#pick_up_client_id_hidden').val(selected_client_id[0]);

                    $('#supply_client_id').val(selected_client_id[0]);
                    $('#supply_client_id_hidden').val(selected_client_id[0]);

                    $('#pick_up_client_address').val(selected_client_address[0]);
                    $('#pick_up_client_address2').val(selected_client_address2[0]);
                    $('#pick_up_client_name').val(selected_client_name[0]);
                    $('#pick_up_client_country').val(selected_client_country[0]);
                    $('#pick_up_client_country_id').val(selected_client_country_id[0]);
                    $('#pick_up_client_state').val(selected_client_state[0]);
                    $('#pick_up_client_state_id').val(selected_client_state_id[0]);
                    $('#pick_up_client_area').val(selected_client_area[0]);
                    $('#pick_up_client_area_id').val(selected_client_area_id[0]);
                    $('#pick_up_client_zip_code').val(selected_client_zip_code[0]);
                    $('#pick_up_client_email').val(selected_client_email[0]);
                    $('#pick_up_client_phone').val(selected_client_phone[0]);
                    $('#pick_up_date').val(selected_client_pickup_date[0]);



                    $('#supply_receiver_id').val(selected_receiver_id[0]).change();
                    $('#supply_receiver_id_hidden').val(selected_receiver_id[0]);
                    $('#supply_receiver_address').val(selected_receiver_address[0]);
                    $('#supply_receiver_address2').val(selected_receiver_address2[0]);
                    $('#supply_receiver_name').val(selected_receiver_name[0]);
                    $('#supply_receiver_country').val(selected_receiver_country[0]);
                    $('#supply_receiver_country_id').val(selected_receiver_country_id[0]);
                    $('#supply_receiver_state').val(selected_receiver_state[0]);
                    $('#supply_receiver_state_id').val(selected_receiver_state_id[0]);
                    $('#supply_receiver_area').val(selected_receiver_area[0]);
                    $('#supply_receiver_area_id').val(selected_receiver_area_id[0]);
                    $('#supply_receiver_zip_code').val(selected_receiver_zip_code[0]);
                    $('#supply_receiver_email').val(selected_receiver_email[0]);
                    $('#supply_receiver_phone').val(selected_receiver_phone[0]);




                    $('.branch_hidden').val(selected_branch_id[0]);

                    $('#assign-to-captain-modal').modal('toggle');

                } else if (selected_client_id.length == 0) {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                } else {
                    Swal.fire("{{ translate('Select shipments of the same client to Assign') }}", "", "error");
                }
            } else {
                Swal.fire("{{ translate('This Shipment Already In Mission') }}", "", "error");
            }

        }

        function openAssignShipmentCaptainModel(element, e) {
            var selected_client_id = [];


            var selected_receiver_id = [];
            var selected_receiver_address = [];
            var selected_receiver_address2 = [];
            var selected_receiver_name = [];
            var selected_receiver_country = [];
            var selected_receiver_country_id = [];
            var selected_receiver_state = [];
            var selected_receiver_state_id = [];
            var selected_receiver_area = [];
            var selected_receiver_area_id = [];
            var selected_receiver_email = [];
            var selected_receiver_zip_code = [];
            var selected_receiver_phone = [];

            var selected_branch_id = [];
            var mission_id = [];
            $('.sh-check:checked').each(function() {
                selected_client_id.push($(this).data('clientid'));



                selected_receiver_id.push($(this).data('receiverid'));
                selected_receiver_address.push($(this).data('receiveraddress'));
                selected_receiver_address2.push($(this).data('receiveraddress2'));
                selected_receiver_name.push($(this).data('receivername'));
                selected_receiver_country.push($(this).data('receivercountry'));
                selected_receiver_country_id.push($(this).data('receivercountryid'));
                selected_receiver_state.push($(this).data('receiverstate'));
                selected_receiver_state_id.push($(this).data('receiverstateid'));
                selected_receiver_area.push($(this).data('receiverarea'));
                selected_receiver_area_id.push($(this).data('receiverareaid'));
                selected_receiver_zip_code.push($(this).data('receiverzipcode'));
                selected_receiver_email.push($(this).data('receiveremail'));
                selected_receiver_phone.push($(this).data('receiverphone'));




                selected_branch_id.push($(this).data('branchid'));
                mission_id.push($(this).data('missionid'));
            });


            if (mission_id[0] == "") {
                var sum = selected_client_id.reduce(function(acc, val) {
                    return acc + val;
                }, 0);
                var check_sum = selected_client_id[0] * selected_client_id.length;

                if (selected_client_id.length == 1 || sum == check_sum) {
                    $('#tableForm').attr('action', $(element).data('url'));
                    $('#tableForm').attr('method', $(element).data('method'));


                    $('#delivery_receiver_id').val(selected_receiver_id[0]).change();
                    $('#delivery_receiver_id_hidden').val(selected_receiver_id[0]);
                    $('#delivery_receiver_address').val(selected_receiver_address[0]);
                    $('#delivery_receiver_address2').val(selected_receiver_address2[0]);
                    $('#delivery_receiver_name').val(selected_receiver_name[0]);
                    $('#delivery_receiver_country').val(selected_receiver_country[0]);
                    $('#delivery_receiver_country_id').val(selected_receiver_country_id[0]);
                    $('#delivery_receiver_state').val(selected_receiver_state[0]);
                    $('#delivery_receiver_state_id').val(selected_receiver_state_id[0]);
                    $('#delivery_receiver_area').val(selected_receiver_area[0]);
                    $('#delivery_receiver_area_id').val(selected_receiver_area_id[0]);
                    $('#delivery_receiver_zip_code').val(selected_receiver_zip_code[0]);
                    $('#delivery_receiver_email').val(selected_receiver_email[0]);
                    $('#delivery_receiver_phone').val(selected_receiver_phone[0]);




                    $('.branch_hidden').val(selected_branch_id[0]);
                    $('#pick_up_client_id').val(selected_client_id[0]);
                    $('#pick_up_client_id_hidden').val(selected_client_id[0]);

                    $('#supply_client_id').val(selected_client_id[0]);
                    $('#supply_client_id_hidden').val(selected_client_id[0]);

                    $('.update_status').val($(element).data('text'));
                    $('#assign-to-captain-modal').modal('toggle');

                } else if (selected_client_id.length == 0) {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                } else {
                    Swal.fire("{{ translate('Select shipments of the same client to Assign') }}", "", "error");
                }
            } else {
                Swal.fire("{{ translate('This Shipment Already In Mission') }}", "", "error");
            }


        }

        function openTransferShipmentBranchModel(element, e) {
            var selected_client_id = [];
            var branchId = '';
            var branchName = '';
            var mission_id = [];

            $('#to_branch_id option').css("display", "block");


            $('.sh-check:checked').each(function() {
                selected_client_id.push($(this).data('clientid'));
                branchId = $(this).data('branchid');
                branchName = $(this).data('branchname');
                mission_id.push($(this).data('missionid'));
            });

            if (mission_id[0] == "") {

                if (selected_client_id.length == 1) {

                    $('#assign-to-captain-modal').remove();
                    $('#transfer-to-branch-modal').remove();
                    $('#transfer-to-country--modal').remove();
                    $('#tableForm').attr('action', $(element).data('url'));
                    $('#tableForm').attr('method', $(element).data('method'));
                    $('.branch_status_id').val($(element).data('status'));
                    $('#transfer-to-branch--modal').modal('toggle');

                } else  {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                }
            } else {
                Swal.fire("{{ translate('This Shipment Already In Mission') }}", "", "error");
            }
        }
        function openTransferShipmentCountryModel(element, e) {
            var selected_client_id = [];
            var branchId = '';
            var branchName = '';
            var mission_id = [];

            $('#to_branch_id option').css("display", "block");


            $('.sh-check:checked').each(function() {
                selected_client_id.push($(this).data('clientid'));
                branchId = $(this).data('branchid');
                branchName = $(this).data('branchname');
                mission_id.push($(this).data('missionid'));
            });

            if (mission_id[0] == "") {

                if (selected_client_id.length == 1) {
                    $('#assign-to-captain-modal').remove();
                    $('#transfer-to-branch-modal').remove();
                    $('#transfer-to-branch--modal').remove();
                    $('#tableForm').attr('action', $(element).data('url'));
                    $('#tableForm').attr('method', $(element).data('method'));
                    $('.country_status_id').val($(element).data('status'));


                    $('#transfer-to-country--modal').modal('toggle');

                } else  {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                }
            } else {
                Swal.fire("{{ translate('This Shipment Already In Mission') }}", "", "error");
            }
        }

        function openTransferShipmentCountry2Model(element, e) {
            var selected_client_id = [];
            var branchId = '';
            var branchName = '';
            var mission_id = [];

            $('#to_branch_id option').css("display", "block");


            $('.sh-check:checked').each(function() {
                selected_client_id.push($(this).data('clientid'));
                branchId = $(this).data('branchid');
                branchName = $(this).data('branchname');
                mission_id.push($(this).data('missionid'));
            });

            if (mission_id[0] == "") {

                if (selected_client_id.length == 1) {
                    $('#assign-to-captain-modal').remove();
                    $('#transfer-to-branch-modal').remove();
                    $('#transfer-to-branch--modal').remove();
                    $('#tableForm').attr('action', $(element).data('url'));
                    $('#tableForm').attr('method', $(element).data('method'));
                    $('.country_status_id').val($(element).data('status'));




                    $('#transfer-to-country--modal').modal('toggle');

                } else  {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                }
            } else {
                Swal.fire("{{ translate('This Shipment Already In Mission') }}", "", "error");
            }
        }

        function openTransferShipmentCaptainModel(element, e) {
            var selected_client_id = [];
            var branchId = '';
            var branchName = '';
            var mission_id = [];

            $('#to_branch_id option').css("display", "block");


            $('.sh-check:checked').each(function() {
                selected_client_id.push($(this).data('clientid'));
                branchId = $(this).data('branchid');
                branchName = $(this).data('branchname');
                mission_id.push($(this).data('missionid'));
            });

            if (mission_id[0] == "") {
                var sum = selected_client_id.reduce(function(acc, val) {
                    return acc + val;
                }, 0);
                var check_sum = selected_client_id[0] * selected_client_id.length;

                if (selected_client_id.length == 1 || sum == check_sum) {
                    $('#assign-to-captain-modal').remove();
                    $('#tableForm').attr('action', $(element).data('url'));
                    $('#tableForm').attr('method', $(element).data('method'));

                    document.getElementById("from_branch_transfer").value = branchName;
                    $('#to_branch_id option[value=' + branchId + ']').css("display", "none");
                    $('#to_branch_id option[value=' + branchId + ']').find('option:selected').remove();
                    $('#transfer-to-branch-modal').modal('toggle');

                } else if (selected_client_id.length == 0) {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                } else {
                    Swal.fire("{{ translate('Select shipments of the same client to Assign') }}", "", "error");
                }
            } else {
                Swal.fire("{{ translate('This Shipment Already In Mission') }}", "", "error");
            }
        }

        function check_client(parent_checkbox, client_id) {
            // if(parent_checkbox.checked){
            //     console.log("checked");
            // }
            checkboxs = document.getElementsByClassName("checkbox-client-id-" + client_id);
            for (let index = 0; index < checkboxs.length; index++) {
                checkboxs[index].checked = parent_checkbox.checked;
            }
        }

        $(document).ready(function() {
            $('.action-caller').on('click', function(e) {
                e.preventDefault();
                var selected_client_id = [];
                $('.sh-check:checked').each(function() {
                    selected_client_id.push($(this).data('clientid'));
                });
                if (selected_client_id.length > 0) {
                    $('#tableForm').attr('action', $(this).data('url'));
                    $('#tableForm').attr('method', $(this).data('method'));
                    $('#tableForm').submit();
                } else if (selected_client_id.length == 0) {
                    Swal.fire("{{ translate('Please Select Shipments') }}", "", "error");
                }

            });

            // FormValidation.formValidation(
            //     document.getElementById('tableForm'), {
            //         fields: {
            //             "Mission[address]": {
            //                 validators: {
            //                     notEmpty: {
            //                         message: '{{ translate('This is required!') }}'
            //                     }
            //                 }
            //             },
            //             "Mission[client_id]": {
            //                 validators: {
            //                     notEmpty: {
            //                         message: '{{ translate('This is required!') }}'
            //                     }
            //                 }
            //             },
            //             "Mission[to_branch_id]": {
            //                 validators: {
            //                     notEmpty: {
            //                         message: '{{ translate('This is required!') }}'
            //                     }
            //                 }
            //             }


            //         },


            //         plugins: {
            //             autoFocus: new FormValidation.plugins.AutoFocus(),
            //             trigger: new FormValidation.plugins.Trigger(),
            //             // Bootstrap Framework Integration
            //             bootstrap: new FormValidation.plugins.Bootstrap(),
            //             // Validate fields when clicking the Submit button
            //             submitButton: new FormValidation.plugins.SubmitButton(),
            //             // Submit the form when all fields are valid
            //             defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            //             icon: new FormValidation.plugins.Icon({
            //                 valid: 'fa fa-check',
            //                 invalid: 'fa fa-times',
            //                 validating: 'fa fa-refresh',
            //             }),
            //         }
            //     }
            // );

        });
    </script>

@endsection
