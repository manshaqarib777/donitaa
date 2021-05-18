<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    CONST MESSION_TYPE = 1;
    CONST SHIPMENT_TYPE = 2;
    CONST MANUAL_TYPE = 3;

    CONST CAPTAIN = 1;
    CONST CLIENT = 2;
    CONST BRANCH = 3;

    CONST DEBIT = 1;   // -
    CONST CREDIT = 2;  // +

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('restriction', function ($builder) {
            if(auth()->user()->staff && auth()->user()->staff->role_id == 1)
            {
                $builder->whereHas('captain.userCaptain.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                })->orWhereHas('client.userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                })->orWhereHas('branch.userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(auth()->user()->staff && auth()->user()->staff->role_id == 2)
            {
                $builder->whereHas('captain.userCaptain.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id)
                    ->where('users.state_id', auth()->user()->state_id)
                    ->where('users.area_id', auth()->user()->area_id);
                 })->orWhereHas('client.userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id)
                    ->where('users.state_id', auth()->user()->state_id)
                    ->where('users.area_id', auth()->user()->area_id);
                 })->orWhereHas('branch.userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id)
                    ->where('users.state_id', auth()->user()->state_id)
                    ->where('users.area_id', auth()->user()->area_id);
                 });
            }
                
        });
    }
    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'branch_id');
    }

    public function captain()
    {
        return $this->belongsTo('App\Captain', 'captain_id');
    }

    public function mission()
    {
        return $this->belongsTo('App\Mission', 'mission_id');
    }

    public function shipment()
    {
        return $this->belongsTo('App\Shipment', 'shipment_id');
    }
}
