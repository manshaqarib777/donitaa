<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBranch extends Model
{
    protected $table = "user_branch";
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->withoutGlobalScope('restriction');
    }
}
