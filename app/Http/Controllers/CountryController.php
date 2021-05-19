<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Currency;
use DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::paginate(15);
        return view('backend.setup_configurations.countries.index', compact('countries'));
    }

    public function index_()
    {
        $countries = Country::paginate(15);
        $currencies = Currency::pluck('code')->toArray();
        return view('backend.countries.index', compact('countries','currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currencies = Currency::all();
        return view('backend.countries.create',compact('currencies'));
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
        $request->validate([
            'name' => 'required|unique:countries,name',
            'currency' => 'required',
        ]);
        try{	
			DB::beginTransaction();
			$model = new Country();
			$model->name = $request->name;
			$model->currency = $request->currency;
	      
			if (!$model->save()){
				throw new \Exception();
			}
			DB::commit();
            flash(translate("Country added successfully"))->success();
            $route = 'admin.countries.index';
            return execute_redirect($request,$route);
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
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $country = Country::where('id', $id)->first();
        if($country != null){
            return view('backend.countries.show',compact('country'));
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
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $country = Country::where('id', $id)->first();
        $currencies = Currency::all();

        if($country != null){
            return view('backend.countries.edit',compact('country','currencies'));
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
    public function update(Request $request, $Country)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        try{	
			DB::beginTransaction();
			$model = Country::find($Country);
			$model->name = $request->name;
			$model->currency = $request->currency;
            			
			if (!$model->save()){
				throw new \Exception();
			}
			
			DB::commit();
            flash(translate("Country updated successfully"))->success();
            $route = 'admin.countries.index';
            return execute_redirect($request,$route);
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
    public function destroy($country)
    {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
   
        $model = Country::findOrFail($country);
        if($model->delete()){
            flash(translate('Country has been deleted successfully'))->success();
            return redirect()->back();
        }
        return back();
    }

    public function updateStatus(Request $request){
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        $country = Country::findOrFail($request->id);
        $country->status = $request->status;
        if($country->save()){
            return 1;
        }
        return 0;
    }
}
