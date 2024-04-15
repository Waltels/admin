
@extends('layouts.main')
@section('content')
<div class="page-wrapper full-page">
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-lg-4 mx-auto">
                <div class="card">
                        <div class="col-md-12 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-3">
                                <a href="#" class="noble-ui-logo d-block"><span>UE</span> Alemania</a>
                                <h6 class="text-muted fw-normal mb-2">Cree una cuenta nueva.</h6>
                                <form method="POST" class="forms-sample">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="name" name="name" :value="old('name')" autocomplete="name" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password'</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password'">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0">Registarse</button>
                                        
                                    </div>
                                    <a href="{{ route('login') }}" class="d-block mt-3 text-muted">¿Ya eres usuario? Inicia sesión</a>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection