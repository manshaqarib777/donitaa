<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];
    protected $casts = [
        'default_cost' => 'boolean',
    ];

    public function setDefaultCostAttribute($value)
    {
        $this->attributes['default_cost'] = (bool) $value;
    }
    public function category(){
		return $this->belongsTo('App\Category' , 'category_id', 'id');
	}
}
