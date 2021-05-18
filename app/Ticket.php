<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('restriction', function ($builder) {
            if(auth()->user()->staff && auth()->user()->staff->role_id == 1)
            {
                $builder->whereHas('user', function($query) {
                    return $query->where('country_id', auth()->user()->country_id);
                });
            }    
            if(auth()->user()->staff && auth()->user()->staff->role_id == 2)
            {
                $builder->whereHas('user', function($query) {
                    return $query->where('country_id', auth()->user()->country_id)
                    ->where('state_id', auth()->user()->state_id)
                    ->where('area_id', auth()->user()->area_id);
                 });
            }
                
        });
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function ticketreplies()
    {
        return $this->hasMany(TicketReply::class)->orderBy('created_at', 'desc');
    }

}
