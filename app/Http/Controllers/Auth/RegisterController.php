<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\ClientAddress;
use App\Customer;
use App\BusinessSetting;
use App\OtpConfiguration;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OTPVerificationController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Cookie;
use Nexmo;
use App\Client;
use App\Captain;
use App\Http\Helpers\UserRegistrationHelper;
use DB;
use App\UserClient;
use App\Events\AddClient;
use App\UserCaptain;
use App\Events\AddCaptain;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Client.first_name' => 'required|string|max:255',
            'Client.last_name' => 'required|string|max:255',
            'Client.email' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data);
       // dd($data);

        try{	
			DB::beginTransaction();
            //dd($data['type']);

            if($data['type']=="3")
            {
                $model = new Captain();
                $remove =['first_name','last_name','company'];
                $data['Client']['name']=$data['Client']['first_name'].' '.$data['Client']['last_name'];
                $data['Client']= array_diff_key($data['Client'], array_flip($remove));
            }
            else
            {
                $model = new  Client();
                $remove =['first_name','last_name'];
                $data['Client']['name']=$data['Client']['first_name'].' '.$data['Client']['last_name'];
                $data['Client']= array_diff_key($data['Client'], array_flip($remove));
                $model->created_by_type = 'admin';
            }
            //dd($data);
			
			$model->fill($data['Client']);
			$model->code = -1;
          
			if (!$model->save()){
                throw new \Exception();
			}

            $model->created_by = 1;
            
			$model->code = $model->id;
			if (!$model->save()){
				throw new \Exception("Record Could Not Saved Successfully");

			}
            $userRegistrationHelper = new UserRegistrationHelper();
			$userRegistrationHelper->setEmail($model->email); 
			$userRegistrationHelper->setName($model->name);
			$userRegistrationHelper->setApiToken();
            $userRegistrationHelper->setCountryID($data['country_id']); 
			$userRegistrationHelper->setStateID($data['state_id']); 
			$userRegistrationHelper->setAreaID($data['area_id']);
			if ($data['password'] != '' || $data['password'] != null){
				$userRegistrationHelper->setPassword($data['password']);
			}else{
				$userRegistrationHelper->generatePassword();
			}
			$userRegistrationHelper->setRoleID(UserRegistrationHelper::MAINCLIENT);
            if($data['type'] == "3")
            {
			    $userRegistrationHelper->setUserType("captain");
            }
			if(Cookie::has('referral_code')){
                $referral_code = Cookie::get('referral_code');
                $referred_by_user = User::where('referral_code', $referral_code)->first();
                if($referred_by_user != null){
                    $userRegistrationHelper->referred_by = $referred_by_user->id;
                }
            }
            $response = $userRegistrationHelper->save();
            if(!$response['success']){
                //dd($response);
				throw new \Exception($response['error_msg']);
			}
			
            if($data['type'] != "3")
            {

                $userClient = new UserClient();
                $userClient->user_id = $response['user_id'];
                $userClient->client_id = $model->id;
                if (!$userClient->save()){
                    throw new \Exception("Record Could Not Saved Successfully");
                }
                
                $address = ClientAddress::where('name',$data['first_address'])->get()->first();
                if($address==null)
                {
                    $address = new ClientAddress();
                }
                $address->name=$data['first_address'];
                $address->type=$data['first_address'];
                $address->address=$data['second_address'];
                $address->client_id=$model->id;
                $address->save();
                event(new AddClient($model));

            }
            else
            {
                $userCaptain = new UserCaptain();
                $userCaptain->user_id = $response['user_id'];
                $userCaptain->Captain_id = $model->id;
                if (!$userCaptain->save()){
                    throw new \Exception();
                }
                event(new AddCaptain($model));
            }
			DB::commit();
            $user=User::find($response['user_id']);
            return $user;
		}catch(\Exception $e){
            dd($e->getMessage());
            DB::rollback();
            flash('Email Already Exist')->error();
            return false;             
		}

    }

    public function register(Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            if(User::where('email', $request->email)->first() != null){
                flash(translate('Email or Phone already exists.'));
                return back();
            }
        }
        elseif (User::where('phone', '+'.$request->country_code.$request->phone)->first() != null) {
            flash(translate('Phone already exists.'));
            return back();
        }

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());
        if(!$user){    
            return redirect()->route('register')->withInput();
        }
        $this->guard()->login($user);

        if($user->email != null){
            if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                flash(translate('Registration successfull.'))->success();
            }
            else {
                event(new Registered($user));
                flash(translate('Registration successfull. Please verify your email.'))->success();
            }
        }

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        if($user->country_id){
            $country=\App\Country::find($user->country_id);
            request()->session()->put('country', $country->iso2);

            $currency = \App\Currency::where('code', $country->currency)->first();
            if($currency)
            {
                request()->session()->put('currency_code', $currency->code);   
            }
        }
        if ($user->email == null) {
            return redirect()->route('verification');
        }
        else {
            return redirect('admin');
        }
    }
}