<?php
use \Milon\Barcode\DNS1D;
$d = new DNS1D();
?>
@extends('backend.layouts.app')


@section('sub_title'){{translate('Shipment')}} {{$shipment->code}}@endsection
@section('subheader')
    <!--begin::Subheader-->
    <div class="py-2 subheader py-lg-6 subheader-solid" id="kt_subheader">
        <div class="flex-wrap container-fluid d-flex align-items-center justify-content-between flex-sm-nowrap">
            <!--begin::Info-->
            <div class="flex-wrap mr-1 d-flex align-items-center">
                <!--begin::Page Heading-->
                <div class="flex-wrap mr-5 d-flex align-items-baseline">
                    <!--begin::Page Title-->
                    <h5 class="my-1 mr-5 text-dark font-weight-bold">{{translate('Shipment')}} {{$shipment->code}}</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="p-0 my-2 mr-5 breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard')}}" class="text-muted">{{translate('Dashboard')}}</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">{{$shipment->code}}</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
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
        <div class="row">

            <div class="col-md-6 row">
                <div class="col-md-12">

                    <div class="w-100 p-3 pl-5 text-white" style="background:green;">
                        <img src="@if(setting()->get('main_header_logo_'.app()->getLocale()) && setting()->get('main_header_logo_'.app()->getLocale()) != '') {{asset('/storage/app/public/'. setting()->get('main_header_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/main/frontend/logistic/images/logo-transparent.svg')}} @endif" alt="logo" class="logo-default" style="width:400px;">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3 text-center">
                @php
                    $code = filter_var($shipment->code, FILTER_SANITIZE_NUMBER_INT);
                @endphp
                <h1 class="" style="font-size: 39px;">{{$shipment->code}}</h1>
                @if($shipment->barcode != null)
                    <div style="margin-left:25px;">
                        <?=$d->getBarcodeHTML($code, "EAN13");?>
                    </div>
                    <p class="pt-2">
                        {{translate('SHIPMENT BARCODE')}}
                    </p>
                @endif
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-8 row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('CREATED DATE/TIME')}}</h6>
                        </div>
                        <p class="p-3">{{$shipment->created_at->format('Y-m-d h:i:s')}}</p>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6 style="text-transform: uppercase;">{{translate('SHIPMENT DATE')}}</h6>
                        </div>
                        <p class="p-3">{{translate($shipment->shipping_date)}}</p>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('SHIPMENT STATUS')}}</h6>
                        </div>
                        <p class="p-3">{{$shipment->getStatus()}}</p>
                      </div>
                </div>

            </div>
        </div>
        <div class="row pt-3">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white" style="padding: 15px 15px;background: hsl(194, 82%, 40%);">
                        <h4>{{translate('SENDER / FROM')}}</h4>
                    </div>
                    @php
                        $client_address= \App\ClientAddress::where('name',$shipment->client_address)->get()->first();
                    @endphp
                    <div class="card-body">
                        <h6 class="text-danger"><b>{{$shipment->client->name}}</b></h6>
                        <p style="margin-bottom: 0px;"><b>{{translate('Address')}}: </b>{{@$client_address->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Country')}}: </b>{{@$shipment->from_country->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Region')}}: </b>{{@$shipment->from_state->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Area')}}: </b>{{@$shipment->from_area->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Zip Code')}}: </b>{{@$client_address->zip_code}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white" style="padding: 15px 15px;background: hsl(21deg 94% 57%);;">
                        <h4>{{translate('RECEIVER / TO')}}</h4>
                    </div>
                    @php
                        $receiver_address= \App\ReceiverAddress::where('name',$shipment->receiver_address)->get()->first();
                    @endphp
                    <div class="card-body">
                        <h6 class="text-danger"><b>{{@$shipment->receiver->name}}</b></h6>
                        <p style="margin-bottom: 0px;"><b>{{translate('Address')}}: </b>{{@$receiver_address->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Country')}}: </b>{{@$shipment->to_country->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Region')}}: </b>{{@$shipment->to_state->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Area')}}: </b>{{@$shipment->to_area->name}}</p>
                        <p style="margin-bottom: 0px;"><b>{{translate('Zip Code')}}: </b>{{@$receiver_address->zip_code}}</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row pt-3">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                        <h6>{{translate('Client Package Handling')}}</h6>
                    </div>
                    <p class="p-3">{{$shipment->type}}</p>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                        <h6>{{translate('Receiver Package Handling')}}</h6>
                    </div>
                    <p class="p-3">{{$shipment->receiver_shipment_type}}</p>
                  </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                        <h6>{{translate('Shhipment Zone')}}</h6>
                    </div>
                    <p class="p-3">{{$shipment->zone}}</p>
                  </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                        <h6>{{translate('Delivery Time')}}</h6>
                    </div>
                    <p class="p-3">{{$shipment->delivery_time}}</p>
                  </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                        <h6>{{translate('Branch Office')}}</h6>
                    </div>
                    <p class="p-3">{{$shipment->branch->name}}</p>
                  </div>
            </div>
                {{-- @if($shipment->attachments_before_shipping)
                    <div class="pt-6 d-flex justify-content-between">
                        <div class="d-flex flex-column flex-root">
                            <span class="mb-4 text-dark font-weight-bold">{{translate('Attachments')}} <span class="text-muted font-size-xs">({{translate('ADDED WHEN SHIPMENT CREATED')}})</span></span>
                            <div class="pt-6 d-flex justify-content-between">
                                @foreach(explode(',', $shipment->attachments_before_shipping) as $img)
                                    <div class="d-flex flex-column flex-root">
                                        <span class="text-muted font-weight-bolder font-size-lg">
                                            <a href="{{uploaded_asset($img)}}" target="_blank"><img src="{{uploaded_asset($img)}}" alt="image" style="max-width:100px" /></a>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif --}}

        </div>
        <hr>
        @foreach(\App\PackageShipment::where('shipment_id',$shipment->id)->get() as $k => $package)
            <div class="row pt-3">
                <div class="col-md-3">
                    @if($k==0)
                    <h5><b>{{translate('SELECTED PACKAGE')}}</b></h5>
                    @endif
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>@if(isset($package->package->name)){{$package->package->name}} @else - @endif</h6>
                        </div>
                        <div class="card-body">
                            @if($package->package_list!=null)
                            @foreach($package->package_list as $key => $list)
                                <p style="margin-bottom: 0px;">- {{$list->item_name}}</p>
                            @endforeach
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    @if($k==0)
                    <h5><b>{{translate('PACKAGE DESCRIPTION')}}</b></h5>
                    @endif
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{$package->description}}</h6>
                        </div>
                        <div class="card-body">
                            @if($package->package_list!=null)
                            @foreach($package->package_list as $key => $list)
                                <p style="margin-bottom: 0px;">- {{$list->description}}</p>
                            @endforeach
                            @endif
                        </div>

                    </div>
                </div>
                <div style="padding-left:5px;width:8%;">

                    <div class="input-group mb-3">
                    @if($k==0)
                        <label class="w-100">{{ translate('Weight') }}</label>
                    @endif
                        <input type="text" min="1" class="form-control"
                            placeholder="{{ translate('Weight') }}" name="width" value="{{$package->weight." ".translate('KG')}}" disabled />

                    </div>
                </div>
                <div style="padding-left:5px;width:8%;">

                    <div class="input-group mb-3">
                    @if($k==0)
                        <label class="w-100">{{ translate('Length') }}</label>
                    @endif
                        <input type="text" min="1" class="form-control"
                            placeholder="{{ translate('Length') }}" value="{{$package->length." ".translate('CM')}}" disabled />

                    </div>
                </div>
                <div style="padding-left:5px;width:8%;">

                    <div class="input-group mb-3">
                    @if($k==0)
                        <label class="w-100">{{ translate('Width') }}</label>
                    @endif
                        <input type="text" min="1" class="form-control"
                            placeholder="{{ translate('Width') }}" value="{{$package->width." ".translate('CM')}}" disabled />

                    </div>
                </div>
                <div style="padding-left:5px;width:8%;">

                    <div class="input-group mb-3">
                    @if($k==0)
                        <label class="w-100">{{ translate('Height') }}</label>
                    @endif
                        <input type="text" min="1" class="form-control"
                            placeholder="{{ translate('Height') }}" value="{{$package->height." ".translate('CM')}}" disabled />

                    </div>
                </div>
                <div style="padding-left:5px;width:8%;">

                    <div class="input-group mb-3">
                    @if($k==0)
                        <label class="w-100">{{ translate('Fragile') }}</label>
                    @endif
                        <p style="pl-2 pt-2">@if($package->shipment_fragile){{ translate('YES') }}@else {{ translate('NO') }} @endif</p>

                    </div>
                </div>
                <div class="padding-left:5px;width:8%;">
                    @if($k==0)
                    <label class="w-100">{{ translate('QTY') }}</label>
                    @endif
                    <div style="margin-top: 40px;">
                    @if($package->package_list!=null)
                    @foreach($package->package_list as $key => $list)
                        <p style="margin-bottom: 0px;">{{$list->qty}}</p>
                    @endforeach
                    @endif
                    </div>

                </div>

            </div>
        @endforeach
        <hr style="border: 1px solid skyblue;">
        <div class="row">
            <div class="col-md-7">
            </div>
            <div class="col-md-5 row">
                <h4 class="col-md-6">{{translate('Total Weight')}}:</h4>
                <p class="col-md-6 text-right">{{$shipment->total_weight.' '.translate('KG')}}</p>

                <h4 class="col-md-6">{{translate('Total Shipment Cost')}}:</h4>
                <p class="col-md-6 text-right">{{format_price(convert_price($shipment->shipping_cost))}}</p>

                <h4 class="col-md-6">{{translate('Total Tax & Duty')}}:</h4>
                <p class="col-md-6 text-right">{{format_price(convert_price($shipment->tax))}}</p>

                <h4 class="col-md-6">{{translate('Total Protection Value')}}:</h4>
                <p class="col-md-6 text-right">{{format_price(convert_price($shipment->insurance))}}</p>

                <h4 class="col-md-6">{{translate('Total Return Cost')}}:</h4>
                <p class="col-md-6 text-right">{{format_price(convert_price($shipment->return_cost))}}</p>
            </div>
        </div>

        <div class="w-100 p-3 pl-5 text-white" style="background:hsl(194, 82%, 40%);">
            <h2 class="text-left">
                {{ translate('PAYMENT INFORMATION') }}
            </h2>
        </div>
            <div class="row pt-3">


                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('PAYMENT TYPE')}}</h6>
                        </div>
                        <p class="p-3">{{$shipment->getPaymentType()}}</p>
                      </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('PAYMENT MODE')}}</h6>
                        </div>
                        <p class="p-3" style="padding-bottom:0px !important;">{{translate($shipment->pay['name'])}}</p>
                        @if($shipment->payment_method_id==286 || $shipment->payment_method_id==287 || $shipment->payment_method_id==288)
                        <p class="p-3" style="padding-top:0px !important;"><b>{{translate("Transaction ID:")}}</b> #{{translate($shipment->payment_method_id_details)}}</p>
                        @endif
                      </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('PAYMENT STATUS')}}</h6>
                        </div>
                        <p class="p-3">@if($shipment->paid == 1) {{translate('Paid')}} @else {{translate('Pending')}} @endif</p>
                      </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('PAYMENT DATE')}}</h6>
                        </div>
                        <p class="p-3">@if($shipment->paid == 1) {{$shipment->payment->payment_date ?? ""}} @else - @endif</p>
                      </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-2 text-center">
                    <div class="card">
                        <div class="card-header" style="padding: 7px 7px;background:#ecebeb;">
                            <h6>{{translate('TOTAL COST')}}</h6>
                        </div>
                        <h4 class="pt-3 text-danger">{{format_price(convert_price($shipment->tax + $shipment->shipping_cost + $shipment->insurance)) }}</h4>
                        <span class="text-muted font-weight-bolder font-size-lg">{{translate('Included tax & insurance')}}</span>
                      </div>
                </div>

            </div>

        {{-- <div class="px-8 py-8 mx-0 bg-gray-100 row justify-content-center py-md-10 px-md-0">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="font-weight-bold text-muted text-uppercase">{{translate('PAYMENT TYPE')}}</th>
                                <th class="font-weight-bold text-muted text-uppercase">{{translate('PAYMENT STATUS')}}</th>
                                <th class="font-weight-bold text-muted text-uppercase">{{translate('PAYMENT DATE')}}</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">{{translate('TOTAL COST')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="font-weight-bolder">
                                <td>{{translate($shipment->pay['name'])}} ({{$shipment->getPaymentType()}})</td>
                                <td>@if($shipment->paid == 1) {{translate('Paid')}} @else {{translate('Pending')}} @endif</td>
                                <td>@if($shipment->paid == 1) {{$shipment->payment->payment_date ?? ""}} @else - @endif</td>
                                <td class="text-right text-primary font-size-h3 font-weight-boldest">{{format_price(convert_price($shipment->tax + $shipment->shipping_cost + $shipment->insurance)) }}<br /><span class="text-muted font-weight-bolder font-size-lg">{{translate('Included tax & insurance')}}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
        <!-- end: Invoice footer-->
        <!-- begin: Invoice action-->
        <hr style="border: 1px solid orange;">

        <div class="px-8 py-8 row justify-content-center py-md-10 px-md-0">
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    @if($shipment->paid == 0 && $shipment->pay['id'] != 11)
                        <form action="{{ route('payment.checkout') }}" class="form-default" role="form" method="POST" id="checkout-form">
                            @csrf
                            <input type="hidden" name="shipment_id" value="{{$shipment->id}}">
                            <button type="submit" class="mr-3 btn btn-success btn-md">{{translate('Pay Now')}} <i class="ml-2 far fa-credit-card"></i></button>
                        </form>
                        <button class="btn btn-success btn-sm " onclick="copyToClipboard('#payment-link')">{{translate('Copy Payment Link')}}<i class="ml-2 fas fa-copy"></i></button>
                        <div id="payment-link" style="display: none">{{route('admin.shipments.pay', $shipment->id)}}</div>
                    @endif

                    <a href="{{route('admin.shipments.print', array($shipment->id, 'label'))}}" class="btn btn-light-primary font-weight-bold" target="_blank" style="border-radius:20px;">{{translate('Print Label')}}<i class="ml-2 la la-box-open"></i></a>
                    <a href="{{route('admin.shipments.print', array($shipment->id, 'invoice'))}}" class="btn btn-light-primary font-weight-bold" target="_blank" style="border-radius:20px;">{{translate('Print Invoice')}}<i class="ml-2 la la-file-invoice-dollar"></i></a>

                    @if(Auth::user()->user_type == 'admin' || in_array('1104', json_decode(Auth::user()->staff->role->permissions ?? "[]")))
                    <a href="{{route('admin.shipments.edit', $shipment->id)}}" class="px-6 py-3 btn btn-light-info btn-sm font-weight-bolder font-size-sm" style="border-radius:20px;">{{translate('Edit Shipment')}}</a>
                    @endif
                </div>
            </div>
        </div>


<!--end::List Widget 19-->
@if((Auth::user()->user_type == 'admin' || in_array('1102', json_decode(Auth::user()->staff->role->permissions ?? "[]"))) && !empty($shipment->logs->toArray()))
    <div class="card card-custom card-stretch card-stretch-half gutter-b">
        <!--begin::List Widget 19-->

        <!--begin::Header-->
        <div class="pt-6 mb-2 border-0 card-header">
            <h3 class="card-title align-items-start flex-column">
                <span class="mb-3 card-label font-weight-bold font-size-h4 text-dark-75">{{translate('Shipment Status Log')}}</span>

            </h3>
            <div class="card-toolbar">

            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="pt-2 card-body" style="padding-bottom: 0;overflow:hidden">
            <div class="mt-3 timeline timeline-6 scroll scroll-pull" style="overflow:hidden" data-scroll="true" data-wheel-propagation="true">

            @foreach($shipment->logs()->orderBy('id','desc')->get() as $log)
                <!--begin::Item-->
                <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{$log->created_at->diffForHumans()}}</div>
                    <!--end::Label-->

                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-warning icon-xl"></i>
                    </div>
                    <!--end::Badge-->

                    <!--begin::Text-->
                    <div class="pl-3 font-weight-mormal font-size-lg timeline-content text-muted">
                        {{translate('Changed from')}}: "{{\App\Shipment::getStatusByStatusId($log->from)}}" {{translate('To')}}: "{{\App\Shipment::getStatusByStatusId($log->to)}}"
                    </div>
                    <!--end::Text-->

                </div>
                <!--end::Item-->

            @endforeach


            </div>
        </div>
    </div>
@endif

@endsection

@section('modal')
@include('modals.delete_modal')
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            AIZ.plugins.notify('success', '{{translate("Payment Link Copied")}}');
        }
    </script>
@endsection
