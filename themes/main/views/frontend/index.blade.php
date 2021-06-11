{{-- @extends('frontend.layouts.app')

@section('meta_title') {{translate('Homepage')}} @endsection
@section('content')
    @php
        $main_social_links_name = json_decode( setting()->get('main_social_links_name_'.app()->getLocale()) );
        $main_social_links_icon = json_decode(  setting()->get('main_social_links_icon_'.app()->getLocale()) );
    @endphp
    <!--Main Slider-->

    @if(get_setting_by_lang('home_slider_status'))
        <section id="main-banner-area" class="position-relative">
            <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="rev_main" class="rev_slider fullwidthabanner white" data-version="5.4.1">
                    <ul>
                        @foreach (json_decode(get_setting_by_lang('home_slider_images'), true) as $key => $value)
                            <li data-index="rs-0{{$key}}" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="{{$key+1}}">
                                <!-- MAIN IMAGE -->
                                <img src="{{!empty( json_decode(get_setting_by_lang('home_slider_images'), true)[$key] ) ? url('public/'.\App\Upload::find(json_decode(get_setting_by_lang('home_slider_images'), true)[$key])->file_name) : ''}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYER NR. 1 -->
                                <div class="overlay overlay-dark opacity-6"></div>
                                <div class="tp-caption tp-resizeme"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                                    data-width="none" data-height="none" data-type="text"
                                    data-textAlign="['center','center','center','center']"
                                    data-responsive_offset="on" data-start="1000"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                                    <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">{{json_decode(get_setting_by_lang('home_slider_text1'), true)[$key]}}</h2>
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                                    data-width="none" data-height="none" data-type="text"
                                    data-textAlign="['center','center','center','center']"
                                    data-responsive_offset="on" data-start="1000"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                                    <h2 class="text-capitalize font-bold whitecolor text-center">{{json_decode(get_setting_by_lang('home_slider_text2'), true)[$key]}}</h2>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                                    data-width="none" data-height="none" data-type="text"
                                    data-textAlign="['center','center','center','center']"
                                    data-responsive_offset="on" data-start="1500"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                                    <h2 class="text-capitalize font-xlight whitecolor text-center heading-title-small">{{json_decode(get_setting_by_lang('home_slider_text3'), true)[$key]}}</h2>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @if(is_array($main_social_links_name))
                <ul class="social-icons-simple revicon white">
                    @foreach ($main_social_links_name as $key => $social_link_name)
                        @if($social_link_name || $main_social_links_icon[$key])
                            <li class="d-table"><a href="{{$main_social_links_name[$key]}}"><i class="{{$main_social_links_icon[$key]}}"></i> </a> </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </section>
    @endif

    <!--Main Slider ends -->

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

    <link href="{{ static_asset('themes/main/frontend/logistic/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/logistic/css/slick.css')}}" rel="stylesheet">
    <script src="{{ static_asset('themes/main/frontend/logistic/js/slick.min.js')}}"></script>
    <script>
        $(document).ready(function(){

            var $imagesSlider = $(".client-feedback>div"),
                $thumbnailsSlider = $(".client-thumbnails>div");

            // Images Options
            $imagesSlider.slick({
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                cssEase: 'linear',
                fade: true,
                dots: true,
                arrows:false,
                autoplay: false,
                draggable: false,
                asNavFor: ".client-thumbnails>div",
            });
            // Thumbnails Options
            $thumbnailsSlider.slick({
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                cssEase: 'linear',
                autoplay: true,
                arrows:false,
                centerMode: true,
                draggable: false,
                focusOnSelect: true,
                asNavFor: ".client-feedback>div",
            });
        });
    </script>
@endsection --}}
@extends('frontend.layouts.app')

@section('meta_title') {{translate('Homepage')}} @endsection
@section('content')


       <!-- end full-header -->
    <section class="slider">
        <div class="fixed-form">
            <div class="container">
                <h3>LOGISTICS</h3>
                <h5>Check your delivery easily & quickly</h5>
                <form>
                    <input type="text" placeholder="Tracking ID">
                    &nbsp;
                    <input type="text" class="datepicker" placeholder="Date">
                    &nbsp;
                    <button type="submit">CHECK SHIPPING</button>
                </form>
            </div>
            <!-- end container -->
        </div>
        <!-- end fixed-form -->
        <div class="main-slider">
            <div class="slide1"> </div>
            <!-- end slider1 -->
            <div class="slide2"> </div>
            <!-- end slider2 -->
            <div class="slide3"> </div>
            <!-- end slider3 -->
        </div>
    </section>
    <!-- end slider -->
    <section class="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <h3 class="section-title"><span>01</span>PACKING & STORAGE</h3>
                        <p>Bringing you industry-specific expertise; whatever you’re shipping, wherever you’re
                            shipping it. </p>
                        <ul>
                            <li>Shipper delivers a professional, efficient service </li>
                            <li>Tailored to the specific needs of your business.</li>
                            <li>Our services are designed around you.</li>
                        </ul>
                    </div>
                    <!-- end left-side -->
                </div>
                <!-- end col-5 -->
                <div class="col-md-7">
                    <div class="right-side">
                        <div class="service-box">
                            <figure><img src="images/icon01.png" alt="Image">
                                <figcaption>SEA SHIPPING</figcaption>
                            </figure>
                            <div class="desc"> We want to ensure that it’s as easy as possible to use the site to
                                get.</div>
                            <!-- end desc -->
                        </div>
                        <!-- end service-box -->
                        <div class="service-box spacing">
                            <figure><img src="images/icon02.png" alt="Image">
                                <figcaption>AIR SHIPPING</figcaption>
                            </figure>
                            <div class="desc"> Shipments moving, whether you’ve worked with us for years completely
                                new.</div>
                            <!-- end desc -->
                        </div>
                        <!-- end service-box -->
                        <div class="service-box">
                            <figure><img src="images/icon03.png" alt="Image">
                                <figcaption>LAND SHIPPING</figcaption>
                            </figure>
                            <div class="desc">International shipping. For further assistance, please get in touch.
                            </div>
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
    <!-- end featured-services -->
    <section class="calculate-shipping">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h3 class="section-title"><span>02</span>CALCULATE SHIPPING </h3>
                    <form>
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
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input type="text">
                                </div>
                                <!-- end form-group -->
                                <div class="form-group size-field">
                                    <label>Cargo Size</label>
                                    <input type="text" placeholder="cm">
                                    <span>x</span>
                                    <input type="text" placeholder="cm">
                                </div>
                                <!-- end form-group -->

                                <div class="form-group">
                                    <label>Fragile</label>
                                    <select class="selectpicker">
                                        <option>YES</option>
                                        <option>NO</option>
                                    </select>
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- col-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Extra Services</label>
                                    <span class="full-block">
                                        <input type="checkbox" checked>
                                        Quick Delivery</span> <span class="full-block">
                                        <input type="checkbox">
                                        Warranty</span> <span class="full-block">
                                        <input type="checkbox">
                                        Gift Box</span>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group"> <small>The Field below will show the double of the number
                                        about $</small>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input type="text" value="$200" disabled>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button type="submit">CALCULATE</button>
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- col-6 -->
                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- end col-8 -->
                <div class="col-md-4 hidden-sm hidden-xs">
                    <figure> <img src="images/calculate-man.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
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