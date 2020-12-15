<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Tallersito</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset(mix('css/menubar.css')) }}">

    <!-- las tres siguientes líneas son un truco para obtener elementos semánticos de HTML5 que funcionan en versiones de Internet Explorer antiguas -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Aquí empieza el encabezado principal que se mantendrá en todas las páginas del sitio web -->
    
    <img class="img-header" src="/images/taller1.jpg"/>
        <nav>
            <ul>
                <li><a class="active" href="/home">Inicio</a></li>
                <li><a href="/register">Registro</a></li>
                <li><a href="#about">Sobre Nosotros</a></li>
                <li><a href="#news">Login</a></li>
            </ul>
        </nav>

    <!-- Aquí está el contenido principal de nuestra página -->
    <main>

    @yield('content')

    </main>

    <!-- Y aquí está nuestro pie de página principal que se utiliza en todas las páginas de nuestro sitio web -->

    <footer>
      <p>©Copyright 2020. Todos los derechos son de Don Alexis Ochoa Álvarez.</p>
    </footer>

  </body>
</html>