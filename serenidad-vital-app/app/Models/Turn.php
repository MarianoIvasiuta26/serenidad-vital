<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_apellido',
        'user_email',
        'user_telefono',
        'tipo_consulta'
    ];

}
