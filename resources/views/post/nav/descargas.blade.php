@extends('admin.layouts.maind')
@section('section')

<div class="page-content">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="">
                <div class="card-body">
                        <h3 class="text-center mb-4 mt-4">Choose a plan</h3>
                        <div class="container">  
                            <div class="row">
                                @foreach ($descargas as $descarga)
                                <div class="col-md-3 stretch-card grid-margin grid-margin-md-0 mb-3">
                                    <div class="card bg-transparent ">                                 
                                        <div class="card-body">        
                                            <img class="img-thumbnail shadow mb-3 bg-body cards" width="250" src="{{$descarga->imagen}}" alt="">
                                            <p class="text-center">{!!$descarga->description!!}</p>
                                            <div class="d-grid mt-2">
                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <a href="" type="button" class="btn btn-outline-success btn-icon"><i data-feather="download"></i></a>
                                                    <a href="" type="button" class="btn btn-outline-success btn-icon"><i data-feather="feather"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .cards:hover{
        transform: scale(1.2);
    }
    .cards{
        transition: all 1s ease;
    }
</style>
@endsection