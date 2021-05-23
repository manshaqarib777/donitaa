<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receiver;
use App\Http\Helpers\UserRegistrationHelper;
use App\User;
use App\UserReceiver;
use DB;
use Auth;
use App\Events\AddReceiver;

class ReceiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receivers = Receiver::where('is_archived',0)->paginate(15);
        return view('backend.receivers.index', compact('receivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        return view('backend.receivers.create',compact('countries','user_type','staff_permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{	
			DB::beginTransaction();
			$model = new Receiver();
			
			
			$model->fill($_POST['Receiver']);
			$model->code = -1;
            $model->img = $_POST['img'];
	      
			if (!$model->save()){
				throw new \Exception("Email already Exist");
			}
            $auth_user = Auth::user();
            if($auth_user->user_type == 'admin'){
                $model->created_by_type = 'admin';
                $model->created_by = $auth_user->id;
            }elseif($auth_user->user_type == 'staff'){
                $model->created_by_type = 'staff';
                $model->created_by = $auth_user->staff->id;
            }elseif($auth_user->user_type == 'branch'){
                $model->created_by_type = 'branch';
                $model->created_by =  $auth_user->userBranch->branch_id;
            }
			$model->code = $model->id;
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved Successfully");
			}
            $userRegistrationHelper = new UserRegistrationHelper();
			$userRegistrationHelper->setEmail($model->email); 
			$userRegistrationHelper->setName($model->name);
			$userRegistrationHelper->setApiToken();
            $userRegistrationHelper->setCountryID($request->country_id); 
			$userRegistrationHelper->setStateID($request->state_id); 
			$userRegistrationHelper->setAreaID($request->area_id);
			if ($_POST['User']['password'] != '' || $_POST['User']['password'] != null){
				$userRegistrationHelper->setPassword($_POST['User']['password']);
			}else{
				$userRegistrationHelper->generatePassword();
			}
			$userRegistrationHelper->setRoleID(UserRegistrationHelper::MAINCLIENT);
			$response = $userRegistrationHelper->save();
			if(!$response['success']){
				throw new \Exception($response['error_msg']);
			}
            $model->user_id = Auth::user()->id;
            $model->save();


			DB::commit();
            flash(translate("Receiver added successfully"))->success();
            $route = 'admin.receivers.index';
            return execute_redirect($request,$route);
		}catch(\Exception $e){
			DB::rollback();	
			flash($e->getMessage())->error();
            return back();
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receiver = Receiver::where('id', $id)->first();
        $shipments = \App\Shipment::where('receiver_id', $id)->paginate(15);
        if($receiver != null){
            return view('backend.receivers.show',compact('receiver','shipments'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receiver = Receiver::where('id', $id)->first();
        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        if($receiver != null){
            return view('backend.receivers.edit',compact('receiver','countries','user_type','staff_permission'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $receiver)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        try{	
			DB::beginTransaction();
			$model = Receiver::find($receiver);
			
			
			$model->fill($_POST['Receiver']);
			$model->code = -1;
            $model->img = $_POST['img'];
	      
			if (!$model->save()){
				throw new \Exception("Email already Exist");
			}
			$model->code = $model->id;
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved");
			}
            $userId = $model->userReceiver->user_id;
			$userRegistrationHelper = new UserRegistrationHelper($userId);
			$userRegistrationHelper->setEmail($model->email); 
			$userRegistrationHelper->setName($model->name);
			$userRegistrationHelper->setApiToken();
            $userRegistrationHelper->setCountryID($request->country_id); 
			$userRegistrationHelper->setStateID($request->state_id); 
			$userRegistrationHelper->setAreaID($request->area_id);
			if ($_POST['User']['password'] != '' || $_POST['User']['password'] != null){
				$userRegistrationHelper->setPassword($_POST['User']['password']);
			}
			$userRegistrationHelper->setRoleID(UserRegistrationHelper::MAINCLIENT);
			$response = $userRegistrationHelper->save();
			if(!$response['success']){
				throw new \Exception($response['error_msg']);
			}
			
			DB::commit();
            flash(translate("Receiver updated successfully"))->success();
            $route = 'admin.receivers.index';
            return execute_redirect($request,$route);
		}catch(\Exception $e){
			DB::rollback();	
			flash($e->getMessage())->error();
            return back();
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($receiver)
    {
   
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $model = Receiver::findOrFail($receiver);
        $branch_user = User::find($model->user_id);
        $branch_user->delete();
        $model->is_archived = 1;
        if($model->save()){
            flash(translate('Receiver has been deleted successfully'))->success();
            return redirect()->back();
        }
        return back();
    }
}
