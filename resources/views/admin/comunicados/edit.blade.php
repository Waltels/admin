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
                            title: "Deve incluir almenos la fecha1 de permiso"
                            });
                        </script>
                        @enderror    
                        
                        @error('content')
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
                            title: "Deve incluir descripcion del permiso"
                            });
                        </script>
                        @enderror

    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-1">datos del comunicado</h6>

                        <form method="POST" id="comunicados" action="{{route('admin.comunicados.update', $comunicado)}}" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <select name="name" id="name" class="form-control" aria-label="Default select example" value="{{old('name',$comunicado->name)}}">
                                            <option value="Comunicado Direccion">Comunicado Direccion</option>
                                            <option value="Comunicado Sindical">Comunicado Sindical </option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 text-center">
                                        <p class="form-label">Fecha </p>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="fecha" id="fecha" type="text" class="form-control" placeholder="Fecha" data-input value="{{old('name', $comunicado->fecha)}}">
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="card-title">contenido del Comunicado</h4>
                                    <textarea class="form-control" name="content" id="tinymceExample" rows="15" >{{old('name', $comunicado->content)}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit mt-3">Crear comunicado</button>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection