@extends('admin.layouts.maind')
@section('section')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>
    </nav>
 
    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center mb-5">Enviar documentos a la Dirección de la Unidad Educativa Alemania</h6>

                    <form method="POST" id="upload-file" action="{{route('file.store')}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Descripcion</label>
                            <div class="col-sm-9">
                                <input type="text" name="description"  class="form-control"  required placeholder="Descripción">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Archivo</label>
                            <div class="col-sm-9">
                                <input type="file" multiple name="file" id="file"  class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection