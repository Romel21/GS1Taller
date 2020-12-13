<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    
    <!--<link rel="stylesheet" href="{{asset("/css/registro.css")}}"> -->
    <link rel="stylesheet" href="registro.css">
 
</head>
<body>
    <div class = "container ">
        <div class = "py-5 ">
            <h1 class="title">Crear una cuenta</h1>
        </div>

        <div class="col-md-8 order-mx-5">
            <h4 class="mb-3">Datos del usuario</h4>
            <form class="needs-validation" novalidate>
                <div class="row ">
                    <div class="col-md-6 mb-3 ">
                        <label for="firstName">Nombre</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lastName">Apellidos</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required> 

                    </div>
                    <div class="col-md-2 mb-3">
			            <label for="country">Provincias</label>
			            <select class="custom-select d-block w-100" id="country" required>
			              <option value="">Elige una opción </option>
			              <option>NIE</option>
			              <option>DNI</option>
				        </select>
			        </div>
                    <div class="col-md-5 mb-3">
                        <label for="documento ">Numero de documento </label>
                        <input type="text" class="form-control" id="documento" placeholder="" value="" required ">
                    </div>

                    <div class="col-md-5 mb-3">
                        <label for="phone number ">Numero de contacto </label>
                        <input type="text" class="form-control" id="phone number" placeholder="Telefono" value="" required pattern="[0-9]{9}">
                    </div>
                    
                </div> 

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="password">Contraseña </label>
                    <input type="password" class="form-control" id="password" required>
                </div>

                <div class="mb-3">
                    <label for="address">Dirección de casa</label>
                    <input type="text" class="form-control" id="address" placeholder="villanueva 28" required>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Provincias</label>
                        <input type="text" class="form-control" id="country" placeholder="" value="" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="state">Localidad</label>
                        <input type="text" class="form-control" id="state" placeholder="" value="" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="zip">Código Postal</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                    </div>
                </div>

                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Registrate</button>
            </form>
        </div>           
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
</body>
</html>