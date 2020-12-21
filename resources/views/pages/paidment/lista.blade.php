@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Servicio</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
                <tr>
                    <td>{{$cita->name}}</td>
                    <td>{{$cita->fecha}}</td>
                    <td>{{$cita->phone}}</td>
                    <td>{{$cita->servicio}}</td>
                    <td><a href="{{ route('paidment', $cita->id) }}">Realizar pago</a></td>
                </tr>
         @endforeach
        </tbody>
    </table>
</div>
@endsection('content')