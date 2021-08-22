<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SettingsCollection;
use App\Models\AppSettings;


use Auth;
use App\Area;
use App\User;
use App\Branch;
use App\Client;
use App\Receiver;
use App\ClientAddress;
use App\ReceiverAddress;
use App\Cost;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ShipmentActionHelper;
use App\Http\Helpers\StatusManagerHelper;
use App\Http\Helpers\TransactionHelper;
use App\Mission;
use App\Models\Country;
use App\Package;
use App\Time;
use App\PackageShipment;
use App\Shipment;
use App\ShipmentMission;
use App\ShipmentSetting;
use App\Http\Helpers\MissionPRNG;
use Excel;
use App\State;
use App\ShipmentReason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events\CreateMission;
use App\Events\AddShipment;
use App\Events\UpdateShipment;
use App\Events\UpdateMission;
use App\Events\ShipmentAction;
use App\AdminContainer;
use App\AdminTheme;
use Harimayco\Menu\Models\Menus;

use App\Http\Helpers\UserRegistrationHelper;
use App\UserClient;
use App\Events\AddClient;
use App\UserReceiver;

class SettingsController extends Controller
{
    public function index()
    {
        return new SettingsCollection(AppSettings::all());
    }

    public function branches()
    {
        $branchs = Branch::where('is_archived', 0)->get();
        return response()->json([
            'message'   => 'Branches retrived successfully',
            'data'      => $branchs
        ], 201);
    }
    public function clients()
    {
        $clients = Client::where('is_archived', 0)->get();
        return response()->json([
            'message'   => 'Clients retrived successfully',
            'data'      => $clients
        ], 201);
    }

    public function receivers()
    {
        $receivers = Receiver::where('is_archived', 0)->get();
        return response()->json([
            'message'   => 'Receivers retrived successfully',
            'data'      => $receivers
        ], 201);
    }
    public function categories()
    {
        $categories = \App\Category::all();
        return response()->json([
            'message'   => 'Categories retrived successfully',
            'data'      => $categories
        ], 201);
    }
    public function packages($category_id)
    {
        $packages = \App\Package::where('category_id',$category_id)->get();
        return response()->json([
            'message'   => 'Packages retrived successfully',
            'data'      => $packages
        ], 201);
    }
    public function countries()
    {
        $countries = \App\Country::where('covered',1)->get();
        return response()->json([
            'message'   => 'Countries retrived successfully',
            'data'      => $countries
        ], 201);
    }
    public function states($country_id)
    {
        $states = State::where('country_id', $country_id)->where('covered',1)->get();
        return response()->json([
            'message'   => 'States retrived successfully',
            'data'      => $states
        ], 201);
    }
    public function areas($state_id)
    {
        $areas = Area::where('state_id', $state_id)->get();
        return response()->json([
            'message'   => 'Areas retrived successfully',
            'data'      => $areas
        ], 201);
    }
    public function times()
    {
        $times = \App\Time::all();
        return response()->json([
            'message'   => 'Times retrived successfully',
            'data'      => $times
        ], 201);
    }
    public function payment_gateways()
    {
        $payments =   \App\BusinessSetting::where("key","payment_gateway")->where("value","1")->get();
        return response()->json([
            'message'   => 'Payment Gate Ways Retrived retrived successfully',
            'data'      => $payments
        ], 201);
    }


}
