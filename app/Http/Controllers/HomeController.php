<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
<<<<<<< HEAD
=======
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

>>>>>>> 2eb3f328f65650587c6d3e723129027cb4358948
    public function cita() {
        return view('pages.cita.index');
    }

    public function pago() {
        return view('pages.paidment.index');
    }

    public function perfil() {
        return view('pages.profile.index');
    }

    public function verCitas() {
        return view('pages.misCitas.index');
    }
}
