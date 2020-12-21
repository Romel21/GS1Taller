@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/profile" class="btn btn-secondary m-1">Volver</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection('content')