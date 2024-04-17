@extends('admin.layouts.maind')
@section('section')
<div class="page-content ">

    <div class="row mx-auto">
        <div class="col-md-6 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                            <h6 class="card-title">lista DE USUARIOS</h6>
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nº</th>
                                                <th>Nombre</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($users as $user)
                                            <tr>
                                                <th>{{$user->id}}</th>
                                                <td>{{$user->name}}</td>
                                                <td width='10px'>
                                                    <a href="{{route('admin.users.edit', $user)}}" class="btn btn-success">Asignar Rol</a>
                                                </td>   
                                            </tr> 
                                            @empty

                                                <tr>
                                                    <td colspan="4">No hay ningun rol registrado</td>
                                                </tr>
                                            @endforelse  
                                        </tbody>
                                    </table>
                                    
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection