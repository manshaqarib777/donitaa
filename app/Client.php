<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('restriction', function ($builder) {
            if(auth()->user()->staff && auth()->user()->staff->role_id == 1)
            {
                $builder->whereHas('userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(auth()->user()->staff && auth()->user()->staff->role_id == 2)
            {
                $builder->whereHas('userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id)
                    ->where('users.state_id', auth()->user()->state_id)
                    ->where('users.area_id', auth()->user()->area_id);
                 });
            }
                
        });
    }
    public function userClient(){
      return $this->hasOne('App\UserClient', 'client_id' , 'id');
    }
}