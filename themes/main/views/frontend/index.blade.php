@extends('frontend.layouts.app')

@section('meta_title') {{translate('Homepage')}} @endsection
@section('content')

@php
$countries = \App\Country::where('covered', 1)->get();
$packages = \App\Package::all();
@endphp

    @if(get_setting_by_lang('home_slider_status'))
        <section class="slider">
            <div class="main-slider">
                @foreach (json_decode(get_setting_by_lang('home_slider_images'), true) as $key => $value)
                <!-- end fixed-form -->
                
                    <div class="slide1" style="background: url({{!empty( json_decode(get_setting_by_lang('home_slider_images'), true)[$key] ) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_slider_images'), true)[$key])->file_name) : ''}})">
                        <div class="fixed-form">
                            <div class="container">
                                <h3>{{json_decode(get_setting_by_lang('home_slider_text1'), true)[$key]}}</h3>
                                <h5>{{json_decode(get_setting_by_lang('home_slider_text2'), true)[$key]}}</h5>
                                <form action="{{route('admin.shipments.tracking')}}" method="GET">
                                    <input type="text" placeholder="Tracking ID" name="code" required>
                                    &nbsp;
                                    <button type="submit">{{json_decode(get_setting_by_lang('home_slider_text3'), true)[$key]}}</button>
                                </form>
                            </div>
                            <!-- end container -->
                        </div>
                    </div>

                @endforeach
            </div>
        </section>
    @endif

    @if(get_setting_by_lang('home_packing_status'))
    <section class="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <h3 class="section-title"><span>01</span>{{ get_setting_by_lang('home_packing_title')}}</h3>
                        <p>{{ get_setting_by_lang('home_packing_desc')}}</p>
                    </div>
                    <!-- end left-side -->
                </div>
                <!-- end col-5 -->
                <div class="col-md-7">
                    <div class="right-side">
                        <div class="service-box">
                            <figure>
                                @if(get_setting_by_lang('home_packing_image1'))
                                    <img src="{{ url('public/'.\App\Upload::find(get_setting_by_lang('home_packing_image1'))->file_name) }}" alt="Image">
                                @endif
                                <figcaption>{{ get_setting_by_lang('home_packing_title1')}}</figcaption>
                            </figure>
                            <div class="desc"> {{ get_setting_by_lang('home_packing_desc1')}}</div>
                            <!-- end desc -->
                        </div>
                        <!-- end service-box -->
                        <div class="service-box spacing">
                            <figure>
                                @if(get_setting_by_lang('home_packing_image2'))
                                    <img src="{{ url('public/'.\App\Upload::find(get_setting_by_lang('home_packing_image2'))->file_name) }}" alt="Image">
                                @endif
                                <figcaption>{{ get_setting_by_lang('home_packing_title2')}}</figcaption>
                            </figure>
                            <div class="desc"> {{ get_setting_by_lang('home_packing_desc2')}}</div>
                            <!-- end desc -->
                        </div>
                        <!-- end service-box -->
                        <div class="service-box">
                            <figure>
                                @if(get_setting_by_lang('home_packing_image3'))
                                    <img src="{{ url('public/'.\App\Upload::find(get_setting_by_lang('home_packing_image3'))->file_name) }}" alt="Image">
                                @endif
                                <figcaption>{{ get_setting_by_lang('home_packing_title3')}}</figcaption>
                            </figure>
                            <div class="desc">{{ get_setting_by_lang('home_packing_desc3')}}</div>
                            <!-- end desc -->
                        </div>
                        <!-- end service-box -->
                    </div>
                    <!-- end right-side -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @endif
    <!-- end featured-services -->
    @if(get_setting_by_lang('home_calculate_shipping_status'))

    <section class="calculate-shipping">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h3 class="section-title"><span>02</span>CALCULATE SHIPPING </h3>
                    <form onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group radio-field">
                                    <label>Distance</label>
                                    <span class="holder" style="display: inline-flex;">
                                        <input type="radio" name="type" checked id="domestic">

                                       <label for="domestic" style="cursor: pointer">Domestic</label>
                                    </span> 
                                    <span class="holder" style="display: inline-flex;">
                                        <input type="radio"  name="type" id="international">                                         
                                       <label for="international" style="cursor: pointer">International</label>

                                    </span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group size-field">
                                    <label>Weight</label>
                                    <input type="text" placeholder="kg" name="kg" id="kt_touchspin_4">
                                    <span>x</span>
                                    <input type="text" placeholder="cm">
                                    <span>x</span>
                                    <input type="text" placeholder="cm">
                                </div>
                                <!-- end form-group -->
                                <div class="form-group" style="width:70%">
                                    <label>Fragile</label>
                                    <select class="form-control selectpicker">
                                        <option>YES</option>
                                        <option>NO</option>
                                    </select>
                                </div>
                                
                                <!-- end form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group" style="width:70%">
                                    <label>{{ translate('Package Type') }}:</label>
                                    <select class="form-control selectpicker" name="package_id" id="package-type-select">
                                        @foreach ($packages as $package)
                                            <option @if (\App\ShipmentSetting::getVal('def_package_type') == $package->id) selected @endif
                                                value="{{ $package->id }}">{{ $package->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="mb-2 d-md-none"></div>
                                </div>
                                <div class="form-group" style="width:70%">
                                    <label>{{ translate('Package Value') }}:</label>
                                    <input type="text" class="form-control" value="0" id="value-listener">
                                </div>
                                <div class="form-group">
                                    <label>Extra Services</label>
                                    <span class="full-block">
                                        <input type="checkbox" checked>
                                        Quick Delivery</span> <span class="full-block">
                                        <input type="checkbox" onchange="update_currency_status(this)" id="insurance-listener">
                                        Warranty</span> <span class="full-block">
                                        <input type="checkbox">
                                        Gift Box</span>
                                </div>
                            </div>
                            {{-- <div class="row col-md-6 col-sm-6">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('From Country') }}:</label>
                                        <select id="change-country" name="Shipment[from_country_id]"
                                            class="form-control select2">
                                            <option value=""></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('To Country') }}:</label>
                                        <select id="change-country-to" name="Shipment[to_country_id]"
                                            class="form-control select2">
                                            <option value=""></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-6 col-sm-6">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('From Region') }}:</label>
                                        <select id="change-state-from" name="Shipment[from_state_id]"
                                            class="form-control select2">
                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('To Region') }}:</label>
                                        <select id="change-state-to" name="Shipment[to_state_id]"
                                            class="form-control select2">
                                            <option value=""></option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row col-md-6 col-sm-6">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('From Area') }}:</label>
                                        <select id='change-area-from' name="Shipment[from_area_id]"
                                            class="form-control select2">
                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('To Area') }}:</label>
                                        <select name="Shipment[to_area_id]" class="form-control select2">
                                            <option value=""></option>

                                        </select>
                                    </div>

                                </div>
                            </div> --}}
                            
                            <!-- col-6 -->
                            <div class="row col-md-12 col-sm-12">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label>{{ translate('Shipping Cost') }}:</label>
                                        <input type="text" value="$0" id="shipping_cost" disabled style="width: 170px;">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label>{{ translate('Insurance') }}:</label>
                                        <input type="text" value="$0" id="insurance" disabled style="width: 170px;">
                                    </div>                                   
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label>{{ translate('Total Cost') }}:</label>
                                        <input type="text" value="$0" id="total_cost" disabled style="width: 170px;">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3" style="padding-top: 25px;">
                                    <div class="form-group">
                                        <button type="submit" onclick="get_estimation_cost()">CALCULATE</button>
                                    </div>
                                </div>
                                <!-- end form-group -->
                                
                                <!-- end form-group -->
                            </div>
                            <!-- col-6 -->
                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- end col-8 -->
                <div class="col-md-4 hidden-sm hidden-xs">
                    <figure> 
                        @if(get_setting_by_lang('home_calculate_shipping_image'))
                            <img src="{{ url('public/'.\App\Upload::find(get_setting_by_lang('home_calculate_shipping_image'))->file_name) }}" alt="Image">
                        @endif
                    </figure>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @endif
    <!-- end calculate-shipping -->
    <section class="steps-features">
        <div class="container">
            <div class="row spacing">
                @php
                    $home_page_banner_title = json_decode(get_setting_by_lang('home_page_banner_title'), true);
                    $home_page_banner_sub_title = json_decode(get_setting_by_lang('home_page_banner_sub_title'), true);
                    $home_page_banner_place_holder = json_decode(get_setting_by_lang('home_page_banner_place_holder'), true);
                    $home_page_banner_read_more = json_decode(get_setting_by_lang('home_page_banner_read_more'), true);
                    $home_page_banner_read_more_link = json_decode(get_setting_by_lang('home_page_banner_read_more_link'), true);
                @endphp
                @foreach ($home_page_banner_title as $key => $value )
                <div class="col-md-4 col-sm-4 spacing">
                    <div class="step-box bg-1 {{($key==1)?'featured':''}}" style="background-image: url({{ !empty($home_page_banner_place_holder[$key]) ?  url('public/'.\App\Upload::find($home_page_banner_place_holder[$key])->file_name) : ''}});"> <span>0{{$key+1}}</span>
                        <h3>{{$home_page_banner_title[$key]}} </h3>
                        <h5>{{$home_page_banner_sub_title[$key]}}</h5>
                        <a href="{{$home_page_banner_read_more_link[$key]}}">{{$home_page_banner_read_more[$key]}}</a>
                    </div>
                    <!-- end step-box -->
                </div>    
                @endforeach


            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @if(get_setting_by_lang('home_testimonials_status'))
    <!-- end steps-features -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content-carousel">
                       @foreach (json_decode(get_setting_by_lang('home_testimonials_images'), true) as $key => $value)

                        <div>
                            <figure><img src="{{!empty(get_setting_by_lang('home_testimonials_images')) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_testimonials_images'), true)[$key])->file_name) : ''}}" alt="Image"></figure>
                            <blockquote>{{json_decode(get_setting_by_lang('home_testimonials_desc'), true)[$key]}}</blockquote>
                            <i class="ion-android-hangout"></i>
                            <h4>{{json_decode(get_setting_by_lang('home_testimonials_name'), true)[$key]}}</h4>
                            <small>{{json_decode(get_setting_by_lang('home_testimonials_job'), true)[$key]}}</small>
                        </div>
                        @endforeach

                    </div>
                    <!-- end content-carousel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end latest-news -->
    @endif

    @if(get_setting_by_lang('home_about_shipper_status'))

    <section class="about-intro parent">
        <div class="left-side">
            <div class="content-box">
                <h3 class="section-title"><span>04</span>{!!  get_setting_by_lang('home_about_shipper_title1')  !!}</h3>
                <p>{!!  get_setting_by_lang('home_about_shipper_desc')  !!}</p>
                <div class="fun-facts">
                    <h5>{!!  get_setting_by_lang('home_about_shipper_fun_fact')  !!}</h5>
                    <div class="fun-box"> <i class="ion-trophy"></i> <span class="title">{!!  get_setting_by_lang('home_about_shipper_getting_awards')  !!}</span> <span
                            class="plus">+</span><b class="counter">{!!  get_setting_by_lang('home_about_shipper_getting_awards_number')  !!}</b> </div>
                    <!-- end fun-box -->
                    <div class="fun-box"> <i class="ion-umbrella"></i> <span class="title">{!!  get_setting_by_lang('home_about_shipper_carried_packages')  !!}
                    </span><span class="plus">+</span><b class="counter">{!!  get_setting_by_lang('home_about_shipper_carried_packages_number')  !!}</b> </div>
                    <!-- end fun-box -->
                </div>
                <!-- end fun-facts -->
            </div>
            <!-- end content-box -->
        </div>
        <!-- end left-side -->
        <div class="right-side" data-stellar-background-ratio="0.5" style="background: url({{ !empty(get_setting_by_lang('home_about_shipper_image')) ?  url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_about_shipper_image'), true))->file_name) : ''}});"> 
            <div class="overlay parent text-center">
                <div>{!!  get_setting_by_lang('home_about_shipper_title2')  !!}</div>
            </div>
        </div>
        <!-- end left-side -->
    </section>
    @endif
    
    @if(get_setting_by_lang('home_about_shipper_image_bottom'))
    <div class="application"> 
        <img src="{{ url('public/'.\App\Upload::find(get_setting_by_lang('home_about_shipper_image_bottom'))->file_name) }}" alt="Image">
    </div>        
    @endif
    
    @endsection

    @section('script')

    <script>
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
                var select_packages = $('#package-type-select');
                var select_weights = $('#kt_touchspin_4');
                var select_insurances = $('#insurance-listener');
                var select_values = $('#value-listener');

                var package_ids = [];
                if(select_weights.val()=="")
                {
                    $.toaster({ priority :'danger', title :'Error', message :'{{ translate('Please Input Weight And Size') }}',settings : { timeout:5000}});
                    return false;
                }
                if(select_packages.val()=="")
                {
                    $.toaster({ priority :'danger', title :'Error', message :'{{ translate('Please select package type') }}',settings : { timeout:5000}});
                    return false;

                }
                package_ids[0] = new Object();
                package_ids[0]["package_id"] = select_packages.val();
                package_ids[0]["weight"] = select_weights.val();
                package_ids[0]["shipment_insurance"] = select_insurances.val();
                package_ids[0]["shipment_price"] = select_values.val();

                var request_data = {
                    _token: '{{ csrf_token() }}',
                    package_ids: package_ids,
                    total_weight: select_weights.val(),
                    // from_country_id: from_country_id,
                    // to_country_id: to_country_id,
                    // from_state_id: from_state_id,
                    // to_state_id: to_state_id,
                    // from_area_id: from_area_id,
                    // to_area_id: to_area_id,
                };
                $.post('{{ route('admin.shipments.get-estimation-cost') }}', request_data, function(response) {
                    document.getElementById("shipping_cost").value = response.shipping_cost;
                    document.getElementById("insurance").value = response.insurance;
                    document.getElementById("total_cost").value = response.total_cost;
                    console.log(response);
                });
            }
        $(document).ready(function(){
            $('.select2').select2();
            

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
            $('.package-type-select').change(function() {
                alert($(this).val());


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
        });
    </script>
@endsection