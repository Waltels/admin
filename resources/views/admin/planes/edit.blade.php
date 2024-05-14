@extends('admin.layouts.maind')
@section('section')
<div class="page-content">

    <nav class="page-breadcrumb">
    

                         @error('fecha')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir la fecha de registro"
                            });
                        </script>
                        @enderror    
                        
                        @error('obs')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "Deve incluir la observacion al registro"
                            });
                        </script>
                        @enderror

    </nav>
    <div class="row justify-content-center">
        <div class="col-md-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-1">datos de la planificacion</h6>
                        <form method="POST" id="comunicados" action="{{route('admin.plans.update', $plan)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Docente</label>
                                        <select name="user_id" id="user_is" class="form-control" aria-label="Default select example">
                                            <option value="{{$plan->user->id}}">{{$plan->user->name}}</option>
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Documento</label>
                                        <select name="doc" id="doc" class="form-control"aria-label="Default select example">
                                            <option value="{{$plan->doc}}">{{$plan->doc}}</option>
                                            <option value="Plan anual Trimestralizado (PAT)">Plan anual Trimestralizado (PAT) </option>
                                            <option value="Plan de desarrollo curricular (PDC)">Plan de desarrollo curricular (PDC)</option>
                                            <option value="Planes de actividades extracurriculares">Planes de actividades extracurriculares</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3 text-center">
                                        <p class="form-label">Fecha </p>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="date" id="date" type="text" class="form-control" value="{{$plan->date}}" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="card-title">Obervaciones a la documentación</h4>
                                    <input name="obs" id="obs" type="text" class="form-control" placeholder="Observaciones" value="{{$plan->obs}}"  >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit mt-3">Actualizar Plan</button>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection