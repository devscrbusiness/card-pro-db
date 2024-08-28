<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioUser extends Model
{
    use HasFactory;

    protected $table = 'servicios_user';

    protected $fillable = ['user_id', 'servicio'];
}
