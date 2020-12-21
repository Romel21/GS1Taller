<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
use \App\Orden;

class OrdenController extends Controller
{
    public function getTecnicos() {
        $user = User::select('*')->where('role_id', '=', '4')->get();
        $users = json_decode($user->toJson());
        return view('/pages/lista/index', [
            'users' => $users
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'tarea' => 'required',
            'descrip' => 'required',
            'mecanico' => 'required'
        ]);
        $orden = new Orden();
        $orden->userId = $request->mecanico;
        $orden->nombre = $request->tarea;
        $orden->descripcion = $request->descrip;
        $orden->save();

        return back()->with('ordencreada', 'Orden creada correctamente');
    }

    public function getTareas() {
        $orden = User::join("ordenes", "ordenes.userId", "=", "users.id")->select("*")->get();
        $ordenes = json_decode($orden->toJson());
        return view('/pages/tareas/index', [
            'ordenes' => $ordenes
        ]);
    }

    public function getMisTareas() {
        $user = Auth::user();
        $id = $user->id;
        $orden = Orden::select('*')->where('userId', '=', $id)->get();
        $ordens = json_decode($orden->toJson());
        return view('/pages/agenda/index', [
            'ordens' => $ordens
        ]);
    }

    public function destroy($id) {
        try {
            Orden::destroy($id);
        } catch(\Exception $exception){}
        
    }
}
