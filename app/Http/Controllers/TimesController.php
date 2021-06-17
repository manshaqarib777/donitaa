<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use App\Http\Helpers\UserRegistrationHelper;
use DB;
class TimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::paginate(15);
        return view('backend.shipments.index-time', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shipments.create-time');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        try{	
			DB::beginTransaction();
            $check = Time::where('name',$_POST['Time']['name'])->first();
            if($check != null)
            {
                flash(translate("This time is created before"))->error();
                return back();
            }
			$model = new Time();
			
			
			$model->fill($_POST['Time']);
	      
			if (!$model->save()){
				throw new \Exception();
			}
			
			DB::commit();
            flash(translate("Time added successfully"))->success();
            return back();
		}catch(\Exception $e){
			DB::rollback();
			print_r($e->getMessage());
			exit;
			
			flash(translate("Error"))->error();
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
        $time = Time::where('id', $id)->first();
        if($time != null){
            return view('backend.shipments.edit-time',compact('time'));
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
    public function update(Request $request, $time)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        try{	
			DB::beginTransaction();
            $check = Time::where('name',$_POST['Time']['name'])->whereNotIn('id',[$time])->first();
            if($check != null)
            {
                flash(translate("This time is created before"))->error();
                return back();
            }
			$model = Time::find($time);
			
			
			$model->fill($_POST['Time']);
		
			if (!$model->save()){
				throw new \Exception();
			}
			
			
			DB::commit();
            flash(translate("Time updated successfully"))->success();
            return back();
		}catch(\Exception $e){
			DB::rollback();
			print_r($e->getMessage());
			exit;
			
			flash(translate("Error"))->error();
            return back();
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($time)
    {
   
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $model = Time::findOrFail($time);
        
        if($model->delete()){
            flash(translate('Time has been deleted successfully'))->success();
            return redirect()->back();
        }
        return back();
    }
}
