<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style type="text/css">
        body {
        font-family: 'Brush Script MT', cursive;
        color:black 
        }
        body {
        background-color:#808080;

        }
        h1{
            color:blue
        }
    </style>
</head>
<body>
<table width="280" cellspacing="1" cellpadding="3" border="0" bgcolor="#1E679A" align="center">
    <tr>
        <td><font color="#FFFFFF" face="arial, verdana, helvetica">
        <b>Perfil de usuario</b>
        </font></td>
    </tr>
    <tr>
        <td bgcolor="#ffffcc">
        <font face="arial, verdana, helvetica">
        <p>
            <u><h1 align="center">Datos del usuario</h1></u>
        </p>
        <p style="border: ridge #0f0fef 1px;">
            <p>
                <h5>Nombre: <h5>
            </p>
            <p>
                <h5>Apellidos: <h5>
            </p>
            <p>
                <h5>DNI: <h5>
            </p>
            <p>
                <h5>Dirección electrónica: <h5>
            </p>
            <p>
                <h5>Dirección de casa (se llevará el coche ahí en el caso de que se señale): <h5>
            </p>
            <p>
                <h5>Rol:  <h5>
            </p>
        </p>

    </font>
    </td>
</tr>
</table>

<div class="container">@yield('content')</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>