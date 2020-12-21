<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use \Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Redirector;
use App\Cita;
use App\User;
use Carbon\Carbon;

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
        $cita = User::join("citas", "citas.userId", "=", "users.id")->select("*")->get();

        $citas = json_decode($cita->toJson());
        return view('pages.paidment.lista', [
            'citas' => $citas
        ]);
    }

    public function indexpagar($id){
        $pago = User::join("citas", "citas.userId", "=", "users.id")->select("*")->where("citas.id", "=", $id)->get();
        $pagos = json_decode($pago->toJson());
        return view('pages.paidment.index', [
            'pagos' => $pagos[0]
        ]);
    }


    public function destroy($id){
        try {
            Cita::destroy($id);
        } catch(\Exception $exception){}

    }


}
