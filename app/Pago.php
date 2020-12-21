<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'citaId',
        'fecha',
        'servicio',
        'estado'
    ];

    protected $table = 'pagos';
}
