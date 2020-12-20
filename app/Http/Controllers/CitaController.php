<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use Carbon\Carbon;
use \Illuminate\Support\Facades\Validator;
use \Illuminate\Contracts\Foundation\Application;
// use \Illuminate\Support\Facades\Validator;
// use \Illuminate\Support\Facades\Validator;
// use \Illuminate\Support\Facades\Validator;
// use \Illuminate\Support\Facades\Validator;
// use \Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'date' => 'required',
            'address' => 'required',
            'user' => 'required',
            'service' => 'required',
        ]);
        $cita = new Cita();
        $cita->userId = $request->user;
        $cita->fecha = $request->date;
        $cita->direccion = $request->address;
        $cita->servicio = $request->service;
        $cita->save();

        return back()->with('citacreada', 'Cita creada correctamente');
    }

    public function getData() {
        $citas = Cita::all();

    }
}
