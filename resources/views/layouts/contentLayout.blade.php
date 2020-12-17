<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi Taller</title>
    <link rel="stylesheet" href="{{ asset(mix('css/menubar.css')) }}">
    
    <!-- <link rel="stylesheet" href="jquery-ui.min.css"> -->
    <!-- <script src="jquery-ui.min.js"></script> -->
  </head>

  <body>
    <!-- Aquí empieza el encabezado principal que se mantendrá en todas las páginas -->
    
    <img class="img-header" src="/images/taller1.jpg"/>
    <nav>
        <ul class="barra">
            <li><a class="active" href="/home">Inicio</a></li>
            <li><a href="/register">Registro</a></li>
            <li><a href="#about">Sobre Nosotros</a></li>
            <li><a href="#login">Login</a></li>
        </ul>
    </nav>

    <!-- Aquí va el contenido que queramos introducir -->
    <main>

    @yield('content')

    </main>

    <!-- Aqui el pie de pagina, footer -->
    
    <footer>
      <p>© Copyright 2020. Todos los derechos esta reservados a Papafritas S.L</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      alert("Hola Alejandro");
    </script>
    @stack('extrajs')
  </body>

</html>