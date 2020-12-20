<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
