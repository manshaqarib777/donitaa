<form action="{{ route('your_currency.update') }}" method="POST" >
    @csrf
    <input type="hidden" name="id" value="{{ $currency->id }}">
    <div class="modal-header">
    	<h5 class="modal-title h6">{{translate('Update Currency')}}</h5>
    	<button type="button" class="close" data-dismiss="modal">
    	</button>
    </div>
    <div class="modal-body">
        <div class="form-group row">
            <label class="col-sm-2 col-from-label" for="name">{{translate('Name')}}</label>
            <div class="col-sm-10">
                <input type="text" placeholder="{{translate('Name')}}" id="name" name="name" value="{{ $currency->name }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-from-label" for="symbol">{{translate('Symbol')}}</label>
            <div class="col-sm-10">
                <input type="text" placeholder="{{translate('Symbol')}}" id="symbol" name="symbol" value="{{ $currency->symbol }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-from-label" for="code">{{translate('Code')}}</label>
            <div class="col-sm-10">
                <input type="text" placeholder="{{translate('Code')}}" id="code" name="code" value="{{ $currency->code }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-from-label" for="exchange_rate">{{translate('Exchange Rate')}}</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" min="0" placeholder="{{translate('Exchange Rate')}}" id="exchange_rate" name="exchange_rate" value="{{ $currency->exchange_rate }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-3">
                <label class="control-label">{{translate('Symbol Format')}}</label>
            </div>
            <div class="col-lg-6">
                <select class="form-control aiz-selectpicker" name="symbol_format">
                    <option value="1" @if( $currency->symbol_format == 1) selected @endif>[Symbol] [Amount]</option>
                    <option value="2" @if($currency->symbol_format == 2) selected @endif>[Amount] [Symbol]</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-3">
                <label class="control-label">{{translate('Show Space With Symbol')}}</label>
            </div>
            <div class="col-lg-6">
                <select class="form-control aiz-selectpicker" name="symbol_space">
                    <option value="1" @if( $currency->symbol_space == 1) selected @endif>Yes</option>
                    <option value="2" @if($currency->symbol_space == 2) selected @endif>No</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-3">
                <label class="control-label">{{translate('Decimal Separator')}}</label>
            </div>
            <div class="col-lg-6">
                <select class="form-control aiz-selectpicker" name="decimal_separator">
                    <option value="1" @if($currency->decimal_separator == 1) selected @endif>1,23,456.70</option>
                    <option value="2" @if($currency->decimal_separator == 2) selected @endif>1.23.456,70</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-3">
                <label class="control-label">{{translate('No of decimals')}}</label>
            </div>
            <div class="col-lg-6">
                <select class="form-control aiz-selectpicker" name="no_of_decimals">
                    <option value="0" @if($currency->no_of_decimals == 0) selected @endif>12345</option>
                    <option value="1" @if($currency->no_of_decimals == 1) selected @endif>1234.5</option>
                    <option value="2" @if($currency->no_of_decimals == 2) selected @endif>123.45</option>
                    <option value="3" @if($currency->no_of_decimals == 3) selected @endif>12.345</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">{{translate('Cancel')}}</button>
    </div>
</form>
