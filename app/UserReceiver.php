<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReceiver extends Model
{
    protected $table = "user_receiver";
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->withoutGlobalScope('restriction');
    }
    public function receiver()
    {
        return $this->belongsTo(Client::class)->withoutGlobalScope('restriction');
    }
}
