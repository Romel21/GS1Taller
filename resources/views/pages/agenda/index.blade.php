@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/profile" class="btn btn-secondary m-1">Volver</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tarea</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordens as $orden)
                <tr>
                    <td>{{$orden->nombre}}</td>
                    <td>{{$orden->descripcion}}</td>
                    <td><button class="btn btn-primary m-1" onclick="confirmDelete({{$orden->id}})">Hecho</button></td>
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
            text: '¿Quieres marcar la tarea como realizada?',
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
                    url: `/delete-orden/${id}`
                }).done((data) => {
                    Swal.fire({
                        title: '¡Tarea realizada!',
                        icon: 'success'
                    }).then(function() {
                        window.location = "/agenda";
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