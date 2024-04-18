@extends('admin.layouts.maind')
@section('section')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>

                         @error('name')
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
                            title: "No se asigno un nombre para el documento"
                            });
                        </script>
                        @enderror
       

          
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
           
            <div class="card">
                
                <div class="card-body">

                    <h6 class="card-title text-center mb-5">CREAR documentos</h6>

                    <form method="POST" id="upload-file" action="{{route('admin.documentos.store')}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="px-6 mb-3">
                            <label class="mb-2">Nombre del nuevo documento</label>
                            <div class="col-sm-9">
                                <input type="text" name="name"  class="form-control"   placeholder="Nombre">
                                
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Crear documento</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection