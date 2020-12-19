@extends('layouts/contentLayout')
<link rel="stylesheet" href="{{ asset(mix('css/login.css')) }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" crossorigin="anonymous"></script>
@section('content')

<form class="form">
    <div class = "col-12 user-img"><img class="img-login" src="/images/icono-login.png"/> </div>
    <form class="col-12">    
        <div class="form-group" id = "user-group">
            <input type="email" class="form-control" placeholder="Email address">
        </div>
        <div class="form-group" id = "contraseña-group">
            <input type="passwd" class="form-control" placeholder="Contraseña">
        </div>

        <button class="btn btn-lg btn btn-info" id = "boton" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
        <div class="checkbox mb-6 forgot">
    <label>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    </div>
    </form>


  <!-- <button>ENVIAR</button>
  <div>
    <span class="fa fa-phone"></span>000 000 000
    <span class="fa fa-envelope-o"></span> contacto@papafrita.com
  </div> -->
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@endsection('content')