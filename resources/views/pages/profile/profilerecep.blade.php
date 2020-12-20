@extends('layouts/contentLayout')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

@section('content')
<br>
<div class="card-deck">
    <div class="card">
    <div class="card-body">
      <h5 class="card-title">Realizar pago con efectivo</h5>
      <p class="card-text">Realización de pago en efectivo</p>
    </div>
    <div class="card-footer">
    <a href="/paidment"><img src="/images/dinero.jpeg" width="550" height="300" /> </a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Realizar pago con tarjeta</h5>
      <p class="card-text">Con esta opción le saldrá las diferentes opciones de pagar con tarjeta</p>
    </div>
    <div class="card-footer">
    <a href="/paidment"><img src="/images/tarjeta.jpg" width="550" height="300" /> </a>
    </div>
  </div>
</div>
<br>

@endsection('content')
