<!DOCTYPE html>
@if(\App\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <link rel="icon" href="@if(setting()->get('main_site_icon_'.app()->getLocale())) {{asset('/storage/app/public/'. setting()->get('main_site_icon_'.app()->getLocale()) )}} @else {{static_asset('assets/dashboard/media/logos/favicon.ico')}} @endif">
	@if(setting()->get('main_app_name_'.app()->getLocale()))
		<title>@if(View::hasSection('meta_title')) @yield('meta_title') | @endif {{setting()->get('main_app_name_'.app()->getLocale() )}}</title>
	@else
		<title>@if(View::hasSection('meta_title')) @yield('meta_title') | @endif {{ translate('Spotlayer Framework') }}</title>
	@endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">

    @yield('meta')

  
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}">
    <meta itemprop="description" content="{{ get_setting('meta_description') }}">
    <meta itemprop="image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}">
    <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="{{ uploaded_asset(get_setting('meta_image')) }}" />
    <meta property="og:description" content="{{ get_setting('meta_description') }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">


    <!-- Favicon -->
    <link rel="icon" href="{{ uploaded_asset(get_setting('site_icon')) }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ static_asset('themes/main/frontend/shipper/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/et-line-fonts.css')}}" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/slick.css')}}" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/jquery.fancybox.c')}}ss" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/bootstrap-datepic')}}ker.css" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/bootstrap-selec')}}t.css" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ static_asset('themes/main/frontend/shipper/css/style.css')}}" rel="stylesheet">


    <script>
		var AIZ = AIZ || {};
	</script>


    @if (\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ env('TRACKING_ID') }}');
        </script>
    @endif

    @if (\App\BusinessSetting::where('type', 'facebook_pixel')->first()->value == 1)
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ env('FACEBOOK_PIXEL_ID') }}');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}/&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif

</head>
<body>

    @if(!get_setting('home_slider_status') && !get_setting('home_banner1_status') && !get_setting('home_section1_status') && !get_setting('home_process_status') && !get_setting('home_msection_status') && !get_setting('home_statistics_status') && !get_setting('home_team_status') && !get_setting('home_clients_status') && !get_setting('home_testimonials_status'))
        
        <div class="container" style="padding-top: 150px;">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{translate('Home Page not have content')}}!</h4>
                <hr>
                <p>           
                    {{translate('Please set home page design')}}          
                    <a href="{{route('custom-pages.edit',["id"=>'home', 'lang'=>env('DEFAULT_LANGUAGE'), 'page'=>'home'])}}"
                            style="border-bottom: 1px solid;"
                            target="_blank">{{translate('Here')}}</a>
                </p>
            </div>
        </div>
        
    @else
 
        <div class="soft-transition"></div>
        <div class="transition-overlay"></div>
 
        <main>
            @php
                $main_social_links_name = json_decode( setting()->get('main_social_links_name_'.app()->getLocale()) );
                $main_social_links_icon = json_decode(  setting()->get('main_social_links_icon_'.app()->getLocale()) );
            @endphp
                
            @include('frontend.inc.nav')    

            @if (get_setting('main_maintenance') == 'on')
                @yield('maintenance')
            @else
                @yield('content')
            @endif

            @include('frontend.inc.footer')

            

            @if (get_setting('show_cookies_agreement') == 'on')
                <div class="aiz-cookie-alert shadow-xl">
                    <div class="p-3 bg-dark rounded">
                        <div class="text-white mb-3">
                            @php
                                echo get_setting('cookies_agreement_text');
                            @endphp
                        </div>
                        <button class="btn btn-primary aiz-cookie-accepet">
                            {{ translate('Ok. I Understood') }}
                        </button>
                    </div>
                </div>
            @endif

            @include('frontend.partials.modal')

            <div class="modal fade" id="addToCart">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
                    <div class="modal-content position-relative">
                        <div class="c-preloader text-center p-3">
                            <i class="las la-spinner la-spin la-3x"></i>
                        </div>
                        <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la-2x">&times;</span>
                        </button>
                        <div id="addToCart-modal-body">

                        </div>
                    </div>
                </div>
            </div>

            @yield('modal')
        </main>



        <script src="{{ static_asset('themes/main/frontend/shipper/js/jquery.min.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/bootstrap.min.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/bootstrap-select.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/jquery.stellar.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/jquery.validate.min.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/jquery.form.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/contact-form.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/jquery.fancybox.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/waypoints.min.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/slick.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/masonry.min.js')}}"></script>
        <script src="{{ static_asset('themes/main/frontend/shipper/js/scripts.js')}}"></script>

        <script src="{{ static_asset('assets/js/vendors.js') }}" ></script>
    	<script src="{{ static_asset('assets/js/aiz-core.js') }}" ></script> 
        <script>
            @foreach (session('flash_notification', collect())->toArray() as $message)
                AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
                @php
                session()->forget('flash_notification')
                @endphp
            @endforeach

            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    AIZ.plugins.notify('warning', '{{ $error }}');
                @endforeach
            @endif

            @if ($msg = Session::get('status'))
                AIZ.plugins.notify('success', '{{ $msg }}');
            @endif

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
            
                if ($('#lang-change').length > 0) {
                    $('#lang-change .dropdown-menu a').each(function() {
                        $(this).on('click', function(e){
                            e.preventDefault();
                            var $this = $(this);
                            var locale = $this.data('flag');
                            $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                                location.reload();
                            });

                        });
                    });
                }

                
            });

            $('#search').on('keyup', function(){
                search();
            });

            $('#search').on('focus', function(){
                search();
            });

            function search(){
                var searchKey = $('#search').val();
                if(searchKey.length > 0){
                    $('body').addClass("typed-search-box-shown");

                    $('.typed-search-box').removeClass('d-none');
                    $('.search-preloader').removeClass('d-none');
                    $.post('{{ route('search.ajax') }}', { _token: AIZ.data.csrf, search:searchKey}, function(data){
                        if(data == '0'){
                            // $('.typed-search-box').addClass('d-none');
                            $('#search-content').html(null);
                            $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+searchKey+'"</strong>');
                            $('.search-preloader').addClass('d-none');

                        }
                        else{
                            $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                            $('#search-content').html(data);
                            $('.search-preloader').addClass('d-none');
                        }
                    });
                }
                else {
                    $('.typed-search-box').addClass('d-none');
                    $('body').removeClass("typed-search-box-shown");
                }
            }
            $(document).ready(function() {
                var getIP = 'http://ip-api.com/json/',
                    openWeatherMap = 'http://api.openweathermap.org/data/2.5/weather',
                    APPID = '83d62febe43ccee5370e5c9de57e1188';

                $.getJSON(getIP).done(function(location) {
                   $.getJSON(openWeatherMap, {
                        lat: location.lat,
                        lon: location.lon,
                        APPID: APPID
                    })
                    .done(function(weather) {
                        var celsius = weather.main.temp - 273.15;
                        var fahrenheit = celsius * 1.8 + 32;
                        $("#import_temprature").html(celsius);
                        // $('.currentLocation').text('Hello! Your current location is ' + location.city + ', ' + location.region + ', ' + location.country);

                        // $('.btn-celsius').on('click', function() {
                        //     $('.currentTemperature').text('The current temperature in ' + location.city + ' is ' + celsius.toFixed(0) + ' degrees Celsius.');
                        // });

                        // $('.btn-fahrenheit').on('click', function() {
                        //     $('.currentTemperature').text('The current temperature in ' + location.city + ' is ' + fahrenheit.toFixed(0) + ' degrees Fahrenheit.');
                        // });
                    });
                });
            });
    

        </script>

        @yield('script')

    @endif
</body>
</html>
