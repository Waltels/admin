@extends('admin.layouts.maind')
@section('section')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>

                   
                        @error('name')
                        <div class="alert alert-danger" role="alert"></i>No ingreso un nombre para el rol</div>
                        @enderror
             
                        @error('permissions')
                        <div class="alert alert-danger" role="alert">No registro los permisos del Rol</div>
                        @enderror
          
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
           
            <div class="card">
                
                <div class="card-body">

                    <h6 class="card-title text-center mb-5">editar ROLES DE USUARIOS</h6>

                    <form method="POST" id="upload-file" action="{{route('admin.roles.update', $role)}}" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        @method('PUT')

                        <div class="px-6 mb-3">
                            <label class="mb-2">Nombre del nuevo Rol</label>
                            <div class="col-sm-9">
                                <input type="text" name="name"  class="form-control" value="{{old('name',$role->name)}}"  placeholder="Nombre">
                                
                            </div>
                        </div>
                        <div class="row mb-3 form-check">
                            <div class="col-sm-9 px-7">
                                <label class="col-sm-3 col-form-label">Permisos</label>
                                <ul>   
                                @foreach ($permissions as $permission)
                                    <li>
                                        <label>
                                            <x-checkbox 
                                                    name="permissions[]" 
                                                    value="{{$permission->id}}"
                                                    :checked="in_array($permission->id, $role->permissions->pluck('id')->toArray())"
                                                    />
                                                    {{$permission->name}}
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">actualizar Rol</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection