<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NosotrosText extends Model
{
    use HasFactory;

    protected $table = 'nosotros_text';
    protected $fillable = [
        'user_id',
        'texto',
        'nombre_de_la_empresa',
    ];
}
