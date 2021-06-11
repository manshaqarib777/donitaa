{{-- <!--Site Footer Here-->
<footer id="site-footer" class=" bgprimary padding_top">
    <div class="container">
        <div class="row">
            @php
                $item_number = setting()->get('main_footer_item_number_'.app()->getLocale()) ?? 0;
                if($item_number == 1){
                    $style = "col-lg-12";
                }elseif ($item_number == 2) {
                    $style = "col-lg-6"<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg @if(setting()->get('main_header_stikcy_'.app()->getLocale())) static-nav @endif">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="@if(setting()->get('main_header_logo_'.app()->getLocale()) && setting()->get('main_header_logo_'.app()->getLocale()) != '') {{asset('/storage/app/public/'. setting()->get('main_header_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/main/frontend/logistic/images/logo-transparent.svg')}} @endif" alt="logo" class="logo-default">
                <img src="@if(setting()->get('sticky_header_logo_'.app()->getLocale()) && setting()->get('sticky_header_logo_'.app()->getLocale()) != '') {{asset('/storage/app/public/'. setting()->get('sticky_header_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/main/frontend/logistic/images/logo.svg')}} @endif" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                @if(isset($navbar_menu))
                    <ul class="navbar-nav">
                        @forelse ($navbar_menu->items as $item)
                            @include('frontend.inc.nav_links',['item' => $item])
                        @empty
                        @endforelse
                        @if(\App\Addon::where('unique_identifier', 'spot-cargo-shipment-addon')->first())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.shipments.track') }}">{{translate('Tracking')}}</a>
                            </li>
                        @endif
                    </ul>
                @endif
                @if(null !==setting()->get('main_header_language_'.app()->getLocale()) && setting()->get('main_header_language_'.app()->getLocale()))
                    <style>
                        .drop-container:hover #lang-change .dropdown-menu{
                            transform: inherit !important;
                            visibility: visible !important;
                        }
                        .drop-container #lang-change .dropdown-menu .flag-img{
                            max-width: 15px;
                        }
                    </style>
                    <div class="drop-container">
                        <div class="dropdown" id="lang-change">

                            @php
                                if(Session::has('locale')){
                                    $locale = Session::get('locale', Config::get('app.locale'));
                                }
                                else{
                                    $locale = env('DEFAULT_LANGUAGE');
                                }
                            @endphp

                            <a class="btn btn-countries dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="img-holder">
                                <img class="flag-img" src="{{ static_asset('assets/img/flags/'.$locale.'.svg') }}" alt="flag-img">
                                </span>
                            </a>

                            <div  
                            @if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
                                class="dropdown-menu dropdown-menu-left"
                            @else
                                class="dropdown-menu dropdown-menu-right"
                            @endif
                            >
                                @foreach (\App\Language::all() as $key => $language)
                                    <a class="dropdown-item navi-link " href="javascript:void(0)" data-flag="{{ $language->code }}">
                                        <span class="mr-2 img-holder">
                                            <img class="flag-img" src="{{ static_asset('assets/img/flags/'.$language->code.'.svg') }}" alt="flag-img">
                                        </span>
                                        {{ $language->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @if(isset($navbar_menu) && !empty($navbar_menu->items->toArray()))
            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        @endif
    </nav>
    <!-- side menu -->
    <div class="opacity-0 side-menu bg-yellow">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    @foreach ($sidebar_menu->items ?? [] as $item)
                        <li class="nav-item">
                            <a class="nav-link @if(count($item->child) > 0)collapsePagesSideMenu @endif" @if(count($item->child) > 0)data-toggle="collapse" @endif href="@if(count($item->child) > 0) #sideNavPages{{$item->id}} @else {{$item->link}} @endif"> {{$item->label}} @if(count($item->child) > 0) <i class="fas fa-chevron-down"></i> @endif </a>
                            @if(count($item->child) > 0)
                                <div id="sideNavPages{{$item->id}}" class="collapse sideNavPages">
                                    <ul class="mt-2 navbar-nav">
                                        @foreach ($item->child as $child)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{$item->link}}">{{$item->label}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    @if(isset($dark_social_links_name) && is_array($main_social_links_name))
                        @foreach ($main_social_links_name as $key => $social_link_name)
                            @if($social_link_name || $main_social_links_icon[$key])
                                <li><a href="{{$main_social_links_name[$key]}}" class=""><i
                                            class="{{$main_social_links_icon[$key]}}"></i> </a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                <p class="whitecolor">{{setting()->get('main_footer_copy_right_'.app()->getLocale())}}</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header --> --}}
{{-- ;
                }elseif ($item_number == 3) {
                    $style = "col-lg-4";
                }else{
                    $style = "col-lg-3";
                }
            @endphp
            @if(isset($footer_containers))
                @foreach ($footer_containers as $footer_container)
                    <div class="{{$style}} col-md-6 col-sm-6">
                        @forelse ($footer_container->container_widget_with_lang ?? [] as $container_widget)
                                @widget('frontendWidget',['container_widget'=>$container_widget])
                        @empty
                            
                        @endforelse
                    </div>
                @endforeach
            @endif --}}

            {{-- <div class="{{$style}} col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="index-logistic.html" class="footer_logo bottom25"><img src="@if(setting()->get('main_footer_logo_'.app()->getLocale())) {{asset('/storage/app/public/'. setting()->get('main_footer_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/dark/frontend/logistic/images/logo-transparent.svg')}} @endif" alt="{{setting()->get('main_app_name_'.app()->getLocale())}}"></a>
                    <p class="whitecolor bottom25">{{setting()->get('main_footer_about_description_'.app()->getLocale())}}</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            {{setting()->get('main_footer_contact_phone_'.app()->getLocale())}} <a class="d-block" href="mailto:web@support.com">{{setting()->get('main_footer_contact_email_'.app()->getLocale())}}</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        @if(isset($dark_social_links_name) && is_array($main_social_links_name))
                            @foreach ($main_social_links_name as $key => $social_link_name)
                                @if($social_link_name || $main_social_links_icon[$key])
                                    <li><a href="{{$main_social_links_name[$key]}}" target="_blank" class=""><i class="{{$main_social_links_icon[$key]}}"></i> </a> </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="{{$style}} col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        <li> <a href="#.">Aenean tristique justo et... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#.">Phasellus dapibus dictum augue... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#.">Mauris blandit vitae. Praesent non... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                    </ul>
                </div>
            </div>
            <div class="{{$style}} col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">Our Services</h3>
                    @php
                        $footer_menu = Menu::getByName('footer_menu'); //return array
                    @endphp
                    @if($footer_menu)
                    <ul class="links">
                        @foreach($footer_menu as $menu)
                        <li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                        @endforeach
                    </ul>
                    @endif

                </div>
            </div>
            <div class="{{$style}} col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Business hours</h3>
                    <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                    <ul class="hours_links whitecolor">
                        <li><span>Monday-Saturday:</span> <span>8.00-18.00</span></li>
                        <li><span>Friday:</span> <span>09:00-21:00</span></li>
                        <li><span>Sunday:</span> <span>09:00-20:00</span></li>
                        <li><span>Calendar Events:</span> <span>24-Hour Shift</span></li>
                    </ul>
                </div>
            </div> --}}
      {{--  </div>
        <div class="py-4 d-flex flex-lg-column" style="color: white">
            <!--begin::Container-->
            <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="order-2 order-md-1">
                    {{-- <a href="{{url('/')}}">{!! setting()->get('main_footer_copy_right_'.app()->getLocale()) ?? '' !!}</a> --}}
      {{--                    @if(isset($footer_menu))
                        @forelse ($footer_menu->items as $item)
                            {{-- @if(count($item->child) > 0)
                                {{$item->label}} has {{count($item->child)}} child <br> 
                            @endif --}}
      {{--                            <a class="mr-2" href="{{$item->link}}">{{$item->label}}</a>
                            @if(!$loop->last)
                                |
                            @endif
                        @empty
                            
                        @endforelse
                    @endif
                </div>
                <!--end::Copyright-->
                <!--begin::Nav-->
                <div class="nav nav-dark">
                    @if(setting()->get('main_footer_copy_right_'.app()->getLocale()))
                        {{setting()->get('main_footer_copy_right_'.app()->getLocale())}} 
                    @else
                        Copyright © {{date('Y')}} All rights reserved.
                    @endif
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Container-->
        </div>
    </div>
</footer>
<!--Footer ends--> --}}
<footer class="dark-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                {{-- @if(get_setting_by_lang('home_statistics_status') && get_setting_by_lang('home_statistics_title1') !== null)
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
                @endif --}}

                @if(get_setting_by_lang('home_about_us_status') && get_setting_by_lang('home_about_us_title1') !== null)
                <div class="col-md-4 col-sm-6">                
                    <h4 class="title"><span>01</span>{{ get_setting_by_lang('home_about_us_title1')  }}</h4>
                    <p>{{ get_setting_by_lang('home_about_us_desc')  }}</p>
                    <ul class="social-media">
                        @if(is_array($main_social_links_name))
                            @foreach ($main_social_links_name as $key => $social_link_name)
                                @if($social_link_name || $main_social_links_icon[$key])
                                    <li><a href="{{$main_social_links_name[$key]}}"><i
                                                class="{{$main_social_links_icon[$key]}}"></i> </a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                @endif
                <div class="col-md-2 col-sm-3 col-xs-6">
                    @if(isset($footer_menu))
                        <h4 class="title"><span>03</span>Community</h4>                    
                        <ul class="footer-menu">
                            @foreach($footer_menu->items as $item)                            
                                <li><a href="{{$item->link}}">{{$item->label}}</a></li>                    
                            @endforeach
                        </ul>
                    @endif

                </div>
                <!-- end col-2 -->
                <div class="col-md-4">
                    <div class="newsletter">
                        <h4 class="title"><span>04</span>NEWSLETTER</h4>
                        <p>If you would like more information about our services we are eager to help.</p>
                        <form>
                            <input type="text" placeholder="Type your e-mail">
                            <button type="submit">JOIN</button>
                        </form>
                        <small>I promise, we won’t spam you!</small>
                    </div>
                    <!-- end newsletter -->
                </div>
                <!-- end col-2 -->
            </div>
            <!-- end row -->
            <div class="row middle-bar">
                <div class="col-lg-4 col-md-3 hidden-sm hidden-xs"> 
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="@if(setting()->get('main_header_logo_'.app()->getLocale()) && setting()->get('main_header_logo_'.app()->getLocale()) != '') {{asset('/storage/app/public/'. setting()->get('main_header_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/main/frontend/logistic/images/logo-transparent.svg')}} @endif" alt="logo" class="logo-default">
                        <img src="@if(setting()->get('sticky_header_logo_'.app()->getLocale()) && setting()->get('sticky_header_logo_'.app()->getLocale()) != '') {{asset('/storage/app/public/'. setting()->get('sticky_header_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/main/frontend/logistic/images/logo.svg')}} @endif" alt="logo" class="logo-scrolled">
                    </a>
                    <h4>INTERNATIONAL LOGISTIC</h4>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <h3>MOBILE APP</h3>
                    <p>Download our mobile applications from Google Play and Apple Store or decode QR Code just
                        below and
                        start using.</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-sm-6 col-md-5 col-xs-12">
                    <ul>
                        <li><img src="images/icon-appstore.png" alt="Image"></li>
                        <li><img src="images/icon-googleplay.png" alt="Image"></li>
                    </ul>
                    <i class="icon-mobile responsive-icon"></i> <a rel='nofollow'
                        href='http://www.themezinho.net'><img
                            src='https://chart.googleapis.com/chart&#63;cht=qr&amp;chl=www.themezinho.net&amp;chs=90x90'
                            alt=''></a>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer-content -->
    <div class="sub-footer">
        <div class="container"> 
            <span class="copyright">
                @if(setting()->get('main_footer_copy_right_'.app()->getLocale()))
                        {{setting()->get('main_footer_copy_right_'.app()->getLocale())}} 
                @else
                    Copyright © {{date('Y')}} All rights reserved.
                @endif
            </span>
        </div>
        <!-- end container -->
    </div>
    <!-- end sub-footer -->
</footer>