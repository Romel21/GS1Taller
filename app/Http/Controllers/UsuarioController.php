<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Carbon\Carbon;
use Auth;
use \Illuminate\Support\Facades\Validator;
/**
 * Store a newly created resource in storage
 * 
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */

class UsuarioController extends Controller
{
    public function store(Request $request) {
            $request->validate([
                'contraseña' => 'required',
                'usuario' => 'required',
                'apellidos' => 'required',
                'username' => 'required',
                'rol' => 'required',
                'dni' => 'required',
                'telefono' => 'required'
            ]);
            $user = new Usuario();
            $user->password = md5($request->contraseña);
            $user->name = $request->usuario;
            $user->apellidos = $request->apellidos;
            $user->userName = $request->username;
            $user->rol = $request->rol;
            $user->dni = $request->dni;
            $user->phone = $request->telefono;
            $user->save();
    
            return back()->with('registroexitoso', 'Usuario creado correctamente');
    }

    public function show($id) {
        $user = Usuario::query()->find($id);
        return response($user, 200);
    }

    public function loginConfirm(Request $request) {
        $credenciales = $request->validate([
            'username' => 'required',
            'contraseña' => 'required',
        ]);
            
        if(Auth::attempt($credenciales)){
            return back()->with('loginexitoso', 'Usuario creado correctamente');
        }else{
            return back()->with('loginfail', 'Usuario falló');
        }
    }
    
}
