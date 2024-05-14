<div>
    <div class="row">
      <div class="col-lg-2">
        <div class="d-grid my-1">
          <a class="btn btn-primary" href="{{route('admin.comisions.index')}}">Comisión</a>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="d-grid my-1">
          <a class="btn btn-primary" href="{{route('admin.asignacions.create')}}">Asignasíon</a>
        </div>
      </div>
    </div>
    <div class="col-lg-10 justify-content-center">

      <div class="row">
        <div class="col-lg-3 border-end-lg">
          <div class="d-flex align-items-center justify-content-between border-bottom mb-2">
            <button class="navbar-toggle btn btn-icon d-block d-lg-none btn btn-outline-success" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
              <span class="icon"><i data-feather="chevron-down"></i></span>
            </button>
            <div class="order-first">
              <h4>Comisiones</h4>
              <p class="text-muted">Comisiones organizadas</p>
            </div>
          </div>
          <div class="email-aside-nav collapse" >
            <ul class="nav flex-column">
              @foreach ($comisiones as $comisiones)
              <li class="nav-item">
                <div class="row mt-1">
                  <div class="col-8">
                    <a class="nav-link d-flex" id="user_id"  wire:click="$set('comision_id',{{$comisiones->id}})">{{$comisiones->name}}</a>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-9 border-end-lg">
          <div class="d-flex align-items-center justify-content-between border-bottom">
            @if ($nombre)
            <div class="order-first">
              <h4><span>Comisión: </span>{{$nombre}}</h4>
              <p class="text-muted">Nómina de docentes asignados a la Comision</p>
            </div>
            @else
            <p class="text-muted">no existe ninguna comision</p>
            @endif
          </div>
          <div>
            <div class="row">
              @foreach ($asignaciones as $asignacion)
              <div class="col-12 col-md-6 col-xl-4 py-3">
                <div class="card">
                    <div class="card-header">
                      <p>Docente: <span class="card-title">{{$asignacion->user->name}}</span></p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tareas asignadas</h5>
                        {!!Str::limit($asignacion->tarea, 80)!!}
                    </div>
                    <div class="btn-group btn-group-sm mb-1 mb-md-0" role="group" aria-label="Basic example">
                        <a href="{{route('admin.asignacions.show', $asignacion)}}" type="button" class="btn btn-outline-primary ">Ver Tarea</a>
                        <a href="{{route('admin.asignacions.edit', $asignacion)}}" type="button" class="btn btn-outline-primary ">Tarea</a>  
                    </div> 
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
