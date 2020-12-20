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
            @foreach()
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection('content')

@push('extrajs')

@endpush