@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/profile" class="btn btn-secondary m-1">Volver</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Servicio</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{$cita->fecha}}</td>
                    <td>{{$cita->servicio}}</td>
                    <td><button class="btn btn-primary m-1" onclick="confirmDelete({{$cita->id}})">Cancelar</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
            text: '¿Quieres cancelar la cita?',
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
                    url: `/delete-cita/${id}`
                }).done((data) => {
                    Swal.fire({
                        title: '¡Cancelada!',
                        icon: 'success'
                    }).then(function() {
                        window.location = "/mis-citas";
                    })
                }).fail((message) => {
                    Swal.fire({
                        title: '¡Error!',
                        icon: 'warning'
                    })
                });
            }
        })
    }
</script>
@endpush