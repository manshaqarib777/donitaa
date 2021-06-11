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


                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
            </div>
        </form>
    </div>
</div>