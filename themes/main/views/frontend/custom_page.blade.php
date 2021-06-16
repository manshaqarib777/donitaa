@extends('frontend.layouts.app')

@section('meta_title'){{ $page->getTranslation('title') }}@stop

@section('meta_description'){{ $page->meta_description }}@stop

@section('meta_keywords'){{ $page->tags }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $page->meta_title }}">
    <meta itemprop="description" content="{{ $page->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($page->meta_image) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="page">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $page->meta_title }}">
    <meta name="twitter:description" content="{{ $page->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($page->meta_image) }}">

    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:type" content="page" />

    <meta property="og:image" content="{{ uploaded_asset($page->meta_image) }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />

@endsection

@section('content')
    <section class="sub-header"
        style="background: url({{ !empty(get_setting_by_lang('page_header_image')) ? url('public/' . \App\Upload::find(json_decode(get_setting_by_lang('page_header_image'), true))->file_name) : '' }});">
        <h5 class="page-title">{{ $page->getTranslation('title') }}</h5>
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><span class="active">{{ $page->getTranslation('title') }}</span></li>
        </ul>
    </section>
    @if (\Request::segment(1) == 'contact-us')
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="section-title"><span>01</span>ADDRESS INFOS</h4>
                    </div>
                    @foreach (\App\Country::where('covered',1)->get() as $key => $country)
                        <div class="col-md-4 col-sm-4">
                            <address>
                                <h5>{{ $country->name }}</h5>
                                <p>{{ $country->address }}</p>
                                <p>t: {{ $country->phone }}<br>
                                    f: {{ $country->cell_phone }}<br>
                                </p>
                                <p>e: <a href="#">{{ $country->email }}</a></p>
                            </address>
                        </div>
                    @endforeach
                    <div class="col-xs-12">
                        <div class="column">
                            <div class="left-side">
                                <div class="col-xs-12">
                                    <h1 class="section-title">{{ get_setting_by_lang('contact_page_message')}}</h1>
                                </div>
                            </div>
                            <div class="right-side">
                                <form method="post" action="{{ route('contactus') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Your name</label>
                                        <input type="text" name="name" id="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your e-mail</label>
                                        <input type="email" name="email" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your message</label>
                                        <textarea name="content" id="content" required &gt;></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button id="submit" type="submit" name="submit">SUBMIT</button>
                                    </div>
                                </form>
                                <div id="success" class="alert alert-success" role="alert">
                                    <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
                                </div>
                                <div id="error" class="alert alert-danger" role="alert">
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    @endif

    {!! $page->getTranslation('content') !!}


@endsection
