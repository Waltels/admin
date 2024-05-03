@extends('admin.layouts.maind')
@section('section')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>
    <div class=" card col-md-5 mx-auto mb-2">
    <a class="btn btn-primary px-2" href="{{route('file.create')}}">REGISTRAR NUEVO ENVIO</a>
    </div>

    <div class="row">
        <div class="col-md-9 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">historial de envio de documentos a la dirección de la Unidad Educativa Alemania</h6>
                    <p class="mb-5 text-gray-400 text-center"> en esta seccion se encuentra todos los archivos enviados por el Ususraio</p>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>Nº de Documento</th>
                            <th>Descripcion del Documento</th>
                            <th>Fecha de envio del Documento</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td>{{$file->id}}</td>
                            <td>{{$file->description}}</td>
                            <td>{{$file->created_at}}</td>
                            <td>
                                <a href="{{$file->path}}" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-download"></i> Ver</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<!-- Custom js for this page -->
<script src="{{asset('js/data-table.js')}}"></script>
<!-- End custom js for this page -->
@endsection