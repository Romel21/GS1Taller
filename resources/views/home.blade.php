@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmación</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Estás logueado {{$user->name}}!
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="container">
<div class= "row my-2 justifiy-content-center align-items-center">
  <div class= "col-12 row justify-content-center my-md-2 mt-10">
    <div class= "col-12 col-md-6 ">
      <img src="/images/paisaje.jpg"/>
    </div>
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
      <h6>Nuestros Valores</h6>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt earum praesentium ex. Veritatis incidunt dignissimos sit temporibus, numquam sequi! Nam voluptas rem ab a nobis. Quam laudantium debitis facilis voluptatum!</p>
    </div>
  </div>
</div>
</div> -->

@include('pages.profile.index')

@endsection('content')
