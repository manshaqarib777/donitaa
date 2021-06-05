<?php

namespace App\Http\Controllers;

use Auth;
use App\Area;
use App\Branch;
use App\Client;
use App\ClientAddress;
use App\Cost;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ShipmentActionHelper;
use App\Http\Helpers\StatusManagerHelper;
use App\Http\Helpers\TransactionHelper;
use App\Mission;
use App\Models\Country;
use App\Package;
use App\PackageShipment;
use App\Shipment;
use App\ShipmentMission;
use App\ShipmentSetting;
use App\Http\Helpers\MissionPRNG;
use Excel;
use App\State;
use App\Transaction;
use App\ShipmentReason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Milon\Barcode\DNS1D;
use function Psy\sh;
use App\Events\CreateMission;
use App\Events\AddShipment;
use App\Events\UpdateShipment;
use App\Events\UpdateMission;
use App\Events\ShipmentAction;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipments = new Shipment();
        $type = null;
        if (isset($_GET)) {
            if (isset($_GET['code']) && !empty($_GET['code'])) {

                $shipments = $shipments->where('code', $_GET['code']);
            }
            if (isset($_GET['client_id']) && !empty($_GET['client_id'])) {

                $shipments = $shipments->where('client_id', $_GET['client_id']);
            }
            if (isset($_GET['branch_id']) && !empty($_GET['branch_id'])) {
                $shipments = $shipments->where('branch_id', $_GET['branch_id']);
            }
            if (isset($_GET['type']) && !empty($_GET['type'])) {
                $shipments = $shipments->where('type', $_GET['type']);
            }
        }
        if(Auth::user()->user_type == 'customer'){
            $shipments = $shipments->where('client_id', Auth::user()->userClient->client_id);
        }elseif(Auth::user()->user_type == 'branch'){
            $shipments = $shipments->where('branch_id', Auth::user()->userBranch->branch_id);
        }
        $shipments = $shipments->with('pay')->orderBy('client_id')->orderBy('id','DESC')->paginate(20);
        $actions = new ShipmentActionHelper();
        $actions = $actions->get('all');
        $page_name = translate('All Shipments');
        $status = 'all';
        return view('backend.shipments.index', compact('shipments', 'page_name', 'type', 'actions', 'status'));
    }

    public function track()
    {
        if(isset($_GET['code'])){
            $shipment = Shipment::where('code', $_GET['code'])->first();
            if($shipment){
                return redirect()->route('admin.shipments.tracking', $_GET['code']);
            }else{
                flash(translate("Invalid shipment code"))->error();
            }
        }
        return view('backend.shipments.track');
    }

    public function tracking($code)
    {
        $shipment = Shipment::where('code', $code)->first();
        if($shipment){
            return view('backend.shipments.tracking', compact('shipment'));
        }else{
            flash(translate("Invalid shipment code"))->error();
            return redirect()->route('admin.shipments.track');
        }
    }

    public function pay($shipment_id)
    {
        $shipment = Shipment::find($shipment_id);
        if(!$shipment || $shipment->paid == 1){
            flash(translate("Invalid Link"))->error();
            return back();
        }
        // return $shipment;
        return view('backend.shipments.pay',["shipment"=>$shipment]);
    }


    public function statusIndex($status, $type = null)
    {
        $shipments = Shipment::where('status_id', $status);
        if ($type != null) {
            $shipments = $shipments->where('type', $type);
        }
        if (isset($_GET)) {
            if (isset($_GET['code']) && !empty($_GET['code'])) {

                $shipments = $shipments->where('code', $_GET['code']);
            }
            if (isset($_GET['client_id']) && !empty($_GET['client_id'])) {

                $shipments = $shipments->where('client_id', $_GET['client_id']);
            }
            if (isset($_GET['branch_id']) && !empty($_GET['branch_id'])) {
                $shipments = $shipments->where('branch_id', $_GET['branch_id']);
            }
            if (isset($_GET['type']) && !empty($_GET['type'])) {
                $shipments = $shipments->where('type', $_GET['type']);
            }
        }
        if(Auth::user()->user_type == 'customer'){
            $shipments = $shipments->where('client_id', Auth::user()->userClient->client_id);
        }elseif(Auth::user()->user_type == 'branch'){
            $shipments = $shipments->where('branch_id', Auth::user()->userBranch->branch_id);
        }
        $shipments = $shipments->with('pay')->orderBy('client_id')->orderBy('id','DESC')->paginate(20);

        $actions = new ShipmentActionHelper();
        $actions = $actions->get($status, $type);
        $page_name = Shipment::getStatusByStatusId($status) . " " . Shipment::getType($type);

        return view('backend.shipments.index', compact('shipments', 'actions', 'page_name', 'type', 'status'));
    }


    public function printStickers(Request $request)
    {
        $shipments_ids = $request->checked_ids;
        return view('backend.shipments.print-stickers', compact('shipments_ids'));
    }
    public function createPickupMission(Request $request, $type)
    {
        try {
            $auth_user = Auth::user(); // In case auth user is client . confirm client user id = auth id 
            if($auth_user->user_type == "customer" && $auth_user->userClient->client_id != $request['Mission']['client_id']){
                flash(translate("Error"))->error();
                return back();
            }
            DB::beginTransaction();
            $model = new Mission();
            $model->fill($request['Mission']);
            $model->status_id = Mission::REQUESTED_STATUS;
            $model->type = Mission::PICKUP_TYPE;
            if (!$model->save()) {
                throw new \Exception();
            }

            $code = '';
            for($n = 0; $n < ShipmentSetting::getVal('mission_code_count'); $n++){
                $code .= '0';
            }
            $code   =   substr($code, 0, -strlen($model->id));
            $model->code = $code.$model->id;

            $client=Client::with('userClient.user.country','userClient.user.area')->find($request->Mission['client_id']);    
            if(isset($client->userClient->user->country) && isset($client->userClient->user->area))
            {
                $country_code= $client->userClient->user->country->iso2;
                $area_code= $client->userClient->user->area->code;
                $model->code = $country_code.$area_code.$code.$model->id;
            }
            else
            {
                $model->code = ShipmentSetting::getVal('mission_prefix').$code.$model->id;
            }
            

            if (!$model->save()) {
                throw new \Exception();
            }
            //change shipment status to requested
            $action = new StatusManagerHelper();
            $response = $action->change_shipment_status($request->checked_ids, Shipment::REQUESTED_STATUS, $model->id);

            //Calaculate Amount 
            $helper = new TransactionHelper();
            $helper->calculate_mission_amount($model->id);

            foreach ($request->checked_ids as $shipment_id) {
                if ($model->id != null) {
                    $shipment = Shipment::find($shipment_id);
                    $shipment->mission_id = $model->id;
                    $shipment->save();
                }
            }

            event(new ShipmentAction( Shipment::REQUESTED_STATUS,$request->checked_ids));
            event(new CreateMission($model));
            DB::commit();
            flash(translate("Mission created successfully"))->success();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }

    public function createDeliveryMission(Request $request, $type)
    {
        try {
            DB::beginTransaction();
            $model = new Mission();
            $model->fill($request['Mission']);
            $model->code = -1;
            $model->status_id = Mission::REQUESTED_STATUS;
            $model->type = Mission::DELIVERY_TYPE;
            $model->otp  = MissionPRNG::get();
            // if(ShipmentSetting::getVal('def_shipment_conf_type')=='otp'){
            //     $model->otp = MissionPRNG::get();
            // }
            if (!$model->save()) {
                throw new \Exception();
            }
            $code = '';
            for($n = 0; $n < ShipmentSetting::getVal('mission_code_count'); $n++){
                $code .= '0';
            }
            $code   =   substr($code, 0, -strlen($model->id));
            
            $client=Client::with('userClient.user.country','userClient.user.area')->find($request->Mission['client_id']);    
            if(isset($client->userClient->user->country) && isset($client->userClient->user->area))
            {
                $country_code= $client->userClient->user->country->iso2;
                $area_code= $client->userClient->user->area->code;
                $model->code = $country_code.$area_code.$code.$model->id;
            }
            else
            {
                $model->code = ShipmentSetting::getVal('mission_prefix').$code.$model->id;
            }
            
            
            if (!$model->save()) {
                throw new \Exception();
            }
            foreach ($request->checked_ids as $shipment_id) {
                if ($model->id != null && ShipmentMission::check_if_shipment_is_assigned_to_mission($shipment_id, Mission::DELIVERY_TYPE) == 0) {
                    $shipment = Shipment::find($shipment_id);
                    $shipment_mission = new ShipmentMission();
                    $shipment_mission->shipment_id = $shipment->id;
                    $shipment_mission->mission_id = $model->id;
                    if ($shipment_mission->save()) {
                        $shipment->mission_id = $model->id;
                        $shipment->save();
                    }
                }
            }

            //Calaculate Amount 
            $helper = new TransactionHelper();
            $helper->calculate_mission_amount($model->id);

            event(new CreateMission($model));
            DB::commit();
            flash(translate("Mission created successfully"))->success();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }

    public function createTransferMission(Request $request, $type)
    {
        try {
            DB::beginTransaction();
            $model = new Mission();
            $model->fill($request['Mission']);
            $model->code = -1;
            $model->status_id = Mission::REQUESTED_STATUS;
            $model->type = Mission::TRANSFER_TYPE;
            if (!$model->save()) {
                throw new \Exception();
            }
            $code = '';
            for($n = 0; $n < ShipmentSetting::getVal('mission_code_count'); $n++){
                $code .= '0';
            }
            $code   =   substr($code, 0, -strlen($model->id));
            $model->code = ShipmentSetting::getVal('mission_prefix').$code.$model->id;
            if (!$model->save()) {
                throw new \Exception();
            }
            foreach ($request->checked_ids as $shipment_id) {
                if ($model->id != null && ShipmentMission::check_if_shipment_is_assigned_to_mission($shipment_id, Mission::TRANSFER_TYPE) == 0) {
                    $shipment = Shipment::find($shipment_id);
                    $shipment_mission = new ShipmentMission();
                    $shipment_mission->shipment_id = $shipment->id;
                    $shipment_mission->mission_id = $model->id;
                    if ($shipment_mission->save()) {
                        $shipment->mission_id = $model->id;
                        $shipment->save();
                    }
                }
            }

            //Calaculate Amount 
            $helper = new TransactionHelper();
            $helper->calculate_mission_amount($model->id);


            event(new CreateMission($model));
            DB::commit();
            flash(translate("Mission created successfully"))->success();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }

    public function createSupplyMission(Request $request, $type)
    {
        try {
            $auth_user = Auth::user(); // In case auth user is client . confirm client user id = auth id 
            if($auth_user->user_type == "customer" && $auth_user->userClient->client_id != $request['Mission']['client_id']){
                flash(translate("Error"))->error();
                return back();
            }
            DB::beginTransaction();
            $model = new Mission();
            $model->fill($request['Mission']);
            $model->code = -1;
            $model->status_id = Mission::REQUESTED_STATUS;
            $model->type = Mission::SUPPLY_TYPE;
            if (!$model->save()) {
                throw new \Exception();
            }
            $code = '';
            for($n = 0; $n < ShipmentSetting::getVal('mission_code_count'); $n++){
                $code .= '0';
            }
            $code   =   substr($code, 0, -strlen($model->id));
            $model->code = ShipmentSetting::getVal('mission_prefix').$code.$model->id;
            if (!$model->save()) {
                throw new \Exception();
            }
            foreach ($request->checked_ids as $shipment_id) {
                if ($model->id != null && ShipmentMission::check_if_shipment_is_assigned_to_mission($shipment_id, Mission::SUPPLY_TYPE) == 0) {
                    $shipment = Shipment::find($shipment_id);
                    $shipment_mission = new ShipmentMission();
                    $shipment_mission->shipment_id = $shipment->id;
                    $shipment_mission->mission_id = $model->id;
                    if ($shipment_mission->save()) {
                        $shipment->mission_id = $model->id;
                        $shipment->save();
                    }
                }
            }

            //Calaculate Amount 
            $helper = new TransactionHelper();
            $helper->calculate_mission_amount($model->id);


            event(new CreateMission($model));
            DB::commit();
            flash(translate("Mission created successfully"))->success();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }

    public function createReturnMission(Request $request, $type)
    {
        try {
            DB::beginTransaction();
            $model = new Mission();
            $model->fill($request['Mission']);
            $model->code = -1;
            $model->status_id = Mission::REQUESTED_STATUS;
            $model->type = Mission::RETURN_TYPE;
            if (!$model->save()) {
                throw new \Exception();
            }
            $code = '';
            for($n = 0; $n < ShipmentSetting::getVal('mission_code_count'); $n++){
                $code .= '0';
            }
            $code   =   substr($code, 0, -strlen($model->id));
            $model->code = ShipmentSetting::getVal('mission_prefix').$code.$model->id;
            if (!$model->save()) {
                throw new \Exception();
            }
            foreach ($request->checked_ids as $shipment_id) {
                if ($model->id != null && ShipmentMission::check_if_shipment_is_assigned_to_mission($shipment_id, Mission::RETURN_TYPE) == 0) {
                    $shipment = Shipment::find($shipment_id);
                    $shipment_mission = new ShipmentMission();
                    $shipment_mission->shipment_id = $shipment->id;
                    $shipment_mission->mission_id = $model->id;
                    if ($shipment_mission->save()) {
                        $shipment->mission_id = $model->id;
                        $shipment->save();
                    }
                }
            }

            //Calaculate Amount 
            $helper = new TransactionHelper();
            $helper->calculate_mission_amount($model->id);

            event(new CreateMission($model));
            DB::commit();
            flash(translate("Mission created successfully"))->success();
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }

    public function removeShipmentFromMission(Request $request)
    {
        $shipment_id = $request->shipment_id;
        $mission_id = $request->mission_id;
        try {
            DB::beginTransaction();

            $mission = Mission::find($mission_id);
            $shipment = Shipment::find($shipment_id);
            if($mission && $shipment && in_array($mission->status_id , [Mission::APPROVED_STATUS,Mission::REQUESTED_STATUS,Mission::RECIVED_STATUS])){
                //change shipment status to requested
                // return $mission->shipment_mission_by_shipment_id($shipment_id);
                $action = new StatusManagerHelper();
                if($mission->type == Mission::getType(Mission::PICKUP_TYPE)){
                    $response = $action->change_shipment_status([$shipment_id], Shipment::SAVED_STATUS, $mission_id);
                }elseif($mission->type == Mission::getType(Mission::DELIVERY_TYPE) && $mission->status_id == Mission::RECIVED_STATUS){
                    $response = $action->change_shipment_status([$shipment_id], Shipment::RETURNED_STATUS, $mission_id);
                }elseif($mission->type == Mission::getType(Mission::DELIVERY_TYPE) && in_array($mission->status_id , [Mission::APPROVED_STATUS,Mission::REQUESTED_STATUS]) ){
                    $response = $action->change_shipment_status([$shipment_id], Shipment::APPROVED_STATUS, $mission_id);
                }

                if($shipment_mission = $mission->shipment_mission_by_shipment_id($shipment_id)){
                    $shipment_mission->delete();
                }
                $shipment_reason = new ShipmentReason();
                $shipment_reason->reason_id = $request->reason;
                $shipment_reason->shipment_id = $request->shipment_id;
                $shipment_reason->type = "Delete From Mission";
                $shipment_reason->save();
                //Calaculate Amount 
                $helper = new TransactionHelper();
                $helper->calculate_mission_amount($mission_id);

                event(new UpdateMission( $mission_id));
                // event(new ShipmentAction( Shipment::SAVED_STATUS,[$shipment]));
                DB::commit();
                flash(translate("Shipment removed from mission successfully"))->success();
                return back();   
            }else{
                flash(translate("Invalid Shipment"))->error();
                return back();
            }
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }


    public function change(Request $request, $to)
    {

        if (isset($request->checked_ids)) {
            $action = new StatusManagerHelper();
            $response = $action->change_shipment_status($request->checked_ids, $to);
            if ($response['success']) {
                event(new ShipmentAction($to,$request->checked_ids));
                flash(translate("Status Changed Successfully!"))->success();
                return back();
            }
        } else {
            flash(translate("Please select shipments"))->error();
            return back();
        }
    }

    public function ajaxGetStates()
    {
        $country_id = $_GET['country_id'];
        $states = State::where('country_id', $country_id)->where('covered',1)->get();
        return response()->json($states);
    }
    public function ajaxGetAddresses()
    {
        $country_id = $_GET['client_id'];
        $states = ClientAddress::where('client_id', $country_id)->with('country','state','area')->get();
        return response()->json($states);
    }
    public function ajaxGetAreas()
    {
        $state_id = $_GET['state_id'];
        $areas = Area::where('state_id', $state_id)->get();
        return response()->json($areas);
    }

    public function ajaxGetEstimationCost(Request $request)
    {
        $request->validate([
            'total_weight' => 'required|integer|min:0',
        ]);
        //dd($request->package_ids);
        $costs = $this->applyShipmentCost($request,$request->package_ids);
        
        $formated_cost["return_cost"] = format_price(convert_price($costs["return_cost"]));
        $formated_cost["shipping_cost"] = format_price(convert_price($costs["shipping_cost"]));
        $formated_cost["tax"] = format_price(convert_price($costs["tax"]));
        $formated_cost["insurance"] = format_price(convert_price($costs["insurance"]));
        $formated_cost["total_cost"] = format_price(convert_price($costs["shipping_cost"] + $costs["tax"] + $costs["insurance"]));

        $formated_cost["original_return_cost"] = $costs["return_cost"];
        $formated_cost["original_shipping_cost"] = $costs["shipping_cost"];
        $formated_cost["original_tax"] = $costs["tax"];
        $formated_cost["original_insurance"] = $costs["insurance"];
        return $formated_cost;
    }

    public function feesSettings()
    {
        return view('backend.shipments.fees-type-settings');
    }
    public function feesFixedSettings()
    {
        return view('backend.shipments.fees-fixed-settings');
    }
    public function feesGramSettings()
    {
        return view('backend.shipments.fees-by-gram-price-settings');
    }
    public function feesStateToStateSettings()
    {
        $costs = Cost::paginate(20);
        return view('backend.shipments.fees-state-to-state-settings')->with('costs', $costs);
    }
    public function feesCountryToCountrySettings()
    {
        $costs = Cost::paginate(20);
        return view('backend.shipments.fees-country-to-country-settings')->with('costs', $costs);
    }

    public function settings()
    {

        return view('backend.shipments.settings');
    }

    public function storeSettings()
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        if(!isset($_POST['Setting']['default_cost']))
        {
            $_POST['Setting']['default_cost']=0;
        }
        if(!isset($_POST['Setting']['extra_default_cost']))
        {
            $_POST['Setting']['extra_default_cost']=0;
        }
        foreach ($_POST['Setting'] as $key => $value) {
            if (ShipmentSetting::where('key',$key)->count() == 0) {
                $set = new ShipmentSetting();
                $set->key = $key;
                if($key == 'default_cost')
                {
                    $set->value=0;
                    if(isset($value))
                    {
                        $set->value = (bool) $value;
                    }
                }
                else if($key == 'extra_default_cost')
                {
                    $set->value=0;
                    if(isset($value))
                    {
                        $set->value = (bool) $value;
                    }
                }
                else{
                    $set->value = $value;   
                }
                $set->save();
            } else {
                $set = ShipmentSetting::where('key', $key)->first();
                if($set->key == 'default_cost')
                {
                    if(isset($value))
                    {
                        $set->value = (bool)$value;
                    }
                }
                else if($set->key == 'extra_default_cost')
                {
                    if(isset($value))
                    {
                        $set->value = (bool) $value;
                    }
                }
                else{
                    $set->value = $value;   
                }
                $set->save();
            }
        }
        flash(translate("Settings Changed Successfully!"))->success();
        if (isset($_POST['Setting']['fees_type'])) {
            if ($_POST['Setting']['fees_type'] == 1) {
                return redirect()->route('admin.shipments.settings.fees.fixed');
            } elseif ($_POST['Setting']['fees_type'] == 2) {
                return redirect()->route('admin.shipments.settings.fees.state-to-state');
            } elseif ($_POST['Setting']['fees_type'] == 4) {
                return redirect()->route('admin.shipments.settings.fees.country-to-country');
            } elseif ($_POST['Setting']['fees_type'] == 5) {
                return redirect()->route('admin.shipments.settings.fees.gram');
            }
        } else {
            return back();
        }
    }

    public function applyShipmentCost($request,$packages)
    {
        //dd($packages);
        $from_country_id = $request['from_country_id'];
        $to_country_id = $request['to_country_id'];

        if (isset($request['from_state_id']) && isset($request['to_state_id'])) {
            $from_state_id = $request['from_state_id'];
            $to_state_id = $request['to_state_id'];
        }
        if (isset($request['from_area_id']) && isset($request['to_area_id'])) {
            $from_area_id = $request['from_area_id'];
            $to_area_id = $request['to_area_id'];
        }

        $weight =  $request['total_weight'];

        $array = ['return_cost' => 0, 'shipping_cost' => 0, 'tax' => 0, 'insurance' => 0];

        // Shipping Cost = Default + kg + Covered Custom  + Package extra
        $covered_cost = Cost::where('from_country_id', $from_country_id)->where('to_country_id', $to_country_id);

        if (isset($request['from_state_id']) && isset($request['to_state_id'])) {
            $covered_cost = $covered_cost->where('from_state_id', $from_state_id)->where('to_state_id', $to_state_id);
        } else {
            $covered_cost = $covered_cost->where('from_state_id', 0)->where('to_state_id', 0);
        }

        // if (isset($request['from_area_id']) && isset($request['to_area_id'])) {
        //     $covered_cost = $covered_cost->where('from_area_id', $from_area_id)->where('to_area_id', $to_area_id);
        // } else {
        //     $covered_cost = $covered_cost->where('from_area_id', 0)->where('to_area_id', 0);
        // }
        //dd($packages);

        $covered_cost = $covered_cost->first();
        //dd($covered_cost);
        if ($covered_cost != null) {
           
            $package_extras = 0;
            $return_fee= 0;
            $insurance_fee= 0;
            $shipping_cost= 0;
            $tax= 0;
            $insurance= 0;
     
            foreach ($packages as $pack) {
                $package = Package::find($pack['package_id']);
                $package_extras += $package->cost;
                $return_fee = $package->return_fee;
                $insurance_fee = $package->insurance_fee;
                if($insurance_fee==0)
                {
                    $insurance_fee=(float) $covered_cost->insurance;
                }
                if(@$pack['shipment_insurance']==1)
                {
                    $insurance = $insurance + ($insurance_fee * (float) $pack['shipment_price'])/100;
                }    

                if($package->default_cost)
                {
                    if($pack['weight'] > 1){

                        if(!$covered_cost->extra_default_cost)
                        {
                            $tax = $tax + (($covered_cost->extra_tax * (float) ($package->cost)) / 100 );
                        }                        
 
                        $shipping_cost = $shipping_cost + (float) ($package->cost);
        
                    }else{
                                        
                        if(!$covered_cost->default_cost)
                        {
                            $tax = $tax + (($covered_cost->tax * (float) ($package->cost)) / 100 );
                        }
                        $shipping_cost = $shipping_cost + (float) ($package->cost);
                        
                    }

                }
                else
                {
                    if($pack['weight'] > 1){

                                
                        $shipping_cost_for_extra = (float) ($covered_cost->extra_shipping_cost * ($pack['weight']));
                        if(!$covered_cost->extra_default_cost)
                        {
                            $tax = $tax + (($covered_cost->extra_tax * $shipping_cost_for_extra) / 100 );
                        }
        
                        $shipping_cost = $shipping_cost + $shipping_cost_for_extra + (float)$package->cost;
        
                    }else{
                        $shipping_cost = $shipping_cost + (float) $covered_cost->shipping_cost;
                        if(!$covered_cost->default_cost)
                        {
                            $tax = $tax + (($covered_cost->tax * $shipping_cost) / 100 );
                        }
                        $shipping_cost = $shipping_cost+ (float)$package->cost;
                    }
                }

            }

            if($weight > 1){

                if($return_fee==0)
                {
                    $return_fee=(float) $covered_cost->extra_return_cost;
                }

                $return_cost =  ( $return_fee * (float) ($weight));
                
            }
            else
            {
                if($return_fee==0)
                {
                    $return_fee=(float) $covered_cost->return_cost;
                }
                $return_cost = (float) $return_fee;

            }

            $array['return_cost'] = $return_cost;
            $array['shipping_cost'] = $shipping_cost;
            $array['tax'] = $tax;
            $array['insurance'] = $insurance;
        } else {
            
            $package_extras = 0;
            $return_fee= 0;
            $insurance_fee= 0;
            $shipping_cost= 0;
            $tax= 0;
            $insurance = 0;

            //dd($request->all());


            foreach ($packages as $key => $pack) {
                $package = Package::find($pack['package_id']);
                $package_extras += $package->cost;
                $return_fee = $package->return_fee;
                $insurance_fee = $package->insurance_fee;
                if($insurance_fee==0)
                {
                    $insurance_fee=(float) $covered_cost->insurance;
                }
                if(@$pack['shipment_insurance']==1)
                {
                    $insurance = $insurance + ($insurance_fee * (float) $pack['shipment_price'])/100;
                }


                if($package->default_cost)
                {
                    if($pack['weight'] > 1){

                        if(!ShipmentSetting::getCost('extra_default_cost'))
                        {
                            $tax = $tax + ((ShipmentSetting::getCost('def_tax_gram') * $package->cost) / 100 );
                        }   
        
                        $shipping_cost = $shipping_cost + $package->cost;
        
                    }else{
                        if(!ShipmentSetting::getCost('default_cost'))
                        {    
                            $tax = $tax + ((ShipmentSetting::getCost('def_tax') * $package->cost) / 100 );
                        }
                        $shipping_cost = $shipping_cost + $package->cost; 
                    }


                }
                else
                {
                    if($pack['weight'] > 1){

                        
                        $shipping_cost_for_extra = (float) (ShipmentSetting::getCost('def_shipping_cost_gram') * ($pack['weight']));
                        if(!ShipmentSetting::getCost('extra_default_cost'))
                        {
                            $tax = $tax + ((ShipmentSetting::getCost('def_tax_gram') * $shipping_cost_for_extra) / 100 );
                        }   
        
                        $shipping_cost = $shipping_cost +  $shipping_cost_for_extra + (float) $package->cost;        

                    }else{

                        if(!ShipmentSetting::getCost('default_cost'))
                        {    
                            $tax = $tax + ((ShipmentSetting::getCost('def_tax') * ShipmentSetting::getCost('def_shipping_cost')) / 100 );
                        }
                        $shipping_cost = $shipping_cost + ShipmentSetting::getCost('def_shipping_cost') + (float) $package->cost;
                    }
                }
            }
            
            if($weight > 1){

                if($return_fee==0)
                {
                    $return_fee=ShipmentSetting::getCost('def_return_cost_gram');
                }
                $return_cost = ( $return_fee * (float)($weight));
            
            }else{
                if($return_fee==0)
                {
                    $return_fee=ShipmentSetting::getCost('def_return_cost');
                }
                $return_cost = $return_fee;

            }

            $array['return_cost'] = $return_cost;
            $array['shipping_cost'] = $shipping_cost;
            $array['tax'] = $tax;
            $array['insurance'] = $insurance;
        }
        return $array;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(auth()->user()->userClient->client);
        $branchs = Branch::where('is_archived', 0)->get();
        $clients = Client::where('is_archived', 0)->get();
        return view('backend.shipments.create', compact('branchs', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
                $model = $this->storeShipment($request);
            DB::commit();
            flash(translate("Shipment added successfully"))->success();
            return redirect()->route('admin.shipments.show', $model->id);
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }

    public function storeAPI(Request $request)
    {
        try {
            DB::beginTransaction();
                $this->storeShipment($request);
            DB::commit();
            return "Shipment added successfully";
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    private function storeShipment($request)
    {
        //dd($client);
        
        $model = new Shipment();


        $model->fill($request->Shipment);
        $model->code = -1;
        $model->status_id = Shipment::SAVED_STATUS;
        $date = date_create();
        $today = date("Y-m-d");

        if (!$model->save()) {
            throw new \Exception();
        }

        $code = '';
        for($n = 0; $n < ShipmentSetting::getVal('shipment_code_count'); $n++){
            $code .= '0';
        }
        $code   =   substr($code, 0, -strlen($model->id));
        $model->barcode = $code.$model->id;
        $client=Client::with('userClient.user.country','userClient.user.area')->find($request->Shipment['client_id']);    
        if(isset($client->userClient->user->country) && isset($client->userClient->user->area))
        {
            $country_code= $client->userClient->user->country->iso2;
            $area_code= $client->userClient->user->area->code;
            $model->code = $country_code.$area_code.$code.$model->id;
        }
        else
        {
            $model->code = ShipmentSetting::getVal('shipment_prefix').$code.$model->id;
        }
   

        if (!$model->save()) {
            throw new \Exception();
        }
        $all_packages=$request->Package;
        if(isset($all_packages))
        {
            foreach ($all_packages as $k => $package) {
                if(isset($package['shipment_insurance']))
                $all_packages[$k]['shipment_insurance'] = $package['shipment_insurance'][0];
                
            }

        }
        //dd($all_packages);
        $costs = $this->applyShipmentCost($request->Shipment,$all_packages);
        //dd($costs);

        $model->fill($costs);
        if (!$model->save()) {
            throw new \Exception();
        }

        $counter = 0;
        if (isset($request->Package)) {

            if (!empty($request->Package)) {

                if (isset($request->Package[$counter]['package_id'])) {

                    foreach ($request->Package as $k => $package) {
                        if(isset($package['shipment_insurance']))
                        $package['shipment_insurance'] = $package['shipment_insurance'][0];
                        $package_shipment = new PackageShipment();
                        $package_shipment->fill($package);
                        $package_shipment->shipment_id = $model->id;
                        if (!$package_shipment->save()) {
                            throw new \Exception();
                        }
                    }
                }
            }
        }

        event(new AddShipment($model));

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipment = Shipment::find($id);
        return view('backend.shipments.show', compact('shipment'));
    }

    public function print($shipment, $type = 'invoice')
    {
        $shipment = Shipment::find($shipment);
        if($type == 'label'){
            return view('backend.shipments.print_label', compact('shipment'));
        }else{
            return view('backend.shipments.print', compact('shipment'));
        }
    }

    public function shipmentsReport(Request $request)
    {
        $shipments = new Shipment();
        $type = null;
        if (isset($_GET)) {
            if (isset($_GET['code']) && !empty($_GET['code'])) {

                $shipments = $shipments->where('code', $_GET['code']);
            }
            if (isset($_GET['client_id']) && !empty($_GET['client_id'])) {

                $shipments = $shipments->where('client_id', $_GET['client_id']);
            }
            if (isset($_GET['branch_id']) && !empty($_GET['branch_id'])) {
                $shipments = $shipments->where('branch_id', $_GET['branch_id']);
            }
            if (isset($_GET['type']) && !empty($_GET['type'])) {
                $shipments = $shipments->where('type', $_GET['type']);
            }
        }
        if(Auth::user()->user_type == 'customer'){
            $shipments = $shipments->where('client_id', Auth::user()->userClient->client_id);
        }elseif(Auth::user()->user_type == 'branch'){
            $shipments = $shipments->where('branch_id', Auth::user()->userBranch->branch_id);
        }
        $shipments = $shipments->orderBy('id','DESC')->paginate(20);
        $actions = new ShipmentActionHelper();
        $actions = $actions->get('all');
        $page_name = translate('All Shipments');
        $status = 'all';
        return view('backend.shipments.shipments-report', compact('shipments', 'page_name', 'type', 'actions', 'status'));
    }
    public function exportShipmentsReport(Request $request)
    {
        
        $object = new \App\Services\ShipmentsExport;
		$object->branch_id = $_POST['branch_id'];
		$object->client_id = $_POST['client_id'];
		$object->type = $_POST['type'];
		$object->status = $_POST['status'];
        if(isset($_POST['excel'])){
		$fileName='Shipments_'.date("Y-m-d").'.xlsx';
		return Excel::download($object, $fileName);
        }else
        {
            $shipments = new Shipment();
            $type = null;
            if (isset($_POST)) {
              
                if (isset($_POST['status']) && !empty($_POST['status'])) {
                    $shipments = $shipments->where('status_id', $_POST['status']);
                }
                if (isset($_POST['client_id']) && !empty($_POST['client_id'])) {

                    $shipments = $shipments->where('client_id', $_POST['client_id']);
                }
                if (isset($_POST['branch_id']) && !empty($_POST['branch_id'])) {
                    $shipments = $shipments->where('branch_id', $_POST['branch_id']);
                }
                if (isset($_POST['type']) && !empty($_POST['type'])) {
                    $shipments = $shipments->where('type', $_POST['type']);
                }
                if(isset($_POST['from_date']) && isset($_POST['to_date']) ) 
                {
                    if(!empty($_POST['from_date']))
                    {
                        $shipments = $shipments->whereBetween('created_at',[$_POST['from_date'],$_POST['to_date']]);
                    }
                }
            }
            if(Auth::user()->user_type == 'customer'){
                $shipments = $shipments->where('client_id', Auth::user()->userClient->client_id);
            }elseif(Auth::user()->user_type == 'branch'){
                $shipments = $shipments->where('branch_id', Auth::user()->userBranch->branch_id);
            }
            $shipments = $shipments->orderBy('id','DESC')->paginate(20);
            $actions = new ShipmentActionHelper();
            $actions = $actions->get('all');
            $page_name = translate('Shipments Report Results');
            $status = 'all';
            return view('backend.shipments.shipments-report', compact('shipments', 'page_name', 'type', 'actions', 'status'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branchs = Branch::where('is_archived', 0)->get();
        $clients = Client::where('is_archived', 0)->get();
        $shipment = Shipment::find($id);
        return view('backend.shipments.edit', compact('branchs', 'clients', 'shipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shipment)
    {
        try {
            DB::beginTransaction();
            //dd($request->all());
            $model = Shipment::find($shipment);


            $model->fill($_POST['Shipment']);


            if (!$model->save()) {
                throw new \Exception();
            }
            foreach (\App\PackageShipment::where('shipment_id', $model->id)->get() as $pack) {
                $pack->delete();
            }
            $counter = 0;
            if (isset($_POST['Package'])) {

                if (!empty($_POST['Package'])) {

                    if (isset($_POST['Package'][$counter]['package_id'])) {

                        foreach ($_POST['Package'] as $k=> $package) {
                            if(isset($package['shipment_insurance']))
                                $package['shipment_insurance'] = $package['shipment_insurance'][0];
                            $package_shipment = new PackageShipment();
                            $package_shipment->fill($package);
                            $package_shipment->shipment_id = $model->id;
                            if (!$package_shipment->save()) {
                                throw new \Exception();
                            }
                        }
                    }
                }
            }
            
            event(new UpdateShipment($model));
            DB::commit();
            flash(translate("Shipment added successfully"))->success();
            $route = 'admin.shipments.index';
            return execute_redirect($request, $route);
        } catch (\Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            exit;

            flash(translate("Error"))->error();
            return back();
        }
    }


    public function covered_countries()
    {
        $countries  = Country::all();
        return  view('backend.shipments.covered_countries', compact('countries'));
    }
    public function covered_cities($country_id)
    {
        $cities  = State::where('country_id', $country_id)->get();
        $country = Country::find($country_id);
        return  view('backend.shipments.covered_cities', compact('cities', 'country'));
    }
    public function config_costs()
    {
        $from_country = $_GET['from_country'];
        $to_country = $_GET['to_country'];
        if($from_country && $to_country){
            $from = Country::find($from_country);
            $to = Country::find($to_country);
            $from_cities = State::where('country_id', $from->id)->where('covered', 1)->get();
            $to_cities = State::where('country_id', $to->id)->where('covered', 1)->get();
            return view('backend.shipments.costs-repeter', compact('from', 'to', 'from_cities', 'to_cities'));
        }else{
            flash(translate("(From Country) and (To Country) are required"))->error();
            return back();
        }
    }
    public function ajax_costs_repeter()
    {
        $from_country = $_GET['from_country'];
        $to_country = $_GET['to_country'];
        $costBlocks = array();
        $from = Country::find($from_country);
        $to = Country::find($to_country);
        $from_cities = State::where('country_id', $from->id)->where('covered', 1)->get();
        $to_cities = State::where('country_id', $to->id)->where('covered', 1)->get();
        $counter = 0;
        foreach($from_cities as $city)
        {
            foreach ($to_cities as $to_city){
                $from_costs = \App\Cost::where('from_country_id', $from->id)->where('to_country_id', $to->id)->where('from_state_id', $city->id)->where('to_state_id', $to_city->id)->first();
                //dd($from_costs);
                if($from_costs != null){
                    array_push($costBlocks,['from_country'=>$from->name,'from_country_id'=>$from->id,'to_country'=>$to->name,'to_country_id'=>$to->id,'from_state'=>$city->name,'from_state_id'=>$city->id,'to_state'=>$to_city->name,'to_state_id'=>$to_city->id,'shipping_cost'=>convert_price($from_costs->shipping_cost),'tax'=>$from_costs->tax,'return_cost'=>convert_price($from_costs->return_cost),'insurance'=>convert_price($from_costs->insurance),'extra_shipping_cost'=>convert_price($from_costs->extra_shipping_cost),'extra_tax'=>$from_costs->extra_tax,'extra_return_cost'=>convert_price($from_costs->extra_return_cost),'extra_insurance'=>convert_price($from_costs->extra_insurance),'default_cost'=>$from_costs->default_cost,'extra_default_cost'=>$from_costs->extra_default_cost]);
                }else
                {
                    array_push($costBlocks,['from_country'=>$from->name,'from_country_id'=>$from->id,'to_country'=>$to->name,'to_country_id'=>$to->id,'from_state'=>$city->name,'from_state_id'=>$city->id,'to_state'=>$to_city->name,'to_state_id'=>$to_city->id,'shipping_cost'=>0,'tax'=>0,'return_cost'=>0,'insurance'=>0,'extra_shipping_cost'=>0,'extra_tax'=>0,'extra_return_cost'=>0,'extra_insurance'=>0,'default_cost'=>0,'extra_default_cost'=>0]);
                }
            }
            
        }
        return response()->json($costBlocks);
    }

    public function post_config_costs(Request $request)
    {

        //dd($request->all());
        //dd($request->input('extra_default_cost'));
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $costs_removal = Cost::where('from_country_id', $_GET['from_country'])->where('to_country_id', $_GET['to_country'])->get();
        foreach ($costs_removal as $cost) {
            $cost->delete();
        }
        $counter = 0;
        $from_country = $request->from_country_h[$counter];
        $to_country = $request->to_country_h[$counter];
        if(isset($request->from_state[$counter]))
        $from_state = $request->from_state[$counter];
        if(isset($request->to_state[$counter]))
        $to_state = $request->to_state[$counter];
        $shipping_cost = $request->shipping_cost[$counter];
        $tax = $request->tax[$counter];
        $insurance = $request->insurance[$counter];
        $return_cost = $request->return_cost[$counter];
        $default_cost =0;
        if(isset($request->default_cost[$counter]))
        $default_cost = $request->default_cost[$counter];

        $extra_shipping_cost = $request->extra_shipping_cost[$counter];
        $extra_tax = $request->extra_tax[$counter];
        $extra_insurance = $request->extra_insurance[$counter];
        $extra_return_cost = $request->extra_return_cost[$counter];
        $extra_default_cost =0;
        if(isset($request->extra_default_cost[$counter]))
        $extra_default_cost = $request->extra_default_cost[$counter];

        $newCost = new Cost();
        $newCost->from_country_id = $from_country;
        $newCost->to_country_id = $to_country;

        $newCost->shipping_cost = $shipping_cost;
        $newCost->tax = $tax;
        $newCost->insurance = $insurance;
        $newCost->return_cost = $return_cost;
        $newCost->default_cost = $default_cost;

        $newCost->extra_shipping_cost = $extra_shipping_cost;
        $newCost->extra_tax = $extra_tax;
        $newCost->extra_insurance = $extra_insurance;
        $newCost->extra_return_cost = $extra_return_cost;
        $newCost->extra_default_cost = $extra_default_cost;
        $newCost->save();
        $counter = 1;
        foreach ($request->from_country_h as $cost_data) {
            if ($counter <= (count($request->from_country_h) - 1)) {
                $from_country = $request->from_country_h[$counter];
                $to_country = $request->to_country_h[$counter];
         
                $from_state = $request->from_state[$counter-1];
                $to_state = $request->to_state[$counter-1];
            
               
                $shipping_cost = $request->shipping_cost[$counter];
                $tax = $request->tax[$counter];
                $insurance = $request->insurance[$counter];
                $return_cost = $request->return_cost[$counter];
                $default_cost =0;
                if(isset($request->default_cost[$counter]))
                $default_cost = $request->default_cost[$counter];

                $extra_shipping_cost = $request->extra_shipping_cost[$counter];
                $extra_tax = $request->extra_tax[$counter];
                $extra_insurance = $request->extra_insurance[$counter];
                $extra_return_cost = $request->extra_return_cost[$counter];
                
                $extra_default_cost =0;                
                if(isset($request->extra_default_cost[$counter]))
                $extra_default_cost = $request->extra_default_cost[$counter];


                $newCost = new Cost();
                $newCost->from_country_id = $from_country;
                $newCost->to_country_id = $to_country;
                $newCost->from_state_id = $from_state;
                $newCost->to_state_id = $to_state;
                $newCost->shipping_cost = $shipping_cost;
                $newCost->tax = $tax;
                $newCost->insurance = $insurance;
                $newCost->return_cost = $return_cost;
                $newCost->default_cost = $default_cost;
                $newCost->extra_shipping_cost = $extra_shipping_cost;
                $newCost->extra_tax = $extra_tax;
                $newCost->extra_insurance = $extra_insurance;
                $newCost->extra_return_cost = $extra_return_cost;
                $newCost->extra_default_cost = $extra_default_cost;
                $newCost->save();
                $counter++;
            }
        }
        flash(translate("Costs updated successfully"))->success();
        return redirect()->back();
    }
    public function post_config_package_costs(Request $request)
    {
        //dd($request->all());
        $counter = 0;
        foreach ($request->package_id as $package) {
            $pack = Package::find($request->package_id[$counter]);
            $pack->cost = $request->package_extra[$counter];
            $pack->insurance_fee = $request->package_insurance_fee[$counter];
            $pack->return_fee = $request->package_return_fee[$counter];
            $pack->default_cost =0;
            if(isset($request->package_default_cost[$counter]))
            $pack->default_cost = $request->package_default_cost[$counter];

            $pack->save();
            $counter++;
        }
        flash(translate("Package Extra Fees updated successfully"))->success();
        return redirect()->back();
    }
    public function post_covered_countries()
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $countries = Country::all();
        foreach ($countries as $count) {
            $count->covered = 0;
            $count->save();
        }
        if(isset($_POST['covered_countries'])){
            foreach ($_POST['covered_countries'] as $country_id) {
                $c = Country::find($country_id);
                $c->covered = 1;
                $c->save();
            }
        }
        flash(translate("Covered Countries added successfully"))->success();
        return back();
    }

    public function post_covered_cities($country_id)
    {
       
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $countries = State::where('country_id', $country_id)->get();

        foreach ($countries as $count) {
            $count->covered = 0;
            $count->save();
        }
        if(isset($_POST['covered_cities'])){
            foreach ($_POST['covered_cities'] as $state_id) {
                $c = State::find($state_id);
                $c->covered = 1;
                $c->save();
            }
        }
        flash(translate("Covered Cities updated successfully"))->success();
        return back();
    }

    public function import(Request $request)
    {
        $shipment = new Shipment;
        $columns = $shipment->getTableColumns();
        return view('backend.shipments.import',['columns'=>$columns]);
    }

    public function parseImport(Request $request)
    {
        $shipment = new Shipment;
        $shipment_columns = $shipment->getTableColumns();
        $request->validate([
            'shipments_file' => 'required|mimes:csv,txt',
            "columns"    => "required|array|min:1",
            "columns.*"  => "required|in:".implode(",", $shipment_columns)
        ]);
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }

        $path = $request->file('shipments_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        if($data[0] != $request->columns){
            flash(translate('This file you are trying to import is not the file that you should upload'))->error();
            return back();
        }
        if(!in_array('status_id',$request->columns) || !in_array('branch_id',$request->columns) || !in_array('client_id',$request->columns) ){
            flash(translate('This file you are trying to import is not the file that you should upload'))->error();
            return back();
        }
        $csv_header_fields  =   $data[0];
        try {
            unset($data[0]);

            foreach ($data as $row) {

                $shipment = new Shipment;
                $valid = true;
                for ($i=0; $i < count($row); $i++) {
                    if($request->columns[$i] == 'branch_id'){
                        if(!Branch::find($row[$i])){
                            $valid = false; 
                        }
                    }
                    if($request->columns[$i] == 'client_id'){
                        if(!Client::find($row[$i])){
                            $valid = false; 
                        }
                    }
                    $shipment->{$request->columns[$i]} = $row[$i];
                }
                if($valid){
                    $shipment->save();
                }
            }

            flash(translate("File imported successfully"))->success();
            return back();
        } catch (\Throwable $th) {
            flash(translate('This file you are trying to import is not the file that you should upload'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}