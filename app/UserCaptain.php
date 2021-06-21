<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCaptain extends Model
{
    protected $table = "user_captain";
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->withoutGlobalScope('restriction');
    }
}
