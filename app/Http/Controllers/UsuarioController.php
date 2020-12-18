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
        try {
            $user = new Usuario();
            $formulario = $request->only($user->getFillable());
            $user->fill($formulario);

            if ($user->save()) {
                $mensaje = [
                    'mensaje' => 'Usuario creado correctamente.',
                    'tipo' => 'succes'
                ];

                return response($mensaje, 200);
            } else {
                $mensaje = [
                    'mensaje' => 'Error al crear el usuario.',
                    'tipo' => 'error'
                ];

                return response($mensaje, 500);
            }
        } catch (\Exception $exception) {
            $mensaje = [
                'mensaje' => $exception->getMensaje(),
                'tipo' => 'error'
            ];
            return response($mensaje, 500);
        }
    }

    public function show($id) {
        $user = Usuario::query()->find($id);
        return response($user, 200);
    }
}
