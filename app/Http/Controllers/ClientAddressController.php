<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientAddress;
use App\Client;
use DB;
use Auth;

class ClientAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_addresses = ClientAddress::where('is_archived',0)->paginate(15);
        return view('backend.client_addresses.index', compact('client_addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clients = Client::all();

        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        return view('backend.client_addresses.create',compact('clients','countries','user_type','staff_permission'));
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
			$model = new ClientAddress();
			
			
			$model->fill($_POST['ClientAddress']);
			
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
            flash(translate("ClientAddress added successfully"))->success();
            $route = 'admin.client-addresses.index';
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
        $client = ClientAddress::where('id', $id)->first();
        $shipments = \App\Shipment::where('client_id', $id)->paginate(15);
        if($client != null){
            return view('backend.client_addresses.show',compact('client','shipments'));
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
        $client_address = ClientAddress::where('id', $id)->first();
        $clients = Client::all();
        //dd($clients);
        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        if($client_address != null){
            return view('backend.client_addresses.edit',compact('client_address','clients','countries','user_type','staff_permission'));
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
			$model = ClientAddress::find($client);		
			
			$model->fill($_POST['ClientAddress']);
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved");
			}
            
			
			DB::commit();
            flash(translate("ClientAddress updated successfully"))->success();
            $route = 'admin.client-addresses.index';
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
    public function destroy($address)
    {
   
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $model = ClientAddress::findOrFail($address);
        $model->is_archived = 1;
        if($model->save()){
            flash(translate('ClientAddress has been deleted successfully'))->success();
            return redirect()->back();
        }
        return back();
    }
    public function status(Request $request)
    {
        $client_addresses = ClientAddress::where('default',1)->get();
        if($client_addresses)
        {
            foreach($client_addresses as $client_address){
                $client_address->default=0;
                $client_address->save();
            }
        }
        $model = ClientAddress::findOrFail($request->id);
        $model->default = $request->checked;
        if($model->save()){
            return 1;
        }
        return 0;
    }
}
