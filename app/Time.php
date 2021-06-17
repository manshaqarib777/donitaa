<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $guarded = [];
    protected $casts = [
        'default_cost' => 'boolean',
    ];

    public function setDefaultCostAttribute($value)
    {
        $this->attributes['default_cost'] = (bool) $value;
    }
}
