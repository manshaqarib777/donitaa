<?php 
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff|customer|branch']], function(){
	//Update Routes
    Route::resource('client-addresses','ClientAddressController',[
        'as' => 'admin'
    ]);

});

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff']], function(){
    Route::get('client-addresses/delete/{address}','ClientAddressController@destroy')->name('admin.client-addresses.delete-address');
});