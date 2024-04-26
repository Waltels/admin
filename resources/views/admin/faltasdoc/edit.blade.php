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
                            title: "Deve incluir almenos la fecha de permiso"
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
                            title: "Deve incluir descripcion de la Falta"
                            });
                        </script>
                        @enderror

    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-1">datos del registro de faltas</h6>

                        <form method="POST" id="faltasdoc" action="{{route('admin.faltasdocs.update', $faltasdoc)}}" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                            <input class="form-control" value="{{old('name',$faltasdoc->user->name)}}" readonly>
                                            <input name="user_id" id="user_id" class="form-control" value="{{old('name',$faltasdoc->user_id)}}" type="hidden">   
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" >Motivo de la Falta</label>
                                        <select name="motivo" id="motivo" class="form-control" aria-label="Default select example">
                                            <option value="Inasistencia">Inasistencia</option>
                                            <option value="Retrasos">Retrasos </option>
                                            <option value="Indiciplina">Indiciplina</option>
                                            <option value="Otros">Otros</option>
                                          </select>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                    <h4 class="card-title mb-1">FECHA DE LA FALTA</h4>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                        
                                            <div class="input-group flatpickr" id="flatpickr-date">
                                                <input name="fecha" id="fecha" type="text" class="form-control" placeholder="Fecha" data-input value="{{old('name',$faltasdoc->fecha)}}">
                                                <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" >Acción a tomar</label>
                                            <div class="input-group flatpickr" id="flatpickr-date">
                                                <textarea class="form-control" name="accion" id="accion" rows="2">{{old('name',$faltasdoc->accion)}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div><!-- Row -->
                            <div class="mb-3">
                                <div class="col-sm-12">
                                    <h4 class="card-title">Descricion de la Falta</h4>
                                    <textarea class="form-control" name="obs" id="editor" rows="3">{{old('name',$faltasdoc->obs)}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit">Actualizar la falta</button>
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
