<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comunicado Nº {{$comunicado->id}} DEUA-2024</title>

	<link rel="stylesheet" href="{{asset('vendors/core/core.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}"> 
	<link rel="stylesheet" href="{{asset('css/demo3/style.css')}}">
</head>
<body>
    <div class="text-center mb-3">
        <img src="{{asset('images/pdf/logo_alemania.png')}}" alt="" width="210">
      </div>
      <div class="container">
        <h4 class="text-center mb-3">COMUNICADO Nº {{$comunicado->id}}</h4>
        <div class="row">
            <div class="col mb-3">
                <p class="px-3">{!!$comunicado->content!!}</p>  
              </div>
              <div class="mt-6">
              <img src="data:image/png;base64,  {!! base64_encode(QrCode::format('svg')
                                                                          ->size(100)
                                                                          ->errorCorrection('H')                                               
                                                                          ->generate('comunicadoNº'.$comunicado->id.'DireccionUnidadEducativaAlemanaia'));!!}"/>
              <H6> DEUA-G2024</66>
              </div>
        </div>
      </div>
    




    
    <!-- core:js -->
	<script src="{{asset('vendors/core/core.js')}}"></script>
	<script src="{{asset('vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('js/template.js')}}"></script>
	<!-- endinject -->
</body>
</html>