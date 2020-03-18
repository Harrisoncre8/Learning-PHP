<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // disabling protection
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
