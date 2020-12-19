@extends('layouts/contentLayout')
<link rel="stylesheet" href="{{ asset(mix('css/login.css')) }}">
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
    
    </div>
    </form>
</form>


@endsection('content')