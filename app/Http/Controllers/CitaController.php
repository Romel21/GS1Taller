<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Cita;
use App\User;
use Carbon\Carbon;
use \Illuminate\Support\Facades\Validator;
use \Illuminate\Contracts\Foundation\Application;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\Http\JsonResponse;
use \Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Storage;
use \Illuminate\Validation\Rule;
use \Illuminate\View\View;
use \App\Http\Controllers\DB;


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
        $user= Auth::user();
        $id=$user->id;
        $cita = Cita::select('*')->where('userId', '=', $id)->get();
        $citas = json_decode($cita->toJson());
        return view('/pages/misCitas/index', [
            'citas' => $citas
        ]);
    }

    public function destroy($cita) {
        $cita->delete();
    }
}
