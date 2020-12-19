<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'userId',
        'fecha',
        'direccion',
        'servicio'
    ];

    protected $table = 'citas';
}
