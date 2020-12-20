@extends('layouts.app')

@section('content')
<div class="container">
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
                    <td><a href="{{ route('destroy', $cita->id) }}" class="btn btn-primary m-1">Cancelar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection('content')

@push('extrajs')

@endpush