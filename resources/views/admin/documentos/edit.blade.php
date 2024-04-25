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

                    <h6 class="card-title text-center mb-5">editar ROLES DE documentos</h6>

                    <form method="POST" id="upload-file" action="{{route('admin.documentos.update', $documento)}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')

                        <div class="px-6 mb-3">
                            <label class="mb-2">Nombre del nuevo Documento</label>
                            <div class="col-sm-9">
                                <input type="text" name="name"  class="form-control" value="{{old('name',$documento->name)}}"  placeholder="Nombre">
                                
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Actualizar Documneto</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection