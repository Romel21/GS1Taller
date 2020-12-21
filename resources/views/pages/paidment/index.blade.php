@extends('layouts.app')
  
@section('content')

@if(session('pagotarjeta'))
        <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
            <div class="card-body">
                <h5 class="card-title">Pago con tarjeta realizado correctamente</h5>
                <a href="/" class="btn btn-primary cita-correcta">Aceptar</a>
            </div>
        </div>
@elseif(session('pagoefectivo'))
        <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
            <div class="card-body">
                <h5 class="card-title">Pago en efectivo realizado correctamente</h5>
                <a href="/" class="btn btn-primary cita-correcta">Aceptar</a>
            </div>
        </div>

@else

  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 order-md-1">
    <div class="py-5 text-center">
      <h2>Formulario de pago</h2>
      <p class="lead">Forulario con distintas opciones de pago.
      </p>
    </div> 
      <h4 class="mb-3">Datos del usuario</h4>
      <form method="POST" action="{{ route('paid', $pagos->id) }}">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" name="name" value="{{$pagos->name}}" required>
            
          </div>
          <div class="col-md-6 mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ulpgc@hotmail.com" value="{{$pagos->email}}" required>
            
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Dirección de casa</label>
          <input type="text" class="form-control" id="address" name="direccion" placeholder="villanueva 28" value="{{$pagos->direccion}}" required>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Servicio a pagar</label>
            <input type="text" class="form-control" id="firstName" name="servicio" value="{{$pagos->servicio}}" required>
            
          </div>
          <div class="col-md-6 mb-3">
          <label for="fecha">Fecha de pago </label>
          <input type="datetime-local" name="fecha" class="form-control" id="fecha" required>
                      </div>
        </div>
        <hr class="mb-4">
        <input type="hidden" name="estado" value="Pagado">
        {{ csrf_field() }}

        <h4 class="mb-3">Métodos de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="radiopago" type="radio" class="custom-control-input" value="tarjeta" checked required>
            <label class="custom-control-label" for="credit">Tarjeta</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="radiopago" type="radio" class="custom-control-input" value="efectivo" required>
            <label class="custom-control-label" for="paypal">Efectivo</label>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Terminar</button>
      </form>
    </div>
  </div>

</div>
@endif
@endsection('content')