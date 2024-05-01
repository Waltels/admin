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
    <a class="btn btn-primary px-2" href="{{route('admin.comunicados.create')}}">REGISTRAR COMUNICADOS</a>
    </div>

    <div class="row">
        <div class="col-md-9 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">historial de comunicados emanados por la dirección de la Unidad Educativa Alemania</h6>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>Numero</th>
                            <th>nombre</th>
                            <th>fecha</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($comunicados as $comunicado)
                        <tr>
                            <td>{{$comunicado->id}}</td>
                            <td>{{$comunicado->name}}</td>
                            <td>{{$comunicado->fecha}}</td>

                            <td width='10px'>
                                <a href="{{route('admin.comunicados.show', $comunicado)}}" class="btn btn-sm btn-primary" ><i data-feather="eye"></i></a>
                            </td>
                            <td width='10px'>
                                <a href="{{route('admin.comunicados.edit', $comunicado)}}" class="btn btn-sm btn-success" ><i data-feather="edit"></i></a>
                            </td>
                            <td width='10px'>
                                <x-danger-button class="btn btn-danger"  onclick="deleteDocumento()">
                                    <i data-feather="delete"></i>
                                </x-danger-button>
                            </td> 
                           
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                        <form   action="{{route('admin.comunicados.destroy', $comunicado)}}"
                                        method="POST" 
                                        id="FormDelete">
                                        @csrf
                                        @method('DELETE')   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@push('js')
    <script>
        function deleteDocumento(){
            let form = document.getElementById('FormDelete');
            form.submit();
        }
    </script>  
@endpush
    
@endsection