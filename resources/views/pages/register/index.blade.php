@extends('layouts/contentLayout')
@section('content')
<link rel="stylesheet" href="{{ asset(mix('css/register.css')) }}">
<form id="formulario" class="form">
  <h2>REGISTRO</h2>
  <p type="Nombre:"><input type="text" name="usuario"></p>
  <p type="Apellidos:"><input type="text" name="apellidos"></p>
  <p type="Nombre de usuario:"><input type="text" name="username"></p>
  <p type="DNI:"><input type="text" name="dni"></p>
  <p type="Teléfono:"><input type="text" name="telefono"></p>
  <input type="hidden" name="rol" value="1">
  <p type="Contraseña:"><input type="password" name="contraseña"></p>
{{ csrf_field() }}
  <button type="submit" class="enviar-registro">ENVIAR</button>
  <div>
    <span class="fa fa-phone"></span>000 000 000
    <span class="fa fa-envelope-o"></span> contacto@papafrita.com
  </div>
</form>
@endsection('content')

@push('extrajs')
<script src="{{ asset('js/register/register.js') }}"></script>
@endpush
