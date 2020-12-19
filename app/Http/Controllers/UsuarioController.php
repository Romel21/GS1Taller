<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Carbon\Carbon;
/**
 * Store a newly created resource in storage
 * 
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */

class UsuarioController extends Controller
{    
    public function store(Request $request) {
            $user = new Usuario();
            $user->password = md5($request->contraseña);
            $user->name = $request->usuario;
            $user->apellidos = $request->apellidos;
            $user->userName = $request->username;
            $user->rol = $request->rol;
            $user->dni = $request->dni;
            $user->phone = $request->telefono;
            $user->save();
    
            return back()->with('mensaje', 'Nota agregada');
    }

    public function show($id) {
        $user = Usuario::query()->find($id);
        return response($user, 200);
    }
    
}
