{{-- @extends('frontend.layouts.app')

@section('meta_title') {{translate('Homepage')}} @endsection
@section('content')


    <!--Some Services-->
    @if(get_setting_by_lang('home_banner1_status') && !empty(json_decode(get_setting_by_lang('home_banner1_title'), true)))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="services-slider" class="owl-carousel">
                        @foreach (json_decode(get_setting_by_lang('home_banner1_title'), true) as $key => $value)
                            <div class="item">
                                <div class="service-box">
                                    <span class="bottom25"><i class="{{!empty(get_setting_by_lang('home_banner1_icon')) ? json_decode(get_setting_by_lang('home_banner1_icon'), true)[$key] : ''}}"></i></span>
                                    <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">{{json_decode(get_setting_by_lang('home_banner1_title'), true)[$key]}}</a></h4>
                                    <p>{{json_decode(get_setting_by_lang('home_banner1_desc'), true)[$key]}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!--Some Services ends-->
    <!--Some Feature -->
    @if(get_setting_by_lang('home_section1_status') && get_setting_by_lang('home_section1_title') !== null)

        <section id="about" class="single-feature padding mt-n5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                        <div class="heading-title mb-4">
                            <h2 class="darkcolor font-normal bottom30">{!!  get_setting_by_lang('home_section1_title')  !!}</h2>
                        </div>
                        <p class="bottom35">{{ get_setting_by_lang('home_section1_desc')  }}</p>
                        <a href="{{ get_setting_by_lang('home_section1_link')  }}" class="button gradient-btn mb-sm-0 mb-4">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="image"><img alt="SEO" src="{{!empty(get_setting_by_lang('home_section1_image')) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_section1_image'), true))->file_name) : ''}}"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!--Some Feature ends-->
    <!-- WOrk Process-->
    @if(get_setting_by_lang('home_process_status') && !empty(json_decode(get_setting_by_lang('home_process_title'), true)))

        <section id="our-process" class="padding bgprimary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                            <h2 class="font-normal">{{translate('Our Work Process')}} </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class="process-wrapp">
                        @foreach (json_decode(get_setting_by_lang('home_process_title'), true) as $key => $value)
                            <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                                <span class="pro-step bottom20">0{{$key+1}}</span>
                                <p class="fontbold bottom20">{{json_decode(get_setting_by_lang('home_process_title'), true)[$key]}}</p>
                                <p class="mt-n2 mt-sm-0">{{json_decode(get_setting_by_lang('home_process_desc'), true)[$key]}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @endif
    <!--WOrk Process ends-->
    <!-- Mobile Apps -->
    @if(get_setting_by_lang('home_section_status') && !empty(json_decode(get_setting_by_lang('home_msection_title'), true)))

    <section id="our-apps" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="heading-title bottom30 wow fadeInLeft" data-wow-delay="200ms">
                        <span class="defaultcolor text-center text-md-left">{{get_setting_by_lang('home_msection_subtitle')}}</span>
                        <h2 class="bottom30 darkcolor font-normal text-center text-md-left">{{get_setting_by_lang('home_msection_htitle')}}</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-12 wow fadeInRight" data-wow-delay="200ms">
                    <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">{{get_setting_by_lang('home_msection_hdesc')}}</p>
                </div>
            </div>
            <div class="row d-flex align-items-center" id="app-feature">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="text-center text-md-left">
                        @for($i = 0; $i < 2; $i++)
                            <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="200ms">
                                <div class="icon"><i class="{{@json_decode(get_setting_by_lang('home_msection_icon'), true)[$i]}}"></i></div>
                                <div class="text">
                                    <h4 class="bottom15">
                                        <span class="d-inline-block">{{@json_decode(get_setting_by_lang('home_msection_title'), true)[$i]}}</span>
                                    </h4>
                                    <p>{{@json_decode(get_setting_by_lang('home_msection_desc'), true)[$i]}}</p>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 text-center">
                    <div class="image feature-item d-inline-block wow fadeIn my-5 my-md-0" data-wow-delay="400ms">
                        <img src="{{!empty(get_setting_by_lang('home_msection_image')) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_msection_image'), true))->file_name) : ''}}" alt="mobile phones">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="text-center text-md-right">
                        @for($i = 2; $i < 4; $i++)
                            <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="200ms">
                                <div class="icon"><i class="{{@json_decode(get_setting_by_lang('home_msection_icon'), true)[$i]}}"></i></div>
                                <div class="text">
                                    <h4 class="bottom15">
                                        <span class="d-inline-block">{{@json_decode(get_setting_by_lang('home_msection_title'), true)[$i]}}</span>
                                    </h4>
                                    <p>{{@json_decode(get_setting_by_lang('home_msection_desc'), true)[$i]}}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--Mobile Apps ends-->
    @if(get_setting_by_lang('home_statistics_status') && get_setting_by_lang('home_statistics_title1') !== null)
        <!-- Counters -->
        <section id="bg-counters" class="padding bg-counters" style="background-image: url({{ !empty(get_setting_by_lang('home_statistics_image')) ?  url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_statistics_image'), true))->file_name) : ''}});">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="overlay overlay-dark opacity-6 z-index-0"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                        <div class="counters whitecolor  top10 bottom10">
                            <span class="count_nums font-light" data-to="{{ get_setting_by_lang('home_statistics_num1')  }}" data-speed="2500"> </span>
                        </div>
                        <h3 class="font-light whitecolor top20">{{ get_setting_by_lang('home_statistics_title1')  }}</h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p class="whitecolor top20 bottom20 font-light title">{{ get_setting_by_lang('home_statistics_desc')  }}</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                        <div class="counters whitecolor top10 bottom10">
                            <span class="count_nums font-light" data-to="{{ get_setting_by_lang('home_statistics_num2')  }}" data-speed="2500"> </span>
                        </div>
                        <h3 class="font-light whitecolor top20">{{ get_setting_by_lang('home_statistics_title2')  }}</h3>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Counters ends-->
    <!-- Testimonials -->
    @if(get_setting_by_lang('home_testimonials_status'))

        <section id="client" class="testimonial py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="heading-title bottom30 wow fadeIn" data-wow-delay="200ms">
                            <span class="defaultcolor text-center">{{get_setting_by_lang('home_testimonials_subtitle')}}</span>
                            <h2 class="bottom30 darkcolor font-normal text-center ">{{get_setting_by_lang('home_testimonials_title')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--Testimonials with background 02-->
                        <div class="feedback-slides">
                            <div class="client-thumbnails">
                                <div>
                                    @foreach (json_decode(get_setting_by_lang('home_testimonials_images'), true) as $key => $value)
                                        <div class="item">
                                            <div class="img-fill"><img src="{{!empty(get_setting_by_lang('home_testimonials_images')) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_testimonials_images'), true)[$key])->file_name) : ''}}" alt="client"></div>
                                            <div class="title">
                                                <h3 class="user-name">{{json_decode(get_setting_by_lang('home_testimonials_name'), true)[$key]}}</h3>
                                                <p class="user-designation">{{json_decode(get_setting_by_lang('home_testimonials_job'), true)[$key]}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="client-feedback">
                                <div>
                                    @foreach (json_decode(get_setting_by_lang('home_testimonials_images'), true) as $key => $value)
                                        <div class="item">
                                            <div class="single-feedback">
                                                <p class="text">“{{json_decode(get_setting_by_lang('home_testimonials_desc'), true)[$key]}}”</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--Testimonials with background ends-->
                    </div>
                </div>
            </div>
        </section>

    @endif

    <!--testimonials end-->
    
@endsection

@section('script')

    <script>
        $(document).ready(function(){

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
        });
    </script>
@endsection --}}
@extends('frontend.layouts.app')

@section('meta_title') {{translate('Homepage')}} @endsection
@section('content')

@php
$countries = \App\Country::where('covered', 1)->get();
$packages = \App\Package::all();
@endphp

    @if(get_setting_by_lang('home_slider_status'))
        <section class="slider">
            <div class="fixed-form">
                <div class="container">
                    <h3>{{json_decode(get_setting_by_lang('home_slider_text1'), true)[0]}}</h3>
                    <h5>{{json_decode(get_setting_by_lang('home_slider_text1'), true)[0]}}</h5>
                    <form>
                        <input type="text" placeholder="Tracking ID">
                        &nbsp;
                        <input type="text" class="datepicker" placeholder="Date">
                        &nbsp;
                        <button type="submit">{{json_decode(get_setting_by_lang('home_slider_text3'), true)[0]}}</button>
                    </form>
                </div>
                <!-- end container -->
            </div>
            <div class="main-slider">
                @foreach (json_decode(get_setting_by_lang('home_slider_images'), true) as $key => $value)
                <!-- end fixed-form -->
                    <div class="slide1" style="background: url({{!empty( json_decode(get_setting_by_lang('home_slider_images'), true)[$key] ) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_slider_images'), true)[$key])->file_name) : ''}})"> </div>

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
                                    <span class="holder">
                                        <input type="radio" checked>
                                        Domestic</span> <span class="holder">
                                        <input type="radio">
                                        International</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group size-field">
                                    <label>Weight</label>
                                    <input type="text" placeholder="kg" id="kt_touchspin_4">
                                    <span>x</span>
                                    <input type="text" placeholder="cm">
                                    <span>x</span>
                                    <input type="text" placeholder="cm">
                                </div>
                                <!-- end form-group -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Fragile</label>
                                            <select class="selectpicker">
                                                <option>YES</option>
                                                <option>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>{{ translate('Package Type') }}:</label>
                                            <select class="form-control select2 package-type-select"
                                                name="package_id" style="width:100%">
                                                <option></option>
                                                @foreach ($packages as $package)
                                                    <option @if (\App\ShipmentSetting::getVal('def_package_type') == $package->id) selected @endif
                                                        value="{{ $package->id }}">{{ $package->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="mb-2 d-md-none"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end form-group -->
                            </div>
                            <div class="row col-md-6 col-sm-6">
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
                            </div>
                            
                            <!-- col-6 -->
                            <div class="row col-md-12 col-sm-12">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('Shipping Cost') }}:</label>
                                        <input type="text" value="$0" id="shipping_cost" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">                                
                                    <div class="form-group">
                                        <label>{{ translate('Tax Duty') }}:</label>
                                        <input type="text" value="$0" id="tax_duty"  disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('Insurance') }}:</label>
                                        <input type="text" value="$0" id="insurance" disabled>
                                    </div>                                   
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('Return Cost') }}:</label>
                                        <input type="text" value="$0" id="return_cost" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('Total Cost') }}:</label>
                                        <input type="text" value="$0" id="total_cost" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4" style="padding-top: 25px;">
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
                <div class="col-md-4 col-sm-4 spacing">
                    <div class="step-box bg-1"> <span>01</span>
                        <h3>PACKING </h3>
                        <h5>STORAGES</h5>
                        <a href="#">READ MORE</a>
                    </div>
                    <!-- end step-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-4 col-sm-4 spacing">
                    <div class="step-box bg-2 featured"> <span>02</span>
                        <h3>LANDING</h3>
                        <h5>FEATURES</h5>
                        <a href="#">READ MORE</a>
                    </div>
                    <!-- end step-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-4 col-sm-4 spacing">
                    <div class="step-box bg-3"> <span>03</span>
                        <h3>DELIVERY</h3>
                        <h5>SERVICES</h5>
                        <a href="#">READ MORE</a>
                    </div>
                    <!-- end step-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end steps-features -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content-carousel">
                        <div>
                            <figure><img src="images/testimonial-head1.png" alt="Image"></figure>
                            <blockquote>Shipper is a world leader in global container shipping and a company
                                offering global service
                                with local knowledge. SHIPPER also provides integrated network of road, rail and sea
                                transport
                                resources which stretches across the globe.</blockquote>
                            <i class="ion-android-hangout"></i>
                            <h4>Mark Zuckerberg</h4>
                            <small>PRODUCT MANAGER</small>
                        </div>
                        <!-- end div -->
                        <div>
                            <figure><img src="images/testimonial-head2.png" alt="Image"></figure>
                            <blockquote>We are a privately owned global organisation operating a network of over 480
                                offices in 150
                                countries, employing a team of over 24,000 dedicated individuals. We have an
                                established fleet of 480
                                container vessels with an intake capacity</blockquote>
                            <i class="ion-android-hangout"></i>
                            <h4>Jessica Carter</h4>
                            <small>SHIPPING DIRECTOR</small>
                        </div>
                        <!-- end div -->
                        <div>
                            <figure><img src="images/testimonial-head3.png" alt="Image"></figure>
                            <blockquote>Our sea freight offering is complemented by our integrated warehousing and
                                haulage services,
                                which enable us to offer a true door-to-door service. As a company, we believe in
                                operating as
                                independent national carriers, this means we’re able to offer you a global.
                            </blockquote>
                            <i class="ion-android-hangout"></i>
                            <h4>Chris O'Conner</h4>
                            <small>SENIOR MARKETTING</small>
                        </div>
                        <!-- end div -->
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
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li>
                            <figure>
                                <h5><img src="images/logo1.jpg" alt="Image"></h5>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <h5><img src="images/logo2.jpg" alt="Image"></h5>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <h5><img src="images/logo3.jpg" alt="Image"></h5>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <h5><img src="images/logo4.jpg" alt="Image"></h5>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <h5><img src="images/logo5.jpg" alt="Image"></h5>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <h5><img src="images/logo6.jpg" alt="Image"></h5>
                            </figure>
                        </li>
                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="about-intro parent">
        <div class="left-side">
            <div class="content-box">
                <h3 class="section-title"><span>04</span>ABOUT SHIPPER</h3>
                <p>We have trained, experienced experts available for our full range of services including reefer,
                    out-of-gauge, breakbulk and each of our trade services – each operating in tandem with your
                    business. This
                    gives us the ability to uphold the personal service we’re globally recognised</p>
                <div class="fun-facts">
                    <h5>FUN FACTS</h5>
                    <div class="fun-box"> <i class="ion-trophy"></i> <span class="title">GETTED AWARDS</span> <span
                            class="plus">+</span><b class="counter">1.246</b> </div>
                    <!-- end fun-box -->
                    <div class="fun-box"> <i class="ion-umbrella"></i> <span class="title">CARRIED
                            PACKAGE</span><span class="plus">+</span><b class="counter">2.638</b> </div>
                    <!-- end fun-box -->
                </div>
                <!-- end fun-facts -->
            </div>
            <!-- end content-box -->
        </div>
        <!-- end left-side -->
        <div class="right-side" data-stellar-background-ratio="0.5">
            <div class="overlay parent text-center">
                <div>LOGISTIC</div>
            </div>
        </div>
        <!-- end left-side -->
    </section>
    <!-- end about-intro -->
    <div class="application"> <img src="images/app-mockup.jpg" alt="Image"> </div>
    <!-- end application -->
    @endsection
    @section('script')

    <script>
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
                        } else {
                        AIZ.plugins.notify('danger', '{{ translate('Please select package type') }} ');
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
                    document.getElementById("shipping_cost").value = response.shipping_cost;
                    document.getElementById("tax_duty").value = response.tax;
                    document.getElementById("insurance").value = response.insurance;
                    document.getElementById("return_cost").value = response.return_cost + ' ( Not Included )';
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