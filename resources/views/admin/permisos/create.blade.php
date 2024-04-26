@extends('admin.layouts.maind')
@section('section')

<div class="page-content">

    <nav class="page-breadcrumb">
    

                         @error('dias1')
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
                            title: "Deve incluir descripcion del permiso"
                            });
                        </script>
                        @enderror

                        @error('path')
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
                            title: "Deve incluir un archivo del permiso"
                            });
                        </script>
                        @enderror 

    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-1">datos del solicitante</h6>

                        <form method="POST" id="permisos" action="{{route('admin.permisos.store')}}" enctype="multipart/form-data">
                            @csrf 
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Docente</label>
                                        <select name="user_id" id="user_id" class="form-control" aria-label="Default select example">
                                            @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label" >Motivo</label>
                                        <select name="motivo" id="motivo" class="form-control" aria-label="Default select example">
                                            <option value="Enfermedad">Enfermedad</option>
                                            <option value="Defuncion">Defuncion </option>
                                            <option value="Personal">Personal</option>
                                            <option value="Otro">Otro</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="mb-3">
                                        <label class="form-label">Dias</label>
                                        <select name="dias" id="dias" class="form-control" aria-label="Default select example">
                                            <option value="1">1</option>
                                            <option value="2">2 </option>
                                            <option value="3">3</option>
                                          </select>
                                    </div>
                                </div>
                                
                            </div><!-- Row -->
                            <div class="row">
                                <h4 class="card-title mb-1">FECHAS DE PERMISOS</h4>
                                <div class="col-sm-4 text-center">
                                    <div class="mb-3">
                                        <p class="form-label">Fecha 1</p>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="dias1" id="dias1" type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="mb-3">
                                        <label class="form-label">Fecha 2</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="dias2" id="dias2" type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="mb-3">
                                        <label class="form-label">Fecha 3</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="dias3" id="dias3" type="text" class="form-control" placeholder="Fecha" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-7">
                                    <h4 class="card-title">Descricion de la solicitud de permiso</h4>
                                    <textarea class="form-control" name="obs" id="editor" rows="15"></textarea>
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label">Archivo adjunto</label>
                                    <input name="file" type="file" id="myDropify">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit">Crear Permisos</button>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );

    </script>
@endsection