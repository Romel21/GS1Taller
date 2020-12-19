<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi Taller</title>
    <link rel="stylesheet" href="{{ asset(mix('css/menubar.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="jquery-ui.min.css"> -->
    <!-- <script src="jquery-ui.min.js"></script> -->
  </head>

  <body>
    <!-- Aquí empieza el encabezado principal que se mantendrá en todas las páginas -->
    
    <img class="img-header" src="/images/taller1.jpg"/>
    <nav>
        <ul class="barra">
            <li><a class="active" href="/">Inicio</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registro</a></li>
            <li><a href="/cita">Cita</a></li>

        </ul>
    </nav>

    <!-- Aquí va el contenido que queramos introducir -->
    <main>
    

    @yield('content')

    </main>

    <!-- Aqui el pie de pagina, footer -->
    
    <footer>
      <p>© Copyright 2020. Todos los derechos están reservados a Gestión del Software I</p>
      <p>© 版權2020保留對軟件管理I的所有權利</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" crossorigin="anonymous"></script>
    @stack('extrajs')
  </body>

</html>