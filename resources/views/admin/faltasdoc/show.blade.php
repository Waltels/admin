@extends('admin.layouts.maind')
@section('section')

<div class="page-content">

    <div class="row justify-content-center">
        <div class="col-md-10 stretch-card">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center justify-content-between p-3 border-bottom tx-16">
                          <div class="d-flex align-items-center">
                            <i data-feather="user-x" class="text-primary icon-lg me-2"></i>
                            <span>DETALLES DE LA FALTA</span>
                          </div>
                          <div>
                            <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Forward"><i data-feather="share" class="text-muted icon-lg"></i></a>
                            <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Print"><i data-feather="printer" class="text-muted icon-lg"></i></a>
                            <a type="button" data-bs-toggle="tooltip" data-bs-title="Delete"><i data-feather="trash" class="text-muted icon-lg"></i></a>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
                          <div class="d-flex align-items-center">
                            <div class="me-2">
                              <img src="{{ Auth::user()->profile_photo_url }}" alt="Avatar" class="rounded-circle img-xs">
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="mx-2 text-muted">DOCENTE</span> 
                                <span class="text-body">{{$faltasdoc->user->name}}</span>
                            </div>
                          </div>
                        </div>
                        <div class="p-4 border-bottom">
                            <p>El docente <span class="fw-bold ">{{$faltasdoc->user->name}}</span>, presenta los siguientes datos de faltas en la Unidad Educativa Alemania.</p>
                            <br>
                            <p>Motivo de la falta: <span class="fw-bold ">{{$faltasdoc->motivo}}</span>.</p>
                            <p>El registro de la falta corresponde a la fecha: <span class="fw-bold ">{{$faltasdoc->fecha}}</span>.</p> </p>
                
                            <p>Para el registro de la falta se tiene las siguientes consideraciones: <br> <span class="fw-bold  text-cyan-950">{{$faltasdoc->obs}}</span></p>
                            <hr>
                            <p>En estudio del caso se toma las siguientes acciones:  <br> <span class="fw-bold fst-italic">{{$faltasdoc->accion}}</span> </p>
                        </div>
                        <div class="p-3">
                            
                            <p><strong>Registrado por</strong>,<br> DIRECCION DE UNIDAD EDUCATIVA.</p>
                        </div>
                        
                   </div>
                   <div class="col-lg-4 border-lg">
                   <div class="aside-content">
                      <div class="d-flex align-items-center justify-content-between">
                        <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                          <span class="icon"><i data-feather="chevron-down"></i></span>
                        </button>
                      </div>
                      <div class="d-grid my-3">
                        <a class="btn btn-primary" href="{{route('admin.faltasdocs.index')}}">CERRAR</a>
                      </div>
                      <div class="order-first text-center">
                        <h6 class="">Unidad Edicativa Alemania</h3>
                        
                        {{-- <iframe src="{{url($faltasdoc->path)}}"  width="280" height="330"></iframe> --}}
                      </div>
                    
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
