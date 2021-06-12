@extends('backend.layouts.app')

@section('style')
    <style>
        .item {
            background-color: #ebedf3 !important;
        }

    </style>
@endsection


@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">{{ translate('Home Page Builder') }}</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul
                        class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm mr-5">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted">{{ translate('Dashboard') }}</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('website.pages') }}"
                                class="text-muted">{{ translate('Website Pages') }}</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted">{{ translate('Home Page Builder') }}</a>
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

    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (\App\Language::all() as $key => $language)
                        <li class="nav-item">
                            <a class="nav-link  @if ($language->code == $lang) active @endif"
                                href="{{ route('custom-pages.edit', ['id' => $page->slug, 'lang' => $language->code, 'page' => 'home']) }}">
                                <span class="nav-icon">
                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.svg') }}"
                                        height="11" class="mr-1">
                                </span>
                                <span class="nav-text">{{ $language->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                {{-- Home Slider --}}
                <div class="card shadow-none bg-light">
                    <div class="card-header">
                        <h6 class="mb-0"> {{ translate('Home Slider') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Slider:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_slider_status')" @if (get_setting_by_lang('home_slider_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <div class="alert alert-info">
                            {{ translate('We have limited banner height to maintain UI. We had to crop from both left & right side in view for different devices to make it responsive. Before designing banner keep these points in mind.') }}
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_slider" @if (get_setting_by_lang('home_slider_status', $lang) != 1) style="display: none;" @endif />
                        @csrf
                        <input type="hidden" name="lang" value="{{ $lang }}">

                        <input type="hidden" name="types[]" value="home_slider_text1">
                        <input type="hidden" name="types[]" value="home_slider_text2">
                        <input type="hidden" name="types[]" value="home_slider_text3">
                        <input type="hidden" name="types[]" value="home_slider_images">
                        <input type="hidden" name="types[]" value="home_slider_links">
                        <div class="form-group">
                            <div class="card-header">
                                <h6 class="mb-0">{{ translate('Photos & Links') }}</h6>
                            </div>
                            <div class="home-slider-target">

                                @if (get_setting_by_lang('home_slider_images', $lang) != null)
                                    @foreach (json_decode(get_setting_by_lang('home_slider_images', $lang), true) as $key => $value)
                                        <div class="item card p-2 mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_slider_text2">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Title') }}"
                                                            name="home_slider_text2[]"
                                                            value="{{ json_decode(get_setting_by_lang('home_slider_text2', $lang), true)[$key] }}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_slider_text1">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Subtitle') }}"
                                                            name="home_slider_text1[]"
                                                            value="{{ json_decode(get_setting_by_lang('home_slider_text1', $lang), true)[$key] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_slider_text3">
                                                        <textarea class="form-control"
                                                            placeholder="{{ translate('Description') }}"
                                                            name="home_slider_text3[]">{{ json_decode(get_setting_by_lang('home_slider_text3', $lang), true)[$key] }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-5">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-soft-secondary font-weight-medium">
                                                                {{ translate('Browse') }}</div>
                                                        </div>
                                                        <div class="form-control file-amount">
                                                            {{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="home_slider_images">
                                                        <input type="hidden" name="home_slider_images[]"
                                                            class="selected-files" required
                                                            value="{{ json_decode(get_setting_by_lang('home_slider_images', $lang), true)[$key] }}">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_slider_links">
                                                        <input type="text" class="form-control" placeholder="http://"
                                                            name="home_slider_links[]"
                                                            value="{{ json_decode(get_setting_by_lang('home_slider_links', $lang), true)[$key] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <button type="button"
                                                        class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                        data-toggle="remove-parent" data-parent=".item">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_slider_text2">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}" name="home_slider_text2[]"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_slider_text1">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Subtitle') }}"
                                                        name="home_slider_text1[]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_slider_text3">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Description') }}"
                                                        name="home_slider_text3[]"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-5">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse') }}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}
                                                    </div>
                                                    <input type="hidden" name="types[]" value="home_slider_images">
                                                    <input type="hidden" name="home_slider_images[]" class="selected-files"
                                                        required>
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_slider_links">
                                                    <input type="text" class="form-control" placeholder="http://"
                                                        name="home_slider_links[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <button type="button" class="btn btn-primary btn-sm mt-10" data-toggle="add-more" data-content='
                                                <div class="item card p-2 mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="hidden" name="types[]" value="home_slider_text2">
                                                                <input type="text" class="form-control" placeholder="{{ translate('Title') }}" name="home_slider_text2[]" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="hidden" name="types[]" value="home_slider_text1">
                                                                <input type="text" class="form-control" placeholder="{{ translate('Subtitle') }}" name="home_slider_text1[]" >
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="hidden" name="types[]" value="home_slider_text3">
                                                                <textarea class="form-control" placeholder="{{ translate('Description') }}" name="home_slider_text3[]"></textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ">
                                                        <div class="col mb-5">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_slider_images">
                                                                <input type="hidden" name="home_slider_images[]" class="selected-files" required>
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="types[]" value="home_slider_links">
                                                                        <input type="text" class="form-control" placeholder="http://" name="home_slider_links[]" value="#">
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".item">
                                                                <i class="fas fa-minus-circle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>' data-target=".home-slider-target">
                                <i class="fas fa-plus-circle" style="color: white"></i>
                                {{ translate('Add New') }}
                            </button>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                        </div>
                        </form>
                    </div>
                </div>

                {{-- Statistics --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Statistics') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Statistics:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_statistics_status')" @if (get_setting_by_lang('home_statistics_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_statistics" @if (get_setting_by_lang('home_statistics_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-statistics-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_statistics_title1">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('First statistic') }}"
                                                    name="home_statistics_title1"
                                                    value="{{ get_setting_by_lang('home_statistics_title1', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_statistics_num1">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Number') }}" name="home_statistics_num1"
                                                    value="{{ get_setting_by_lang('home_statistics_num1', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_statistics_title2">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Second statistic') }}"
                                                    name="home_statistics_title2"
                                                    value="{{ get_setting_by_lang('home_statistics_title2', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_statistics_num2">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Number') }}" name="home_statistics_num2"
                                                    value="{{ get_setting_by_lang('home_statistics_num2', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_statistics_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_statistics_desc">{{ get_setting_by_lang('home_statistics_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]" value="home_statistics_image">
                                                <input type="hidden" name="home_statistics_image" class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_statistics_image', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('CALCULATE SHIPPING') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show CALCULATE SHIPPING :') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_calculate_shipping_status')" @if (get_setting_by_lang('home_calculate_shipping_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_calculate_shipping" @if (get_setting_by_lang('home_calculate_shipping_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-calculate_shipping-target">

                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Choose File') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]"
                                                    value="home_calculate_shipping_image">
                                                <input type="hidden" name="home_calculate_shipping_image"
                                                    class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_calculate_shipping_image', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>



                {{-- Mobile Section --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Mobile Section') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Mobile Section:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_section_status')" @if (get_setting_by_lang('home_section_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_section" @if (get_setting_by_lang('home_section_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <input type="hidden" name="types[]" value="home_page_banner_title">
                            <input type="hidden" name="types[]" value="home_page_banner_sub_title">
                            <input type="hidden" name="types[]" value="home_msection_images">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="types[]" value="home_msection_htitle">
                                            <input type="text" class="form-control"
                                                placeholder="{{ translate('Section Title') }}"
                                                name="home_msection_htitle"
                                                value="{{ get_setting_by_lang('home_msection_htitle', $lang) }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="types[]" value="home_msection_subtitle">
                                            <input type="text" class="form-control"
                                                placeholder="{{ translate('Section Subtitle') }}"
                                                name="home_msection_subtitle"
                                                value="{{ get_setting_by_lang('home_msection_subtitle', $lang) }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="types[]" value="home_msection_hdesc">
                                            <textarea class="form-control"
                                                placeholder="{{ translate('Section Description') }}"
                                                name="home_msection_hdesc">{{ get_setting_by_lang('home_msection_hdesc', $lang) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                    {{ translate('Browse') }}</div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                            <input type="hidden" name="types[]" value="home_msection_image">
                                            <input type="hidden" name="home_msection_image" class="selected-files"
                                                value="{{ json_decode(get_setting_by_lang('home_msection_image', $lang), true) }}">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h6 class="mb-0">{{ translate('Home Page Banners') }}</h6>
                                </div>
                                <div class="home-msection-target">
                                    @php
                                        $home_page_banner_title = json_decode(get_setting_by_lang('home_page_banner_title', $lang), true);
                                        $home_page_banner_sub_title = json_decode(get_setting_by_lang('home_page_banner_sub_title', $lang), true);
                                        $home_page_banner_place_holder = json_decode(get_setting_by_lang('home_page_banner_place_holder', $lang), true);
                                        $home_page_banner_read_more = json_decode(get_setting_by_lang('home_page_banner_read_more', $lang), true);
                                        $home_page_banner_read_more_link = json_decode(get_setting_by_lang('home_page_banner_read_more_link', $lang), true);
                                    @endphp
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_page_banner_title[0]"
                                                        value="{{ $home_page_banner_title[0] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_sub_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Sub Title') }}"
                                                        name="home_page_banner_sub_title[0]"
                                                        value="{{ $home_page_banner_sub_title[0] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_place_holder">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Place Holder') }}"
                                                        name="home_page_banner_place_holder[0]"
                                                        value="{{ $home_page_banner_place_holder[0] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse Image') }}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}
                                                    </div>
                                                    <input type="hidden" name="types[]"
                                                        value="home_page_banner_place_holder">
                                                    <input type="hidden" name="home_page_banner_place_holder[0]"
                                                        class="selected-files"
                                                        value="{{$home_page_banner_place_holder[0] ?? '' }}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_read_more">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Place Holder') }}"
                                                        name="home_page_banner_read_more[0]"
                                                        value="{{ $home_page_banner_read_more[0] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_read_more_link">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Read More Link') }}"
                                                        name="home_page_banner_read_more_link[0]"
                                                        value="{{ $home_page_banner_read_more_link[0] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_page_banner_title[1]"
                                                        value="{{ $home_page_banner_title[1] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_sub_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Sub Title') }}"
                                                        name="home_page_banner_sub_title[1]"
                                                        value="{{ $home_page_banner_sub_title[1] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse Image') }}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}
                                                    </div>
                                                    <input type="hidden" name="types[]"
                                                        value="home_page_banner_place_holder">
                                                    <input type="hidden" name="home_page_banner_place_holder[1]"
                                                        class="selected-files"
                                                        value="{{$home_page_banner_place_holder[1] ?? '' }}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_read_more">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Read More') }}"
                                                        name="home_page_banner_read_more[1]"
                                                        value="{{ $home_page_banner_read_more[1] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_read_more_link">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Read More Link') }}"
                                                        name="home_page_banner_read_more_link[1]"
                                                        value="{{ $home_page_banner_read_more_link[1] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_page_banner_title[2]"
                                                        value="{{ $home_page_banner_title[2] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_sub_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Sub Title') }}"
                                                        name="home_page_banner_sub_title[2]"
                                                        value="{{ $home_page_banner_sub_title[2] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse Image') }}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}
                                                    </div>
                                                    <input type="hidden" name="types[]"
                                                        value="home_page_banner_place_holder">
                                                    <input type="hidden" name="home_page_banner_place_holder[2]"
                                                        class="selected-files"
                                                        value="{{$home_page_banner_place_holder[2] ?? '' }}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_read_more">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Read More') }}"
                                                        name="home_page_banner_read_more[2]"
                                                        value="{{ $home_page_banner_read_more[2] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_page_banner_read_more_link">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Read More Link') }}"
                                                        name="home_page_banner_read_more_link[2]"
                                                        value="{{ $home_page_banner_read_more_link[2] ?? '' }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Header Information') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Header Information:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_header_information_status')" @if (get_setting_by_lang('home_header_information_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_header_information" @if (get_setting_by_lang('home_header_information_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ session()->get('country') }}">
                            <div class="form-group">
                                <div class="home-header_information-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_opening_hours_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Opening Hours Title') }}"
                                                    name="home_header_information_opening_hours_title"
                                                    value="{{ get_setting_by_lang('home_header_information_opening_hours_title', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_opening_hours_value">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Opening Hours') }}"
                                                    name="home_header_information_opening_hours_value"
                                                    value="{{ get_setting_by_lang('home_header_information_opening_hours_value', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_our_location_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Our Location Title') }}"
                                                    name="home_header_information_our_location_title"
                                                    value="{{ get_setting_by_lang('home_header_information_our_location_title', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_our_location_value">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Our Location') }}"
                                                    name="home_header_information_our_location_value"
                                                    value="{{ get_setting_by_lang('home_header_information_our_location_value', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_quick_support_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Quick Support Title') }}"
                                                    name="home_header_information_quick_support_title"
                                                    value="{{ get_setting_by_lang('home_header_information_quick_support_title', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_quick_support_value">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Quick Support') }}"
                                                    name="home_header_information_quick_support_value"
                                                    value="{{ get_setting_by_lang('home_header_information_quick_support_value', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]"
                                                    value="home_header_information_contact_number_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Main Branch Contact Number') }}"
                                                    name="home_header_information_contact_number_title"
                                                    value="{{ get_setting_by_lang('home_header_information_contact_number_title', session()->get('country')) }}"
                                                    >
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('PACKING') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show PACKING :') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_packing_status')" @if (get_setting_by_lang('home_packing_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_packing" @if (get_setting_by_lang('home_packing_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-packing-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title') }}"
                                                    name="home_packing_title"
                                                    value="{{ get_setting_by_lang('home_packing_title', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_packing_desc">{{ get_setting_by_lang('home_packing_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_title1">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title One') }}"
                                                    name="home_packing_title1"
                                                    value="{{ get_setting_by_lang('home_packing_title1', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_desc1">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description One') }}"
                                                    name="home_packing_desc1">{{ get_setting_by_lang('home_packing_desc1', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse Image One') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]"
                                                    value="home_packing_image1">
                                                <input type="hidden" name="home_packing_image1"
                                                    class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_packing_image1', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_title2">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title Two') }}"
                                                    name="home_packing_title2"
                                                    value="{{ get_setting_by_lang('home_packing_title2', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_desc2">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description Two') }}"
                                                    name="home_packing_desc2">{{ get_setting_by_lang('home_packing_desc2', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse Image Two') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]"
                                                    value="home_packing_image2">
                                                <input type="hidden" name="home_packing_image2"
                                                    class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_packing_image2', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_title3">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title Three') }}"
                                                    name="home_packing_title3"
                                                    value="{{ get_setting_by_lang('home_packing_title3', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_packing_desc3">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description Three') }}"
                                                    name="home_packing_desc3">{{ get_setting_by_lang('home_packing_desc3', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse Image Three') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]"
                                                    value="home_packing_image3">
                                                <input type="hidden" name="home_packing_image3"
                                                    class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_packing_image3', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">


                {{-- Services --}}
                <div class="card shadow-none bg-light">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Your Services') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show services section:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_banner1_status')" @if (get_setting_by_lang('home_banner1_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_banner1" @if (get_setting_by_lang('home_banner1_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <input type="hidden" name="types[]" value="home_banner1_title">
                            <input type="hidden" name="types[]" value="home_banner1_desc">
                            <input type="hidden" name="types[]" value="home_banner1_icon">
                            <div class="form-group">
                                <label>{{ translate('Services') }}</label>
                                <div class="home-banner1-target">
                                    @if (get_setting_by_lang('home_banner1_icon', $lang) != null)
                                        @php
                                            $services_title = json_decode(get_setting_by_lang('home_banner1_title', $lang), true);
                                            $services_desc = json_decode(get_setting_by_lang('home_banner1_desc', $lang), true);
                                            $services_icons = json_decode(get_setting_by_lang('home_banner1_icon', $lang), true);
                                        @endphp
                                        <div class="item card p-2 mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_banner1_title">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Feature Title') }}"
                                                            name="home_banner1_title[0]"
                                                            value="{{ $services_title[0] ?? '' }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_banner1_desc">
                                                        <textarea class="form-control"
                                                            placeholder="{{ translate('Features Description') }}"
                                                            name="home_banner1_desc[0]"
                                                            required>{{ $services_desc[0] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row gutters-5">
                                                <div class="col">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button type="button" id="GetIconPicker-10"
                                                                data-iconpicker-input=".MyIconInput-10"
                                                                data-iconpicker-preview=".MyIconPreview-10"
                                                                class="icon-picker btn btn-success mr-2">{{ translate('Select Icon') }}</button>
                                                            <input type="hidden" name="home_banner1_icon[0]"
                                                                class="MyIconInput-10"
                                                                value="{{ $home_banner1_icon[0] ?? '' }}" required>
                                                            <input type="hidden" name="types[]" value="home_banner1_icon">
                                                        </div>
                                                        <div class="input-group-append">
                                                            <i class="MyIconPreview-10 {{ $home_banner1_icon[0] ?? '' }}"
                                                                style="line-height: 3rem;padding: 0 30px;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item card p-2 mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_banner1_title">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Feature Title') }}"
                                                            name="home_banner1_title[1]"
                                                            value="{{ $services_title[1] ?? '' }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_banner1_desc">
                                                        <textarea class="form-control"
                                                            placeholder="{{ translate('Features Description') }}"
                                                            name="home_banner1_desc[1]"
                                                            required>{{ $services_desc[1] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row gutters-5">
                                                <div class="col">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button type="button" id="GetIconPicker-11"
                                                                data-iconpicker-input=".MyIconInput-11"
                                                                data-iconpicker-preview=".MyIconPreview-11"
                                                                class="icon-picker btn btn-success mr-2">{{ translate('Select Icon') }}</button>
                                                            <input type="hidden" name="home_banner1_icon[1]"
                                                                class="MyIconInput-11"
                                                                value="{{ $home_banner1_icon[1] ?? '' }}" required>
                                                            <input type="hidden" name="types[]" value="home_banner1_icon">
                                                        </div>
                                                        <div class="input-group-append">
                                                            <i class="MyIconPreview-11 {{ $home_banner1_icon[1] ?? '' }}"
                                                                style="line-height: 3rem;padding: 0 30px;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item card p-2 mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_banner1_title">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Feature Title') }}"
                                                            name="home_banner1_title[2]"
                                                            value="{{ $services_title[2] ?? '' }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_banner1_desc">
                                                        <textarea class="form-control"
                                                            placeholder="{{ translate('Features Description') }}"
                                                            name="home_banner1_desc[2]"
                                                            required>{{ $services_desc[2] ?? '' }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row gutters-5">
                                                <div class="col">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button type="button" id="GetIconPicker-12"
                                                                data-iconpicker-input=".MyIconInput-12"
                                                                data-iconpicker-preview=".MyIconPreview-12"
                                                                class="icon-picker btn btn-success mr-2">{{ translate('Select Icon') }}</button>
                                                            <input type="hidden" name="home_banner1_icon[2]"
                                                                class="MyIconInput-12"
                                                                value="{{ $home_banner1_icon[2] ?? '' }}" required>
                                                            <input type="hidden" name="types[]" value="home_banner1_icon">
                                                        </div>
                                                        <div class="input-group-append">
                                                            <i class="MyIconPreview-11 {{ $home_banner1_icon[2] ?? '' }}"
                                                                style="line-height: 3rem;padding: 0 30px;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Home Section 1 --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Big image section') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show big image section') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_section1_status')" @if (get_setting_by_lang('home_section1_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_section1" @if (get_setting_by_lang('home_section1_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-banner2-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_section1_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title') }}" name="home_section1_title"
                                                    value="{{ get_setting_by_lang('home_section1_title', $lang) }}"
                                                    required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_section1_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_section1_desc"
                                                    required>{{ get_setting_by_lang('home_section1_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_section1_link">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Learn More Link') }}"
                                                    name="home_section1_link"
                                                    value="{{ get_setting_by_lang('home_section1_link', $lang) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]" value="home_section1_image">
                                                <input type="hidden" name="home_section1_image" required
                                                    class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_section1_image', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Home Process --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Work Process') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Process:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_process_status')" @if (get_setting_by_lang('home_process_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_process" @if (get_setting_by_lang('home_process_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <input type="hidden" name="types[]" value="home_process_title">
                            <input type="hidden" name="types[]" value="home_process_desc">
                            <div class="form-group">
                                <div class="home-process-target">
                                    @php
                                        $services_title = json_decode(get_setting_by_lang('home_process_title', $lang), true);
                                        $services_desc = json_decode(get_setting_by_lang('home_process_desc', $lang), true);
                                    @endphp
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_process_title[]"
                                                        value="{{ json_decode(get_setting_by_lang('home_process_title', $lang), true)[0] ?? '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_desc">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Subtitle') }}"
                                                        name="home_process_desc[]"
                                                        required>{{ json_decode(get_setting_by_lang('home_process_desc', $lang), true)[0] ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_process_title[]"
                                                        value="{{ json_decode(get_setting_by_lang('home_process_title', $lang), true)[1] ?? '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_desc">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Subtitle') }}"
                                                        name="home_process_desc[]"
                                                        required>{{ json_decode(get_setting_by_lang('home_process_desc', $lang), true)[1] ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_process_title[]"
                                                        value="{{ json_decode(get_setting_by_lang('home_process_title', $lang), true)[2] ?? '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_desc">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Subtitle') }}"
                                                        name="home_process_desc[]"
                                                        required>{{ json_decode(get_setting_by_lang('home_process_desc', $lang), true)[2] ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_process_title[]"
                                                        value="{{ json_decode(get_setting_by_lang('home_process_title', $lang), true)[3] ?? '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_desc">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Subtitle') }}"
                                                        name="home_process_desc[]"
                                                        required>{{ json_decode(get_setting_by_lang('home_process_desc', $lang), true)[3] ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_title">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Title') }}"
                                                        name="home_process_title[]"
                                                        value="{{ json_decode(get_setting_by_lang('home_process_title', $lang), true)[4] ?? '' }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_process_desc">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Subtitle') }}"
                                                        name="home_process_desc[]"
                                                        required>{{ json_decode(get_setting_by_lang('home_process_desc', $lang), true)[4] ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Testimonials --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Testimonials Section') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Testimonials Section:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_testimonials_status')" @if (get_setting_by_lang('home_testimonials_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_testimonials" @if (get_setting_by_lang('home_testimonials_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <input type="hidden" name="types[]" value="home_testimonials_name">
                            <input type="hidden" name="types[]" value="home_testimonials_job">
                            <input type="hidden" name="types[]" value="home_testimonials_images">
                            <input type="hidden" name="types[]" value="home_testimonials_desc">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="types[]" value="home_testimonials_title">
                                            <input type="text" class="form-control"
                                                placeholder="{{ translate('Section Title') }}"
                                                name="home_testimonials_title"
                                                value="{{ get_setting_by_lang('home_testimonials_title', $lang) }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="types[]" value="home_testimonials_subtitle">
                                            <input type="text" class="form-control"
                                                placeholder="{{ translate('Section Subtitle') }}"
                                                name="home_testimonials_subtitle"
                                                value="{{ get_setting_by_lang('home_testimonials_subtitle', $lang) }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                    {{ translate('Browse') }}</div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                            <input type="hidden" name="types[]" value="home_testimonials_image">
                                            <input type="hidden" name="home_testimonials_image" class="selected-files"
                                                value="{{ json_decode(get_setting_by_lang('home_testimonials_image', $lang), true) }}">
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-header mt-5">
                                <h6 class="mb-0">{{ translate('Customers testimonials') }}</h6>
                            </div>
                            <div class="home-testimonials-target">
                                @if (get_setting_by_lang('home_testimonials_images', $lang) != null)
                                    @foreach (json_decode(get_setting_by_lang('home_testimonials_images', $lang), true) as $key => $value)
                                        <div class="item card p-2 mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_testimonials_name">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Customer name') }}"
                                                            name="home_testimonials_name[]"
                                                            value="{{ json_decode(get_setting_by_lang('home_testimonials_name', $lang), true)[$key] }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_testimonials_job">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Customer job') }}"
                                                            name="home_testimonials_job[]"
                                                            value="{{ json_decode(get_setting_by_lang('home_testimonials_job', $lang), true)[$key] }}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters-5">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_testimonials_desc">
                                                        <input type="text" class="form-control"
                                                            placeholder="{{ translate('Customer testimonial') }}"
                                                            name="home_testimonials_desc[]"
                                                            value="{{ json_decode(get_setting_by_lang('home_testimonials_desc', $lang), true)[$key] }}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters-5">
                                                <div class="col-10">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text bg-soft-secondary font-weight-medium">
                                                                {{ translate('Browse') }}</div>
                                                        </div>
                                                        <div class="form-control file-amount">
                                                            {{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]"
                                                            value="home_testimonials_images">
                                                        <input type="hidden" name="home_testimonials_images[]"
                                                            class="selected-files"
                                                            value="{{ json_decode(get_setting_by_lang('home_testimonials_images', $lang), true)[$key] }}"
                                                            required>
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button"
                                                        class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                        data-toggle="remove-parent" data-parent=".item">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item card p-2 mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_testimonials_name">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Customer name') }}"
                                                        name="home_testimonials_name[]" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_testimonials_job">
                                                    <input type="text" class="form-control"
                                                        placeholder="{{ translate('Customer job') }}"
                                                        name="home_testimonials_job[]" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gutters-5">
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_testimonials_desc">
                                                    <textarea class="form-control"
                                                        placeholder="{{ translate('Customer testimonial') }}"
                                                        name="home_testimonials_desc[]" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters-5">
                                            <div class="col">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse') }}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}
                                                    </div>
                                                    <input type="hidden" name="types[]" value="home_testimonials_images">
                                                    <input type="hidden" name="home_testimonials_images[]"
                                                        class="selected-files" required>
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <button type="button" class="btn btn-primary btn-sm mt-5" data-toggle="add-more" data-content='
                                                <div class="item card p-2 mb-3">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <input type="hidden" name="types[]"
                                                                        value="home_testimonials_name">
                                                                <input type="text" class="form-control"
                                                                        placeholder="{{ translate('Customer name') }}"
                                                                        name="home_testimonials_name[]" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <input type="hidden" name="types[]"
                                                                        value="home_testimonials_job">
                                                                <input type="text" class="form-control"
                                                                        placeholder="{{ translate('Customer job') }}"
                                                                        name="home_testimonials_job[]" required>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row gutters-5">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="hidden" name="types[]"
                                                                    value="home_testimonials_desc">
                                                                <textarea class="form-control"
                                                                    placeholder="{{ translate('Customer testimonial') }}"
                                                                    name="home_testimonials_desc[]" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-10">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_testimonials_images">
                                                                <input type="hidden" name="home_testimonials_images[]" class="selected-files" required>
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".item">
                                                                <i class="fas fa-minus-circle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>' data-target=".home-testimonials-target">
                                <i class="fas fa-plus-circle" style="color: white"></i>
                                {{ translate('Add New Testimonial') }}
                            </button>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Footer About US') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Footer About US:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_about_us_status')" @if (get_setting_by_lang('home_about_us_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_about_us" @if (get_setting_by_lang('home_about_us_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-about_us-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_us_title1">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('First statistic') }}"
                                                    name="home_about_us_title1"
                                                    value="{{ get_setting_by_lang('home_about_us_title1', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_us_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_about_us_desc">{{ get_setting_by_lang('home_about_us_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('Footer Mobile') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show Footer Mobile :') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_footer_mobile_status')" @if (get_setting_by_lang('home_footer_mobile_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_footer_mobile" @if (get_setting_by_lang('home_footer_mobile_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-footer_mobile-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_footer_mobile_title1">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title') }}"
                                                    name="home_footer_mobile_title1"
                                                    value="{{ get_setting_by_lang('home_footer_mobile_title1', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_footer_mobile_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_footer_mobile_desc">{{ get_setting_by_lang('home_footer_mobile_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">


                                            <div class="input-group " data-toggle="aizuploader" data-type="image"
                                                data-multiple="true">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse Images') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]" value="home_footer_mobile_image">
                                                <input type="hidden" name="home_footer_mobile_image" class="selected-files"
                                                    value="{{ get_setting_by_lang('home_footer_mobile_image', $lang) }}"
                                                    max="3">
                                            </div>
                                            <div class="file-preview">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse BarCode') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]"
                                                    value="home_footer_mobile_barcode_image">
                                                <input type="hidden" name="home_footer_mobile_barcode_image"
                                                    class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_footer_mobile_barcode_image', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>


                {{-- header_information --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('NEWSLETTER') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show NEWSLETTER:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_newsletter_status')" @if (get_setting_by_lang('home_newsletter_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_newsletter" @if (get_setting_by_lang('home_newsletter_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-newsletter-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_newsletter_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Title') }}" name="home_newsletter_title"
                                                    value="{{ get_setting_by_lang('home_newsletter_title', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_newsletter_sub_title">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Sub Title') }}"
                                                    name="home_newsletter_sub_title"
                                                    value="{{ get_setting_by_lang('home_newsletter_sub_title', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_newsletter_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_newsletter_desc">{{ get_setting_by_lang('home_newsletter_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Statistics --}}
                <div class="card shadow-none bg-light mt-5">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('ABOUT SHIPPER') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3 ml-0">
                            <label class="pt-2 mr-5">{{ translate('Show ABOUT SHIPPER:') }}</label>
                            <span class="switch">
                                <label>
                                    <input type="checkbox" name="checkbox" id="checkbox"
                                        onchange="updateSettings(this, 'home_about_shipper_status')" @if (get_setting_by_lang('home_about_shipper_status', $lang) == 1) checked @endif />
                                    <span></span>
                                </label>
                            </span>
                        </div>
                        <form action="{{ route('business_settings.update') }}" method="POST"
                            enctype="multipart/form-data" id="home_about_shipper" @if (get_setting_by_lang('home_about_shipper_status', $lang) != 1) style="display: none;" @endif>
                            @csrf
                            <input type="hidden" name="lang" value="{{ $lang }}">

                            <div class="form-group">
                                <div class="home-about_shipper-target">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_title1">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Left Side Title') }}"
                                                    name="home_about_shipper_title1"
                                                    value="{{ get_setting_by_lang('home_about_shipper_title1', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_desc">
                                                <textarea class="form-control"
                                                    placeholder="{{ translate('Description') }}"
                                                    name="home_about_shipper_desc">{{ get_setting_by_lang('home_about_shipper_desc', $lang) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_fun_fact">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('FUN FACTS') }}"
                                                    name="home_about_shipper_fun_fact"
                                                    value="{{ get_setting_by_lang('home_about_shipper_fun_fact', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_getting_awards">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('GETTED AWARDS') }}"
                                                    name="home_about_shipper_getting_awards"
                                                    value="{{ get_setting_by_lang('home_about_shipper_getting_awards', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_getting_awards_number">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('GETTED AWARDS Number') }}" name="home_about_shipper_getting_awards_number"
                                                    value="{{ get_setting_by_lang('home_about_shipper_getting_awards_number', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_carried_packages">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('CARRIED PACKAGE') }}"
                                                    name="home_about_shipper_carried_packages"
                                                    value="{{ get_setting_by_lang('home_about_shipper_carried_packages', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_carried_packages_number">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('CARRIED PACKAGE Number') }}" name="home_about_shipper_carried_packages_number"
                                                    value="{{ get_setting_by_lang('home_about_shipper_carried_packages_number', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="hidden" name="types[]" value="home_about_shipper_title2">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Right Side Title') }}"
                                                    name="home_about_shipper_title2"
                                                    value="{{ get_setting_by_lang('home_about_shipper_title2', $lang) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Right Side Placeholder') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]" value="home_about_shipper_image">
                                                <input type="hidden" name="home_about_shipper_image" class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_about_shipper_image', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Bottom Image') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]" value="home_about_shipper_image_bottom">
                                                <input type="hidden" name="home_about_shipper_image_bottom" class="selected-files"
                                                    value="{{ json_decode(get_setting_by_lang('home_about_shipper_image_bottom', $lang), true) }}">
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>






            </div>
        </div>
    </div>

@endsection

@section('script')
    <link href="{{ static_asset('assets/iconpicker/dist/iconpicker-1.5.0.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ static_asset('assets/iconpicker/dist/iconpicker-1.5.0.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            AIZ.plugins.bootstrapSelect('refresh');
        });

        function updateSettings(el, type) {

            if ($(el).is(':checked')) {
                var value = 1;

                if (type == 'home_slider_status') {
                    $('#home_slider').show();
                }
                if (type == 'home_statistics_status') {
                    $('#home_statistics').show();
                }
                if (type == 'home_header_information_status') {
                    $('#home_header_information').show();
                }
                if (type == 'home_packing_status') {
                    $('#home_packing').show();
                }
                if (type == 'home_newsletter_status') {
                    $('#home_newsletter').show();
                }
                if (type == 'home_about_shipper_status') {
                    $('#home_about_shipper').show();
                }
                if (type == 'home_about_us_status') {
                    $('#home_about_us').show();
                }
                if (type == 'home_footer_mobile_status') {
                    $('#home_footer_mobile').show();
                }
                if (type == 'home_section_status') {
                    $('#home_section').show();
                }
                if (type == 'home_calculate_shipping_status') {
                    $('#home_calculate_shipping').show();
                }
                if (type == 'home_banner1_status') {
                    $('#home_banner1').show();
                }
                if (type == 'home_section1_status') {
                    $('#home_section1').show();
                }
                if (type == 'home_process_status') {
                    $('#home_process').show();
                }
                if (type == 'home_testimonials_status') {
                    $('#home_testimonials').show();
                }
            } else {
                var value = 0;

                if (type == 'home_slider_status') {
                    $('#home_slider').hide();
                }
                if (type == 'home_statistics_status') {
                    $('#home_statistics').hide();
                }
                if (type == 'home_about_us_status') {
                    $('#home_about_us').hide();
                }
                if (type == 'home_header_information_status') {
                    $('#home_header_information').hide();
                }
                if (type == 'home_packing_status') {
                    $('#home_packing').hide();
                }
                if (type == 'home_newsletter_status') {
                    $('#home_newsletter').hide();
                }
                if (type == 'home_about_shipper_status') {
                    $('#home_about_shipper').hide();
                }
                if (type == 'home_footer_mobile_status') {
                    $('#home_footer_mobile').hide();
                }
                if (type == 'home_section_status') {
                    $('#home_section').hide();
                }
                if (type == 'home_calculate_shipping_status') {
                    $('#home_calculate_shipping').hide();
                }
                if (type == 'home_banner1_status') {
                    $('#home_banner1').hide();
                }
                if (type == 'home_section1_status') {
                    $('#home_section1').hide();
                }
                if (type == 'home_process_status') {
                    $('#home_process').hide();
                }
                if (type == 'home_testimonials_status') {
                    $('#home_testimonials').hide();
                }
            }
            $.post('{{ route('business_settings.update.activation') }}', {
                _token: '{{ csrf_token() }}',
                type: type,
                value: value,
                lang: '{{ $lang }}'
            }, function(data) {
                if (data == '1') {
                    AIZ.plugins.notify('success', 'Settings updated successfully');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }

        IconPicker.Init({
            jsonUrl: "{{ static_asset('assets/iconpicker/dist/iconpicker-1.5.0.json') }}",
        });
        var iconpicker_ids = [];

        function iconpicker() {
            var icon_buttons = document.getElementsByClassName('icon-picker');
            for (let index = 0; index < icon_buttons.length; index++) {
                IconPicker.Run('#' + icon_buttons[index].id);
                iconpicker_ids.push(icon_buttons[index].id);
            }
            console.log('function iconpicker():');
            console.log(iconpicker_ids);
        }
        iconpicker();

        function add_row() {
            var values_name = [];
            var values_count = [];
            var x = document.getElementsByClassName("main_social_links_name");
            // var y = document.getElementsByClassName("main_social_links_count");
            for (let index = 0; index < x.length; index++) {
                values_name.push(x[index].value ?? "");
                // values_count.push(y[index].value ?? "");
            }

            var content = document.getElementById('content_rows');
            var count = iconpicker_ids.length + 1;
            content.innerHTML += row_content(count);
            for (let index = 0; index < x.length; index++) {
                x[index].value = values_name[index] ?? "";
                // y[index].value = values_count[index] ?? "";
            }

            iconpicker_ids.push('GetIconPicker-' + count);
            for (let index = 0; index < iconpicker_ids.length; index++) {
                if (document.getElementById(iconpicker_ids[index])) {
                    IconPicker.Run('#' + iconpicker_ids[index]);
                }
            }
            console.log(iconpicker_ids);
        }

        function row_content(id) {
            var row = `<div class="row gutters-5">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control main_social_links_name" placeholder="https://" name="main_social_links_name[]">
                                    </div>
                                </div>
                                <div class="col-3 button-add-icon">
                                    <button type="button" id="GetIconPicker-` + id +
                `" data-iconpicker-input="#MyIconInput-` +
                id + `" data-iconpicker-preview="#MyIconPreview-` + id + `" class="icon-picker">Select Icon</button>
                                    <input type="hidden" name="main_social_links_icon[]" id="MyIconInput-` + id + `">
                                </div>
                                <div class="col-3">
                                    <i id="MyIconPreview-` + id + `" style="font-size: 35px;color: black;"></i>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-03-11-144509/theme/html/demo1/dist/../src/media/svg/icons/Code/Error-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                    </button>
                                </div>
                            </div>`;
            return row;

        }

    </script>
@endsection
