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
