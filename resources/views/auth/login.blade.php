
@extends('layouts.main')
@section('content')
<div class="page-wrapper full-page">
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-lg-4 mx-auto">
                <div class="card">
                        <div class="col-md-12 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2"><span>UE</span> Alemania</a>
                                <h5 class="text-muted fw-normal mb-4">¡Bienvenido de nuevo! Ingrese a su cuenta.</h5>
                                <form method="POST" class="forms-sample">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <div>

                                        <button class="btn btn-primary me-2 mb-2 mb-md-0 text-white" type="submit">Ingresar</button>
                                        
                                    </div>
                                    <a href="{{ route('register') }}" class="d-block mt-3 text-muted">¿No eres usuario? Registrate</a>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


