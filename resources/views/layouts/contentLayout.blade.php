<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi Taller</title>
    <link rel="stylesheet" href="{{ asset(mix('css/menubar.css')) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    @stack('extrajs')
  </body>

</html>