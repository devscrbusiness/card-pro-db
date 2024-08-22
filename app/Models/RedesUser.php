<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedesUser extends Model
{
    use HasFactory;

    protected $table = 'redes_users';

    protected $fillable = [
        'id',
        'user_id',
        'red_id',
        'created_at',
        'updated_at',
        'descripcion',
    ];
}
