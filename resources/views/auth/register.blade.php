@extends('backend.layouts.blank')

@section('content')


    <div class="h-100 bg-cover bg-center py-5 d-flex align-items-center"
        style="background-image: url({{ uploaded_asset(get_setting('admin_login_background')) }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8 mx-auto">
                    <div class="card text-left">
                        <div class="card-header">{{ translate('Create a New Account') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Client[name]"
                                        value="{{ old('name') }}" required autofocus
                                        placeholder="{{ translate('Full Name') }}">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Client[email]"
                                        value="{{ old('email') }}" required placeholder="{{ translate('Email') }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required placeholder="{{ translate('password') }}">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required
                                        placeholder="{{ translate('Confrim Password') }}">
                                </div>
                                <div class="row">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="followup_name"
                                                placeholder="{{ translate('Followup Name') }}"
                                                name="Client[follow_up_name]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                placeholder="{{ translate('Followup Phone') }}"
                                                name="Client[follow_up_mobile]">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{ translate('National ID') }}"
                                        name="Client[national_id]">
                                    <input type="hidden" value='Website' name="Client[how_know_us]">
                                </div>

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
    </div>

@endsection
