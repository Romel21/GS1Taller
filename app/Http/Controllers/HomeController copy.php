<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function register() {
        return view('pages.register.index');
    }

    public function login() {
        return view('pages.login.index');
    }

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
