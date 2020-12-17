<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'id',
        'password',
        'name',
        'userName',
        'rol',
        'dni',
        'phone'
    ];

    protected $table = 'usuarios';
}
