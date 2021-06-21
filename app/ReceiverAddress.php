<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiverAddress extends Model
{
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('restriction', function ($builder) {
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '1' || auth()->user()->staff->role->name  == 'Manager'))
            {
                $builder->whereHas('receiver.userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '2' || auth()->user()->staff->role->name  == 'Supervisor'))
            {
                $builder->whereHas('receiver.userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '4' || auth()->user()->staff->role->name  == 'Agent'))
            {
                $builder->whereHas('receiver.userReceiver.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
            if(isset(auth()->user()->user_type) && auth()->user()->user_type == 'customer')
            {
                $builder->where('receiver_id',@auth()->user()->userReceiver->receiver->id);
            }
                
        });
    }
    public function receiver(){
      return $this->belongsTo('App\Receiver', 'receiver_id' , 'id')->withoutGlobalScope('restriction');
    }
    public function country(){
		return $this->belongsTo('App\Country', 'country_id','id');
	}
    public function state(){
		return $this->belongsTo('App\State', 'state_id','id');
	}
    public function area(){
		return $this->belongsTo('App\Area', 'area_id','id');
	}
}