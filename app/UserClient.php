<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClient extends Model
{
    protected $table = "user_client";
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->withoutGlobalScope('restriction');
    }
    public function client()
    {
        return $this->belongsTo(Client::class)->withoutGlobalScope('restriction');
    }
}
