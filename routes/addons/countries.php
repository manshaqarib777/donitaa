<?php 
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
	//Update Routes
    Route::resource('countries','CountryController',[
        'as' => 'admin',
        'except' => [
            'index'
        ]
    ]);
    Route::get('countries','CountryController@index_')->name('admin.countries.index');
    Route::get('countries/delete/{country}','CountryController@destroy')->name('admin.countries.delete-country');

});