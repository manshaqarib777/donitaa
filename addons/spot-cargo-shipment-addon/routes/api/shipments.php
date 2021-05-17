<?php 

Route::post('api/admin/shipments/create', 'ShipmentController@storeAPI')->name('api.admin.shipments.store');
