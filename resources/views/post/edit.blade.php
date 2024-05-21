@extends('admin.layouts.maind')
@section('section')
<div class="page-content">
                        @error('name')
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                            Toast.fire({
                            icon: "error",
                            title: "No se asigno un nombre para el archivo"
                            });
                        </script>
                        @enderror
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">PUBLICACION</h2>
                    <hr>
                    
                        <form method="POST" id="comision" action="{{route('post.posts.update', $post)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h6 class="card-title">DATOS DE LA PUBLICACION</h6>
                            <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="mb-3 position-relative">
                                        <label class="form-label">Imagen del Post</label>
                                         <figure>
                                            <img class="rounded float-start" width="400" src="{{$post->imagen}}" alt="" id="imgPreview">
                                        </figure>
                                        <div class="position-absolute ms-3">
                                            <label>
                                                
                                                <p class="bg-light rounded text-primary"> <i data-feather="camera"></i> Actualizar </p>
                                                <input  type="file" 
                                                        class="visually-hidden"
                                                        accept="image/*"
                                                        name="image"
                                                        onchange="previewImage(event, '#imgPreview')">
                                            </label>  
                                        </div>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Categorias</label>
                                        <select class="form-select" name="category_id" id="category_id">
                                            <option value="{{$post->category->id}}">{{$post->category->name}}</option>
                                            @foreach ($categories as $categoria)
                                            <option  value="{{$categoria->id}}">{{$categoria->name}}</option>   
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Descripcion del Post</label>
                                        <textarea class="form-control" name="description"  id="tinymceExample" rows="15">{{$post->description}}</textarea>
                                    </div>
                                </div><!-- Col -->
                            
                            <div class="row mt-3">
                                <div class="col-sm-5" >
                                    <div class="mb-3">
                                    <label class="form-label">Archivo adjunto al Post</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                        <input name="name" type="text" class="form-control mb-2" value="{{$post->name}}">
                                        <span class="input-group-text input-group-addon mb-2"><i data-feather="file"></i></span>
								    </div>
                                        <input name="documento" type="file" class="form-control" placeholder="seleccione un archivo">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Estado de la publicación</label>
                                        <div class="form-check form-switch">
                                            <input type="hidden" name="published"  value="0">
                                            <input name="published" value="1" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" @checked(old('publisehd',$post->published) == 1)>
                                            @if ($post->published == 1)
                                                <label class="form-check-label" for="flexSwitchCheckDefault">El post esta publicado</label>
                                            @else
                                                <label class="form-check-label" for="flexSwitchCheckDefault">El post esta en Borrador</label>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-2">
                                    <div class="mb-3">
                                        <label class="form-label">Fecha</label>
                                        <div class="input-group flatpickr" id="flatpickr-date">
                                            <input type="text" class="form-control"  name="date"  value="{{$post->date}}" placeholder="Select date" data-input>
                                            <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
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
<script>
    function previewImage(event, querySelector){

//Recuperamos el input que desencadeno la acción
const input = event.target;

//Recuperamos la etiqueta img donde cargaremos la imagen
$imgPreview = document.querySelector(querySelector);

// Verificamos si existe una imagen seleccionada
if(!input.files.length) return

//Recuperamos el archivo subido
file = input.files[0];

//Creamos la url
objectURL = URL.createObjectURL(file);

//Modificamos el atributo src de la etiqueta img
$imgPreview.src = objectURL;
            
}
</script>
@endsection