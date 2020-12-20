@extends('layouts.app')


    <!-- Bootstrap core CSS -->

    <!-- Favicons -->


    <!-- Custom styles for this template -->
  
@section('content')
  <div class="container">
  <div class="py-5 text-center">
    <h2>Formulario de pago</h2>
    <p class="lead">Forulario con distintas opciones de pago.
    </p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Factura</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (EUR)</span>
          <strong>$20</strong>
        </li>
      </ul>

      
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Datos del usuario</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <!-- <div class="invalid-feedback">
              Valid first name is required.
            </div> -->
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellidos</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <!-- <div class="invalid-feedback">
              Valid last name is required.
            </div> -->
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nick del usuario</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" placeholder="ulpgc@hotmail.com">
        </div>

        <div class="mb-3">
          <label for="address">Dirección de casa</label>
          <input type="text" class="form-control" id="address" placeholder="villanueva 28" required>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Provincias</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Elige una opción válida porfa</option>
              <option>Madrid</option>
              <option>Barcelona</option>
              <option>Las Palmas</option>
              <option>Pais Vasco</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Localidad</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>ehm ya veremos como rellenamos esto xd</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Código Postal</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
          </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Métodos de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Dinero perfil usuario</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">Efectivo</label>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Terminar</button>
      </form>
    </div>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@endsection('content')