@extends('layouts.app')

@section('content')
<div class="container">
@if(session('cuentacreada'))
        <div class="card text-center mx-auto" style="width: 18rem; margin-top: 13%;">
            <div class="card-body">
                <h5 class="card-title">Empleado registrado correctamente</h5>
                <a href="/profile" class="btn btn-primary cita-correcta">Aceptar</a>
            </div>
        </div>
@else
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('adminStore') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required placeholder="Introduce el nombre" value="{{ old('name') }}"></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">Tipo de rol</label>
                            <div class="col-md-6">
                                <select class="form-select  custom-select d-block w-100" name="role_id">
                                    <option selected disabled>Elige el rol</option>
                                    <option value="3">Jefe de taller</option>
                                    <option value="4">Mecanico</option>
                                    <option value="5">Recepcionista</option>
                                </select>
                            </div>
                            
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Dirección de Email</label>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" required placeholder="Introduce la cuenta de email" value="{{ old('email') }}">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">DNI</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required minlength="9" maxlength="9" pattern="((\d{8})([A-Z]{1}))" placeholder="Ejemplo: 123456789A">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                            <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" required placeholder="Introduce el teléfono" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="********">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="********">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
</div>
@endsection('content')

@push('extrajs')

@endpush