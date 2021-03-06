<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user= Auth::user();
        $rol='';
        $id=$user->id;
        if($user->esAdmin()){
            $rol='Administrador';
            return view('home', compact('user', 'rol', 'id'));
        }else if($user->esJefe()){
            $rol='Jefe de taller';
            return view('home', compact('user', 'rol','id'));
        }else if($user->esMecanico()){
            $rol='Mecanico';
            return view('home', compact('user', 'rol','id'));
        }else if($user->esRecepcionista()){
            $rol='Recepcionista';
            return view('home', compact('user', 'rol','id'));
        }
        else{
            $rol='Cliente';
            return view('home', compact('user', 'rol','id'));
        }
        
        // return view('home', compact('user'));
    }

    public function cita() {
        return view('pages.cita.index');
    }

    public function pago() {
        return view('pages.paidment.index');
    }

    public function perfil() {
        $user= Auth::user();
        $rol='';
        $id=$user->id;
        if($user->esAdmin()){
            $rol='Administrador';
            return view('home', compact('user', 'rol', 'id'));
        }else if($user->esJefe()){
            $rol='Jefe de taller';
            return view('home', compact('user', 'rol','id'));
        }else if($user->esMecanico()){
            $rol='Mecanico';
            return view('home', compact('user', 'rol','id'));
        }else if($user->esRecepcionista()){
            $rol='Recepcionista';
            return view('home', compact('user', 'rol','id'));
        }
        else{
            $rol='Cliente';
            return view('home', compact('user', 'rol','id'));
        }
    }

    public function verCitas() {
        return view('pages.misCitas.index');
    }

    public function verTecnicos() {
        return view('pages.lista.index');
    }

    public function verTareas() {
        return view('pages.tareas.index');
    }

    public function añadirTarea() {
        $user = User::select('*')->where('role_id', '=', '4')->get();
        $users = json_decode($user->toJson());
        return view('pages.asignar.index', [
            'users' => $users
        ]);
    }

    public function misTareas() {
        return view('pages.agenda.index');
    }
}
