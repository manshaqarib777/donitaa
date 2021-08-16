<?php 
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff|customer|branch']], function(){
	//Update Routes
    Route::resource('receiver-addresses','ReceiverAddressController',[
        'as' => 'admin'
    ]);

});

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff']], function(){
    Route::get('receiver-addresses/delete/{address}','ReceiverAddressController@destroy')->name('admin.receiver-addresses.delete-address');
    Route::post('receiver-addresses/status','ReceiverAddressController@status')->name('admin.receiver-addresses.update-status');
});