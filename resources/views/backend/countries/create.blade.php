@extends('backend.layouts.app')

@section('content')

    <div class="mx-auto col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Country Information') }}</h5>
            </div>

            <form class="form-horizontal" action="{{ route('admin.countries.store') }}" id="kt_form_1" method="POST"
                enctype="multipart/form-data">
                @csrf
                {!! redirect_input() !!}
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ translate('Country Name') }}:</label>
                        <input type="text" id="name" class="form-control" placeholder="{{ translate('Country Name') }}"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label>{{translate('Area Code')}}:</label>
                        <input type="text" class="form-control" name="code">
                    </div>





                    <div class="form-group">
                        <label for="currency">{{ translate('Currency') }}:</label>
                            <select id="change-currency" name="currency" class="form-control select-currency">
                                <option value="">Select Currency</option>
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency->code }}">{{ $currency->name }}</option>
                                @endforeach
                            </select>
                    </div>
                    {!! hookView('spot-cargo-shipment-country-addon', $currentView) !!}

                    <div class="mb-0 text-right form-group">
                        <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select-currency').select2();


            FormValidation.formValidation(
                document.getElementById('kt_form_1'), {
                    fields: {
                        "name": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "code": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "currency": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },

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
