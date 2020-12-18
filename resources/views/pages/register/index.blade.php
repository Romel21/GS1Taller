@extends('layouts/contentLayout')

@section('content')

@if(session('mensaje'))
  <div class="alert alert-success">
      {{ session('mensaje') }}
  </div>
@endif

<link rel="stylesheet" href="{{ asset(mix('css/register.css')) }}">
<form class="form" action="{{ route('registerStore') }}" method="POST">
  <h2>REGISTRO</h2>
  <p type="Nombre:"><input type="text" name="usuario"></p>
  <p type="Apellidos:"><input type="text" name="apellidos"></p>
  <p type="Nombre de usuario:"><input type="text" name="username"></p>
  <p type="DNI:"><input type="text" name="dni"></p>
  <input type="hidden" name="rol" value="1">
  <p type="Teléfono:"><input type="text" name="telefono"></p>
  <input type="hidden" name="rol" value="1">
  <p type="Contraseña:"><input type="password" name="contraseña"></p>
{{ csrf_field() }}
  <button class="enviar-registro2" type="submit">ENVIAR</button>
  <div>
    <span class="fa fa-phone"></span>000 000 000
    <span class="fa fa-envelope-o"></span> contacto@papafrita.com
  </div>
</form>

@endsection('content')

@push('extrajs')
<!-- <script src="{{ asset('js/register.js') }}"></script> -->
@endpush
