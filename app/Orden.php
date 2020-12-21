<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable = [
        'userId',
        'nombre',
        'descripcion'
    ];

    protected $table = 'ordenes';
}
