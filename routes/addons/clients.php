<?php 
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|customer|staff|branch']], function(){
	//Update Routes
    Route::resource('clients','ClientController',[
        'as' => 'admin'
    ]);

});

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'user_role:admin|staff']], function(){
    Route::get('clients/delete/{client}','ClientController@destroy')->name('admin.clients.delete-client');
});
Route::get('clients/ajaxed-get-translation','ClientController@ajaxGetTranslations')->name('admin.clients.get-translation-ajax');