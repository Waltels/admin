@extends('admin.layouts.maind')
@section('section')
<div class="page-content">
    <div class="row"> 
        <div class="col-lg-9 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class=" card col-md-5 mx-auto mb-2">
                    <a class="btn btn-primary px-2" href="{{route('post.posts.create')}}">Registrar nuevo Post</a>
                 </div>
                <div class="card-body">
                    <h4 class="card-title text-center">REGISTRO DE PUBLICACIONES EN EL BLOG DE LA UNIDAD EDUCATIVA ALEMANIA</h4>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table table-striped">
                            <thead >
                                <tr class="text-center">
                                    <th></th>
                                    <th class="text-center">Categoria</th>
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">estado</th>
                                    <th class="text-center">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{$post->imagen}}" alt="image">
                                        </td>
                                        <td>{{$post->category->name}}</td>
                                        
                                        <td class="w-25">{!!Str::limit($post->description, 60)!!}</td>
                                        <td class="text-center">
                                            @if ($post->published == 1)
                                            <span class="badge bg-success">Publicado</span>
                                            @else
                                            <span class="badge bg-danger">Borrador</span>  
                                            @endif
                                        </td>
                                        <td width='10px'>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <a href="{{route('post.downs', $post)}}" type="button" class="btn btn-outline-success btn-icon"><i data-feather="download"></i></a>
                                                <a href="{{route('post.posts.edit', $post)}}" type="button" class="btn btn-outline-success btn-icon"><i data-feather="feather"></i></a>
                                                <button class="btn btn-outline-success btn-icon" onclick="deletePost()">
                                                    <i data-feather="x-octagon"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>                                   
                                @endforeach
                            </tbody>
                        </table>
                        <form   action="{{route('post.posts.destroy', $post)}}"
                                method="POST" 
                                id="FormDelete">
                                @csrf
                                @method('DELETE')   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    function deletePost(){
        let form = document.getElementById('FormDelete');
        form.submit();
    }
</script>  
@endpush
@endsection