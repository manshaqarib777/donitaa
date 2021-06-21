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
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '1' || auth()->user()->staff->role->name  == 'Manager'))
            {
                $builder->whereHas('captain.userCaptain.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                })->orWhereHas('client.userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                })->orWhereHas('branch.userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '2' || auth()->user()->staff->role->name  == 'Supervisor'))
            {
                $builder->whereHas('captain.userCaptain.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 })->orWhereHas('client.userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 })->orWhereHas('branch.userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '4' || auth()->user()->staff->role->name  == 'Agent'))
            {
                $builder->whereHas('captain.userCaptain.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 })->orWhereHas('client.userClient.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 })->orWhereHas('branch.userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                 });
            }
                
        });
    }
    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id')->withoutGlobalScope('restriction');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'branch_id')->withoutGlobalScope('restriction');
    }

    public function captain()
    {
        return $this->belongsTo('App\Captain', 'captain_id')->withoutGlobalScope('restriction');
    }

    public function mission()
    {
        return $this->belongsTo('App\Mission', 'mission_id')->withoutGlobalScope('restriction');
    }

    public function shipment()
    {
        return $this->belongsTo('App\Shipment', 'shipment_id')->withoutGlobalScope('restriction');
    }
}
