@extends('layouts/contentLayout')
<link rel="stylesheet" href="{{ asset(mix('css/register.css')) }}">
@section('content')
<form class="form">
  <h2>REGISTRO</h2>
  <p type="Nombre:"><input></input></p>
  <p type="Email:"><input></input></p>
  <p type="Contraseña:"><input></input></p>
  <p type="Repite Contraseña:"><input></input></p>
  <button>ENVIAR</button>
  <div>
    <span class="fa fa-phone"></span>000 000 000
    <span class="fa fa-envelope-o"></span> contacto@papafrita.com
  </div>
</form>
@endsection('content')