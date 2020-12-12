<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Pago</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Cita Previa</h2>
    <p class="lead">Formulario con distintas opciones de pago.
    </p>
    </div>

    <div class="row">
    
    
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

</html>