@php
    $addon = \App\Addon::where('unique_identifier', 'spot-cargo-shipment-addon')->first();
@endphp
@if ($addon != null)
    @if($addon->activated)
        <label class="checkbox">
            <input type="checkbox" name="permissions[]" value="1005" @php if(isset($permissions) && in_array(1005, $permissions)) echo "checked"; @endphp>
            <span></span>{{ translate('Clients Index') }}
        </label>
    @endif
@endif

@if ($addon != null)
    @if($addon->activated)
        <label class="checkbox">
            <input type="checkbox" name="permissions[]" value="2005" @php if(isset($permissions) && in_array(2005, $permissions)) echo "checked"; @endphp>
            <span></span>{{ translate('Client Addresses Index') }}
        </label>
    @endif
@endif


@php
    $addon = \App\Addon::where('unique_identifier', 'spot-cargo-shipment-addon')->first();
@endphp
@if ($addon != null)
    @if($addon->activated)
        <label class="checkbox">
            <input type="checkbox" name="permissions[]" value="3005" @php if(isset($permissions) && in_array(3005, $permissions)) echo "checked"; @endphp>
            <span></span>{{ translate('Receivers Index') }}
        </label>
    @endif
@endif

@if ($addon != null)
    @if($addon->activated)
        <label class="checkbox">
            <input type="checkbox" name="permissions[]" value="4005" @php if(isset($permissions) && in_array(4005, $permissions)) echo "checked"; @endphp>
            <span></span>{{ translate('Receiver Addresses Index') }}
        </label>
    @endif
@endif
