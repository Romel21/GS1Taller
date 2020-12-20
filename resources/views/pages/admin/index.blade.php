@extends('layouts.app')

@section('content')
    <div class = "container ">
    @if(session('citacreada'))
        <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
            <div class="card-body">
                <h5 class="card-title">Cita creada correctamente</h5>
                <p class="card-text">¡Gracias confiar en nuestro taller!</p>
                <a href="/profile" class="btn btn-primary cita-correcta">Aceptar</a>
            </div>
        </div>
    @else
        <div class="col-md-8 mx-auto mt-5 border border-dark pt-4">         
            <h4 class="mb-3">Datos de la cita</h4>
            <form class="form" action="{{ route('citaStore') }}" method="POST">
                <div class="row ">
                    <div class="col-md-6 mb-3 ">
                        <label for="date">Seleccionar fecha y hora</label>
                        <input type="datetime-local" class="form-control" name="date" placeholder="mm/dd/yyyy" required value="{{ old('fecha') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="service">Servicio</label>
                        <select class="form-select  custom-select d-block w-100" name="service">
                            <option selected disabled>Elige el servicio</option>
                            <option value="1">Reparción del coche</option>
                            <option value="2">Mantenimiento del coche</option>
                            <option value="3">Chapa y pintura</option>
                        </select>
                    </div>
                </div> 

                <div class="mb-3">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" name="address" placeholder="villanueva 28" required value="{{ old('address') }}">
                    <input type="hidden" name="user" value="{{ Auth::user()->id }}" required>
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

@push('extrajs')

@endpush