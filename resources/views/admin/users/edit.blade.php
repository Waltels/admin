@extends('admin.layouts.maind')
@section('section')
    <div class="page-content ">

    <div class="row mx-auto">
        <div class="col-md-6 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">asignacion de roles a usuarios</h6>
                    <form action="{{route('admin.users.update', $user)}}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nombre de Usuario</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{old('name', $user->name)}}" name="name" placeholder="Usuario">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-sm-3 col-form-label">Correo</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" value="{{old('email', $user->email)}}" name="email" placeholder="Correo">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-sm-3 col-form-label">Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control"  placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-sm-3 col-form-label">Confirmar contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirmar contraseña">
                                </div>
                            </div>
                            <div  class="py-2">
                                <h5 class="car-title">Roles para Usuarios</h4>
                            </div>
                            <div class="row mb-3 px-4">
                                <ul>   
                                    @foreach ($roles as $role)
                                        <li>
                                            <label>
                                                <x-checkbox 
                                                        name="roles[]" 
                                                        value="{{$role->id}}"
                                                        :checked="in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()))"
                                                        />
                                                        {{$role->name}}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection