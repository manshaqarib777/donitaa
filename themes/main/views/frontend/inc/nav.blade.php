<header class="full-header">
    <nav class="navbar navbar-default @if(setting()->get('main_header_stikcy_'.app()->getLocale())) static-nav @endif">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 hidden-xs"> Now {{ get_setting_by_lang('home_statistics_num1') }} packages we delivery to <span
                            class="numbers">{{ get_setting_by_lang('home_statistics_num2') }}</span> stores </div>
                    <!-- end col-6 -->
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        @php
                            if(session()->get('country')==null)
                                $session_country='US';
                            else
                                $session_country=session()->get('country');

                        @endphp 

                        @if(null !==setting()->get('main_header_language_'.app()->getLocale()) && setting()->get('main_header_language_'.app()->getLocale()))
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
        
                                    <a class="dropdown-toggle" data-toggle="dropdown"
                                href="#"><img src="{{ static_asset('assets/img/flags/'.$locale.'.svg') }}" width="15" alt="flag-img"> Language</a>
        
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach (\App\Language::all() as $key => $language)
                                        <li><a href="javascript:void(0)" data-flag="{{ $language->code }}">
                                                    <img class="flag-img" src="{{ static_asset('assets/img/flags/'.$language->code.'.svg') }}" width="15" alt="flag-img">
                                                {{ $language->name }}
                                            </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="drop-container">
                            <div class="dropdown" id="country-change">
    
                                @php
                                if(Session::has('country')){
                                    $country = Session::get('country', Config::get('app.country'));
                                }
                                else{
                                    $country = Config::get('app.country');
                                }
                            @endphp 
    
                                <a class="dropdown-toggle" data-toggle="dropdown"
                            href="#"><img src="https://lipis.github.io/flag-icon-css/flags/1x1/{{ strtolower($country) }}.svg" width="15" alt="flag-img"> Country</a>
    
                                <ul class="dropdown-menu" role="menu">
                                    @foreach (\App\Country::where('covered',1)->get() as $key => $country)
                                    <li><a href="javascript:void(0)" data-flag="{{ $country->iso2 }}">
                                                <img class="flag-img" src="https://lipis.github.io/flag-icon-css/flags/1x1/{{ strtolower($country->iso2) }}.svg" width="15" alt="flag-img" alt="{{ $country->name }}">
                                            {{ $country->name }}
                                        </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-3 col-sm-4 col-xs-8"> <span class="date">{{ date('d M') }} </span> <span
                            class="weather"><i class="ion-ios-partlysunny"></i> <span id='import_temprature'>0</span>°</span> <span
                            class="phone"><i class="ion-ios-telephone"></i> {{ get_setting_by_lang('home_header_information_contact_number_title',$session_country) }} </span> </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end top-bar -->
        <div class="container">
            <div class="navbar-header">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <button type="button" class="navbar-toggle toggle-menu menu-left push-body"
                            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span
                                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="@if(setting()->get('main_header_logo_'.app()->getLocale()) && setting()->get('main_header_logo_'.app()->getLocale()) != '') {{asset('/storage/app/public/'. setting()->get('main_header_logo_'.app()->getLocale()) )}} @else {{ static_asset('themes/main/frontend/logistic/images/logo-transparent.svg')}} @endif" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- end col-5 -->
                    <div class="col-md-3 col-sm-4 hidden-xs"> <i class="icon-global"></i>
                        <h6>{{ get_setting_by_lang('home_header_information_opening_hours_title',$session_country) }}<br>
                            <span>{{ get_setting_by_lang('home_header_information_opening_hours_value',$session_country) }} </span>
                        </h6>
                    </div>
                    <!-- end col-2 -->
                    <div class="col-md-3 col-sm-4 hidden-xs"> <i class="icon-map-pin"></i>
                        <h6>{{ get_setting_by_lang('home_header_information_our_location_title',$session_country) }}<br>
                            <span>{{ get_setting_by_lang('home_header_information_our_location_value',$session_country) }}</span>
                        </h6>
                    </div>
                    <!-- end col-2 -->
                    <div class="col-md-3 hidden-sm hidden-xs"> <i class="icon-chat"></i>
                        <h6>{{ get_setting_by_lang('home_header_information_quick_support_title',$session_country) }}<br>
                            <span>{{ get_setting_by_lang('home_header_information_quick_support_value',$session_country) }}</span>
                        </h6>
                    </div>
                    <!-- end col-2 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end navbar-header -->
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                id="bs-example-navbar-collapse-1">

                @if(isset($navbar_menu))
                    <ul class="nav navbar-nav main-menu">
                        @forelse ($navbar_menu->items as $item)
                            @include('frontend.inc.nav_links',['item' => $item])
                        @empty
                        @endforelse
                        @if(\App\Addon::where('unique_identifier', 'spot-cargo-shipment-addon')->first())
                            <li>
                                <a class="transition" href="{{ route('admin.shipments.track') }}">{{translate('Tracking')}}</a>
                            </li>
                        @endif
                    </ul>
                @endif

                <ul class="nav navbar-nav social-nav visible-lg visible-xs">
                    @if(is_array($main_social_links_name))
                        @foreach ($main_social_links_name as $key => $social_link_name)
                            @if($social_link_name || $main_social_links_icon[$key])
                                <li><a href="{{$main_social_links_name[$key]}}" data-toggle="tooltip" data-placement="top"><i
                                            class="{{$main_social_links_icon[$key]}}"></i> </a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                <ul class="nav navbar-nav icon-nav hidden-sm main-menu">
                    @forelse ($navbar_menu->items as $item)
                    @if($item->label=="Login")
                    <li class="{{(count($item->child) > 0)?'dropdown':''}}">
                        <a class="transition" href="{{$item->link}}">{{$item->label}}</a>
                    </li>
                    @endif
                    @empty
                    @endforelse
                    

                    <li><a href="javascript:void(0)" class="search-btn"><i class="ion-search"></i></a></li>
                    <li class="search-box" style="margin-left: -10pc;">
                        <form action="{{route('admin.shipments.tracking')}}" method="GET">
                            <input type="text" placeholder="Tracking ID" name="code">
                            <button type="submit"><i class="ion-chevron-right"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
</header>