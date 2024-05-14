@extends('admin.layouts.maind')
@section('section')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row justify-content-center">
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <a class="btn btn-outline-primary" href="{{route('admin.plans.create')}}"> Nuevo registro de planificaciòn</a>
                    <div class="card-body">
                        <h6 class="card-title text-center">REGISTRO DE PLANIFICACIONES ENTREGADAS A LA DIRECCION DE LA UNIDAD EDUCATIVA ALEMANIA</h6>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>docente</th>
                                        <th>docUMENTO</th>
                                        <th>OBSERVACIONES</th>
                                        <th>fecha</th>
                                        <th>Accioones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($planes as $plan)
                                    <tr>
                                        <td>{{$plan->id}}</td>
                                        <td>{{$plan->user->name}}</td>
                                        <td>{{$plan->doc}}</td>
                                        <td>{!!$plan->obs!!}</td>
                                        <td>{{$plan->date}}</td>
                                        <td width='10px'>
                                            <a class="btn btn-primary btn-xs btn-icon" href="{{route('admin.plans.edit', $plan)}}"><i data-feather="edit"></i></a>
                                        
                                            <button class="btn btn-danger btn-xs btn-icon"  onclick="deleteDocumento()">
                                            <i data-feather="delete"></i>
                                            </button>
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
</div>
@endsection