@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/profile" class="btn btn-secondary m-1">Volver</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mecánico</th>
                <th scope="col">Tarea</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordenes as $orden)
                <tr>
                    <td>{{$orden->name}}</td>
                    <td>{{$orden->nombre}}</td>
                    <td>{{$orden->descripcion}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection('content')
