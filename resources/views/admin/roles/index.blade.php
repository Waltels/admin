@extends('admin.layouts.maind')
@section('section')
<div class="page-content ">
    <div class=" card col-md-5 mx-auto mb-2">
        <a class="btn btn-primary px-2" href="{{route('admin.roles.create')}}">Registrar nuevo Rol</a>
        </div>
    <div class="row mx-auto">
        <div class="col-md-6 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                            <h6 class="card-title">ROLES DE USUARIO</h6>
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nº</th>
                                                <th>Nombre</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($roles as $role)
                                            <tr>
                                                <th>{{$role->id}}</th>
                                                <td>{{$role->name}}</td>
                                                <td width='10px'>
                                                    <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-success">editar</a>
                                                </td> 
                                                <td width='10px'>
                                                    <x-danger-button class="btn btn-danger"  onclick="deleteRole()">
                                                        Eliminar
                                                    </x-danger-button>
                                                </td>  
                                            </tr> 
                                            @empty

                                                <tr>
                                                    <td colspan="4">No hay ningun rol registrado</td>
                                                </tr>
                                            @endforelse  
                                        </tbody>
                                    </table>
                                    <form   action="{{route('admin.roles.destroy', $role)}}" 
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
        function deleteRole(){
            let form = document.getElementById('FormDelete');
            form.submit();
        }
    </script>  
@endpush
@endsection