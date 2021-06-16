<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Helpers\UserRegistrationHelper;
use App\User;
use App\UserClient;
use DB;
use Auth;
use App\Events\AddClient;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::where('is_archived',0)->paginate(15);
        return view('backend.clients.index', compact('clients'));
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
        return view('backend.clients.create',compact('countries','user_type','staff_permission'));
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
			$model = new Client();
			
			
			$model->fill($_POST['Client']);
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
			$userClient = new UserClient();
			$userClient->user_id = $response['user_id'];
			$userClient->client_id = $model->id;
			if (!$userClient->save()){
                throw new \Exception("Record Could Not Saved Successfully");
			}

            event(new AddClient($model));
			DB::commit();
            flash(translate("Client added successfully"))->success();
            $route = 'admin.clients.index';
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
        $client = Client::where('id', $id)->first();
        $shipments = \App\Shipment::where('client_id', $id)->paginate(15);
        if($client != null){
            return view('backend.clients.show',compact('client','shipments'));
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
        $client = Client::where('id', $id)->first();
        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        if($client != null){
            return view('backend.clients.edit',compact('client','countries','user_type','staff_permission'));
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
    public function update(Request $request, $client)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        try{	
			DB::beginTransaction();
			$model = Client::find($client);
			
			
			$model->fill($_POST['Client']);
			$model->code = -1;
            $model->img = $_POST['img'];
	      
			if (!$model->save()){
				throw new \Exception("Email already Exist");
			}
			$model->code = $model->id;
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved");
			}
            $userId = $model->userClient->user_id;
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
            flash(translate("Client updated successfully"))->success();
            $route = 'admin.clients.index';
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
    public function destroy($client)
    {
   
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $model = Client::findOrFail($client);
        $user = UserClient::where('client_id',$model->id)->first();
        if($user != null)
        {
            $branch_user = User::find($user->user_id);
            $branch_user->delete();
        }
        $model->is_archived = 1;
        if($model->save()){
            flash(translate('Client has been deleted successfully'))->success();
            return redirect()->back();
        }
        return back();
    }
    public function ajaxGetTranslations(Request $request)
    {
        $translation = $request->input('translation');
        $type = $request->input('type');
        if($type==1)
        {
            $translation=str_replace("Company","Personal",$request->input('translation'));
        }
        else{
            $translation=str_replace("Personal","Company",$request->input('translation'));
        }
        $translation=translate($translation);
        return response()->json($translation);
    }
}
