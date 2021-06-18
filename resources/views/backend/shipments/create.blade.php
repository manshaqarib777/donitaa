@extends('backend.layouts.app')

@section('content')
    @php
    $auth_user = Auth::user();
    @endphp

@section('sub_title'){{ translate('Create New Shipment') }}@endsection
    @php
    $user_type = Auth::user()->user_type;
    $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? '[]');
    $countries = \App\Country::where('covered', 1)->get();
    $packages = \App\Package::all();
    $times = \App\Time::all();
    @endphp
    <style>
        label {
            font-weight: bold !important;
        }

    </style>
    <div class="mx-auto col-lg-12">
        <div class="card">

            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Shipment Info') }}</h5>
            </div>

            @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                @if (\App\ShipmentSetting::getVal('def_shipping_cost') == null)
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{ translate('Please Configure Fees Settings , Costs in creation will be zero without configuration') }},
                            <a class="alert-link"
                                href="{{ route('admin.shipments.settings.fees') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif
                @if (count($countries) == 0 || \App\State::where('covered', 1)->count() == 0)
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{ translate('Please Configure Your covered countries and cities') }},
                            <a class="alert-link"
                                href="{{ route('admin.shipments.covered_countries') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif
                @if (\App\Area::count() == 0)
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{ translate('Please Add areas before creating your first shipment') }},
                            <a class="alert-link"
                                href="{{ route('admin.areas.create') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif
                @if (count($packages) == 0)
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{ translate('Please Add package types before creating your first shipment') }},
                            <a class="alert-link"
                                href="{{ route('admin.packages.create') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif
                @if ($branchs->count() == 0)
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{ translate('Please Add branches before creating your first shipment') }},
                            <a class="alert-link"
                                href="{{ route('admin.branchs.index') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif

                @if ($clients->count() == 0)
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{ translate('Please Add clients before creating your first shipment') }},
                            <a class="alert-link"
                                href="{{ route('admin.clients.index') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif
            @else
                @if (\App\ShipmentSetting::getVal('def_shipping_cost') == null || count($countries) == 0 || \App\State::where('covered', 1)->count() == 0 || \App\Area::count() == 0 || count($packages) == 0 || $branchs->count() == 0 || $clients->count() == 0)
                    <div class="row">
                        <div class="text-center alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;"
                            role="alert">
                            {{ translate('Please ask your administrator to configure shipment settings first, before you can create a new shipment!') }}
                        </div>
                    </div>
                @endif
            @endif

            <form class="form-horizontal" action="{{ route('admin.shipments.store') }}" id="kt_form_1" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group row">
                                <label class="col-2 col-form-label">{{ translate('Shipment Type') }}</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-success btn btn-default">
                                            <input @if (\App\ShipmentSetting::getVal('def_shipment_type') == '1') checked @endif type="radio" name="Shipment[type]"
                                                checked="checked" value="1" />
                                            <span></span>
                                            {{ translate('Pickup (For door to door delivery)') }}
                                        </label>
                                        <label class="radio radio-success btn btn-default">
                                            <input @if (\App\ShipmentSetting::getVal('def_shipment_type') == '2') checked @endif type="radio" name="Shipment[type]"
                                                value="2" />
                                            <span></span>
                                            {{ translate('Drop off (For delivery package from branch directly)') }}
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">{{ translate('Shipment Zone') }}</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-success btn btn-default">
                                            <input @if (\App\ShipmentSetting::getVal('def_zone') == '1') checked @endif type="radio" name="Shipment[zone]"
                                                checked="checked" value="1" />
                                            <span></span>
                                            {{ translate('Domestic') }}
                                        </label>
                                        <label class="radio radio-success btn btn-default">
                                            <input @if (\App\ShipmentSetting::getVal('def_zone') == '2') checked @endif type="radio" name="Shipment[zone]"
                                                value="2" />
                                            <span></span>
                                            {{ translate('International') }}
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">{{ translate('Shipment Material') }}</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-success btn btn-default">
                                            <input @if (\App\ShipmentSetting::getVal('def_material') == '1') checked @endif type="radio" name="Shipment[material]"
                                                checked="checked" value="1" />
                                            <span></span>
                                            {{ translate('Fragile') }}
                                        </label>
                                        <label class="radio radio-success btn btn-default">
                                            <input @if (\App\ShipmentSetting::getVal('def_material') == '2') checked @endif type="radio" name="Shipment[material]"
                                                value="2" />
                                            <span></span>
                                            {{ translate('Non Fragile') }}
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    @if (\App\ShipmentSetting::getVal('is_date_required') == '1' || \App\ShipmentSetting::getVal('is_date_required') == null)
                                        <div class="form-group">
                                            <label>{{ translate('Shipping Date') }}:</label>
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
                                                    value="{{ $shipping_data->toDateString() }}"
                                                    name="Shipment[shipping_date]" autocomplete="off" class="form-control"
                                                    id="kt_datepicker_3" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="w-100 p-3 pl-5 text-white" style="background:hsl(194, 82%, 40%);">
                                            <h2 class="text-left">{{ translate('PACKAGE INFORMATION') }}:</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row p-3">
                                        @if (auth()->user()->user_type != 'customer' || isset(auth()->user()->userReceiver->receiver))
                                            <div class="col-md-6">
                                                <div class="form-group client-select">
                                                    <label>{{ translate('Client/Sender') }}:</label>



                                                    <select class="form-control kt-select2 select-client"
                                                        name="Shipment[client_id]">
                                                        <option></option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{ $client->id }}"
                                                                data-phone="{{ $client->responsible_mobile }}">
                                                                {{ $client->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>
                                        @else
                                            <div style="display: none">
                                                <select class="form-control kt-select2 select-client" name="Shipment[client_id]">
                                                    <option value="{{ auth()->user()->userClient->client->id }}">{{ auth()->user()->userClient->client->name }}</option>

                                                </select>
                                            </div>
                                        @endif
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Client Phone') }}:</label>
                                                <input placeholder="{{ translate('Client Phone') }}"
                                                    name="Shipment[client_phone]" id="client_phone" class="form-control" id="" />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Client Address') }}:</label>
                                                <div class="form-group">
                                                    <select class="form-control select-client-address" name="Shipment[client_address]">
                                                        <option></option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('From Country') }}:</label>
                                                <select id="change-country" name="Shipment[from_country_id]"
                                                    class="form-control select-country">
                                                    <option value=""></option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 show_branch">
                                            <div class="form-group">
                                                <label>{{ translate('Branch') }}:</label>
                                                <select class="form-control kt-select2 select-branch" name="Shipment[branch_id]">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('From Region') }}:</label>
                                                <select id="change-state-from" name="Shipment[from_state_id]"
                                                    class="form-control select-state">
                                                    <option value=""></option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('From Area') }}:</label>
                                                <select id='change-area-from' name="Shipment[from_area_id]"
                                                    class="form-control select-area">
                                                    <option value=""></option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                    <div class="col-md-12 row" style="background:hsl(194, 82%, 40%);">
                                        <div class="w-100 p-3 pl-5 text-white">
                                            <h2 class="text-left">{{ translate('PACKAGE INFORMATION') }}:</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row p-3" style="background:purple;">

                                        @if (auth()->user()->user_type != 'customer' || isset(auth()->user()->userReceiver->receiver))
                                            <div class="col-md-6">
                                                <div class="form-group receiver-select">
                                                    <label class="text-white">{{ translate('Receiver') }}:</label>

                                                    <select class="form-control kt-select2 select-receiver"
                                                        name="Shipment[receiver_id]">
                                                        <option></option>
                                                        @foreach ($receivers as $receiver)
                                                            <option value="{{ $receiver->id }}"
                                                                data-phone="{{ $receiver->responsible_mobile }}">
                                                                {{ $receiver->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>
                                        @else
                                            <div style="display: none">
                                                <select class="form-control kt-select2 select-receiver" name="Shipment[receiver_id]">
                                                    <option value="{{ auth()->user()->userClient->receiver->id }}">{{ auth()->user()->userClient->receiver->name }}</option>

                                                </select>
                                            </div>
                                        @endif
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-white">{{ translate('Receiver Phone') }}:</label>
                                                <input type="text" placeholder="{{ translate('Receiver Phone') }}"
                                                    name="Shipment[receiver_phone]" id="receiver_phone" class="form-control" />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-white">{{ translate('Receiver Address') }}:</label>
                                                <div class="form-group">
                                                    <select class="form-control select-receiver-address" name="Shipment[receiver_address]">
                                                        <option></option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-white">{{ translate('To Country') }}:</label>
                                                <select id="change-country-to" name="Shipment[to_country_id]"
                                                    class="form-control select-country">
                                                    <option value=""></option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-white">{{ translate('To Region') }}:</label>
                                                <select id="change-state-to" name="Shipment[to_state_id]"
                                                    class="form-control select-state">
                                                    <option value=""></option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-white">{{ translate('To Area') }}:</label>
                                                <select name="Shipment[to_area_id]" id='change-area-to' class="form-control select-area">
                                                    <option value=""></option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Payment Type') }}:</label>
                                        <select class="form-control kt-select2 payment-type" id="payment_type"
                                            name="Shipment[payment_type]">
                                            <option @if (\App\ShipmentSetting::getVal('def_payment_type') == '1') selected @endif value="1">
                                                {{ translate('Postpaid') }}</option>
                                            <option @if (\App\ShipmentSetting::getVal('def_payment_type') == '2') selected @endif value="2">
                                                {{ translate('Prepaid') }}
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Payment Method') }}:</label>
                                        <select class="form-control kt-select2 payment-method" id="payment_method_id"
                                            name="Shipment[payment_method_id]">
                                            @forelse (\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                                <option value="{{ $gateway->id }}" @if ($gateway->id == 11) selected @endif>
                                                    {{ $gateway->name }}</option>
                                            @empty
                                                <option value="11">{{ translate('Cash') }}</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
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
                                                class="selected-files"
                                                value="{{ old('Shipment[attachments_before_shipping]') }}" max="3">
                                        </div>
                                        <div class="file-preview">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{translate('Attachments After Shipping')}}:</label>

                                    <div class="input-group " data-toggle="aizuploader" data-type="image" data-multiple="true">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="Shipment[attachments_after_shipping]" class="selected-files" value="{{old('Shipment[attachments_after_shipping]')}}" max="3">
                                    </div>
                                    <div class="file-preview">
                                    </div>
                                </div>
                            </div> --}}
                            </div>

                            <hr>

                            <div id="kt_repeater_1">
                                <div class="row" id="kt_repeater_1">
                                    <div class="w-100 p-3 pl-5 text-white" style="background:hsl(194, 82%, 40%);">
                                        <h2 class="text-left">{{ translate('PACKAGE INFORMATION') }}: <small style="font-size: 12px;">{{translate("( Please select our standard package OR choose custom pachage, weight will be required )")}}</small></h2>
                                    </div>
                                    <div data-repeater-list="Package" class="col-lg-12">
                                        <div data-repeater-item class="row align-items-center"
                                            style="margin-top: 15px;padding-bottom: 15px;padding-top: 15px;border-bottom:1px solid #ccc;">


                                            <div class="row col-md-12">
                                                <div class="col-md-2">
                                                    <label>{{ translate('Custom Package') }}:</label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" placeholder="{{ translate('Custom Package') }}"
                                                            class="form-control package-listener" value="0" name="custom_package" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-4 default-package-show">
                                                    <label>{{ translate('Package Type') }}:</label>
                                                    <select class="form-control kt-select2 package-type-select"
                                                        name="package_id">
                                                        <option></option>
                                                        @foreach ($packages as $package)
                                                            <option @if (\App\ShipmentSetting::getVal('def_package_type') == $package->id) selected @endif
                                                                value="{{ $package->id }}">{{ $package->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="mb-2 d-md-none"></div>
                                                </div>
                                                <div class="col-md-4 custom-package-show" style="display: none;">
                                                    <label>{{ translate('Custom Package') }}:</label>
                                                    <input type="text" placeholder="{{ translate('Package Name') }}"
                                                        class="form-control package-listener-value" name="package_name">
                                                    <div class="mb-2 d-md-none"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>{{ translate('description') }}:</label>
                                                    <input type="text" placeholder="{{ translate('description') }}"
                                                        class="form-control" name="description">
                                                    <div class="mb-2 d-md-none"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>{{ translate('Fragile') }}:</label>
                                                    <label class="checkbox">
                                                        <input type="checkbox" onchange="update_currency_status(this)"
                                                            placeholder="{{ translate('Fragile') }}"
                                                            class="form-control fragile-listener" name="shipment_fragile" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row col-md-12 pt-5">
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1">KG</span>
                                                        </div>
                                                        <input type="number" min="1" placeholder="{{ translate('Weight') }}"
                                                        name="weight" class="form-control weight-listener"
                                                        onchange="calcTotalWeight()" value="1" />
                                                        <small class="w-100 text-center" style="color:#0b2339;">Weight</small>

                                                    </div>
                                                    <div class="mb-2 d-md-none"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1">{{ translate('PV') }}</span>
                                                        </div>
                                                        <input type="text" placeholder="{{ translate('Package Value') }}"
                                                        class="form-control value-listener" name="shipment_price" onchange="calcTotalPrice()" value="0" />
                                                        <small class="w-100 text-center" style="color:#0b2339;">Protection Value</small>
                                                      </div>
                                                </div>
                                                <div class="col-md-2 pt-3 pb-3">
                                                    <label class="checkbox">
                                                        <input type="checkbox" onchange="update_currency_status(this)"
                                                            placeholder="{{ translate('Include Shipment Insurance') }}"
                                                            class="form-control insurance-listener" name="shipment_insurance" />
                                                        <span></span>&nbsp;&nbsp;{{ translate('Insurance') }}
                                                    </label>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1">CM</span>
                                                        </div>
                                                        <input type="number" min="1" class="form-control length-listener"
                                                        placeholder="{{ translate('Length') }}" name="length"
                                                        value="1" />
                                                        <small class="w-100 text-center" style="color:#0b2339;">Length</small>

                                                      </div>
                                                </div>
                                                <div class="col-md-2">

                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1">CM</span>
                                                        </div>
                                                        <input type="number" min="1" class="form-control width-listener"
                                                        placeholder="{{ translate('Width') }}" name="width" value="1" />
                                                        <small class="w-100 text-center" style="color:#0b2339;">Width</small>

                                                      </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon1">CM</span>
                                                        </div>
                                                        <input type="number" min="1" class="form-control height-listener"
                                                        placeholder="{{ translate('Height') }}" name="height"
                                                        value="1" />
                                                        <small class="w-100 text-center" style="color:#0b2339;">Height</small>

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
                                                                    class="btn btn-sm font-weight-bolder btn-light-primary" style="border-radius:20px;">
                                                                    <i class="la la-plus"></i>{{ translate('Add List') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-repeater-list="package_list" class="col-md-10">
                                                        <div data-repeater-item>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>{{ translate('Item Name') }}:</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="{{ translate('Item Name') }}"
                                                                        name="item_name" />

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>{{ translate('Item Description') }}:</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="{{ translate('Description') }}"
                                                                        name="description" />
                                                                </div>
                                                                <div class="col-md-4">

                                                                    <label>{{ translate('Quantity') }}:</label>

                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text" id="basic-addon1">Q</span>
                                                                        </div>
                                                                        <input type="number" min="1" class="form-control quantity-listener"
                                                                        placeholder="{{ translate('Quantity') }}"
                                                                        type="number" min="1" name="qty"
                                                                        class="form-control" value="1" />
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-12">

                                                                    <div>
                                                                        <a href="javascript:;" data-repeater-delete=""
                                                                            class="btn btn-sm font-weight-bolder btn-light-danger delete_item" style="border-radius:20px;">
                                                                            <i
                                                                                class="la la-trash-o"></i>{{ translate('Delete List') }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div>
                                                        <a href="javascript:;" data-repeater-delete=""
                                                            class="btn btn-sm font-weight-bolder btn-light-danger delete_item" style="border-radius:20px;">
                                                            <i
                                                                class="la la-trash-o"></i>{{ translate('Delete Package') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <div class="">
                                        <div>
                                            <a href="javascript:;" data-repeater-create=""
                                                class="btn btn-sm font-weight-bolder btn-light-primary" style="background: #1393ba;border-radius:20px;">
                                                <i class="la la-plus"></i>{{ translate('Add Package') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{ translate('Amount to be Collected') }}:</label>
                                            <input id="kt_touchspin_3"
                                                placeholder="{{ translate('Amount to be Collected') }}" type="text"
                                                min="0" class="form-control" value="0"
                                                name="Shipment[amount_to_be_collected]" />
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{ translate('Delivery Time') }}:</label>
                                            <select class="form-control kt-select2 delivery-time" id="delivery_time"
                                                name="Shipment[delivery_time]">
                                                @foreach ($times as $time)
                                                    <option data-id="{{$time->id}}" value="{{$time->name}}">{{ translate($time->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{ translate('Total Weight') }}:</label>
                                            <input id="kt_touchspin_4" placeholder="{{ translate('Total Weight') }}"
                                                type="text" min="1" class="form-control total-weight" value="1"
                                                name="Shipment[total_weight]" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>{{ translate('Total Package Value') }}:</label>
                                        <input type="text" placeholder="{{ translate('Package Value') }}"
                                            class="form-control total-price" id="" name="Shipment[shipment_price]" value="0" readonly />
                                    </div>
                                </div>




                            </div>

                        </div>



                        {!! hookView('shipment_addon', $currentView) !!}

                        <div class="mb-0 text-right form-group">
                            <button type="button" class="btn btn-sm btn-primary"
                                onclick="get_estimation_cost()">{{ translate('Get Rates') }}</button>

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
                                            <div class="row bg-warning">
                                                <div class="col-6">{{ translate('Return Cost') }} :</div>
                                                <div class="col-6" id="return_cost"></div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">{{ translate('TOTAL COST') }} :</div>
                                                <div class="col-6" id="total_cost"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">{{ translate('Close') }}</button>
                                            <button type="submit"
                                                class="btn btn-primary">{{ translate('Save') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>

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

    $('.select-client').select2({
        placeholder: "Select Client",
    })
    @if ($user_type == 'admin' || in_array('1005', $staff_permission))
        .on('select2:open', () => {
        $(".select2-results:not(:has(a))").append(`<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                href="{{ route('admin.clients.create') }}?redirect=admin.shipments.create" class="btn btn-primary">+
                {{ translate('Add New Client') }}</a>
        </li>`);
        });
    @endif

    $('.select-receiver').select2({
        placeholder: "Select Receiver",
    })
    @if ($user_type == 'admin' || in_array('1005', $staff_permission))
        .on('select2:open', () => {
        $(".select2-results:not(:has(a))").append(`<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                href="{{ route('admin.receivers.create') }}?redirect=admin.shipments.create" class="btn btn-primary">+
                {{ translate('Add New Receiver') }}</a>
        </li>`);
        });
    @endif


    $('.select-client').change(function() {
        // var client_phone = $(this).find(':selected').data('phone');
        // document.getElementById("client_phone").value = client_phone;
        $.get("{{ route('admin.shipments.get-client-address-ajax') }}?client_id=" + $(this).find(
                ':selected')
            .val(),
            function(data) {
                $('select[name ="Shipment[client_address]"]').empty();
                $('select[name ="Shipment[client_address]"]').append('<option value=""></option>');
                for (let index = 0; index < data.length; index++) {
                    const element = data[index];
                    $('select[name ="Shipment[client_address]"]').append('<option value="' + element[
                            'name'] + '" data-id="' + element['id'] + '" data-phone="' + element[
                            'phone'] +
                        '" data-country_id="' + element['country_id'] + '" data-country_name="' +
                        element['country']['name'] + '" data-state_id="' + element[
                            'state_id'] + '" data-state_name="' + element[
                            'state']['name'] + '" data-area_id="' + element['area_id'] +
                        '" data-area_name="' + element['area']['name'] + '">' + element[
                            'type'] + '</option>');
                }

            });
    })


    $('.select-receiver').change(function() {
        // var receiver_phone = $(this).find(':selected').data('phone');
        // document.getElementById("receiver_phone").value = receiver_phone;
        $.get("{{ route('admin.shipments.get-receiver-address-ajax') }}?receiver_id=" + $(this).find(
                ':selected')
            .val(),
            function(data) {
                $('select[name ="Shipment[receiver_address]"]').empty();
                $('select[name ="Shipment[receiver_address]"]').append('<option value=""></option>');
                for (let index = 0; index < data.length; index++) {
                    const element = data[index];
                    $('select[name ="Shipment[receiver_address]"]').append('<option value="' + element[
                            'name'] + '" data-id="' + element['id'] + '" data-phone="' + element[
                            'phone'] +
                        '" data-country_id="' + element['country_id'] + '" data-country_name="' +
                        element['country']['name'] + '" data-state_id="' + element[
                            'state_id'] + '" data-state_name="' + element[
                            'state']['name'] + '" data-area_id="' + element['area_id'] +
                        '" data-area_name="' + element['area']['name'] + '">' + element[
                            'type'] + '</option>');
                }

            });
    })




    $(document).on('click','.package-listener',function() {

        if($(this).is(":checked"))
        {
            $(this).val(1);
            $(this).parent().parent().parent().find('.default-package-show').hide();
            $(this).parent().parent().parent().find('.custom-package-show').show();
        }
        else
        {
            $(this).val(0);
            $(this).parent().parent().parent().find('.default-package-show').show();
            $(this).parent().parent().parent().find('.custom-package-show').hide();
        }

    });
    $('.select-client-address').change(function() {
        var client_phone = $(this).find(':selected').data('phone');
        var client_country = $(this).find(':selected').data('country_id');
        var client_state = $(this).find(':selected').data('state_id');
        var client_area = $(this).find(':selected').data('area_id');
        var client_area_name = $(this).find(':selected').data('area_name');
        var client_state_name = $(this).find(':selected').data('state_name');
        var client_country_name = $(this).find(':selected').data('country_name');
        $("#client_phone").val(client_phone);

        $("#change-country").val(client_country).trigger('change');
        setTimeout(
            function() {
                $("#change-state-from").val(client_state).trigger('change');
            }, 1000
        );
        setTimeout(
            function() {
                $("#change-area-from").val(client_area).trigger('change');
            }, 2000
        );


    });


    $('.select-receiver-address').change(function() {
        var receiver_phone = $(this).find(':selected').data('phone');
        var receiver_country = $(this).find(':selected').data('country_id');
        var receiver_state = $(this).find(':selected').data('state_id');
        var receiver_area = $(this).find(':selected').data('area_id');
        var receiver_area_name = $(this).find(':selected').data('area_name');
        var receiver_state_name = $(this).find(':selected').data('state_name');
        var receiver_country_name = $(this).find(':selected').data('country_name');
        $("#receiver_phone").val(receiver_phone);

        $("#change-country-to").val(receiver_country).trigger('change');
        setTimeout(
            function() {
                $("#change-state-to").val(receiver_state).trigger('change');
            }, 1000
        );
        setTimeout(
            function() {
                $("#change-area-to").val(receiver_area).trigger('change');
            }, 2000
        );


    });

    $('.payment-method').select2({
        placeholder: "Payment Method",
    });

    $('.payment-type').select2({
        placeholder: "Payment Type",
    });



    $('.delivery-time').select2({
        placeholder: "Delivery Time",
    });

    $('.select-branch').select2({
        placeholder: "Select Branch",
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

                $('select[name ="Shipment[branch_id]"]').append('<option value="' + element['id'] +
                    '">' + element['name'] + '</option>');
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
        var select_packages = document.getElementsByClassName('package-type-select');
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
        var return_package_id=null;
        for (let index = 0; index < select_packages.length; index++) {
            if (select_packages[index].value) {
                package_ids[index] = new Object();
                if(select_custom_packages[index].value==1)
                {
                    return_package_id = function () {
                        var package_id = null;
                        $.ajax({
                            'async': false,
                            'type': "GET",
                            'global': false,
                            'dataType': 'json',
                            'url': "{{ route('admin.shipments.save-package-ajax') }}?package_name=" + select_custom_packages_value[index].value,
                            'success': function (id) {
                                package_id = id;
                            }
                        });
                        return package_id;
                    }();

                    var add_check=true;
                    var package_index=0;
                    var event = new Event('change');
                    for (i = 0; i < select_packages[index].length; ++i){
                        if (select_packages[index].options[i].value == return_package_id){
                            add_check=false;
                            package_index=i;
                        }
                    }
                    if(add_check)
                    {
                        var option = document.createElement("option");
                        option.text = select_custom_packages_value[index].value;
                        option.value = return_package_id;
                        select_packages[index].appendChild(option).setAttribute("selected", "selected");
                        select_packages[index].dispatchEvent(event);
                    }
                    else
                    {
                        select_packages[index].options[package_index].setAttribute("selected", "selected");
                        select_packages[index].dispatchEvent(event);
                    }
                    package_ids[index]["package_id"] = return_package_id;
                }
                else
                {
                    package_ids[index]["package_id"] = select_packages[index].value;
                }
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

        @if (auth()->user()->user_type == 'customer' && isset(auth()->user()->userClient->client))
            $('.select-client').val("{{ auth()->user()->userClient->client->id }}").trigger('change');
        @endif
        @if (auth()->user()->user_type == 'customer' && isset(auth()->user()->userReceiver->receiver))
            $('.select-receiver').val("{{ auth()->user()->userReceiver->receiver->id }}").trigger('change');
        @endif
        $('.select-country').select2({
            placeholder: "Select country",
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

        $('.select-client-address').select2({
            placeholder: "Select Client Address",
            language: {
                noResults: function() {
                    @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                        return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                href="{{ route('admin.client-addresses.create') }}" class="btn btn-primary">Manage
                                {{ translate('Client Addresses') }}</a>
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

        $('.select-receiver-address').select2({
            placeholder: "Select Receiver Address",
            language: {
                noResults: function() {
                    @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                        return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                href="{{ route('admin.receiver-addresses.create') }}" class="btn btn-primary">Manage
                                {{ translate('Receiver Addresses') }}</a>
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
            placeholder: "Select state",
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
            placeholder: "Select Area",
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
        $('.select-country').trigger('change');
        $('.select-state').trigger('change');
        $('#kt_datepicker_3').datepicker({
            orientation: "bottom auto",
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayBtn: true,
            todayHighlight: true,
            startDate: new Date(),
        });
        $(document).ready(function() {
            $('.show_branch').hide();
            $('input:radio[name="Shipment[type]"]').change(function() {
                if ($(this).val() == '2') {
                    $('.show_branch').show();
                } else {
                    $('.show_branch').hide();

                }
            });
            $('.package-type-select').select2({
                placeholder: "Package Type",
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

                    $('.kt_touchspin_qty').TouchSpin({
                        buttondown_class: 'btn btn-secondary',
                        buttonup_class: 'btn btn-secondary',

                        min: 1,
                        max: 1000000000,
                        stepinterval: 50,
                        maxboostedstep: 10000000,
                        initval: 1,
                    });
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },
                isFirstItemUndeletable: true

            }],

            show: function() {
                $(this).slideDown();

                $('.package-type-select').select2({
                    placeholder: "Package Type",
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
                $(".weight-listener:last").val(1);
                $(".length-listener:last").val(1);
                $(".width-listener:last").val(1);
                $(".height-listener:last").val(1);
                $(".quantity-listener:last").val(1);
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
        $('#kt_touchspin_2, #kt_touchspin_2_2').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '%'
        });
        $('#kt_touchspin_3').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 0,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '{{ currency_symbol() }}'
        });
        $('#kt_touchspin_4').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 1,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            initval: 1,
            prefix: 'Kg'
        });
        $('.kt_touchspin_weight').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 1,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            initval: 1,
            prefix: 'Kg'
        });
        $('.kt_touchspin_qty').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 1,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            initval: 1,
        });
        $('.dimensions_r').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 1,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            initval: 1,
        });


        FormValidation.formValidation(
            document.getElementById('kt_form_1'), {
                fields: {
                    "Shipment[type]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[shipping_date]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[branch_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    // "Shipment[client_id]": {
                    //     validators: {
                    //         callback: {
                    //             message: '{{ translate('This is required!') }}',
                    //             callback: function(input) {
                    //                 // Get the selected options
                    //                 if ((input.value !== "")) {
                    //                     $('.client-select').removeClass('has-errors');
                    //                 } else {
                    //                     $('.client-select').addClass('has-errors');
                    //                 }
                    //                 return (input.value !== "");
                    //             }
                    //         }
                    //     }
                    // },
                    "Shipment[client_address]": {
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
                    "Shipment[payment_type]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[payment_method_id]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
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
                    "Shipment[delivery_time]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[total_weight]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
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
                    "Shipment[receiver_name]": {
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
