<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // disabling protection
    protected $guarded = [];

    // provide default image unless user uploads custom profile image
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/storage/profile/0epQFwTJ4D7dRbBpAXMiSw1i63pKMbT1g3u7iNgN.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
