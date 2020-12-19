@extends('layouts/contentLayout')

@section('content')
<link rel="stylesheet" href="{{ asset(mix('css/register.css')) }}">

@if(session('registroexitoso'))
  <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
  <div class="card-body">
    <h5 class="card-title">Usuario creado correctamente</h5>
    <p class="card-text">¡Gracias por registrarte en nuestro taller!</p>
    <a href="#" class="btn btn-primary registro-correcto">Aceptar</a>
  </div>
</div>
@else
  <form class="form" action="{{ route('registerStore') }}" method="POST">
    <h2>REGISTRO</h2>
    <p type="Nombre:"><input class="fas fa-sign-in-alt" type="text" name="usuario" required placeholder="Introduce tu nombre" value="{{ old('usuario') }}"></p>
    <p type="Apellidos:"><input type="text" name="apellidos" required placeholder="Introduce tus apellidos" value="{{ old('apellidos') }}"></p>
    <p type="Nombre de usuario:"><input type="text" name="username" required placeholder="Introduce tu nombre de usuario" value="{{ old('username') }}"></p>
    <p  type="DNI:"><input type="text" name="dni" required minlength="9" maxlength="9" pattern="((\d{8})([A-Z]{1}))" placeholder="Ejemplo: 123456789A" value="{{ old('dni') }}"></p>
    <input type="hidden" name="rol" value="1">
    <p type="Teléfono:"><input type="text" name="telefono" required placeholder="Introduce tu teléfono" value="{{ old('telefono') }}"></p>
    <p type="Contraseña:"><input type="password" name="contraseña" required placeholder="Introduce tu contraseña" value="{{ old('contraseña') }}"></p>
    {{ csrf_field() }}
    <button class="enviar-registro2" type="submit">ENVIAR</button>
    <div>
      <span class="fa fa-phone"></span>955 56 76 87
      <span class="fa fa-envelope-o"></span> contacto@gs1taller.com
    </div>
  </form>
@endif
  
@endsection('content')

@push('extrajs')
<script src="{{ asset('js/register.js') }}"></script>
@endpush
