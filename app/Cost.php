<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $guarded = [];

	protected $casts = [
        'default_cost' => 'boolean',
        'extra_default_cost' => 'boolean',
    ];

    public function setDefaultCostAttribute($value)
    {
        $this->attributes['default_cost'] = (bool) $value;
    }

	public function setExtraDefaultCostAttribute($value)
    {
        $this->attributes['extra_default_cost'] = (bool) $value;
    }


    public function from_country(){
		return $this->hasOne('App\Country', 'id' , 'from_country_id');
	}
    public function to_country(){
		return $this->hasOne('App\Country', 'id' , 'to_country_id');
	}
    public function from_state(){
		return $this->hasOne('App\State', 'id' , 'from_state_id');
	}
    public function to_state(){
		return $this->hasOne('App\State', 'id' , 'to_state_id');
	}
    public function from_area(){
		return $this->hasOne('App\Area', 'id' , 'from_area_id');
	}
    public function to_area(){
		return $this->hasOne('App\Area', 'id' , 'to_area_id');
	}
}
