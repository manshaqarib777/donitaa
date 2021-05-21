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
          if(isset(auth()->user()->staff) && auth()->user()->staff->role_id == 1)
          {
              $builder->whereHas('userCaptain.user', function($query) {
                  return $query->where('users.country_id', auth()->user()->country_id);
              });
          }    
          if(isset(auth()->user()->staff) && auth()->user()->staff->role_id == 2)
          {
              $builder->whereHas('userCaptain.user', function($query) {
                  return $query->where('users.country_id', auth()->user()->country_id)
                  ->where('users.state_id', auth()->user()->state_id)
                  ->where('users.area_id', auth()->user()->area_id);
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
