@extends('backend.layouts.app')

@section('content')
    @php
    $auth_user = Auth::user();
    $user_type = Auth::user()->user_type;
    $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
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

            <form class="form-horizontal"
                action="{{ route('admin.shipments.update-shipment', ['shipment' => $shipment->id]) }}" id="kt_form_1"
                method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group row">
                                <label class="col-2 col-form-label">{{ translate('Shipment Type') }}</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio radio-success btn btn-default">
                                            <input type="radio" name="Shipment[type]" @if ($shipment->type == \App\Shipment::getType(\App\Shipment::PICKUP)) checked @endif
                                                value="{{ \App\Shipment::PICKUP }}" />
                                            <span></span>
                                            {{ translate('Pickup (For door to door delivery)') }}
                                        </label>
                                        <label class="radio radio-success btn btn-default">
                                            <input type="radio" name="Shipment[type]" @if ($shipment->type == \App\Shipment::getType(\App\Shipment::DROPOFF)) checked @endif
                                                value="{{ \App\Shipment::DROPOFF }}" />
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
                                            <input @if ($shipment->zone == \App\Shipment::getZone(\App\Shipment::ZONEDOMESTIC)) checked @endif
                                                value="{{ \App\Shipment::ZONEDOMESTIC }}" type="radio"
                                                name="Shipment[zone]" checked="checked" />
                                            <span></span>
                                            {{ translate('Domestic') }}
                                        </label>
                                        <label class="radio radio-success btn btn-default">
                                            <input @if ($shipment->zone == \App\Shipment::getZone(\App\Shipment::ZONEINTERNATIONAL)) checked @endif
                                                value="{{ \App\Shipment::ZONEINTERNATIONAL }}" type="radio"
                                                name="Shipment[zone]" />
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
                                            <input @if ($shipment->material == \App\Shipment::getMaterial(\App\Shipment::MATERIALFRAGILE)) checked @endif
                                                value="{{ \App\Shipment::MATERIALFRAGILE }}" type="radio"
                                                name="Shipment[material]" checked="checked" />
                                            <span></span>
                                            {{ translate('Fragile') }}
                                        </label>
                                        <label class="radio radio-success btn btn-default">
                                            <input @if ($shipment->material == \App\Shipment::getMaterial(\App\Shipment::MATERIALNONFRAGILE)) checked @endif
                                                value="{{ \App\Shipment::MATERIALNONFRAGILE }}" type="radio"
                                                name="Shipment[material]" />
                                            <span></span>
                                            {{ translate('Non Fragile') }}
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    @if (\App\ShipmentSetting::getVal('is_date_required') == '1' || \App\ShipmentSetting::getVal('is_date_required') == null)
                                        <div class="form-group">
                                            <label>{{ translate('Shipping Date') }}:</label>
                                            <div class="input-group date">
                                                <input type="text" name="Shipment[shipping_date]"
                                                    value="{{ $shipment->shipping_date }}" class="form-control"
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
                                @if (auth()->user()->user_type != 'customer')
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Client/Sender') }}:</label>
                                            <select class="form-control kt-select2 select-client"
                                                name="Shipment[client_id]">

                                                @foreach ($clients as $client)
                                                    <option @if ($shipment->client_id == $client->id) selected @endif
                                                        data-phone="{{ $client->responsible_mobile }}"
                                                        value="{{ $client->id }}">{{ $client->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                @else
                                    <div style="display: none">
                                        <select class="form-control kt-select2 select-client" name="Shipment[client_id]">
                                            <option value="{{ auth()->user()->userClient->client->id }}"></option>

                                        </select>
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Client Phone') }}:</label>
                                        <input name="Shipment[client_phone]" class="form-control" id="client_phone"
                                            value="{{ $shipment->client_phone }}" id="">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('Client Address') }}:</label>
                                        <select class="form-control select-address" name="Shipment[client_address]">
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Receiver Name') }}:</label>
                                        <input type="text" name="Shipment[reciver_name]" class="form-control"
                                            value="{{ $shipment->reciver_name }}" />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Receiver Phone') }}:</label>
                                        <input type="text" name="Shipment[reciver_phone]" class="form-control"
                                            value="{{ $shipment->reciver_phone }}" />

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ translate('Receiver Address') }}:</label>
                                        <input type="text" name="Shipment[reciver_address]" class="form-control"
                                            value="{{ $shipment->reciver_address }}" />

                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Payment Type') }}:</label>
                                        <select class="form-control kt-select2" id="select-how"
                                            name="Shipment[payment_type]">


                                            <option @if ($shipment->payment_type == 1) selected @endif value="1">
                                                {{ translate('Postpaid') }}</option>
                                            <option @if ($shipment->payment_type == 2) selected @endif value="2">
                                                {{ translate('Prepaid') }}
                                            </option>


                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Payment Method') }}:</label>
                                        <select class="form-control kt-select2" id="select-how"
                                            name="Shipment[payment_method_id]">
                                            @forelse (\App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get() as $gateway)
                                                <option @if ($shipment->payment_method_id == $gateway->id) selected @endif value="{{ $gateway->id }}">
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
                                                value="{{ $shipment->attachments_before_shipping }}" max="3">
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
                                        <input type="hidden" name="Shipment[attachments_after_shipping]" class="selected-files" value="{{$shipment->attachments_after_shipping}}" max="3">
                                    </div>
                                    <div class="file-preview">
                                    </div>
                                </div>
                            </div> --}}
                            </div>

                            <hr>

                            <div id="kt_repeater_1">
                                <div class="row" id="kt_repeater_1">
                                    <h2 class="text-left">{{ translate('Package Info') }}:</h2>
                                    <div data-repeater-list="Package" class="col-lg-12">
                                        @foreach (\App\PackageShipment::where('shipment_id', $shipment->id)->get() as $pack)
                                            <div data-repeater-item class="row align-items-center"
                                                style="margin-top: 15px;padding-bottom: 15px;padding-top: 15px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;">



                                                <div class="col-md-4">

                                                    <label>{{ translate('Package Type') }}:</label>
                                                    <select class="form-control kt-select2 package-type-select" id="select-how"
                                                        name="package_id">
                                                        <option></option>
                                                        @foreach (\App\Package::all() as $package)
                                                            <option @if ($pack->package_id == $package->id) selected @endif
                                                                value="{{ $package->id }}">{{ $package->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="mb-2 d-md-none"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>{{ translate('description') }}:</label>
                                                    <input type="text" value="{{ $pack->description }}"
                                                        class="form-control" name="description">
                                                    <div class="mb-2 d-md-none"></div>
                                                </div>

                                                <div class="col-md-4">

                                                    <label>{{ translate('Weight') }}:</label>

                                                    <input id="kt_touchspin_weight" type="text" name="weight"
                                                        class="form-control weight-listener" onchange="calcTotalWeight()" value="{{ $pack->weight }}" />
                                                    <div class="mb-2 d-md-none"></div>

                                                </div>


                                                <div class="col-md-12 row">
                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                        <label>{{ translate('Dimensions [Length x Width x Height] (cm):') }}:</label>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input class="dimensions_r" type="text" class="form-control"
                                                            placeholder="{{ translate('Length') }}"
                                                            value="{{ $pack->length }}" name="length" />

                                                    </div>
                                                    <div class="col-md-4">

                                                        <input class="dimensions_r" type="text" class="form-control"
                                                            placeholder="{{ translate('Width') }}"
                                                            value="{{ $pack->width }}" name="width" />

                                                    </div>
                                                    <div class="col-md-4">

                                                        <input class="dimensions_r" type="text" class="form-control "
                                                            placeholder="{{ translate('Height') }}"
                                                            value="{{ $pack->height }}" name="height" />

                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>{{ translate('Shipment Insurance') }}:</label>
                                                        <label class="checkbox">
                                                            <input type="checkbox" onchange="update_currency_status(this)"
                                                                placeholder="{{ translate('Include Shipment Insurance') }}"
                                                                class="form-control insurance-listener" value="{{$pack->shipment_insurance}}"  {{($pack->shipment_insurance==1)?'checked':'' }} name="shipment_insurance" />
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>{{ translate('Package Value') }}:</label>
                                                        <input type="text" placeholder="{{ translate('Package Value') }}"
                                                            class="form-control value-listener" onchange="calcTotalPrice()" value="{{ $pack->shipment_price }}" name="shipment_price" />
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="inner-repeater">
                                                        <div data-repeater-list="package_list">
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
                                                                            <div class="col-md-4">
                                                                                <label>{{ translate('Item Description') }}:</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="{{ translate('Description') }}"
                                                                                    name="description"
                                                                                    value="{{ $list->description }}" />
                                                                            </div>
                                                                            <div class="col-md-4">

                                                                                <label>{{ translate('Quantity') }}:</label>

                                                                                <input class="kt_touchspin_qty"
                                                                                    placeholder="{{ translate('Quantity') }}"
                                                                                    type="number" min="1" name="qty"
                                                                                    class="form-control"
                                                                                    value="{{ $list->qty }}" />

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-12">

                                                                                <div>
                                                                                    <a href="javascript:;"
                                                                                        data-repeater-delete=""
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
                                                                            name="description"
                                                                             />
                                                                    </div>
                                                                    <div class="col-md-4">

                                                                        <label>{{ translate('Quantity') }}:</label>

                                                                        <input class="kt_touchspin_qty"
                                                                            placeholder="{{ translate('Quantity') }}"
                                                                            type="number" min="1" name="qty"
                                                                            class="form-control"
                                                                            value="1" />

                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-12">

                                                                        <div>
                                                                            <a href="javascript:;"
                                                                                data-repeater-delete=""
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
                                                        <div class="form-group row">
                                                            <div class="">
                                                                <label
                                                                    class="text-right col-form-label">{{ translate('Add List') }}</label>
                                                                <div>
                                                                    <a href="javascript:;" data-repeater-create=""
                                                                        class="btn btn-sm font-weight-bolder btn-light-primary">
                                                                        <i
                                                                            class="la la-plus"></i>{{ translate('Add List') }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div>
                                                            <a href="javascript:;" data-repeater-delete=""
                                                                class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>{{ translate('Delete') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="">
                                        <label class="text-right col-form-label">{{ translate('Add Package') }}</label>
                                        <div>
                                            <a href="javascript:;" data-repeater-create=""
                                                class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>{{ translate('Add Package') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Tax & Duty') }}:</label>

                                            <input id="kt_touchspin_2" type="text" class="form-control"
                                                value="{{ $shipment->tax }}" name="Shipment[tax]" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Insurance') }}:</label>
                                            <input id="kt_touchspin_2_2" type="text" class="form-control"
                                                value="{{ $shipment->insurance }}" name="Shipment[insurance]" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Shipping Cost') }}:</label>
                                            <input id="kt_touchspin_3" type="text" class="form-control"
                                                value="{{ convert_price($shipment->shipping_cost) }}"
                                                name="Shipment[shipping_cost]" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Return Cost') }}:</label>
                                            <input id="kt_touchspin_3_3" type="text" class="form-control"
                                                value="{{ convert_price($shipment->return_cost) }}"
                                                name="Shipment[return_cost]" />
                                        </div>
                                    </div>
                                </div> --}}
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Delivery Time') }}:</label>
                                            <select class="form-control kt-select2" id="select-how"
                                                name="Shipment[delivery_time]">
                                                <option @if ($shipment->delivery_time == '1-2 Days') selected @endif value="1-2 Days">
                                                    {{ translate('1-2 Days') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ translate('Total Weight') }}:</label>
                                            <input id="kt_touchspin_4" type="text" class="form-control total-weight"
                                                value="{{ $shipment->total_weight }}" value="0"
                                                name="Shipment[total_weight]" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>{{ translate('Total Package Value') }}:</label>
                                        <input type="text" placeholder="{{ translate('Package Value') }}"
                                            class="form-control total-price" id="" name="Shipment[shipment_price]" value="{{$shipment->shipment_price}}" readonly />
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

                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->tax }}" name="Shipment[tax]" />
                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->insurance }}" name="Shipment[insurance]" />
                                            <input type="hidden" class="form-control"
                                                value="{{ convert_price($shipment->shipping_cost) }}"
                                                name="Shipment[shipping_cost]" />
                                            <input type="hidden" class="form-control"
                                                value="{{ convert_price($shipment->return_cost) }}"
                                                name="Shipment[return_cost]" />


                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->from_country_id }}" name="Shipment[from_country_id]" />

                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->to_country_id }}" name="Shipment[to_country_id]" />

                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->from_state_id }}" name="Shipment[from_state_id]" />

                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->to_state_id }}" name="Shipment[to_state_id]" />

                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->from_area_id }}" name="Shipment[from_area_id]" />

                                            <input type="hidden" class="form-control"
                                                value="{{ $shipment->to_area_id }}" name="Shipment[to_area_id]" />


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
    function update_currency_status(el) {
        if (el.checked) {
            el.value = 1;
            $('#show_shipment').show();

        } else {
            el.value = 0;
            $('#show_shipment').hide();

        }

    }

function get_estimation_cost() {
        var total_weight = document.getElementById('kt_touchspin_4').value;
        var select_packages = document.getElementsByClassName('package-type-select');
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
        for (let index = 0; index < select_packages.length; index++) {
            if (select_packages[index].value) {
                package_ids[index] = new Object();
                package_ids[index]["package_id"] = select_packages[index].value;
                package_ids[index]["weight"] = select_weights[index].value;
                package_ids[index]["shipment_insurance"] = select_insurances[index].value;
                package_ids[index]["shipment_price"] = select_values[index].value;
            } else {
                AIZ.plugins.notify('danger', '{{ translate('Please select package type') }} ' + (index + 1));
                return 0;
            }
        }
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
            document.getElementsByName("Shipment[shipping_cost]")[0].value=response.original_shipping_cost;
            document.getElementById("tax_duty").innerHTML = response.tax;
            document.getElementsByName("Shipment[tax]")[0].value=response.original_tax;
            document.getElementById("insurance").innerHTML = response.insurance;
            document.getElementsByName("Shipment[insurance]")[0].value=response.original_insurance;
            document.getElementById("return_cost").innerHTML = response.return_cost + ' ( Not Included )';
            document.getElementsByName("Shipment[return_cost]")[0].value=response.original_return_cost;
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

    $('.select-client').select2({
        placeholder: "Select Client",
    })
    @if ($auth_user->user_type == 'admin' || in_array('1005', $staff_permission))
        .on('select2:open', () => {
        $(".select2-results:not(:has(a))").append(`<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                href="{{ route('admin.clients.create') }}?redirect=admin.shipments.create" class="btn btn-primary">+
                {{ translate('Add New Client') }}</a>
        </li>`);
        });
    @endif

    $('.select-client').change(function() {
        // var client_phone = $(this).find(':selected').data('phone');
        // document.getElementById("client_phone").value = client_phone;
        $.get("{{ route('admin.shipments.get-client-address-ajax') }}?client_id=" + $(this).find(':selected')
            .val(),
            function(data) {
                $('select[name ="Shipment[client_address]"]').empty();
                $('select[name ="Shipment[client_address]"]').append('<option value=""></option>');
                for (let index = 0; index < data.length; index++) {
                    const element = data[index];
                    selected="";
                    if(element['name']=="{{ $shipment->client_address }}")
                    {
                        selected="selected";
                    }
                    $('select[name ="Shipment[client_address]"]').append('<option value="' + element['name'] + '" data-id="' + element['id'] + '" data-phone="' +
                    element['phone'] + '" data-country_id="' + element['country_id'] + '" data-country_name="' +
                    element['country']['name'] + '" data-state_id="' + element[
                        'state_id'] + '" data-state_name="' + element[
                        'state']['name'] + '" data-area_id="' + element['area_id'] +
                    '" data-area_name="' + element['area']['name'] + '" '+selected+'>' + element[
                        'type'] + '</option>');
                }


            });
    })
    $('.select-address').select2({
        placeholder: "Select Client Address",
    })
    @if ($auth_user->user_type == 'admin' || in_array('1005', $staff_permission))
        .on('select2:open', () => {
        $(".select2-results:not(:has(a))").append(`<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                href="{{ route('admin.client-addresses.create') }}?redirect=admin.shipments.create"
                class="btn btn-primary">+
                {{ translate('Add New Client Address') }}</a>
        </li>`);
        });
    @endif
    $('.select-address').change(function() {
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

    // $('.select-address').select2({
    //     placeholder: "Select Address",
    //     language: {
    //         noResults: function() {
    //             @if ($auth_user->user_type == 'admin' || in_array('1105', $staff_permission))
    //                 return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
    //                         href="{{ route('admin.client-addresses.create') }}" class="btn btn-primary">Manage
    //                         {{ translate('Client Addresses') }}</a>
    //                 </li>`;
    //             @else
    //                 return ``;
    //             @endif
    //         },
    //     },
    //     escapeMarkup: function(markup) {
    //         return markup;
    //     },
    // });
    $('.select-branch').select2({
        placeholder: "Select Branch",
    });
    $(document).ready(function() {
        @if (auth()->user()->user_type == 'customer')
            $('.select-client').val("{{ auth()->user()->userClient->client->id }}").trigger('change');
        @else
        $('.select-client').val("{{ $shipment->client_id }}").trigger('change');

        @endif


        // @if (auth()->user()->user_type == 'customer')
        //     $('.select-client').trigger('change');
        // @endif

        var inputs = document.getElementsByTagName('input');

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
        $('#kt_datepicker_3').datepicker({
            orientation: "bottom auto",
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayBtn: true,
            todayHighlight: true,
            startDate: new Date(),
        });
        $('#kt_repeater_1').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },
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
                $('.dimensions_r').TouchSpin({
                    buttondown_class: 'btn btn-secondary',
                    buttonup_class: 'btn btn-secondary',

                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
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

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '{{ currency_symbol() }}'
        });
        $('#kt_touchspin_3_3').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '{{ currency_symbol() }}'
        });
        $('#kt_touchspin_4').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: 'Kg'
        });
        $('#kt_touchspin_weight').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: 'Kg'
        });
        $('.dimensions_r').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
        });

        $('.kt_touchspin_qty').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
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
                    //         notEmpty: {
                    //             message: '{{ translate('This is required!') }}'
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
                    "Shipment[reciver_name]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[reciver_phone]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },
                    "Shipment[reciver_address]": {
                        validators: {
                            notEmpty: {
                                message: '{{ translate('This is required!') }}'
                            }
                        }
                    },

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
                        valid: 'fa fa-check',
                        invalid: 'fa fa-times',
                        validating: 'fa fa-refresh',
                    }),
                }
            }
        );
    });

</script>
@endsection
