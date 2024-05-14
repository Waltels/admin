<div>
    <div class="page-content">  
      <div class="order-first py-3 text-center"> 
        <h4>REGISTRO DE PLANIFICACIONES DEL PERSONAL DOCENTE</h4>  
      </div>  
        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 border-end-lg">
                    <div class="d-flex align-items-center justify-content-between">
                      <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                        <span class="icon"><i data-feather="chevron-down"></i></span>
                      </button>
                      <div class="order-first">
                        <h4>Docentes de la U E</h4>
                        <p class="text-muted">Sistema de Administración</p>
                      </div>
                    </div>
                    <div class="d-grid my-3">
                      <a class="btn btn-primary" href="{{route('admin.plans.index')}}">Registrar Planificación</a>
                    </div>
                    <div class="email-aside-nav collapse">
                      <ul class="nav flex-column">
                        @foreach ($users as $user)
                        <li class="nav-item">
                          <a class="dropdown-item" id="user_id"  wire:click="$set('user_id',{{$user->id}})">
                            {{$user->name}} 
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  
                  <div class="col-lg-9">
                    <div class="p-3 border-bottom">
                      <div class="row align-items-center mb-2 mt-3">
                        <div class="col-lg-12">
                            @if ($nombre)
                            <div class=" align-items-end mb-2 mb-md-0">
                                <span class="text-muted">Docente:</span>
                                <h4 class="me-1">{{$nombre}}</h4>
                            </div>
                            @else
                            <div class="align-items-end mb-2 mb-md-0">
                                <div class="d-flex align-items-end mb-2 mb-md-0">
                                    <i data-feather="info" class="text-muted me-2"></i>
                                    <h4 class="me-1">Informacion</h4>
                                </div>                               
                                <span class="text-muted">Para ver los registros de Planificaciones de los Docentes, debe seleccionar un nombre de la lista.</span>
                            </div>
                             @endif
                        </div>
                      </div>
                    </div>
                    <div class="email-list"> 
                      <!-- email list item -->
                      @foreach ($planes as $plan)
                      <div class="email-list-item">
                        <div class="email-list-detail">
                          <div class="content">
                            <span class="from">Planificación: {{$plan->doc}}</span>
                            <p class="msg"><span>observación al Plan: </span>{{$plan->obs}}</p>
                          </div>
                          <span class="date">{{$plan->date}}</span>
                        </div>
                      </div>                                                
                      @endforeach
                      <!-- end email list item -->
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
	</div>
</div>
