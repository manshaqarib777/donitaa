<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReceiverAddress;
use App\Receiver;
use DB;
use Auth;

class ReceiverAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receiver_addresses = ReceiverAddress::where('is_archived',0)->orderBy('receiver_id')->paginate(15);
        return view('backend.receiver_addresses.index', compact('receiver_addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $receivers = Receiver::all();

        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        return view('backend.receiver_addresses.create',compact('receivers','countries','user_type','staff_permission'));
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
			$model = new ReceiverAddress();
			
			
			$model->fill($_POST['ReceiverAddress']);
			
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
            flash(translate("ReceiverAddress added successfully"))->success();
            $route = 'admin.receiver-addresses.index';
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
        $receiver = ReceiverAddress::where('id', $id)->first();
        $shipments = \App\Shipment::where('receiver_id', $id)->paginate(15);
        if($receiver != null){
            return view('backend.receiver_addresses.show',compact('receiver','shipments'));
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
        $receiver_address = ReceiverAddress::where('id', $id)->first();
        $receivers = Receiver::all();
        //dd($receivers);
        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        if($receiver_address != null){
            return view('backend.receiver_addresses.edit',compact('receiver_address','receivers','countries','user_type','staff_permission'));
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
			$model = ReceiverAddress::find($receiver);		
			
			$model->fill($_POST['ReceiverAddress']);
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved");
			}
            
			
			DB::commit();
            flash(translate("ReceiverAddress updated successfully"))->success();
            $route = 'admin.receiver-addresses.index';
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
        $model = ReceiverAddress::findOrFail($address);
        $model->is_archived = 1;
        if($model->save()){
            flash(translate('ReceiverAddress has been deleted successfully'))->success();
            return redirect()->back();
        }
        return back();
    }
    public function status(Request $request)
    {
        $model = ReceiverAddress::findOrFail($request->id);
        $receiver_addresses = ReceiverAddress::where('receiver_id',$model->receiver_id)->where('default',1)->get();
        if($receiver_addresses)
        {
            foreach($receiver_addresses as $receiver_address){
                $receiver_address->default=0;
                $receiver_address->save();
            }
        }
        $model->default = $request->checked;
        if($model->save()){
            return 1;
        }
        return 0;
    }
}
