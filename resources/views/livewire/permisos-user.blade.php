<div>


    <div class="page-content">

        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Seleccione al Docente
            </button>


            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($users as $user)
                <a class="dropdown-item" id="user_id"  wire:click="$set('user_id',{{$user->id}})">{{$user->name}}</a>
                @endforeach
            </div>

        </div>
        @if ($nombre)
            <div class="text-center py-3">
                <div class="card-header">
                    <div class="card-title">
                        <h4><span>Docente: </span>{{$nombre}}</h4>
                        <p>En este espacio se detallan todos los registros de permisos  que el Docente  solicito a la Direccion de la Unidad Educativa Alemania</p>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-3">
                <div class="card-header">
                    <div class="card-title">
                        <h4>RESUMEN DE REGISTROS DE PERMISOS POR DOCENTE</h4>
                        <p>Para poder obtener los datos de un Docente, seleccione el nombre para lisatar los registro que tiene</p>
                    </div>
                </div>
            </div>
        @endif
        

            <div class="row">
                @foreach ($permisos as $permiso)

                <div class="col-12 col-md-6 col-xl-3 py-3">
                <div class="card">
                    <div class="card-header">
                    Fecha de solicitud del Permiso: {{$permiso->created_at}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">DATOS DEL PERMISO</h5>
                        <p class="card-text mb-3">El docente {{$permiso->user->name}} solicito permiso por  motivo {{$permiso->motivo}}, durante {{$permiso->dias}} dias.</p>
                    </div>
                    <div class="card-footer d-grid">
                        <a href="{{route('admin.peuser.show', $permiso)}}" type="button" class="w-full btn btn-primary ">Detalle del permiso</a>  
                    </div> 
                </div>
                </div>
                @endforeach
            </div>
            </div>
    </div>

</div>
