<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Hash,Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = \App\Country::where('covered',1)->get();
        $user_type = Auth::user()->user_type;
        $staff_permission = json_decode(Auth::user()->staff->role->permissions ?? "[]");
        return view('backend.admin_profile.index',compact('countries','user_type','staff_permission'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notifications()
    {
        return view('backend.admin_profile.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification($id)
    {
        
        $notification = \Auth::user()->notifications()->where('id',$id)->first();
        if($notification->read_at == null){
            $notification->markAsRead();
        }

        return redirect($notification->data['message']['url']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('asas');
        if(env('DEMO_MODE') == 'On'){
            flash(translate('Sorry! the action is not permitted in demo '))->error();
            return back();
        }

        $user = User::with('userClient.client','userReceiver.receiver','userBranch.branch','userCaptain.captain')->findOrFail($id);

        //dd($user);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->area_id = $request->area_id;
        if($request->new_password != null && ($request->new_password == $request->confirm_password)){
            $user->password = Hash::make($request->new_password);
        }
        $user->avatar_original = $request->avatar;
        if($user->userClient!==null)
        {

            $user->userClient->client->email=$user->email;
            $user->userClient->client->name=$user->name;
            $user->userClient->client->save();
        }
        if($user->userReceiver!==null)
        {

            $user->userReceiver->receiver->email=$user->email;
            $user->userReceiver->receiver->name=$user->name;
            $user->userReceiver->receiver->save();
        }
        if($user->userBranch!==null)
        {

            $user->userBranch->branch->email=$user->email;
            $user->userBranch->branch->name=$user->name;
            $user->userBranch->branch->save();
        }
        if($user->userCaptain!==null)
        {

            $user->userCaptain->captain->email=$user->email;
            $user->userCaptain->captain->name=$user->name;
            $user->userCaptain->captain->save();
        }
        if($user->save()){
            flash(translate('Your Profile has been updated successfully!'))->success();
            return back();
        }

        flash(translate('Sorry! Something went wrong.'))->error();
        return back();
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
