<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "branchs";
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();
  
        static::addGlobalScope('restriction', function ($builder) {
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '1' || auth()->user()->staff->role->name  == 'Manager'))
            {
                $builder->whereHas('userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->country_id);
                });
            }    
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '2' || auth()->user()->staff->role->name  == 'Supervisor'))
            {
                $builder->whereHas('userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->staff->country_id);
                 });
            }
            if(isset(auth()->user()->staff->role) && (auth()->user()->staff->role->id  == '4' || auth()->user()->staff->role->name  == 'Agent'))
            {
                $builder->whereHas('userBranch.user', function($query) {
                    return $query->where('users.country_id', auth()->user()->staff->country_id);
                 });
            }
                
        });
    }
    public function userBranch(){
		return $this->hasOne('App\UserBranch', 'branch_id' , 'id');
	}
}
