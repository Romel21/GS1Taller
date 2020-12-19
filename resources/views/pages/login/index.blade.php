@extends('layouts/contentLayout')

@section('content')
<link rel="stylesheet" href="{{ asset(mix('css/login.css')) }}">
@if(session('loginexitoso'))
  <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
  <div class="card-body">
    <h5 class="card-title">Usuario logueado correctamente</h5>
    <p class="card-text">¡Gracias por loguearte!</p>
    <a href="#" class="btn btn-primary registro-correcto">Aceptar</a>
  </div>
</div>
@elseif(session('loginfail'))
<div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
  <div class="card-body">
    <h5 class="card-title">Ha fallado la autenticacion</h5>
    <a href="#" class="btn btn-primary registro-correcto">Cerrar</a>
  </div>
</div>
@else
<form class="form" action="{{ route('loginConfirmation') }}" method="POST">
    <div class = "col-12 user-img"><img class="img-login" src="/images/icono-login.png"/> </div>
        <div class="form-group" id = "user-group">
            <input type="text" class="form-control" placeholder="Nombre de usuario" name="username">
        </div>
        <div class="form-group" id = "contraseña-group">
            <input type="password" class="form-control" placeholder="Contraseña" name="contraseña">
        </div>
        {{ csrf_field() }}
        <button class="btn btn-lg btn btn-info" id = "boton" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
    
    </div>
</form>
@endif

@endsection('content')

@push('extrajs')
<script src="{{ asset('js/register.js') }}"></script>
@endpush