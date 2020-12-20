<link rel="stylesheet" href="{{ asset(mix('css/profile.css')) }}">
@if($rol == 'Cliente')
<div class="container">
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pedir cita</h5>
        <a href="/cita"><img src="/images/planing.jpg" class="card-img"></a>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mis citas</h5>
        <a href="/mis-citas"><img src="/images/calendar.jpg" class="card-img"></a>
      </div>
    </div>
    
  </div>
</div>
@endif

