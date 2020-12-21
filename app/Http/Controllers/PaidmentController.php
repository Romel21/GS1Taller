<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use \Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Redirector;
use App\Cita;
use App\User;
use App\Pago;
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
        $pago = User::join("citas", "citas.userId", "=", "users.id")->select("*")->where("citas.id", "=", $id)->get();
        $pagos = json_decode($pago->toJson());
        // dd($pagos[0]);
        // return view('pages.paidment.index');
        return view('pages.paidment.index', [
            'pagos' => $pagos[0]
        ]);
    }


    public function pagado(Request $request, $id){
        // dd($request->estado);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'direccion' => ['required'],
            'servicio' => ['required'],
            'fecha' => ['required'],
            'estado' => ['required'],
            'radiopago' => ['required'],
        ]);
        // dd('hola');
        // dd($request->all()->estado);
        $pago = new Pago();
        $pago->citaId = $id;
        $pago->fecha = $request->fecha;
        $pago->servicio = $request->servicio;    
        $pago->estado = $request->estado;
        

        $pago->save();
        
        if($request->radiopago == "tarjeta"){
            // return view('pages.paidment.index', $id)->with('pagotarjeta', 'pagado');
            return back()->with('pagotarjeta', 'pagado');

        }else{
            return back()->with('pagoefectivo', 'pagado');
            // return redirect()->route('pagoIndex')->with('pagoefectivo', 'pagado');

        }
        
    }


}
