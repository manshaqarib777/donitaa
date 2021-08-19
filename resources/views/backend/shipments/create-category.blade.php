@extends('backend.layouts.app')

@section('content')

<div class="col-lg-12 mx-auto">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate('Category Information')}}</h5>
        </div>

        <form class="form-horizontal" action="{{ route('admin.categories.store') }}" id="kt_form_1" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>{{translate('Category Type')}}:</label>
                    <input type="text" id="name" class="form-control" placeholder="{{translate('Here')}}" name="Category[name]">
                </div>
                {{--<div class="row gutters-5">
                    <div class="col">
                        <div class="input-group" >
                            <div class="input-group-prepend">
                                <button  type="button" id="GetIconPicker-0" data-iconpicker-input=".MyIconInput-0" data-iconpicker-preview=".MyIconPreview-0" class="icon-picker btn btn-success mr-2">{{translate('Select Icon')}}</button>
                                <input type="hidden" name="Category[icon]" class="MyIconInput-0"  required>
                            </div>
                            <div class="input-group-append">
                                <i class="MyIconPreview-0 " style="line-height: 3rem;padding: 0 30px;"></i>
                            </div>
                        </div>
                    </div>
                </div> --}}

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
                            <input type="hidden" name="Category[icon]"
                                class="selected-files" required
                                >
                        </div>
                        <div class="file-preview box sm">
                        </div>
                    </div>
                </div>

                {!! hookView('shipment_addon',$currentView) !!}

                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection

@section('script')
<link href="{{ static_asset('assets/iconpicker/dist/iconpicker-1.5.0.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ static_asset('assets/iconpicker/dist/iconpicker-1.5.0.js') }}" ></script>
<script type="text/javascript">
        IconPicker.Init({
            jsonUrl: "{{ static_asset('assets/iconpicker/dist/iconpicker-1.5.0.json') }}",
        });
        var iconpicker_ids = [];
        function iconpicker(){
            var icon_buttons = document.getElementsByClassName('icon-picker');
            for (let index = 0; index < icon_buttons.length; index++) {
                IconPicker.Run('#'+icon_buttons[index].id);
                iconpicker_ids.push(icon_buttons[index].id);
            }
            console.log('function iconpicker():');
            console.log(iconpicker_ids);
        }
        iconpicker();
    $(document).ready(function() {
        FormValidation.formValidation(
            document.getElementById('kt_form_1'), {
                fields: {
                    "Category[name]": {
                        validators: {
                            notEmpty: {
                                message: '{{translate("This is required!")}}'
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
