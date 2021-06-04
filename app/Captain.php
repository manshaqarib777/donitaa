<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
  const PICKUP_MISSION = 1;
  const DELIVERY_MISSION = 2;
  const ALL_MISSIONS = 3;
  protected $guarded = [];

  protected static function boot()
  {
      parent::boot();

      static::addGlobalScope('restriction', function ($builder) {
        if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '1' || auth()->user()->staff->role->name  == 'Manager'))
          {
              $builder->whereHas('userCaptain.user', function($query) {
                  return $query->where('users.country_id', auth()->user()->country_id);
              });
          }    
          if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '2' || auth()->user()->staff->role->name  == 'Supervisor'))
          {
              $builder->whereHas('userCaptain.user', function($query) {
                  return $query->where('users.country_id', auth()->user()->country_id);
               });
          }
          if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '4' || auth()->user()->staff->role->name  == 'Agent'))
          {
              $builder->whereHas('userCaptain.user', function($query) {
                  return $query->where('users.country_id', auth()->user()->country_id);
               });
          }
              
      });
  }
  public function userCaptain()
  {
    return $this->hasOne('App\UserCaptain', 'captain_id', 'id');
  }
  public function branch()
  {
    return $this->hasOne('App\Branch', 'id', 'branch_id');
  }
  public function transaction(){
    return $this->hasMany(Transaction::class, 'captain_id');
  }
  public function getTypeAttribute($value)
  {
    if ($value == Self::PICKUP_MISSION) {
      return translate('Pickup');
    } elseif ($value == Self::DELIVERY_MISSION) {
      return translate('Delivery');
    } elseif ($value == Self::ALL_MISSIONS) {
      return translate('Pickup & Delivery');
    } else {
      return $value;
    }
  }
}
