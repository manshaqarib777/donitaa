<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BusinessSettingCollection;
use App\Models\BusinessSetting;

class AddressController extends Controller
{
    public function index()
    {
        return new BusinessSettingCollection(BusinessSetting::all());
    }
}
