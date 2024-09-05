<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationUser extends Model
{
    use HasFactory;

    protected $table = 'location_user';

    protected $fillable = [
        'user_id',
        'latitude',
        'longitude',
        'detalle',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
