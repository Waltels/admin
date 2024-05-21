@extends('admin.layouts.maind')
@section('section')
<div class="page-content">
    <div class="row">
        <div class="col-md-8 stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">CREAR UNA NUEVA PUBLICACION</h2>
                    <hr>
                        <form method="POST" id="post" action="{{route('post.posts.store')}}" enctype="multipart/form-data">
                         @csrf
                            <h6 class="card-title">DATOS DE LA PUBLICACION</h6>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Categorias</label>
                                        <select name="category_id" class="js-example-basic-multiple form-select" multiple="multiple" data-width="100%">
                                            @foreach ($categories as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>   
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Descripcion del Post</label>
                                        <textarea class="form-control" name="description" id="tinymceExample" rows="15"></textarea>
                                        <input type="hidden" name="name" value="En construcción" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Fecha</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input name="date" type="text" class="form-control" placeholder="Select date" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                        </div>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Publicar</button>
                        </form>   
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection