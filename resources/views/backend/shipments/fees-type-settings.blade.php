@extends('backend.layouts.app')

@section('content')
<style>
    label {
        font-weight: bold !important;
    }
</style>
<div class="mx-auto col-lg-12">
    <div class="mb-10 card">

        <div class="card-body">
            <div class="alert alert-info">
                - Calculation equation = Default Costs or Custom Covered Area Cost + Extra fees for Kg + Extra Fees for Package Types
                <br />

            </div>
        </div>
    </div>
    <form class="form-horizontal" action="{{ route('admin.shipments.settings.store') }}" id="kt_form_2" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Default Missions Cost')}}</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        @php
                        if(session()->get('country')==null)
                            $country='US';
                            else
                                $country=session()->get('country');
                        @endphp

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>{{translate('Default Pickup Mission Cost')}} ({{currency_symbol()}}):</label>
                                <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Default Shipping Cost')}}" value="{{convert_price(\App\ShipmentSetting::getVal('def_pickup_cost_'.$country))}}" name="Setting[def_pickup_cost_{{$country}}]">
                            </div>
                        </div>
                        <hr>


                    </div>
                    <div class="col-lg-6">


                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>{{translate('Default Supply Mission Cost')}} ({{currency_symbol()}}):</label>
                                <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Default Shipping Cost')}}" value="{{convert_price(\App\ShipmentSetting::getVal('def_supply_cost_'.$country))}}" name="Setting[def_supply_cost_{{$country}}]">
                            </div>
                        </div>
                        <hr>


                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Default Fees For The First kg')}}</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">


                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>{{translate('Default Shipping Cost')}}({{currency_symbol()}}):</label>
                                <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Default Shipping Cost')}}" value="{{convert_price(\App\ShipmentSetting::getVal('def_shipping_cost'))}}" name="Setting[def_shipping_cost]">
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{translate('Default Tax')}}%:</label>
                                <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Default Tax')}}" value="{{\App\ShipmentSetting::getVal('def_tax')}}" name="Setting[def_tax]">
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{translate('Default Insurance')}}({{currency_symbol()}}):</label>
                                <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Default Insurance')}}" value="{{convert_price(\App\ShipmentSetting::getVal('def_insurance'))}}" name="Setting[def_insurance]">
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{translate('Default Returned Shipment Cost')}}({{currency_symbol()}}):</label>
                                <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Default Returned Shipment Cost')}}" value="{{convert_price(\App\ShipmentSetting::getVal('def_return_cost'))}}" name="Setting[def_return_cost]">
                            </div>
                            <div class="form-group col-md-4">
                                <label>{{translate('Default Tax Not Include')}}:</label>
                                <label class="checkbox">
                                    <input type="checkbox" onchange="update_currency_status(this)" placeholder="{{translate('Default Tax Include')}}" class="form-control" id="" {{(\App\ShipmentSetting::getVal('default_cost')==1)?'checked':''}} name="Setting[default_cost]" />
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <hr>


                    </div>

                </div>
            </div>
        </div>
        <div class="mt-5 card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Extra Costs For Kg')}}</h5>
            </div>

            <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-4">
                        <label>{{translate('Fixed Shipping Cost/Kg')}}:</label>
                        <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Fixed Shipping Cost/Kg')}}" value="{{\App\ShipmentSetting::getVal('def_shipping_cost_gram')}}" name="Setting[def_shipping_cost_gram]">
                    </div>
                    <div class="form-group col-md-4">
                        <label>{{translate('Fixed Tax/Kg')}}%:</label>
                        <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Fixed Tax/Kg')}}" value="{{\App\ShipmentSetting::getVal('def_tax_gram')}}" name="Setting[def_tax_gram]">
                    </div>
                    <div class="form-group col-md-4">
                        <label>{{translate('Fixed Insurance/Kg')}}:</label>
                        <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Fixed Insurance/Kg')}}" value="{{\App\ShipmentSetting::getVal('def_insurance_gram')}}" name="Setting[def_insurance_gram]">
                    </div>
                    <div class="form-group col-md-4">
                        <label>{{translate('Fixed Returned Shipment Cost/Kg')}}:</label>
                        <input type="text" min="0" id="name" class="form-control" placeholder="{{translate('Fixed Returned Shipment Cost/Kg')}}" value="{{\App\ShipmentSetting::getVal('def_return_cost_gram')}}" name="Setting[def_return_cost_gram]">
                    </div>
                    <div class="form-group col-md-4">
                        <label>{{translate('Fixed Tax Include')}}:</label>
                        <label class="checkbox">
                            <input type="checkbox" onchange="update_currency_status(this)" placeholder="{{translate('Fixed Tax Not Include')}}" class="form-control" id="" {{(\App\ShipmentSetting::getVal('extra_default_cost')==1)?'checked':''}} name="Setting[extra_default_cost]" />
                            <span></span>
                        </label>
                    </div>


                </div>




            </div>
        </div>
        <div class="mb-0 text-right form-group">
            <button type="submit" class="mt-2 btn btn-lg btn-success">{{translate('Save')}}</button>
        </div>
    </form>
    <form class="form-horizontal" action="{{ route('admin.shipments.config.costs') }}" id="kt_form_1" method="GET" enctype="multipart/form-data">
        <div class="mt-5 card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Custom Costs for Covered Areas')}}</h5>
            </div>

            <div class="card-body">
                @if(count($covered_countries = \App\Country::where('covered',1)->get()))
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>{{translate('From Country')}}:</label>
                            <select name="from_country" class="form-control select-country" required>
                                <option value=""></option>

                                @foreach($covered_countries as $covered)
                                <option value="{{$covered->id}}">{{$covered->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>{{translate('To Country')}}:</label>
                            <select name="to_country" class="form-control select-country" required>
                                <option value=""></option>
                                @foreach($covered_countries as $covered)
                                <option value="{{$covered->id}}">{{$covered->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>{{translate('Configure Costs')}}:</label>
                            <button class="btn btn-primary form-control">{{translate('Configure Selected Countries Costs')}}</button>
                        </div>


                    </div>
                @else
                    <div class="row">
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{translate('Please Configure Your covered countries and cities')}},
                            <a class="alert-link" href="{{ route('admin.shipments.covered_countries') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    </div>
                @endif





            </div>
        </div>
    </form>
    <form class="form-horizontal" action="{{ route('admin.shipments.post.config.package.costs') }}" id="kt_form_1" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-5 card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Extra Fees for Package Types')}}</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    @if(count($packages = \App\Package::all()))
                        <table class="table mb-0 aiz-table">
                            <thead>
                                <tr>

                                    <th>{{translate('Name')}}</th>

                                    <th>{{translate('Package Cost')}}</th>
                                    <th>{{translate('Insurance Cost')}}</th>
                                    <th>{{translate('Return Cost')}}</th>
                                    <th>{{translate('Fixed Price')}}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $key => $package)

                                    <tr>
                                        <td>{{$package->name}} ({{currency_symbol()}}):</td>

                                        <td>
                                            <input type="number" min="0" name="package_extra[]" class="form-control" id="" value="{{convert_price($package->cost)}}" />
                                            <input type="hidden" name="package_id[]" value="{{$package->id}}">
                                        </td>
                                        <td>
                                            <input type="number" min="0" name="package_insurance_fee[]" class="form-control" id="" value="{{convert_price($package->insurance_fee)}}" />
                                        </td>
                                        <td>
                                            <input type="number" min="0" name="package_return_fee[]" class="form-control" id="" value="{{convert_price($package->return_fee)}}" />
                                        </td>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" name="package_default_cost[{{$key}}]" class="form-control" id="" {{($package->default_cost==1)?'checked':''}} />
                                                <span></span>
                                            </label>
                                        </td>

                                    </tr>

                                @endforeach
                                <tr>
                                    <td></td>
                                    <td> <button class="btn btn-primary form-control">{{translate('Save Package Types Extra Fees')}}</button></td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                            {{translate('Please Configure Package Types')}},
                            <a class="alert-link" href="{{ route('admin.packages.index') }}">{{ translate('Configure Now') }}</a>
                        </div>
                    @endif



                </div>
            </div>
    </form>
    <form class="form-horizontal" action="{{ route('admin.shipments.post.config.time.costs') }}" id="kt_form_1"
    method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-5 card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{ translate('Extra Fees for Time Types') }}</h5>
        </div>

        <div class="card-body">
            <div class="row">
                @if (count($times = \App\Time::all()))
                    <table class="table mb-0 aiz-table">
                        <thead>
                            <tr>

                                <th>{{ translate('Name') }}</th>

                                <th>{{ translate('Time Cost') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($times as $key => $time)

                                <tr>
                                    <td>{{ $time->name }} ({{ currency_symbol() }}):</td>

                                    <td>
                                        <input type="number" min="0" name="time_extra[]" class="form-control" id=""
                                            value="{{ convert_price($time->cost) }}" />
                                        <input type="hidden" name="time_id[]" value="{{ $time->id }}">
                                    </td>
                                </tr>

                            @endforeach
                            <tr>
                                <td></td>
                                <td> <button
                                        class="btn btn-primary form-control">{{ translate('Save Time Types Extra Fees') }}</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger col-lg-8" style="margin: auto;margin-top:10px;" role="alert">
                        {{ translate('Please Configure Time Types') }},
                        <a class="alert-link"
                            href="{{ route('admin.times.index') }}">{{ translate('Configure Now') }}</a>
                    </div>
                @endif

            </div>
        </div>
</form>




</div>
</div>
@endsection

@section('script')
<script>
    function update_currency_status(el){
            if(el.checked){
                el.value = 1;
            }
            else{
                el.value = 0;
            }

        }
    $('.select-country').select2({
        placeholder: "Select country"
    });
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

    $(document).ready(function() {
        FormValidation.formValidation(
            document.getElementById('kt_form_2'), {
                fields: {
                    "Setting[def_shipping_cost]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_tax]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_insurance]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_return_cost]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_shipping_cost_gram]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_tax_gram]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_insurance_gram]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
                            }
                        }
                    },
                    "Setting[def_return_cost_gram]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
                            },
                            numeric: {
                                message: 'This is should be valid Number'
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
                        validating: 'fa fa-refresh',
                    }),
                }
            }
        );
    });
</script>
@endsection
