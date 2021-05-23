<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageShipment extends Model
{
    protected $guarded = [];
    protected $table = 'package_shipment';
    protected $casts = [
        'package_list' => 'object'
    ];
    
    
    public function package(){
		return $this->hasOne('App\Package', 'id' , 'package_id');
	}
}
