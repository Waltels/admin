@extends('admin.layouts.maind')

@section('section')
<div class="page-content">
    <!-- carrusel de imagenes -->
    <div class="col-md-12 grid-margin mb-1">
          <div class="owl-carousel owl-theme owl-auto-play">
            <div class="item">
              <img src="{{asset('images/11.jpg')}}" alt="item-image">
            </div>
            <div class="item">
              <img src="{{asset('images/22.jpg')}}" alt="item-image">
            </div>
            <div class="item">
              <img src="{{asset('images/33.jpg')}}" alt="item-image">
            </div>
            <div class="item">
              <img src="{{asset('images/44.jpg')}}" alt="item-image">
            </div>
            <div class="item">
              <img src="{{asset('images/5.jpg')}}" alt="item-image">
            </div>
            <div class="item">
              <img src="{{asset('images/66.jpg')}}" alt="item-image">
          </div>
      </div>
    </div>
    <!-- fin carrusel de imagenes -->
    <div class="row mt-2">
      <div class="text-center">
        <h4 id="bg-color">Documentos emanados por la Dirección de la Unidad Eductaiva Alemania</h4>
      </div>
						<div class="example">
              <div class="row mt-2">
                @foreach ($comunicados as $comunicado)
                <!-- seccion comunicados -->
                <div class="col-12 col-md-4 grid-margin">
                  <div class="card ">
                    <div class="card-header">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0 text-center">{{$comunicado->name}}</h6>
                        <div class="dropdown mb-2">
                          <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item d-flex align-items-center" href="{{route('show', $comunicado)}}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Ver</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('admin.comunicados.pdf', $comunicado)}}" target="_blank"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Imprimir</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">                    
                      <div class="row">
                        <div class="col-12 col-md-12 col-xl-12">
                          <h3 class="mb-2 text-center">Comunicado Nº <span>{{$comunicado->id}}</span></h3>
                          <div class="py-2  font-serif text-md">
                            {!!Str::limit($comunicado->content, 700)!!}
                          </div>
                          <div class="d-flex align-items-baseline">
                            <p class="text-primary">
                              <hr>
                              <p class="text-blue-700 mt-3"><span>Fecha emision: {{$comunicado->fecha}} / </span> <span><a href="{{route('show', $comunicado)}}"> Ver detalles     <i data-feather="eye" class="icon-sm mb-1"></i></a></span></p>
                              
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
						</div>
</div>
@endsection