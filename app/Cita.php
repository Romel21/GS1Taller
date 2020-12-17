<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'id',
        'userId',
        'fecha',
        'direccion'
    ];

    protected $table = 'citas';
}
