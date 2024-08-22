<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
    protected $table = 'user_photos';

    protected $fillable = [
        'user_id',
        'profile_picture',
        'banner_picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
