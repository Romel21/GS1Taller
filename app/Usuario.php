<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'password',
        'name',
        'apellidos',
        'userName',
        'rol',
        'dni',
        'phone'
    ];

    protected $table = 'usuarios';
}
