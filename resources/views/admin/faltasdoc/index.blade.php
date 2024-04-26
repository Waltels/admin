@extends('admin.layouts.maind')
@section('section')

<div class="page-content">


    <div class=" card col-md-5 mx-auto mb-2">
    <a class="btn btn-primary px-2" href="{{route('admin.faltasdocs.create')}}">REGISTRAR NUEVA FALTA</a>
    </div>

    <div class="row">
        <div class="col-md-9 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-center">historial de registros de faltas de Docentes de la Unidad Educativa Alemania</h6>
                    <p class="mb-5 text-gray-400 text-center"> en esta seccion se encuentra todos las faltas cometidas por los Docentes</p>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>Docente</th>
                            <th>MOtivo de la falta</th>
                            <th>Fecha de la falta</th>
                            <th>Fecha de registro</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($faltasdocs as $faltasdoc)
                        <tr>
                            <td>{{$faltasdoc->user->name}}</td>
                            <td>{{$faltasdoc->motivo}}</td>
                            <td>{{$faltasdoc->fecha}}</td>
                            <td>{{$faltasdoc->created_at}}</td>

                           <td width='10px'>
                                <a href="{{route('admin.faltasdocs.show', $faltasdoc)}}" class="btn btn-sm btn-primary" ><i data-feather="eye"></i></a>
                            </td>
                            <td width='10px'>
                                <a href="{{route('admin.faltasdocs.edit', $faltasdoc)}}" class="btn btn-success"><i data-feather="edit"></i></a>
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

@endsection
