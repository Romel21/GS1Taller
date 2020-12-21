@extends('layouts.app')

@section('content')
<div class="container">
@if(session('ordencreada'))
        <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
            <div class="card-body">
                <h5 class="card-title">Orden creada correctamente</h5>
                <a href="/profile" class="btn btn-primary cita-correcta">Aceptar</a>
            </div>
        </div>
    @else
        <div class="col-md-8 mx-auto mt-5 border border-dark pt-4">         
            <h4 class="mb-3">Datos de la tarea</h4>
            <form class="form" action="{{route('ordenStore')}}" method="POST">
                <div class="row ">
                    <div class="col-md-6 mb-3 ">
                        <label for="tarea">Nombre de la tarea</label>
                        <input type="text" class="form-control" name="tarea"  required value="{{ old('tarea') }}">
                    </div>

                    <div class="col-md-6 mb-3 ">
                        <label for="descrip">Descripción</label>
                        <input type="text" class="form-control" name="descrip" required value="{{ old('descrip') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="service">Mecánicos</label>
                        <select class="form-select  custom-select d-block w-100" name="mecanico">
                            <option selected disabled>Asigna un mecánico</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 

                {{ csrf_field() }}
                
                <div class = "row justify-content-center">
                    <button class="btn btn-primary m-1" type="submit">Confirmar</button>
                    <a href="/profile" class="btn btn-secondary m-1">Cancelar</a>
                </div>
            </form>
        </div>
    @endif           
</div>
@endsection('content')