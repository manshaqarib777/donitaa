@extends('backend.layouts.app')

@section('content')
    @php
    $auth_user = Auth::user();
    $user_type = Auth::user()->user_type;
    $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? '[]');
    $countries = \App\Country::where('covered', 1)->get();
    $countries_receiver = \App\Country::get();
    $categories = \App\Category::all();
    $packages = \App\Package::all();
    $times = \App\Time::all();
    @endphp
    <style>
        label {
            font-weight: bold !important;
        }

    </style>
    <form class="form-horizontal" action="{{ route('admin.shipments.update-shipment', ['shipment' => $shipment->id]) }}"
        id="kt_form_1" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-md-6">
                        <div class="w-100 p-3 pl-5 text-white" style="background:red;">
                            <h2 class="text-left" style="font-size: 35px;line-height: 3;">
                                {{ translate('SHIPMENT REQUEST') }} <b style="color:purple;">{{ translate('FORM') }}</b>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @if (\App\ShipmentSetting::getVal('is_date_required') == '1' || \App\ShipmentSetting::getVal('is_date_required') == null)
                                    <div class="form-group">
                                        <label>{{ translate('Shipping Date') }}: <small style="font-size:12px;color: red">*</small></label>
                                        <div class="input-group date">
                                            @php
                                                $defult_shipping_date = \App\ShipmentSetting::getVal('def_shipping_date');
                                                if ($defult_shipping_date == null) {
                                                    $shipping_data = \Carbon\Carbon::now()->addDays(0);
                                                } else {
                                                    $shipping_data = \Carbon\Carbon::now()->addDays($defult_shipping_date);
                                                }

                                            @endphp
                                            <input type="text" placeholder="{{ translate('Shipping Date') }}"
                                                value="{{ $shipment->shipping_date }}" name="Shipment[shipping_date]"
                                                autocomplete="off" class="form-control" id="kt_datepicker_3" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ translate('Attachments') }}:</label>

                                    <div class="input-group " data-toggle="aizuploader" data-type="all"
                                        data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                {{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="Shipment[attachments_before_shipping]"
                                            class="selected-files" value="{{ $shipment->attachments_before_shipping }}"
                                            max="3">
                                    </div>
                                    <div class="file-preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-4 col-form-label">{{ translate('Shipment Zone') }} <small style="font-size:12px;color: red">*</small></label>
                            <div class="col-8 col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-success">
                                        <input @if ($shipment->zone == 'Domestic') checked @endif type="radio" name="Shipment[zone]"
                                            value="1" />
                                        <span></span>
                                        {{ translate('Domestic') }}
                                    </label>
                                    <label class="radio radio-success">
                                        <input @if ($shipment->zone == 'International') checked @endif type="radio" name="Shipment[zone]"
                                            value="2" />
                                        <span></span>
                                        {{ translate('International') }}
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-4 col-form-label">{{ translate('Shipping Mode') }} <small style="font-size:12px;color: red">*</small></label>
                            <div class="col-8 col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-success">
                                        <input type="radio" name="Shipment[freight]" @if ($shipment->freight == 'Air Freight') checked @endif value="1" />
                                        <span></span>
                                        {{ translate('Air Freight') }}
                                    </label>
                                    <label class="radio radio-success">
                                        <input type="radio" name="Shipment[freight]" @if ($shipment->freight == 'Ocean Freight') checked @endif value="2" />
                                        <span></span>
                                        {{ translate('Ocean Freight') }}
                                    </label>
                                    <label class="radio radio-success">
                                        <input type="radio" name="Shipment[freight]" @if ($shipment->freight == 'Road Freight') checked @endif value="3" />
                                        <span></span>
                                        {{ translate('Road Freight') }}
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">{{ translate('Export/Import Type') }} <small style="font-size:12px;color: red">*</small></label>
                            <div class="col-8 col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-success">
                                        <input type="radio" name="Shipment[exp_type]" @if ($shipment->exp_type == 'One Way') checked @endif value="1" />
                                        <span></span>
                                        {{ translate('One Way') }}
                                    </label>
                                    <label class="radio radio-success">
                                        <input type="radio" name="Shipment[exp_type]" @if ($shipment->exp_type == 'Ship & Return') checked @endif value="2" />
                                        <span></span>
                                        {{ translate('Ship & Return') }}
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 row">
                        <div class="col-md-3" style="background:white;border: 1px solid hsl(194, 82%, 40%);">
                            <div class="w-100 p-2">
                                <h5 class="text-center" style="font-size: 28px">{{ translate('SENDER/FROM') }}:</h5>
                                <img src={{asset('public/soruce.jpg')}} style="width: 200px;" />
                            </div>
                        </div>
                        <div class="col-md-9 row p-3 pl-0"  style="background: hsl(194, 82%, 40%);">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('Sender Company') }}:</label>
                                    <input type="text" placeholder="{{ translate('Sender Company') }}"
                                        name="Shipment[client_company]" id="client_company" class="form-control"
                                        value="{{ @$shipment->client->company }}" />

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="radio-inline">
                                    <label class="radio radio-success text-white ">
                                        <input type="radio" name="Shipment[type]" @if ($shipment->type == 'Agent Pickup Package') checked="checked" @endif value="1" />
                                        <span></span>
                                        {{ translate('Agent Pickup Package') }} <small style="font-size:12px;color: red">*</small>
                                    </label>
                                    <label class="radio radio-success text-white ">
                                        <input type="radio" name="Shipment[type]" @if ($shipment->type == 'Client Dropoff to Our Store') checked="checked" @endif value="2" />
                                        <span></span>
                                        {{ translate('Client Dropoff to Our Store') }}
                                    </label>
                                </div>

                            </div>


                            @php
                                $client_address = \App\ClientAddress::withoutGlobalScope('restriction')->where('name', $shipment->client_address)
                                    ->get()
                                    ->first();
                            @endphp
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text-white">{{ translate('First Name') }}: <small style="font-size:12px;color: red">*</small></label>
                                                    <input type="text" placeholder="{{ translate('First Name') }}"
                                                        name="Shipment[client_first_name]" id="client_first_name" class="form-control"
                                                        value="{{ explode(' ', $shipment->client->name)[0] }}" />

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text-white">{{ translate('Last Name') }}: <small style="font-size:12px;color: red">*</small></label>
                                                    <input type="text" placeholder="{{ translate('Last Name') }}"
                                                        name="Shipment[client_last_name]" id="client_last_name" class="form-control"
                                                        value="{{ @explode(' ', $shipment->client->name)[1] }}" />

                                                </div>
                                            </div>
                                            <div class='col-4 show_pickup_date'>
                                                <div class="form-group">
                                                    <label class="text-white">{{ translate('Pickup Date:') }} <small style="font-size:12px;color: red">*</small></label>
                                                    <input type="text" placeholder="{{ translate('Pickup Date') }}"
                                                        name="Shipment[pickup_date]" id="datepicker" class="form-control" value="{{ @$shipment->pickup_date }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @if(isset(auth()->user()->user_type) && auth()->user()->user_type == 'customer')
                                <div class="col-md-6">
                                    <div class="radio-inline">
                                        <label class="radio radio-success text-white ">
                                            <input type="radio" class="address-listener" name="client_test_address"
                                                value="1" />
                                            <span></span>
                                            {{ translate('New Address') }}
                                        </label>
                                        <label class="radio radio-success text-white ">
                                            {{ translate('OR') }}
                                        </label>
                                        <label class="radio radio-success text-white ">
                                            <input type="radio" class="address-listener" name="client_test_address" value="2" />
                                            <span></span>
                                            {{ translate('Existing Address') }}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            @if(isset(auth()->user()->user_type) && auth()->user()->user_type == 'customer')

                                <div class="col-md-6 existing-address-show">
                                    <div class="form-group">
                                        <label class="text-white">{{ translate('Choose Address') }}:</label>
                                        <select id="change-address" class="form-control select-address">
                                            <option value=""></option>
                                            @foreach ($addresses as $address)
                                                <option value="{{ $address->id }}" data-last_name="{{ $address->last_name }}" data-first_name="{{ $address->first_name }}" data-email="{{ $address->client->email }}" data-responsible_mobile="{{ $address->client->responsible_mobile }}" data-zip_code="{{ $address->zip_code }}" data-address="{{ $address->type }}" data-address2="{{ $address->address }}" data-country_id="{{ $address->country_id }}" data-area_id="{{ $address->area_id }}" data-state_id="{{ $address->state_id }}" >{{ $address->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-6 new-address-show">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('Address') }}: <small style="font-size:12px;color: red">*</small>
                                    </label>
                                    <div class="form-group">
                                        <input placeholder="{{ translate('Address') }}" name="Shipment[client_address]" id="client_address"
                                            class="form-control" value="{{ @$client_address->name }}" id="" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 new-address-show">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('Floor/Apt No.') }}:
                                    </label>
                                    <div class="form-group">
                                        {{-- <select class="form-control select-client-address" name="Shipment[client_address]">
                                                <option></option>
                                            </select> --}}
                                        <input placeholder="{{ translate('Floor/Apt No.') }}" name="Shipment[client_address_2]" id="client_address_2"
                                            class="form-control" value="{{ @$client_address->address }}" id="" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 new-address-show">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('From Country') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <select id="change-country" name="Shipment[from_country_id]"
                                        class="form-control select-country">
                                        <option value=""></option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" @if ($shipment->from_country_id == $country->id) selected="selected" @endif>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- @if(isset(auth()->user()->user_type) && (auth()->user()->user_type != 'customer') && auth()->user()->user_type != 'branch')
                            <div class="col-md-6 show_client_branch">
                                <div class="form-group">
                                    <label>{{ translate('Branch') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <select class="form-control kt-select2 select-branch" name="Shipment[branch_id]">
                                        <option value="{{ @$shipment->branch_id }}">{{ @$shipment->branch->name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            @endif --}}
                            <div class="col-md-4 new-address-show">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="text-white">{{ translate('From Region/State') }}: <small style="font-size:12px;color: red">*</small></label>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="flaticon2-reload" style="color: #f9732c;cursor:pointer" id="reload_client_regions"></i>
                                        </div>
                                    </div>
                                    <select id="change-state-from" name="Shipment[from_state_id]"
                                        class="form-control select-state">
                                        <option value="{{ $shipment->from_state_id }}">
                                            {{ $shipment->from_state->name }}
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 new-address-show">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="text-white">{{ translate('From Area/City') }}: <small style="font-size:12px;color: red">*</small></label>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="flaticon2-reload" style="color: #f9732c;cursor:pointer" id="reload_client_areas"></i>
                                        </div>
                                    </div>
                                    <select id='change-area-from' name="Shipment[from_area_id]"
                                        class="form-control select-area">
                                        <option value="{{ $shipment->from_area_id }}">{{ $shipment->from_area->name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 new-address-show">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('Zip/Postal Code') }}:</label>
                                    <input type="text" placeholder="{{ translate('Zip/Postal Code') }}"
                                        name="Shipment[client_zip_code]" id="client_zip_code"
                                        value="{{ @$client_address->zip_code }}" class="form-control" />

                                </div>
                            </div>
                            <div class="col-md-5 new-address-show">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('Email') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <input type="text" placeholder="{{ translate('Email') }}"
                                        name="Shipment[client_email]" id="client_email"
                                        value="{{ $shipment->client->email }}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4 new-address-show">
                                <div class="form-group">
                                    <label class="text-white">{{ translate('Sender Phone') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <input type="text" placeholder="{{ translate('Sender Phone') }}"
                                        name="Shipment[client_phone]" id="client_phone"
                                        value="{{ $shipment->client->responsible_mobile }}" class="form-control" />

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 row pt-5">
                        <div class="col-md-3" style="background: purple;">
                            <div class="w-100 p-2 ">
                                <h5 class="text-center text-white" style="font-size: 28px">{{ translate('RECEIVER/TO') }}:</h5>
                                <img src={{asset('public/destination.png')}} style="width: 200px;" />
                            </div>
                        </div>
                        <div class="col-md-9 row p-3 pl-0" style="background:white;border: 1px solid purple">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class=" ">{{ translate('Receiver Company') }}:</label>
                                    <input type="text" placeholder="{{ translate('Receiver Company') }}"
                                        name="Shipment[receiver_company]" id="receiver_company" class="form-control"
                                        value="{{ @@$shipment->receiver->company }}" />

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="col-12 col-form-label ml-4">
                                        <div class="radio-inline">
                                            <label class=" radio radio-success ">
                                                <input type="radio" name="Shipment[receiver_shipment_type]" @if ($shipment->receiver_shipment_type == 'Agent Deliver to You') checked="checked" @endif value="1" />
                                                <span></span>
                                                {{ translate('Agent Deliver to You') }} <small style="font-size:12px;color: red">*</small>
                                            </label>
                                            <label class=" radio radio-success ">
                                                <input type="radio" name="Shipment[receiver_shipment_type]" @if ($shipment->receiver_shipment_type == 'Client Pickup from Our Store') checked="checked" @endif value="2" />
                                                <span></span>
                                                {{ translate('Client Pickup from Our Store') }}
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @php
                                $receiver_address = \App\ReceiverAddress::withoutGlobalScope('restriction')->where('name', $shipment->receiver_address)
                                    ->get()
                                    ->first();
                            @endphp
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class=" ">{{ translate('First Name') }}: <small style="font-size:12px;color: red">*</small></label>
                                                                        <input type="text" placeholder="{{ translate('First Name') }}"
                                                                            name="Shipment[receiver_first_name]" id="receiver_first_name" class="form-control"
                                                                            value="{{ explode(' ', @$shipment->receiver->name)[0] }}" />

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class=" ">{{ translate('Last Name') }}: <small style="font-size:12px;color: red">*</small></label>
                                                                        <input type="text" placeholder="{{ translate('Last Name') }}"
                                                                            name="Shipment[receiver_last_name]" id="receiver_last_name" class="form-control"
                                                                            value="{{ @explode(' ', @$shipment->receiver->name)[1] }}" />

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                            @if(isset(auth()->user()->user_type) && auth()->user()->user_type == 'customer')
                            <div class="col-md-6">
                                <div class="radio-inline">
                                    <label class="radio radio-success ">
                                        <input type="radio" class="address-listener-receiver" name="receiver_test_address"
                                            value="1" />
                                        <span></span>
                                        {{ translate('New Address') }}
                                    </label>
                                    <label class="radio radio-success ">
                                        {{ translate('OR') }}
                                    </label>
                                    <label class="radio radio-success ">
                                        <input type="radio" class="address-listener-receiver" name="receiver_test_address" value="2" />
                                        <span></span>
                                        {{ translate('Existing Address') }}
                                    </label>
                                </div>
                            </div>
                            @endif

                            @if(isset(auth()->user()->user_type) && auth()->user()->user_type == 'customer')

                                <div class="col-md-12 existing-receiver-address-show">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Choose Receiver') }}:</label>
                                                <select id="change-receiver" class="form-control select-receiver">
                                                    <option value=""></option>
                                                    @foreach ($receivers as $receiver)
                                                        <option value="{{ $receiver->id }}" >{{ $receiver->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Choose Address') }}:</label>
                                                <select id="change-receiver-address" class="form-control select-receiver-address">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-6 new-receiver-address-show">
                                <div class="form-group">
                                    <label class=" ">{{ translate('Address') }}: <small style="font-size:12px;color: red">*</small>
                                    </label>
                                    <div class="form-group">
                                        <input placeholder="{{ translate('Address') }}" name="Shipment[receiver_address]"
                                            class="form-control" value="{{ @$receiver_address->name }}" id="" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 new-receiver-address-show">
                                <div class="form-group">
                                    <label class=" ">{{ translate('Floor/Apt No.') }}:
                                    </label>
                                    <div class="form-group">
                                        {{-- <select class="form-control select-receiver-address" name="Shipment[receiver_address]">
                                                <option></option>
                                            </select> --}}
                                        <input placeholder="{{ translate('Floor/Apt No.') }}"
                                            name="Shipment[receiver_address_2]" class="form-control"
                                            value="{{ @$receiver_address->address }}" id="" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 new-receiver-address-show">
                                <div class="form-group">
                                    <label class="">{{ translate('To Country') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <select id="change-country-to" name="Shipment[to_country_id]"
                                        class="form-control select-country">
                                        <option value=""></option>
                                        @foreach ($countries_receiver as $country)
                                            <option value="{{ $country->id }}" @if ($shipment->to_country_id == $country->id) selected="selected" @endif>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- @if(isset(auth()->user()->user_type) && (auth()->user()->user_type != 'customer') && auth()->user()->user_type != 'branch')
                                <div class="col-md-4 new-receiver-address-show show_receiver_branch">
                                    <div class="form-group">
                                        <label class="">{{ translate('Branch') }}: <small style="font-size:12px;color: red">*</small></label>
                                        <select class="form-control kt-select2 select-branch" name="Shipment[receiver_branch_id]">
                                            <option value="{{ @$shipment->receiver_branch_id }}">{{ @$shipment->receiverBranch->name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endif --}}
                            <div class="col-md-4 new-receiver-address-show">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="">{{ translate('To Region/State:') }} <small style="font-size:12px;color: red">*</small></label>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="flaticon2-reload" style="color: #f9732c;cursor:pointer" id="reload_receiver_regions"></i>
                                        </div>
                                    </div>
                                    <select id="change-state-to" name="Shipment[to_state_id]"
                                        class="form-control select-state">
                                        <option value="{{ $shipment->to_state_id }}">{{ $shipment->to_state->name }}
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 new-receiver-address-show">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="">{{ translate('To Area/City:') }} <small style="font-size:12px;color: red">*</small></label>
                                        </div>
                                        <div class="col-md-6">
                                            <i class="flaticon2-reload" style="color: #f9732c;cursor:pointer" id="reload_receiver_areas"></i>
                                        </div>
                                    </div>
                                    <select id='change-area-to' name="Shipment[to_area_id]"
                                        class="form-control select-area">
                                        <option value="{{ $shipment->to_area_id }}">{{ $shipment->to_area->name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 new-receiver-address-show">
                                <div class="form-group">
                                    <label class=" ">{{ translate('Zip/Postal Code') }}: </label>
                                    <input type="text" placeholder="{{ translate('Zip/Postal Code') }}"
                                        name="Shipment[receiver_zip_code]" id="receiver_zip_code"
                                        value="{{ @$receiver_address->zip_code }}" class="form-control" />

                                </div>
                            </div>
                            <div class="col-md-4 new-receiver-address-show">
                                <div class="form-group">
                                    <label class=" ">{{ translate('Email') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <input type="text" placeholder="{{ translate('Email') }}"
                                        name="Shipment[receiver_email]" id="receiver_email"
                                        value="{{ @$shipment->receiver->email }}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-4 new-receiver-address-show">
                                <div class="form-group">
                                    <label class=" ">{{ translate('Receiver Phone') }}: <small style="font-size:12px;color: red">*</small></label>
                                    <input type="text" placeholder="{{ translate('Receiver Phone') }}"
                                        name="Shipment[receiver_phone]" id="receiver_phone"
                                        value="{{ @$shipment->receiver->responsible_mobile }}" class="form-control" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>








                <div class="row">
                    <label class="col-3 col-form-label">{{ translate('Payee ( Who’s paying for this shipment)') }}: <small style="font-size:12px;color: red">*</small></label>
                    <div class="col-9 col-form-label">
                        <div class="radio-inline">
                            <label class="radio radio-success">
                                <input @if ($shipment->payment_type == '1') checked="checked" @endif  type="radio" class="payment-type" name="Shipment[payment_type]"
                                        value="1" />
                                <span></span>
                                {{ translate('Shipper') }}
                            </label>
                            <label class="radio radio-success">
                                <input @if ($shipment->payment_type == '2') checked="checked" @endif type="radio" class="payment-type" name="Shipment[payment_type]"
                                    value="2" />
                                <span></span>
                                {{ translate('Receiver') }}
                            </label>
                        </div>

                    </div>
                </div>
                <div class="row ml-1 mr-1 p-5 pl-0" style="background: hsl(21deg 94% 57%);">
                    <div class="col-6">
                        <input type="hidden" name="Shipment[payment_method_id]" value="{{$shipment->payment_method_id}}" />
                        <input type="hidden" name="Shipment[payment_method_id_details]" value="{{$shipment->payment_method_id_details}}" />
                        <input type="radio" name="group" class="no_option" value="null" style="display:none">
                        <div class="form-group row ml-1" id="show_payment_method">
                            <label class="text-white col-12" style="margin-left: -10px;">{{ translate('Payment Method') }}:</label>
                            <select class="form-control kt-select2 payment-method col-7">
                                <option></option>
                                @foreach(\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                    @if ($gateway->id != 11 && $gateway->id != 286 && $gateway->id != 287 && $gateway->id != 288  )
                                        <option value="{{ $gateway->id }}" {{($gateway->id==$shipment->payment_method_id)?'selected':''}} >
                                            {{ $gateway->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="radio-inline">
                            @foreach (\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                @if ($gateway->id == 11)
                                    <label class="radio radio-success text-white">
                                        <input type="radio" value="{{ $gateway->id }}" name="group"  class="payment_method_id_radio" {{($gateway->id==$shipment->payment_method_id)?'checked':''}} />
                                        <span></span>
                                        {{ $gateway->name }}
                                    </label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row" style="margin-bottom: -10px;">
                            @foreach (\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                @if ($gateway->id == 286  )
                                    <div class="col-5">
                                        <div class="p-5 pl-0 radio-inline">
                                            <label class="radio radio-success text-white">
                                                <input type="radio" value="{{ $gateway->id }}" name="group"   class="payment_method_id_radio" />
                                                <span></span>
                                                {{ $gateway->name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-group">
                                            <input type="text" placeholder="{{ translate('Check Number Here (Optional)') }}"
                                                 id="client_email" class="form-control payment_method_id_radio_detail" value="{{($gateway->id==$shipment->payment_method_id)?$shipment->payment_method_id_details:''}}" />
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="row" style="margin-bottom: -10px;">
                            @foreach (\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                @if ($gateway->id == 287  )
                                    <div class="col-5">
                                        <div class="p-5 pl-0 radio-inline">
                                            <label class="radio radio-success text-white">
                                                <input type="radio" value="{{ $gateway->id }}" name="group"  class="payment_method_id_radio" {{($gateway->id==$shipment->payment_method_id)?'checked':''}} />
                                                <span></span>
                                                {{ $gateway->name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-group">
                                            <input type="text" placeholder="{{ translate('Transfer Number Here (Optional)') }}"
                                            class="form-control payment_method_id_radio_detail" value="{{($gateway->id==$shipment->payment_method_id)?$shipment->payment_method_id_details:''}}" />
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="row" style="margin-bottom: -10px;">
                            @foreach (\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                @if ($gateway->id == 288  )
                                    <div class="col-5">
                                        <div class="p-5 pl-0 radio-inline">
                                            <label class="radio radio-success text-white">
                                                <input value="{{ $gateway->id }}" name="group" type="radio" class="payment_method_id_radio" {{($gateway->id==$shipment->payment_method_id)?'checked':''}} />
                                                <span></span>
                                                {{ $gateway->name }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-group">
                                            <input type="text" placeholder="{{ translate('Please type the Transfer Number Here (Optional)') }}"
                                            class="form-control payment_method_id_radio_detail" value="{{($gateway->id==$shipment->payment_method_id)?$shipment->payment_method_id_details:''}}" />
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </div>

                <hr>












                <div id="kt_repeater_1">

                    <div class="row">
                        <div class="col-md-10">
                            <div class="w-100 p-3 pl-5 text-white" style="background:hsl(194, 82%, 40%);">
                                <h2 class="text-left">{{ translate('PACKAGE INFORMATION') }}:
                                    <small style="font-size: 12px;">
                                        {{ translate('( Please select our standard package OR choose custom pachage, weight will be required )') }}
                                    </small>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mt-2">
                                <div class="">
                                    <div>
                                        <a href="javascript:;" data-repeater-create=""
                                            class="btn btn-sm font-weight-bolder btn-light-primary"
                                            style="background:orange;border-radius:20px;">
                                            <i class="la la-plus"></i>{{ translate('Add Package') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div data-repeater-list="Package">
                        @foreach (\App\PackageShipment::where('shipment_id', $shipment->id)->get() as $pack)
                        <div data-repeater-item class=" align-items-center"
                            style="margin-top: 15px;padding-bottom: 15px;padding-top: 15px;border-bottom:1px solid #ccc;">
                            <input type="hidden" class="package_id" name="package_id" value="{{$pack->package_id}}" />
                            <div class="row mb-2">
                                @foreach ($categories as $key => $category)
                                    <div class="col-md-3 mb-2 update_category_id" style="cursor: pointer" data-category_id="{{$category->id}}">
                                        <div class="card p-3" style=" {{($pack->package->category->id==$category->id)?'background: gray':'background: purple'}} ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="{{ url('public/'.\App\Upload::find($category->icon)->file_name) }}" alt="Image" style="width:50px;height:50px;">
                                                </div>
                                                <div class="col-md-9">
                                                    <h5 class="mt-5 text-white">{{ $category->name }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row mb-2 update_package_data">
                                @foreach ($pack->package->category->packages as $key => $package)
                                    <div class="col-md-3 mb-2 update_package_id" style="cursor: pointer;" data-package_id="{{$package->id}}">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <label class="checkbox mt-3">
                                                    <input type="radio" name="package_checkbox" @if ($pack->package_id == $package->id) checked @endif />
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col-md-2">
                                                <img src="{{ url('public/'.\App\Upload::find($package->icon)->file_name) }}" alt="Image" style="width:35px;height:35px;">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="mt-3 update_package_title">{{ $package->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="row ml-1">

                                <div class="col-md-4">
                                    <label>{{ translate('Description:') }} <small style="font-size:12px;color: red">*</small></label>
                                    <textarea type="text" placeholder="{{ translate('description') }}"
                                        class="form-control" name="description">{{ $pack->description }}</textarea>
                                    <div class="mb-2 d-md-none"></div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-md-12 mb-2 package_weight">
                                            <div class="row">
                                                <div class="col-md-6" style="display: flex">
                                                    <i class="fa fa-gift text-dark" style="font-size: 30px;"></i>
                                                    <label class="mt-2 ml-2" style="color:#0b2339;">{{ translate('Weight') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" min="0" placeholder="{{ translate('Weight') }}"
                                                name="weight" class="form-control weight-listener"
                                                onchange="calcTotalWeight()" value="{{ $pack->weight }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6" style="display: flex">
                                                    <i class="fa fa-gift text-dark" style="font-size: 30px;"></i>
                                                    <label class="mt-2 ml-2" style="color:#0b2339;">{{ translate('Length') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" min="0" class="form-control length-listener"
                                                placeholder="{{ translate('Length') }}" name="length"
                                                value="{{ $pack->length }}" />
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="row">
                                                <div class="col-md-6" style="display: flex">
                                                    <i class="fa fa-gift text-dark" style="font-size: 30px;"></i>
                                                    <label class="mt-2 ml-2" style="color:#0b2339;">{{ translate('Width') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" min="0" class="form-control width-listener"
                                                placeholder="{{ translate('Width') }}" name="width"
                                                value="{{ $pack->width }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="row">
                                                <div class="col-md-6" style="display: flex">
                                                    <i class="fa fa-gift text-dark" style="font-size: 30px;"></i>
                                                    <label class="mt-2 ml-2" style="color:#0b2339;">{{ translate('Height') }}</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" min="0" class="form-control height-listener"
                                                placeholder="{{ translate('Height') }}" name="height"
                                                value="{{ $pack->height }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox mb-3">
                                                <i class="fa fa-gift text-dark" style="font-size: 30px;"></i>
                                                <label class="w-50 ml-2 mt-2" style="color:#0b2339;">{{ translate('Insurance') }}</label>
                                                <input type="checkbox" onchange="update_currency_status(this)"
                                                placeholder="{{ translate('Include Shipment Insurance') }}"
                                                class="form-control insurance-listener" name="shipment_insurance"
                                                value="{{ $pack->shipment_insurance }}"
                                                {{ $pack->shipment_insurance == 1 ? 'checked' : '' }} />
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="{{ translate('Package Value') }}"
                                                class="form-control value-listener" name="shipment_price"
                                                onchange="calcTotalPrice()" value="{{ $pack->shipment_price }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox mb-3">
                                                <i class="fa fa-gift text-dark" style="font-size: 30px;"></i>
                                                <label class="w-50 ml-2 mt-2" style="color:#0b2339;">{{ translate('Fragile') }}</label>
                                                <input type="checkbox" onchange="update_currency_status(this)"
                                                placeholder="{{ translate('Fragile') }}"
                                                class="form-control fragile-listener" name="shipment_fragile"
                                                value="{{ $pack->shipment_fragile }}"
                                                {{ $pack->shipment_fragile == 1 ? 'checked' : '' }} />
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <div class="inner-repeater row">
                                    <div class="form-group col-md-2">
                                        <div class="">
                                            <div>
                                                <a href="javascript:;" data-repeater-create=""
                                                    class="btn btn-sm font-weight-bolder btn-light-primary"
                                                    style="border-radius:20px;">
                                                    <i class="la la-plus"></i>{{ translate('Add Content List') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-repeater-list="package_list" class="col-md-10">
                                        @if (isset($pack->package_list))
                                            @foreach ($pack->package_list as $list)
                                                <div data-repeater-item>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>{{ translate('Item Name') }}:</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="{{ translate('Item Name') }}"
                                                                name="item_name"
                                                                value="{{ $list->item_name }}" />

                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>{{ translate('Item Description') }}:</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="{{ translate('Description') }}"
                                                                name="description"
                                                                value="{{ $list->description }}" />
                                                        </div>
                                                        <div class="col-md-2">

                                                            <label>{{ translate('Quantity') }}:</label>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Qty</span>
                                                                </div>
                                                                <input type="text" min="1"
                                                                    class="form-control quantity-listener"
                                                                    placeholder="{{ translate('Quantity') }}" type="text"
                                                                    min="1" name="qty" class="form-control" value="{{ $list->qty }}" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12">

                                                            <div>
                                                                <a href="javascript:;" data-repeater-delete=""
                                                                    class="btn btn-sm font-weight-bolder btn-light-danger delete_item">
                                                                    <i
                                                                        class="la la-trash-o"></i>{{ translate('Delete List') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            @endforeach
                                        @else
                                            <div data-repeater-item data-repeater-first-delete>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>{{ translate('Item Name') }}:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Item Name') }}"
                                                            name="item_name" />

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>{{ translate('Item Description') }}:</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Description') }}"
                                                            name="description" />
                                                    </div>
                                                    <div class="col-md-2">

                                                        <label>{{ translate('Quantity') }}:</label>

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Qty</span>
                                                            </div>
                                                            <input type="text" min="1"
                                                                class="form-control quantity-listener"
                                                                placeholder="{{ translate('Quantity') }}" type="text"
                                                                min="1" name="qty" class="form-control" value="1" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">

                                                        <div>
                                                            <a href="javascript:;" data-repeater-delete=""
                                                                class="btn btn-sm font-weight-bolder btn-light-danger delete_item">
                                                                <i
                                                                    class="la la-trash-o"></i>{{ translate('Delete List') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        @endif
                                    </div>

                                </div>
                            </div>




                            <div class="row">
                                <div class="col-md-12">

                                    <div>
                                        <a href="javascript:;" data-repeater-delete=""
                                            class="btn btn-sm font-weight-bolder btn-light-danger delete_item"
                                            style="border-radius:20px;">
                                            <i class="la la-trash-o"></i>{{ translate('Delete Package') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>


                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>{{ translate('Delivery Time') }}:</label>
                            <select class="form-control kt-select2 delivery-time" id="delivery_time"
                                name="Shipment[delivery_time]">
                                @foreach ($times as $time)
                                    <option data-id="{{ $time->id }}" value="{{ $time->name }}" @if ($shipment->delivery_time == $time->name) selected @endif>
                                        {{ translate($time->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>{{ translate('Total Weight') }}:</label>
                            <input id="kt_touchspin_4" type="text" class="form-control total-weight"
                                value="{{ $shipment->total_weight }}" value="0" name="Shipment[total_weight]" />
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>{{ translate('Total Package Value') }}:</label>
                        <input type="text" placeholder="{{ translate('Package Value') }}"
                            class="form-control total-price" id="" name="Shipment[shipment_price]"
                            value="{{ $shipment->shipment_price }}" readonly />
                    </div>

                </div>




            </div>



            {!! hookView('shipment_addon', $currentView) !!}

            <div class="mb-0 text-right form-group">
                <button type="button" class="btn btn-lg btn-primary" onclick="get_estimation_cost()"
                    style="margin-left: 20px;font-size: 20px;">{{ translate('Update Shipment') }}</button>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary d-none" data-toggle="modal"
                    data-target="#exampleModalCenter" id="modal_open">
                    {{ translate('Get Rates') }}
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">
                                    {{ translate('Estimation Cost') }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    id="modal_close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="text-left modal-body">
                                <div class="row">
                                    <div class="col-6">{{ translate('Shipping Cost') }} :</div>
                                    <div class="col-6" id="shipping_cost"></div>
                                </div>
                                <div class="row">
                                    <div class="col-6">{{ translate('Tax & Duty') }} :</div>
                                    <div class="col-6" id="tax_duty"></div>
                                </div>
                                <div class="row">
                                    <div class="col-6">{{ translate('Insurance') }} :</div>
                                    <div class="col-6" id="insurance"></div>
                                </div>
                                <div class="row bg-warning" id="return_cost_show">
                                    <div class="col-6">{{ translate('Return Cost') }} :</div>
                                    <div class="col-6" id="return_cost"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">{{ translate('TOTAL COST') }} :</div>
                                    <div class="col-6" id="total_cost"></div>
                                </div>

                                <input type="hidden" class="form-control" value="{{ $shipment->tax }}"
                                    name="Shipment[tax]" />
                                <input type="hidden" class="form-control" value="{{ $shipment->insurance }}"
                                    name="Shipment[insurance]" />
                                <input type="hidden" class="form-control"
                                    value="{{ convert_price($shipment->shipping_cost) }}"
                                    name="Shipment[shipping_cost]" />
                                <input type="hidden" class="form-control"
                                    value="{{ convert_price($shipment->return_cost) }}" name="Shipment[return_cost]" />

                                {{-- <input type="hidden" class="form-control"
                                value="{{ $shipment->from_country_id }}"
                                name="Shipment[from_country_id]" /> --}}

                                {{-- <input type="hidden" class="form-control"
                                value="{{ $shipment->to_country_id }}" name="Shipment[to_country_id]" />

                            <input type="hidden" class="form-control"
                                value="{{ $shipment->from_state_id }}" name="Shipment[from_state_id]" />

                            <input type="hidden" class="form-control"
                                value="{{ $shipment->to_state_id }}" name="Shipment[to_state_id]" />

                            <input type="hidden" class="form-control"
                                value="{{ $shipment->from_area_id }}" name="Shipment[from_area_id]" />

                            <input type="hidden" class="form-control"
                                value="{{ $shipment->to_area_id }}" name="Shipment[to_area_id]" /> --}}


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{ translate('Close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ translate('Confirm Shipment') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('script')
<script type="text/javascript">
    var inputs = document.getElementsByTagName('input');

    function update_currency_status(el) {
        if (el.checked) {
            el.value = 1;
        } else {
            el.value = 0;
        }

    }

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type.toLowerCase() == 'number') {
            inputs[i].onkeydown = function(e) {
                if (!((e.keyCode > 95 && e.keyCode < 106) ||
                        (e.keyCode > 47 && e.keyCode < 58) ||
                        e.keyCode == 8)) {
                    return false;
                }
            }
        }
    }
    $(document).on("click",'.update_category_id', function () {

        $(this).parent().parent().find('.update_category_id > .card').css("background-color", "purple");

        $(this).find('.card').css("background-color", "grey");

        var id = $(this).data('category_id');
        var selector =$(this);
        $(this).parent().parent().find('.update_package_data').html('');
        $.get("{{ route('admin.shipments.get-packages-ajax') }}?category_id=" + id, function(data) {
            selector.parent().parent().find('.update_package_data').html(data);
        });

    });

    $(document).on("click",'.update_package_id', function () {

        // $(this).parent().parent().find('.update_package_id > .card').css("background-color", "");
        // $(this).parent().parent().find('.update_package_title').css("color", "");

        // $(this).find('.card').css("background-color", "orange");
        // $(this).find('.update_package_title').css("color", "white");

        var id = $(this).data('package_id');
        $(this).parent().parent().find('.package_id').val(id);
        if($(this).data('default_cost'))
        {
            $(this).parent().parent().find('.package_weight').hide();
        }
        else
        {
            $(this).parent().parent().find('.package_weight').show();
        }

    });


    if ($('.payment-type').val() == '2') {
        $('.payment-method').attr('disabled', 'disabled');
        $('.payment_method_id_radio').attr('disabled', 'disabled');
        $('.payment_method_id_radio_detail').attr('disabled', 'disabled');

    } else {
        $('.payment-method').removeAttr('disabled', 'disabled');
        $('.payment_method_id_radio').removeAttr('disabled', 'disabled');
        $('.payment_method_id_radio_detail').removeAttr('disabled', 'disabled');

    }

    $('.payment-type').change(function() {
        // alert($(this).val());
        if ($(this).val() == '2') {
            $('.payment-method').attr('disabled', 'disabled');
            $('.payment_method_id_radio').attr('disabled', 'disabled');
            $('.payment_method_id_radio_detail').attr('disabled', 'disabled');

        } else {
            $('.payment-method').removeAttr('disabled', 'disabled');
            $('.payment_method_id_radio').removeAttr('disabled', 'disabled');
            $('.payment_method_id_radio_detail').removeAttr('disabled', 'disabled');

        }
    });

    $('.payment_method_id_radio_detail').change(function() {
        $('input[name ="Shipment[payment_method_id_details]"]').val($(this).val());

    });
    $('.payment_method_id_radio').change(function() {
        $(".payment-method").val('').change();
        $('input[name ="Shipment[payment_method_id]"]').val($(this).val());
        $('.payment_method_id_radio_detail').attr('disabled', 'disabled');
        if ($(this).val() == '286' || $(this).val() == '287' || $(this).val() == '288') {
            $(this).parent().parent().parent().parent().find('.payment_method_id_radio_detail').removeAttr(
                'disabled', 'disabled');

        }
        $('.payment_method_id_radio_detail').val('');
        $('input[name ="Shipment[payment_method_id_details]"]').val('');

    });

    $('#reload_client_regions').on("click", function (e) {
        $('#change-country').trigger('change');
    });
    $('#reload_client_areas').on("click", function (e) {
        $('#change-state-from').trigger('change');
    });
    $('#reload_receiver_regions').on("click", function (e) {
        $('#change-country-to').trigger('change');
    });
    $('#reload_receiver_areas').on("click", function (e) {
        $('#change-state-to').trigger('change');
    });

    $('.payment-method').on("change", function(e) {
        $('input[name ="Shipment[payment_method_id]"]').val($(this).val());
    });
    $('.payment-method').on("select2:close", function(e) {
        $('input[name=group][value=null]').prop("checked", true);
        $('.payment_method_id_radio_detail').attr('disabled', 'disabled');
        $('.payment_method_id_radio_detail').val('');
        $('input[name ="Shipment[payment_method_id_details]"]').val('');
    });



    $('.select-address').select2({
        placeholder: "Search Address"
    });

    $('#change-address').change(function() {
        var id = $(this).val();
        $('#client_first_name').val($(this).find(':selected').data('first_name'));
        $('#client_last_name').val($(this).find(':selected').data('last_name'));
        $('#client_address').val($(this).find(':selected').data('address'));
        $('#client_address_2').val($(this).find(':selected').data('address2'));
        $('#client_email').val($(this).find(':selected').data('email'));
        $('#client_zip_code').val($(this).find(':selected').data('zip_code'));
        $('#client_phone').val($(this).find(':selected').data('responsible_mobile')).change();
        //alert($(this).find(':selected').data('address'));

        $('#change-country').val($(this).find(':selected').data('country_id')).change();
        var state_id=$(this).find(':selected').data('state_id');
        var area_id=$(this).find(':selected').data('area_id');

        setTimeout(function() {
            $('#change-state-from').val(state_id).change();

        }, 1000);
        setTimeout(function() {
            $('#change-area-from').val(area_id).change();

        }, 2000);


    });

    $(document).on('change', '.address-listener', function() {

        if ($(this).val()=="1") {
            $('#client_first_name').val('');
            $('#client_last_name').val('');
            $('#client_address').val('');
            $('#client_address_2').val('');
            $('#client_email').val('');
            $('#client_zip_code').val('');
            $('#client_phone').val('');
            $('#change-country').val('').change();
            $('#change-state-from').val('').change();
            $('#change-area-from').val('').change();


            $('.existing-address-show').hide();
            $('.new-address-show').show();
        } else {

            $('#change-address').val('').change();

            $('.existing-address-show').show();
            $('.new-address-show').hide();
        }

    });

    $('.select-receiver').select2({
        placeholder: "Search Receiver"
    });
    $('#change-receiver').change(function() {
        var id = $(this).val();
        $.get("{{ route('admin.shipments.get-receiver-address-ajax') }}?receiver_id=" + id, function(data) {
            $('#change-receiver-address').empty();
            $('#change-receiver-address').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                $('#change-receiver-address').append('<option value="' + element['id'] + '" data-last_name="' + element['last_name'] + '" data-first_name="' + element['first_name'] + '" data-email="' + element['receiver']['email'] + '" data-responsible_mobile="' + element['receiver']['responsible_mobile'] + '" data-zip_code="' + element['zip_code'] + '" data-address="' + element['type'] + '" data-address2="' + element['address'] + '" data-country_id="' + element['country_id'] + '" data-area_id="' + element['area_id'] + '" data-state_id="' + element['state_id'] + '">' + element['name'] + '</option>');

            }


        });
    });


    $('.select-receiver-address').select2({
        placeholder: "Search Address"
    });

    $('#change-receiver-address').change(function() {
        var id = $(this).val();
        $('#receiver_first_name').val($(this).find(':selected').data('first_name'));
        $('#receiver_last_name').val($(this).find(':selected').data('last_name'));
        $('#receiver_address').val($(this).find(':selected').data('address'));
        $('#receiver_address_2').val($(this).find(':selected').data('address2'));
        $('#receiver_email').val($(this).find(':selected').data('email'));
        $('#receiver_zip_code').val($(this).find(':selected').data('zip_code'));
        $('#receiver_phone').val($(this).find(':selected').data('responsible_mobile')).change();
        //alert($(this).find(':selected').data('address'));

        $('#change-country-to').val($(this).find(':selected').data('country_id')).change();
        var state_id=$(this).find(':selected').data('state_id');
        var area_id=$(this).find(':selected').data('area_id');

        setTimeout(function() {
            $('#change-state-to').val(state_id).change();

        }, 1000);
        setTimeout(function() {
            $('#change-area-to').val(area_id).change();

        }, 2000);


    });


    $(document).on('change', '.address-listener-receiver', function() {

        if ($(this).val()=="1") {
            $('#receiver_first_name').val('');
            $('#receiver_last_name').val('');
            $('#receiver_address').val('');
            $('#receiver_address_2').val('');
            $('#receiver_email').val('');
            $('#receiver_zip_code').val('');
            $('#receiver_phone').val('');
            $('#change-country-to').val('').change();
            $('#change-state-to').val('').change();
            $('#change-area-to').val('').change();


            $('.existing-receiver-address-show').hide();
            $('.new-receiver-address-show').show();
        } else {

            $('#change-receiver-address').val('').change();
            $('#change-receiver').val('').change();

            $('.existing-receiver-address-show').show();
            $('.new-receiver-address-show').hide();
        }
    });

    $(document).on('click', '.package-listener', function() {

        if ($(this).is(":checked")) {
            $(this).val(1);
            $(this).parent().parent().parent().find('.default-package-show').hide();
            $(this).parent().parent().parent().find('.custom-package-show').show();
        } else {
            $(this).val(0);
            $(this).parent().parent().parent().find('.default-package-show').show();
            $(this).parent().parent().parent().find('.custom-package-show').hide();
        }

    });

    $('.payment-method').select2({
        placeholder: "Search Payment Method",
    });

    // $('.payment-type').select2({
    //     placeholder: "Search Payment Type",
    // });



    $('.delivery-time').select2({
        placeholder: "Search Delivery Time",
    });

    $('.select-branch').select2({
        placeholder: "Search Branch",
    })
    @if ($user_type == 'admin' || in_array('1006', $staff_permission))
        .on('select2:open', () => {
        $(".select2-results:not(:has(a))").append(`<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                href="{{ route('admin.branchs.create') }}?redirect=admin.shipments.create" class="btn btn-primary">+
                {{ translate('Add New Branch') }}</a>
        </li>`);
        });
    @endif


    $('#change-country').change(function() {
        var id = $(this).val();
        $.get("{{ route('admin.shipments.get-states-ajax') }}?country_id=" + id, function(data) {
            $('select[name ="Shipment[from_state_id]"]').empty();
            $('select[name ="Shipment[from_state_id]"]').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];

                $('select[name ="Shipment[from_state_id]"]').append('<option value="' + element['id'] +
                    '">' + element['name'] + '</option>');
            }


        });
        $.get("{{ route('admin.shipments.get-branches-ajax') }}?country_id=" + id, function(data) {
            $('select[name ="Shipment[branch_id]"]').empty();
            $('select[name ="Shipment[branch_id]"]').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                var selected = "";
                if (index == 0) {
                    selected = "selected";
                }
                $('select[name ="Shipment[branch_id]"]').append('<option value="' + element['id'] +
                    '" ' + selected + '>' + element['name'] + '</option>');
            }


        });
    });
    $('#change-country-to').change(function() {
        var id = $(this).val();

        $.get("{{ route('admin.shipments.get-states-ajax') }}?country_id=" + id, function(data) {
            $('select[name ="Shipment[to_state_id]"]').empty();
            $('select[name ="Shipment[to_state_id]"]').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                $('select[name ="Shipment[to_state_id]"]').append('<option value="' + element['id'] +
                    '">' + element['name'] + '</option>');
            }


        });
        $.get("{{ route('admin.shipments.get-branches-ajax') }}?country_id=" + id, function(data) {
            $('select[name ="Shipment[receiver_branch_id]"]').empty();
            $('select[name ="Shipment[receiver_branch_id]"]').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                var selected = "";
                if (index == 0) {
                    selected = "selected";
                }
                $('select[name ="Shipment[receiver_branch_id]"]').append('<option value="' + element[
                        'id'] +
                    '"' + selected + '>' + element['name'] + '</option>');
            }


        });
    });
    $('#change-state-from').change(function() {
        var id = $(this).val();

        $.get("{{ route('admin.shipments.get-areas-ajax') }}?state_id=" + id, function(data) {
            $('select[name ="Shipment[from_area_id]"]').empty();
            $('select[name ="Shipment[from_area_id]"]').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                $('select[name ="Shipment[from_area_id]"]').append('<option value="' + element['id'] +
                    '">' + element['name'] + '</option>');
            }


        });
    });
    $('#change-state-to').change(function() {
        var id = $(this).val();

        $.get("{{ route('admin.shipments.get-areas-ajax') }}?state_id=" + id, function(data) {
            $('select[name ="Shipment[to_area_id]"]').empty();
            $('select[name ="Shipment[to_area_id]"]').append('<option value=""></option>');
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                $('select[name ="Shipment[to_area_id]"]').append('<option value="' + element['id'] +
                    '">' + element['name'] + '</option>');
            }


        });
    });

    function get_estimation_cost() {
        var total_weight = document.getElementById('kt_touchspin_4').value;
        var exp_type = document.querySelector('input[name="Shipment[exp_type]"]:checked').value;
        var select_packages = document.getElementsByClassName('package_id');
        var select_custom_packages = document.getElementsByClassName('package-listener');
        var select_custom_packages_value = document.getElementsByClassName('package-listener-value');

        var select_weights = document.getElementsByClassName('weight-listener');
        var select_insurances = document.getElementsByClassName('insurance-listener');
        var select_values = document.getElementsByClassName('value-listener');

        var from_country_id = document.getElementsByName("Shipment[from_country_id]")[0].value;
        var to_country_id = document.getElementsByName("Shipment[to_country_id]")[0].value;
        var from_state_id = document.getElementsByName("Shipment[from_state_id]")[0].value;
        var to_state_id = document.getElementsByName("Shipment[to_state_id]")[0].value;
        var from_area_id = document.getElementsByName("Shipment[from_area_id]")[0].value;
        var to_area_id = document.getElementsByName("Shipment[to_area_id]")[0].value;

        var package_ids = [];
        var return_package_id = null;
        for (let index = 0; index < select_packages.length; index++) {
            if (select_packages[index].value) {
                package_ids[index] = new Object();
                // if (select_custom_packages[index].value == 1) {
                //     if(select_weights[index].value<=0)
                //     {
                //         AIZ.plugins.notify('danger', '{{ translate('Wait Must be greater then zero') }} ' + (index + 1));
                //         return 0;
                //     }
                //     return_package_id = function() {
                //         var package_id = null;
                //         $.ajax({
                //             'async': false,
                //             'type': "GET",
                //             'global': false,
                //             'dataType': 'json',
                //             'url': "{{ route('admin.shipments.save-package-ajax') }}?package_name=" +
                //                 select_custom_packages_value[index].value,
                //             'success': function(id) {
                //                 package_id = id;
                //             }
                //         });
                //         return package_id;
                //     }();

                //     var add_check = true;
                //     var package_index = 0;
                //     var event = new Event('change');
                //     for (i = 0; i < select_packages[index].length; ++i) {
                //         if (select_packages[index].options[i].value == return_package_id) {
                //             add_check = false;
                //             package_index = i;
                //         }
                //     }
                //     if (add_check) {
                //         var option = document.createElement("option");
                //         option.text = select_custom_packages_value[index].value;
                //         option.value = return_package_id;
                //         select_packages[index].appendChild(option).setAttribute("selected", "selected");
                //         select_packages[index].dispatchEvent(event);
                //     } else {
                //         select_packages[index].options[package_index].setAttribute("selected", "selected");
                //         select_packages[index].dispatchEvent(event);
                //     }
                //     package_ids[index]["package_id"] = return_package_id;
                // } else {
                    package_ids[index]["package_id"] = select_packages[index].value;
                //}
                package_ids[index]["weight"] = select_weights[index].value;
                package_ids[index]["shipment_insurance"] = select_insurances[index].value;
                package_ids[index]["shipment_price"] = select_values[index].value;
            } else {
                AIZ.plugins.notify('danger', '{{ translate('Please select package type') }} ' + (index + 1));
                return 0;
            }
        }
        //console.log(package_ids);
        var request_data = {
            _token: '{{ csrf_token() }}',
            package_ids: package_ids,
            total_weight: total_weight,
            exp_type: exp_type,
            from_country_id: from_country_id,
            to_country_id: to_country_id,
            from_state_id: from_state_id,
            to_state_id: to_state_id,
            from_area_id: from_area_id,
            to_area_id: to_area_id,
        };
        $.post('{{ route('admin.shipments.get-estimation-cost') }}', request_data, function(response) {
            document.getElementById("shipping_cost").innerHTML = response.shipping_cost;
            document.getElementById("tax_duty").innerHTML = response.tax;
            document.getElementById("insurance").innerHTML = response.insurance;
            document.getElementById("return_cost").innerHTML = response.return_cost + ' ( Not Included )';
            if(response.original_return_cost<=0)
            {
                document.getElementById("return_cost_show").style.display = "none";
            }
            else
            {
                document.getElementById("return_cost_show").style.display = "flex";
            }
            document.getElementById("total_cost").innerHTML = response.total_cost;
            document.getElementById('modal_open').click();
            console.log(response);
        });
    }

    function calcTotalWeight() {
        console.log('sds');
        var elements = $('.weight-listener');
        var sumWeight = 0;
        elements.map(function() {
            sumWeight += parseInt($(this).val());
            console.log(sumWeight);
        }).get();
        $('.total-weight').val(sumWeight);
    }

    function calcTotalPrice() {
        console.log('sds');
        var elements = $('.value-listener');
        var sumPrice = 0;
        elements.map(function() {
            sumPrice += parseInt($(this).val());
            console.log(sumPrice);
        }).get();
        $('.total-price').val(sumPrice);
    }
    $(document).ready(function() {

        $('#datepicker').datepicker({
            format: "DD d, MM yyyy"
        });

        $("#client_phone").intlTelInput({

        });
        $("#receiver_phone").intlTelInput({

        });

        @if (auth()->user()->user_type == 'customer' && isset(auth()->user()->userClient->client))
            $('.select-client').val("{{ auth()->user()->userClient->client->id }}").trigger('change');
        @endif
        @if (auth()->user()->user_type == 'customer' && isset(auth()->user()->userReceiver->receiver))
            $('.select-receiver').val("{{ auth()->user()->userReceiver->receiver->id }}").trigger('change');
        @endif
        $('.select-country').select2({
            placeholder: "Search country",
            language: {
                noResults: function() {
                    @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                        return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                href="{{ route('admin.shipments.covered_countries') }}?redirect=admin.shipments.create"
                                class="btn btn-primary">Manage {{ translate('Countries') }}</a>
                        </li>`;
                    @else
                        return ``;
                    @endif
                },
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });


        $('.select-state').select2({
            placeholder: "Search state",
            language: {
                noResults: function() {
                    @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                        return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                href="{{ route('admin.shipments.covered_countries') }}?redirect=admin.shipments.create"
                                class="btn btn-primary">Manage {{ translate('States') }}</a>
                        </li>`;
                    @else
                        return ``;
                    @endif
                },
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });

        $('.select-area').select2({
            placeholder: "Search Area",
            language: {
                noResults: function() {
                    @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                        return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                href="{{ route('admin.areas.create') }}?redirect=admin.shipments.create" class="btn btn-primary">Manage
                                {{ translate('Areas') }}</a>
                        </li>`;
                    @else
                        return ``;
                    @endif
                },
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });

        //$('.select-client-address').trigger('change');
        $('#kt_datepicker_3').datepicker({
            orientation: "bottom auto",
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayBtn: true,
            todayHighlight: true,
            startDate: new Date(),
        });
        $(document).ready(function() {
            if ($('input:radio[name="Shipment[type]"]:checked').val() == '2') {
                    $('.show_client_branch').show();
                    $('.show_pickup_date').hide();
                } else {
                    $('.show_client_branch').hide();
                    $('.show_pickup_date').show();

                }
            $('input:radio[name="Shipment[type]"]').change(function() {
                if ($(this).val() == '2') {
                    $('.show_client_branch').show();
                    $('.show_pickup_date').hide();
                } else {
                    $('.show_client_branch').hide();
                    $('.show_pickup_date').show();

                }
            });
            if ($('input:radio[name="Shipment[receiver_shipment_type]:checked"]').val() == '2') {
                    $('.show_receiver_branch').show();
                } else {
                    $('.show_receiver_branch').hide();

                }
            $('input:radio[name="Shipment[receiver_shipment_type]"]').change(function() {
                if ($(this).val() == '2') {
                    $('.show_receiver_branch').show();
                } else {
                    $('.show_receiver_branch').hide();

                }
            });




            $('.package-type-select').select2({
                placeholder: "Search Package Type",
                language: {
                    noResults: function() {
                        @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                            return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                    href="{{ route('admin.packages.create') }}?redirect=admin.shipments.create"
                                    class="btn btn-primary">Manage
                                    {{ translate('Packages') }}</a>
                            </li>`;
                        @else
                            return ``;
                        @endif
                    },
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
            });
        });


        //Package Types Repeater

        $('#kt_repeater_1').repeater({
            initEmpty: false,
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater',
                show: function() {
                    $(this).slideDown();

                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },
                isFirstItemUndeletable: true

            }],

            show: function() {
                $(this).slideDown();

                $('.package-type-select').select2({
                    placeholder: "Search Package Type",
                    language: {
                        noResults: function() {
                            @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                                return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                        href="{{ route('admin.packages.create') }}?redirect=admin.shipments.create"
                                        class="btn btn-primary">Manage
                                        {{ translate('Packages') }}</a>
                                </li>`;
                            @else
                                return ``;
                            @endif
                        },
                    },
                    escapeMarkup: function(markup) {
                        return markup;
                    },
                });

                $(".value-listener:last").val(0);
                $(".weight-listener:last").val(0);
                $(".length-listener:last").val(0);
                $(".width-listener:last").val(0);
                $(".height-listener:last").val(0);
                $(".quantity-listener:last").val(1);
                $(".package-type-select:last").val(1).change();
                calcTotalWeight();
                calcTotalPrice();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },
            isFirstItemUndeletable: true
        });


        $('body').on('click', '.delete_item', function() {
            $('.total-weight').val("{{ translate('Calculated...') }}");
            setTimeout(function() {
                calcTotalWeight();
                calcTotalPrice();
            }, 500);
        });

        FormValidation.formValidation(
            document.getElementById('kt_form_1'), {
                fields: {
                    "Shipment[shipping_date]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[client_address]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[client_email]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[receiver_email]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[client_phone]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    // "Shipment[payment_type]": {
                    //     validators: {
                    //         notEmpty: {
                    //             message: '{{ translate('This is required!') }}'
                    //         }
                    //     }
                    // },
                    // "Shipment[payment_method_id]": {
                    //     validators: {
                    //         notEmpty: {
                    //             message: '{{ translate('This is required!') }}'
                    //         }
                    //     }
                    // },
                    "Shipment[tax]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[insurance]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[shipping_cost]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[delivery_time]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    // "Shipment[total_weight]": {
                    //     validators: {
                    //         notEmpty: {
                    //             message: '{{ translate('This is required!') }}'
                    //         }
                    //     }
                    // },
                    "Shipment[from_country_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[to_country_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[from_state_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[to_state_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[from_area_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[to_area_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[receiver_phone]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[receiver_address]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Package[0][package_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    }



                },


                plugins: {
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    // Validate fields when clicking the Submit button
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    // Submit the form when all fields are valid
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                    icon: new FormValidation.plugins.Icon({
                        valid: '',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh',
                    }),
                }
            }
        );
    });
</script>
@endsection
