<?php

Route::prefix('v1/auth')->group(function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('signup', 'Api\AuthController@signup');
    Route::post('social-login', 'Api\AuthController@socialLogin');
    Route::post('password/create', 'Api\PasswordResetController@create');
    Route::middleware('auth:api')->group(function () {
        Route::get('logout', 'Api\AuthController@logout');
        Route::get('user', 'Api\AuthController@user');
    });
});

Route::prefix('v1')->group(function () {
   
    Route::apiResource('business-settings', 'Api\BusinessSettingController')->only('index');


    Route::apiResource('general-settings', 'Api\GeneralSettingController')->only('index');

    Route::apiResource('settings', 'Api\SettingsController')->only('index');
    Route::get('branches', 'Api\SettingsController@branches');
    Route::get('clients', 'Api\SettingsController@clients');
    Route::get('receivers', 'Api\SettingsController@receivers');
    Route::get('countries', 'Api\SettingsController@countries');
    Route::get('states/{id}', 'Api\SettingsController@states');
    Route::get('areas/{id}', 'Api\SettingsController@areas');
    Route::get('times', 'Api\SettingsController@times');
    Route::get('categories', 'Api\SettingsController@categories');
    Route::get('packages/{id}', 'Api\SettingsController@packages');
    Route::get('payment_gateways', 'Api\SettingsController@payment_gateways');

  

    Route::get('user/info/{id}', 'Api\UserController@info')->middleware('auth:api');
    Route::post('user/info/update', 'Api\UserController@updateName')->middleware('auth:api');
    Route::get('user/shipping/address/{id}', 'Api\AddressController@addresses')->middleware('auth:api');
    Route::post('user/shipping/create', 'Api\ShipmentApiController@store')->middleware('auth:api');
    Route::post('user/shipping/update/{id}', 'Api\ShipmentApiController@update')->middleware('auth:api');
    Route::get('user/shipping/delete/{id}', 'Api\AddressController@deleteShippingAddress')->middleware('auth:api');
    Route::get('tracking/{code}','Api\SettingsController@track')->name('admin.shipments.track');

    Route::group(['middleware' => ['auth:api', 'user_role:customer']], function(){
        //Update Routes
        Route::resource('client-addresses','Api\ClientAddressController',[
            'as' => 'admin'
        ]);
        Route::post('client-addresses/status','Api\ClientAddressController@status')->name('admin.client-addresses.update-status');
    });
    
    Route::group(['middleware' => ['auth:api', 'user_role:admin|staff']], function(){
        Route::get('client-addresses/delete/{address}','Api\ClientAddressController@destroy')->name('admin.client-addresses.delete-address');
        
    });

});

Route::fallback(function() {
    return response()->json([
        'data' => [],
        'success' => false,
        'status' => 404,
        'message' => 'Invalid Route'
    ]);
});
