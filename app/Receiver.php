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
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '1' || auth()->user()->staff->role->name  == 'Manager'))
            {
                $builder->whereHas('userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '2' || auth()->user()->staff->role->name  == 'Supervisor'))
            {
                $builder->whereHas('userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '4' || auth()->user()->staff->role->name  == 'Agent'))
            {
                $builder->whereHas('userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
            if(isset(auth()->user()->user_type) && auth()->user()->user_type == 'customer' && isset(auth()->user()->userClient))
            {
                $builder->whereHas('userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
            
                
        });
    }

    public function userReceiver()
    {
        return $this->hasOne('App\UserReceiver', 'receiver_id' , 'id')->withoutGlobalScope('restriction');
    }
}