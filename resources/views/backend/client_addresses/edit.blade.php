@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-12 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Client Address Information') }}</h5>
            </div>

            <form class="form-horizontal" action="{{ route('admin.client-addresses.update', ['client_address' => $client_address->id]) }}"
                id="kt_form_1" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ translate('Contact First Name') }}:</label>
                        <input type="text" id="type" class="form-control" value="{{ $client_address->first_name }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[first_name]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Contact Last Name') }}:</label>
                        <input type="text" id="type" class="form-control" value="{{ $client_address->last_name }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[last_name]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Address') }}:</label>
                        <input type="text" id="name" class="form-control" value="{{ $client_address->name }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[name]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Address Name') }}:</label>
                        <input type="text" id="type" class="form-control" value="{{ $client_address->type }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[type]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Address') }}:</label>
                        <input type="text" id="name" class="form-control" value="{{ $client_address->name }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[name]">
                    </div>

                    <div class="form-group">
                        <label>{{ translate('Second Address') }}:</label>
                        <input type="text" id="address" class="form-control" value="{{ $client_address->address }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[address]">
                    </div>
                    <div class="form-group">
                        <label>{{ translate('Zip Code') }}:</label>
                        <input type="text" id="zip_code" class="form-control" value="{{ $client_address->zip_code }}"
                            placeholder="{{ translate('Here') }}" name="ClientAddress[zip_code]">
                    </div>




                        <div class="form-group">
                            <label>{{ translate('Phone') }}:</label>
                            <input type="text" class="form-control" placeholder="{{ translate('Here') }}"
                                value="{{ $client_address->phone }}" name="ClientAddress[phone]">
                        </div>
                        @if(auth()->user()->user_type !='customer' || (auth()->user()->user_type =='customer' && auth()->user()->userReceiver))
                        <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="client_id">{{ translate('Client') }}:</label>
                        <div class="col-sm-9">
                            <select id="change-client" name="ClientAddress[client_id]" class="form-control select-client">
                                <option value=""></option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}"
                                        {{ $client_address->client_id== $client->id ? 'selected' : '' }}>
                                        {{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @else
                    <input type="hidden" class="form-control" value="{{ auth()->user()->userClient->client->id }}"
                        name="ClientAddress[client_id]">
                    @endif

                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="country_id">{{ translate('Country') }}:</label>
                        <div class="col-sm-9">
                            <select id="change-country" name="ClientAddress[country_id]" class="form-control select-country">
                                <option value=""></option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"
                                        {{ @$client_address->country_id == $country->id ? 'selected' : '' }}>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="state_id">{{ translate('Region') }}:</label>
                        <div class="col-sm-9">
                            <select id="change-state" name="ClientAddress[state_id]" class="form-control select-state">
                                <option value="{{ @$client_address->state_id }}" selected>
                                    {{ @$client_address->state->name }}</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-from-label" for="area_id">{{ translate('Area') }}:</label>
                        <div class="col-sm-9">
                            <select name="ClientAddress[area_id]" class="form-control select-area">
                                <option value="{{ @$client_address->area_id }}" selected>
                                    {{ @$client_address->area->name }}</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-right">
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
            $('.select-client').select2({
                placeholder: "Select Client",
                language: {
                    noResults: function() {
                        @if ($user_type == 'admin' || in_array('1105', $staff_permission))
                            return `<li style='list-style: none; padding: 10px;'><a style="width: 100%"
                                    href="{{ route('admin.client-addresses.index') }}"
                                    class="btn btn-primary">Manage {{ translate('Clients') }}</a>
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
                    $('select[name ="ClientAddress[state_id]"]').empty();
                    $('select[name ="ClientAddress[area_id]"]').empty();
                    $('select[name ="ClientAddress[state_id]"]').append(
                        '<option value=""></option>');
                    for (let index = 0; index < data.length; index++) {
                        const element = data[index];

                        $('select[name ="ClientAddress[state_id]"]').append('<option value="' +
                            element['id'] + '">' + element['name'] + '</option>');
                    }


                });
            });
            $('#change-state').change(function() {
                var id = $(this).val();

                $.get("{{ route('admin.shipments.get-areas-ajax') }}?state_id=" + id, function(data) {
                    $('select[name ="ClientAddress[area_id]"]').empty();
                    $('select[name ="ClientAddress[area_id]"]').append(
                        '<option value=""></option>');
                    for (let index = 0; index < data.length; index++) {
                        const element = data[index];
                        $('select[name ="ClientAddress[area_id]"]').append('<option value="' +
                            element['id'] + '">' + element['name'] + '</option>');
                    }


                });
            });
            FormValidation.formValidation(
                document.getElementById('kt_form_1'), {
                    fields: {
                        "ClientAddress[name]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ClientAddress[country_id]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ClientAddress[state_id]": {
                            validators: {
                                notEmpty: {
                                    message: '{{ translate('This is required!') }}'
                                }
                            }
                        },
                        "ClientAddress[area_id]": {
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
