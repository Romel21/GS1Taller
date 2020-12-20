<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cita;
use App\User;

class PaidmentController extends Controller
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


    public function index(){
        $user= Auth::user();
        $id=$user->id;
        // $cita = Cita::select('*')->get();
        // $cita = Cita::join("users", "users.id", "=", "citas.userId")->select("*")->get();
        $cita = User::join("citas", "citas.userId", "=", "users.id")->select("*")->get();

        $citas = json_decode($cita->toJson());
        // dd($citas);
        return view('pages.paidment.lista', [
            'citas' => $citas
        ]);
        // return view('pages.paidment.lista');
    }

    public function indexpagar($id){
        dd($id);
        return view('pages.paidment.index');
    }


}
