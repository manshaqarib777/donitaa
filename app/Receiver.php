<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('restriction', function ($builder) {
            if(isset(auth()->user()->staff) && auth()->user()->staff->role_id == 1)
            {
                $builder->whereHas('user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(isset(auth()->user()->staff) && auth()->user()->staff->role_id == 2)
            {
                $builder->whereHas('user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id)
                    ->where('users.state_id', auth()->user()->state_id)
                    ->where('users.area_id', auth()->user()->area_id);
                 });
            }
                
        });
    }
    public function user(){
      return $this->belongsTo('App\User', 'user_id' , 'id');
    }
}