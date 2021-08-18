<?php 
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff|customer|branch']], function(){
	//Update Routes
    Route::resource('receivers','ReceiverController',[
        'as' => 'admin'
    ]);

});

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff']], function(){
    Route::get('receivers/delete/{receiver}','ReceiverController@destroy')->name('admin.receivers.delete-receiver');
});