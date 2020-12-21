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
@elseif($rol == 'Jefe de taller')
  <div class="container">
    <div class="card-deck">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lista de técnicos</h5>
          <a href="/lista"><img src="/images/lista.jpg" class="card-img"></a>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tareas asginadas</h5>
          <a href="/tareas"><img src="/images/tareas.jpg" class="card-img"></a>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Asignar tareas</h5>
          <a href="/asignar"><img src="/images/asignar.jpg" class="card-img"></a>
        </div>
      </div>
      
    </div>
  </div>
@elseif($rol == 'Administrador')
  <div class="container">
    <div class="card-deck" style="max-width: 40vw; margin: 0 auto;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Dar de alta empleados</h5>
          <a href="/crear"><img src="/images/admin.jpg" class="card-img"></a>
        </div>
      </div>
    </div>
  </div>
@elseif($rol == 'Mecanico')
  <div class="container">
    <div class="card-deck" style="max-width: 40vw; margin: 0 auto;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Mi agenda</h5>
          <a href="/agenda"><img src="/images/planing.jpg" class="card-img"></a>
        </div>
      </div>
      
    </div>
  </div>
@else
  <div class="container">
    <div class="card-deck" style="max-width: 40vw; margin: 0 auto;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Realizar pago</h5>
          <a href="/lista"><img src="/images/planing.jpg" class="card-img"></a>
        </div>
      </div>
    </div>
  </div>
@endif

