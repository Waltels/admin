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
                            <span>DETALLES DEL COMUNICADO</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
                          <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <span class="mx-2 text-muted">Emisor:</span> 
                                <span class="text-body">{{$comunicado->name}}</span>
                            </div>
                          </div>
                        </div>
                        <div class="p-4 border-bottom"> 
                          <div class="py-2  font-serif text-lg">
                            <div class="text-center mb-2">
                              <h4>COMUNICADO Nº <span>{{$comunicado->id}}</span></h4>
                            </div>
                            {!!$comunicado->content!!}
                          </div>
                        </div>
                        <div class="p-3">
                            <p >El comunicado se publico en fceha: {{$comunicado->fecha}}</p>
                            <p><strong>Registrado por</strong>,<br> DIRECCION DE UNIDAD EDUCATIVA</p>
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
                        <a class="btn btn-primary" href="{{route('index')}}">CERRAR</a>
                      </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection