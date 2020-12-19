@extends('layouts/contentLayout')
<link rel="stylesheet" href="{{ asset(mix('css/cita.css')) }}">
@section('content')
    <div class = "container ">
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
                    
                    <div class="col-md-6 mb-3">
                        <label for="phone number ">Numero de contacto </label>
                        <input type="text" class="form-control" id="phone number" placeholder="" value="" required pattern="[0-9]{9}">
                    </div>
                </div> 

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
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

                <div class = "row">
                    <div class = "col-md-6 mb-4">
                        <label for="fechas">Seleccionar fecha</label>
                        <input type="text" class="form-control" id="fechas" placeholder="mm/dd/yyyy" required>
                    </div>

                    <div class = "col-md-6 mb-4">
                        <label for="horas">Hora</label>
                        <input type="text" class="form-control" id="horas" placeholder="HH:MM" required>
                    </div>
                </div>
                    
                <button class="btn btn-primary btn-lg btn-block" type="submit">Realizar cita</button>
            </form>
        </div>           
    </div>
@endsection('content')

@push('extrajs')
<!-- Aqui van los ficheros JS de cada blade -->
@endpush