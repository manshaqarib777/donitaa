@extends('backend.layouts.app')

@section('content')

    <div class="mx-auto col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Receiver Address Information') }}</h5>
            </div>

            <form class="form-horizontal" action="{{ route('admin.receiver-addresses.store') }}" id="kt_form_1" method="POST"
                enctype="multipart/form-data">
                @csrf
                {!! redirect_input() !!}
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ translate('Address Type') }}:</label>
                        <input type="text" id="name" class="form-control" placeholder="{{ translate('Address Type') }}"
                            name="ReceiverAddress[type]">
                    </div>

                    <div class="form-group">
                        <label>{{ translate('Address') }}:</label>
                        <input type="text" id="name" class="form-control"
                            placeholder="{{ translate('Here') }}" name="ReceiverAddress[name]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Second Address') }}:</label>
                        <input type="text" id="address" class="form-control"
                            placeholder="{{ translate('Here') }}" name="ReceiverAddress[address]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Zip Code') }}:</label>
                        <input type="text" id="zip_code" class="form-control"
                            placeholder="{{ translate('Here') }}" name="ReceiverAddress[zip_code]">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ translate('Phone') }}:</label>
                                <input type="text" class="form-control" placeholder="{{ translate('Phone') }}"
                                    name="ReceiverAddress[phone]">
                            </div>
                        </div>
                    </div>

                    @if(auth()->user()->user_type !='customer')

                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="receiver_id">{{ translate('Receiver') }}:</label>
                        <div class="col-sm-9">
                            <select id="change-receiver" name="ReceiverAddress[receiver_id]" class="form-control select-receiver">
                                <option value=""></option>
                                @foreach ($receivers as $receiver)
                                    <option value="{{ $receiver->id }}">
                                        {{ $receiver->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @else
                    <input type="hidden" class="form-control" value="{{ auth()->user()->userReceiver->receiver->id }}"
                        name="ReceiverAddress[receiver_id]">
                    @endif

                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="country_id">{{ translate('Country') }}:</label>
                        <div class="col-sm-9">
                            <select id="change-country" name="ReceiverAddress[country_id]" class="form-control select-country">
                                <option value=""></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"
                                        {{ @$receiver_address->country_id == $country->id ? 'selected' : '' }}>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="state_id">{{ translate('Region') }}:</label>
                        <div class="col-sm-9">
                            <select id="change-state" name="ReceiverAddress[state_id]" class="form-control select-state">
                                <option value="{{ @$receiver_address->state_id }}" selected>
                                    {{ @$receiver_address->state->name }}</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="area_id">{{ translate('Area') }}:</label>
                        <div class="col-sm-9">
                            <select name="ReceiverAddress[area_id]" class="form-control select-area">
                                <option value="{{ @$receiver_address->area_id }}" selected>
                                    {{ @$receiver_address->area->name }}</option>

                            </select>
                        </div>
                    </div>

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

            $('.select-receiver').select2({
                placeholder: "Select Receiver",
                language: {
                    noResults: function() {
                        @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                            return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                    href="{{ route('admin.receiver-addresses.index') }}"
                                    class="btn btn-primary">Manage {{ translate('Receivers') }}</a>
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
                    $('select[name ="ReceiverAddress[state_id]"]').empty();
                    $('select[name ="ReceiverAddress[area_id]"]').empty();
                    $('select[name ="ReceiverAddress[state_id]"]').append(
                        '<option value=""></option>');
                    for (let index = 0; index < data.length; index++) {
                        const element = data[index];

                        $('select[name ="ReceiverAddress[state_id]"]').append('<option value="' +
                            element['id'] + '">' + element['name'] + '</option>');
                    }


                });
            });
            $('#change-state').change(function() {
                var id = $(this).val();

                $.get("{{ route('admin.shipments.get-areas-ajax') }}?state_id=" + id, function(data) {
                    $('select[name ="ReceiverAddress[area_id]"]').empty();
                    $('select[name ="ReceiverAddress[area_id]"]').append(
                        '<option value=""></option>');
                    for (let index = 0; index < data.length; index++) {
                        const element = data[index];
                        $('select[name ="ReceiverAddress[area_id]"]').append('<option value="' +
                            element['id'] + '">' + element['name'] + '</option>');
                    }


                });
            });

            FormValidation.formValidation(
                document.getElementById('kt_form_1'), {
                    fields: {
                        "ReceiverAddress[name]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ReceiverAddress[email]": {
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
                        "ReceiverAddress[country_id]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ReceiverAddress[state_id]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ReceiverAddress[area_id]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ReceiverAddress[phone]": {
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
