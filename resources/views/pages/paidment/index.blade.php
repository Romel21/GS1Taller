@extends('layouts.app')
  
@section('content')

  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 order-md-1">
    <div class="py-5 text-center">
      <h2>Formulario de pago</h2>
      <p class="lead">Forulario con distintas opciones de pago.
      </p>
    </div> 
      <h4 class="mb-3">Datos del usuario</h4>
      <!-- <form > -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" name="name" value="{{$pagos->name}}" required disabled>
            
          </div>
          <div class="col-md-6 mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ulpgc@hotmail.com" value="{{$pagos->email}}" required disabled>
            
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Dirección de casa</label>
          <input type="text" class="form-control" id="address" name="direccion" placeholder="villanueva 28" value="{{$pagos->direccion}}" required disabled>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Servicio a pagar</label>
            <input type="text" class="form-control" id="firstName" name="servicio" value="{{$pagos->servicio}}" required disabled>
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="fecha">Fecha de la cita </label>
            <input type="text" name="fecha" class="form-control" id="fecha"  value="{{$pagos->fecha}}" required disabled>
          </div>

        </div>
        <hr class="mb-4">
        {{ csrf_field() }}

        <h4 class="mb-3">Métodos de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="radiopago" type="radio" class="custom-control-input" value="tarjeta" checked required>
            <label class="custom-control-label" for="credit">Tarjeta</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="radiopago" type="radio" class="custom-control-input" value="efectivo" required>
            <label class="custom-control-label" for="paypal">Efectivo</label>
          </div>
        </div>
        <hr class="mb-4">
        <!-- <button class="btn btn-primary btn-lg btn-block"  onclick="confirmDelete({{$pagos->id}})">Terminar</button> -->


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
            <button class="btn btn-primary"  onclick="confirmDelete({{$pagos->id}})">Realizar pago</button>
            <a href="/profile" class="btn btn-secondary m-1">Cancelar pago</a>
            </div>
        </div>
      <!-- </form> -->
    </div>
  </div>

</div>
@endsection('content')

@push('extrajs')
<script>
    function confirmDelete(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        Swal.fire({
            title: '¿Está segur@?',
            text: '¿Quieres confirmar el pago?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Sí'
        }).then((result) => {
            if (result.value) {
            // Al confirmar que se desea eliminar
                $.ajax({
                    type: 'DELETE',
                    url: `/deletepago/${id}`
                }).done((data) => {
                    Swal.fire({
                        title: '¡Pago confirmado correctamente!',
                        icon: 'success'
                    }).then(function() {
                        window.location = "/profile";
                    })
                }).fail((message) => {
                    Swal.fire({
                        title: '¡Ha ocurrido un error al realizar el pago!',
                        icon: 'warning'
                    })
                });
            }
        })
    }
</script>
@endpush