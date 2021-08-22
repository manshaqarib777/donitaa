<?php /** @noinspection PhpUndefinedClassInspection */

namespace App\Http\Controllers\Api;

use App\Models\BusinessSetting;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Notifications\EmailVerificationNotification;
use DB;
use App\UserClient;
use App\Events\AddClient;
use App\UserCaptain;
use App\Events\AddCaptain;
use App\ClientAddress;
use App\Client;
use App\Captain;
use App\Http\Helpers\UserRegistrationHelper;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function signup(Request $request)
    {

        //dd($request->all());


        try{	
            // $request->validate([
            //     'name' => 'required|string',
            //     'email' => 'required|string|email|unique:users',
            //     'password' => 'required|string|min:6'
            // ]);
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|min:6'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
			DB::beginTransaction();
            $model = new  Client();
			$model->fill($request->only('email','name'));
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

			if ($request->input('password') != '' || $request->input('password') != null){
				$userRegistrationHelper->setPassword($request->input('password'));
			}else{
				$userRegistrationHelper->generatePassword();
			}
			$userRegistrationHelper->setRoleID(UserRegistrationHelper::MAINCLIENT);

            $response = $userRegistrationHelper->save();
            //dd($response);
            if(!$response['success']){
                //dd($response);
				throw new \Exception($response['error_msg']);
			}
			
            $userClient = new UserClient();
            $userClient->user_id = $response['user_id'];
            $userClient->client_id = $model->id;
            if (!$userClient->save()){
                throw new \Exception("Record Could Not Saved Successfully");
            }
            
            event(new AddClient($model));
            

            $user=User::find($response['user_id']);
            if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
                $user->email_verified_at = date('Y-m-d H:m:s');
            }
            else {
                $user->notify(new EmailVerificationNotification());
            }
            $user->save();
    
			DB::commit();

            return response()->json([
                'message' => 'Registration Successful. Please verify and log in to your account.'
            ], 201);

		}catch(\Exception $e){

            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);             
		}

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json(['message' => 'Unauthorized', 'user' => null], 401);
        $user = $request->user();
        if($user->email_verified_at == null){
            return response()->json(['message' => 'Please verify your account', 'user' => null], 401);
        }
        $tokenResult = $user->createToken('Personal Access Token');
        return $this->loginSuccess($tokenResult, $user);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function socialLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email'
        ]);
        if (User::where('email', $request->email)->first() != null) {
            $user = User::where('email', $request->email)->first();
        } else {
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'provider_id' => $request->provider,
                'email_verified_at' => Carbon::now()
            ]);
            $user->save();
            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->save();
        }
        $tokenResult = $user->createToken('Personal Access Token');
        return $this->loginSuccess($tokenResult, $user);
    }

    protected function loginSuccess($tokenResult, $user)
    {
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(100);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'user' => [
                'id' => $user->id,
                'type' => $user->user_type,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'avatar_original' => $user->avatar_original,
                'address' => $user->address,
                'country'  => $user->country,
                'city' => $user->city,
                'postal_code' => $user->postal_code,
                'phone' => $user->phone
            ]
        ]);
    }
}
