<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Telling laravel to allow developer to manually guard post data
    protected $guaded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
