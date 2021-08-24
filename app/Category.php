<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $casts = [
        'default_cost' => 'boolean',
    ];

    public function setDefaultCostAttribute($value)
    {
        $this->attributes['default_cost'] = (bool) $value;
    }
    public function packages(){
		return $this->hasMany('App\Package' , 'category_id', 'id');
	}
}
