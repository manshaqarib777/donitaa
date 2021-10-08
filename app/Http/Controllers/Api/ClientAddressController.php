<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\ClientAddress;
use App\User;
use DB;
use Auth;

class ClientAddressController extends Controller
{
    public function index()
    {
        $client_addresses = ClientAddress::where('client_id',Auth::user()->userClient->client_id)->where('is_archived',0)->get();
        return response()->json($client_addresses);
    }
    public function store(Request $request)
    {
        try{	
			DB::beginTransaction();
			$model = new ClientAddress();
			
            $input= $request->except('user_id');
            $user= User::find($request->user_id);
            $input['client_id']= $user->userClient->client_id;
			
            $model->fill($input);
			
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved Successfully");
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
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved Successfully");
			}

			DB::commit();
            return response()->json([
                'message' => 'Record Saved Successfully'
            ]);
		}catch(\Exception $e){
			DB::rollback();	
			return response()->json([
                'message' => 'Something Went Wrong'
            ],500);
		}
    }
    public function update(Request $request, $client)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        try{	
			DB::beginTransaction();
			$model = ClientAddress::find($client);		
			
            $input= $request->except('user_id');
            //dd($input);
            $user= User::find($request->user_id);
            $input['client_id']= $user->userClient->client_id;
            $model->fill($input);
            
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved");
			}
            
			
			DB::commit();
            return response()->json([
                'message' => 'Record Saved Successfully'
            ]);
		}catch(\Exception $e){
			DB::rollback();	
            return response()->json([
                'message' => 'Something Went Wrong'
            ],500);
		}
    }
    public function destroy($address)
    {
   
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $model = ClientAddress::findOrFail($address);
        $model->is_archived = 1;
        if($model->save()){
            return response()->json([
                'message' => 'Record Saved Successfully'
            ]);
        }
        return response()->json([
            'message' => 'Something Went Wrong'
        ],500);
    }
}
