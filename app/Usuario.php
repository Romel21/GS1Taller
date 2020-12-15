<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'password',
        'name',
        'userName',
        'rol',
        'dni',
        'phone'
    ];

    protected $table = 'usuarios';
}
