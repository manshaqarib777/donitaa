<div class="form-group">
    <label>{{translate('Custom Pickup Mission Cost')}}({{currency_symbol()}}):</label>
    <input type="number" min="0" value="{{convert_price(\App\ShipmentSetting::getVal('def_pickup_cost'))}}" class="form-control" placeholder="{{translate('Here')}}" name="Client[pickup_cost]">
</div>
<div class="form-group">
    <label>{{translate('Custom Delivery Mission Cost')}}({{currency_symbol()}}):</label>
    <input type="number" min="0" value="{{convert_price(\App\ShipmentSetting::getVal('def_supply_cost'))}}" class="form-control" placeholder="{{translate('Here')}}" name="Client[supply_cost]">
</div>
