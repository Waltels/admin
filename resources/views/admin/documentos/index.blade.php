@extends('admin.layouts.maind')
@section('section')
<div class="page-content ">
    <div class=" card col-md-5 mx-auto mb-2">
        <a class="btn btn-primary px-2" href="{{route('admin.documentos.create')}}">Registrar nuevo Documento</a>
     </div>
    <div class="row mx-auto">
        <div class="col-md-6 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                            <h6 class="card-title">DOCUMENTOS</h6>
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Nombre</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($documentos as $documento)
                                            <tr>
                                              
                                                <td>{{$documento->name}}</td>
                                                <td width='10px'>
                                                    <a href="{{route('admin.documentos.edit', $documento)}}" class="btn btn-success">editar</a>
                                                </td> 
                                                <td width='10px'>
                                                    <x-danger-button class="btn btn-danger"  onclick="deleteDocumento()">
                                                        Eliminar
                                                    </x-danger-button>
                                                </td>  
                                            </tr> 
                                            @empty

                                                <tr>
                                                    <td colspan="4">No hay ningun documento registrado</td>
                                                </tr>
                                            @endforelse  
                                        </tbody>
                                    </table>
                                    
                                   <form   action="{{route('admin.documentos.destroy', $documento)}}" 
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