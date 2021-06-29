@extends('backend.layouts.blank')
@section('style')
    <style>
        .cf:before,
        .cf:after {
            content: " ";
            display: table;
        }

        .cf:after {
            clear: both;
        }

        .cf {
            *zoom: 1;
        }

        /* FORM */

        .form .plan input,
        .form .payment-plan input,
        .form .payment-type input {
            display: none;
        }

        .form label {
            position: relative;
            color: gray;
            background-color: white;
            border: 3px solid gray;
            font-size: 26px;
            text-align: center;
            height: 100px;
            line-height: 100px;
            display: block;
            cursor: pointer;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form .plan input:checked+label,
        .form .payment-plan input:checked+label,
        .form .payment-type input:checked+label {
            border: 3px solid green;
            background-color: white;
        }

        .form .plan input:checked+label:after,
        form .payment-plan input:checked+label:after,
        .form .payment-type input:checked+label:after {
            content: "\2713";
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 100%;
            border: 2px solid #333;
            background-color: white;
            z-index: 999;
            position: absolute;
            top: -10px;
            right: -10px;
        }

    </style>
@endsection
@section('content')
    @php
    $countries = \App\Country::where('covered', 1)->get();
    $user_type = null;
    $staff_permission = json_decode('[]');
    @endphp
    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4"
                style="background-image: url({{ uploaded_asset(get_setting('admin_login_background')) }})">
                <div class="p-3 text-white align-self-center" style="margin-top: 300px;">
                    <img src="@if (setting()->get('main_header_logo_' . app()->getLocale()) &&
                    setting()->get('main_header_logo_' . app()->getLocale()) != '') {{ asset('/storage/app/public/' . setting()->get('main_header_logo_' . app()->getLocale())) }}
                @else {{ static_asset('themes/main/frontend/logistic/images/logo-transparent.svg') }} @endif" alt="logo" class="logo-default" style="width: 400px;">
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-xl-8" style="padding: 100px;">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <h1>{{ translate('Create a New Account') }}</h1>
                        <hr style="    border: 2px solid green;width: 120px;float: left;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row"></div>
                            <div class="form cf">
                                <div class="plan cf">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-xl-4">
                                            <input type="radio" name="type" id="personal" value="1" class="change_type"><label
                                                class="personal-label four col" for="personal"><i class="fa fa-user-o"
                                                    aria-hidden="true"></i> Personal</label>

                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-4">
                                            <input type="radio" name="type" id="company" value="2" class="change_type"
                                                checked><label class="company-label four col" for="company"><i
                                                    class="fa fa-dropbox" aria-hidden="true"></i> Business</label>

                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-4">
                                            <input type="radio" name="type" id="captain" class="change_type"
                                                value="3"><label class="captain-label four col" for="captain"> <i
                                                    class="fa fa-truck" aria-hidden="true"></i> Driver</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('First Name') }}</label>
                                        <input id="first_name" type="text"
                                            class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                            name="Client[first_name]" value="{{ old('first_name') }}" required autofocus
                                            placeholder="{{ translate('First Name') }}">

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Last Name') }}</label>
                                        <input id="last_name" type="text"
                                            class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                            name="Client[last_name]" value="{{ old('last_name') }}" required autofocus
                                            placeholder="{{ translate('Last Name') }}">

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="form-group show_company">
                                <label>{{ translate('Business Legal Name') }}</label>
                                <input id="company" type="text"
                                    class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}"
                                    name="Client[company]" value="{{ old('company') }}" autofocus
                                    placeholder="{{ translate('Business Legal Name') }}">

                                @if ($errors->has('company'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>{{ translate('Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="Client[email]" value="{{ old('email') }}" required
                                    placeholder="{{ translate('Email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Password') }}</label>

                                        <input id="password" type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" required placeholder="{{ translate('password') }}">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ translate('Password Confirmation') }}</label>

                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required
                                            placeholder="{{ translate('Confrim Password') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{ translate('Address 1') }}</label>
                                <input id="first_address" type="text"
                                    class="form-control{{ $errors->has('first_address') ? ' is-invalid' : '' }}"
                                    name="first_address" value="{{ old('first_address') }}" required autofocus
                                    placeholder="{{ translate('Address 1') }}">

                                @if ($errors->has('first_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{ translate('Address 2') }}</label>
                                <input id="second_address" type="text"
                                    class="form-control{{ $errors->has('second_address') ? ' is-invalid' : '' }}"
                                    name="second_address" value="{{ old('second_address') }}" required autofocus
                                    placeholder="{{ translate('Address 2') }}">

                                @if ($errors->has('second_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('second_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('Country:') }}</label>

                                        <select id="change-country" name="country_id" class="form-control select-country">
                                            <option value=""></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('State/Region') }}</label>

                                        <select id="change-state" name="state_id" class="form-control select-state">
                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{ translate('Area') }}</label>

                                        <select name="area_id" class="form-control select-area">
                                            <option value=""></option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="owner_name"
                                            placeholder="{{ translate('Owner Name') }}"
                                            name="Client[responsible_name]">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="{{ translate('Owner Phone') }}"
                                            name="Client[responsible_mobile]">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{ translate('National ID') }}"
                                    name="Client[national_id]">
                                <input type="hidden" value='Website' name="Client[how_know_us]">
                            </div> --}}

                            <div class="pad-btm text-left">
                                <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" required>
                                <label
                                    for="demo-form-checkbox">{{ translate('I agree with the Terms and Conditions') }}</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                {{ translate('Register') }}
                            </button>
                        </form>
                        <div class="mt-3">
                            {{ translate('Already have an account') }} ? <a href="{{ route('login') }}"
                                class="btn-link mar-rgt text-bold">{{ translate('Sign In') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script type="text/javascript">
        $('.change_type').change(function() {
            var change_html = "";
            if ($(this).val() == '2') {
                $('.show_company').show();

            } else {
                $('.show_company').hide();


            }
        });
        $('.how-know-us').select2({
            placeholder: "Client Source",
        });

        $(document).ready(function() {
            $('.select-country').select2({
                placeholder: "Select country",
                language: {
                    noResults: function() {
                        @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                            return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                    href="{{ route('admin.shipments.covered_countries') }}?redirect=admin.shipments.create"
                                    class="btn btn-primary">Manage {{ translate('Countries') }}</a>
                            </li>`;
                        @else
                            return ``;
                        @endif
                    },
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
            });

            $('.select-state').select2({
                placeholder: "Select state",
                language: {
                    noResults: function() {
                        @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                            return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                    href="{{ route('admin.shipments.covered_countries') }}?redirect=admin.shipments.create"
                                    class="btn btn-primary">Manage {{ translate('States') }}</a>
                            </li>`;
                        @else
                            return ``;
                        @endif
                    },
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
            });

            $('.select-area').select2({
                placeholder: "Select Area",
                language: {
                    noResults: function() {
                        @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                            return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                    href="{{ route('admin.areas.create') }}?redirect=admin.shipments.create" class="btn btn-primary">Manage
                                    {{ translate('Areas') }}</a>
                            </li>`;
                        @else
                            return ``;
                        @endif
                    },
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
            });

            $('.select-country').trigger('change');
            $('.select-state').trigger('change');
            $('#change-country').change(function() {
                var id = $(this).val();
                $.get("{{ route('admin.shipments.get-states-ajax') }}?country_id=" + id, function(data) {
                    $('select[name ="state_id"]').empty();
                    $('select[name ="state_id"]').append(
                        '<option value=""></option>');
                    for (let index = 0; index < data.length; index++) {
                        const element = data[index];

                        $('select[name ="state_id"]').append('<option value="' +
                            element['id'] + '">' + element['name'] + '</option>');
                    }


                });
            });
            $('#change-state').change(function() {
                var id = $(this).val();

                $.get("{{ route('admin.shipments.get-areas-ajax') }}?state_id=" + id, function(data) {
                    $('select[name ="area_id"]').empty();
                    $('select[name ="area_id"]').append(
                        '<option value=""></option>');
                    for (let index = 0; index < data.length; index++) {
                        const element = data[index];
                        $('select[name ="area_id"]').append('<option value="' +
                            element['id'] + '">' + element['name'] + '</option>');
                    }


                });
            });
            FormValidation.formValidation(
                document.getElementById('kt_form_1'), {
                    fields: {
                        "Client[name]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "Client[email]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                },
                                emailAddress: {
                                    message: '{{ translate('This is should be valid email!') }}'
                                }
                            }
                        },
                        "User[password]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "country_id": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "state_id": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "area_id": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "User[confirm_password]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                },
                                identical: {
                                    compare: function() {
                                        return document.getElementById('kt_form_1').querySelector(
                                            '[name="User[password]"]').value;
                                    },
                                    message: 'The password and its confirm are not the same'
                                }
                            }
                        },
                        "Client[responsible_name]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "Client[responsible_mobile]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
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
                            valid: 'fa fa-check',
                            invalid: 'fa fa-times',
                            validating: 'fa fa-refresh',
                        }),
                    }
                }
            );
        });
    </script>
@endsection
