@extends('admin.layouts.maind')
@section('section')



<div class="page-content">

                      @error('name')
                      <script>
                          Swal.fire({
                            icon: "error",
                            title: "Atención!!",
                            text: "¡La categoría ya existe!",
                          });
                      </script>
                      @enderror 
    <div class="">
      <div class="col-lg-3 mx-auto">
        <div class="d-grid my-1">
          <a class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">Crear</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 stretch-card mx-auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">LISTA DE COMISIONES</h4>
            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead class="text-center">
                  <tr>
                    <th>Nº</th>
                    <th>Name</th>
                    <th>accion</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categorias as $categoria)
                  <tr class="py-1">
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td width='10px'>
                        <a class="btn btn-xs btn-outline-success" data-bs-toggle="modal" data-bs-target="#edModal{{$categoria->id}}"><i data-feather="edit-2"></i></a>
                        <!--MODAL EDITAR COMISION-->
                          <div class="modal fade" id="edModal{{$categoria->id}}" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="varyingModalLabel">Editar categoria</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                </div>
                                <form method="POST" id="comision" action="{{route('post.categorias.update', $categoria)}}" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="modal-body">
                                      <div class="mb-3">
                                        <label for="recipient-name" class="form-label">Nombre de la categoria</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{$categoria->name}}">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Actualizar categoria</button>
                                  </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        <!--MODAL COMISION-->
                        <button class="btn btn-outline-danger btn-xs"  onclick="deleteComision()">
                            <i data-feather="x-circle"></i>
                        </button>
                    </td> 
                  </tr>   
                  @endforeach
                </tbody>
              </table>
              <form   action="{{route('post.categorias.destroy', $categoria)}}"
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
          function deleteComision(){
              let form = document.getElementById('FormDelete');
              form.submit();
          }
      </script>  
  @endpush
  <!--MODAL CREAR COMISION-->
<div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel">Crear categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <form method="POST" id="comision" action="{{route('post.categorias.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
              <div class="mb-3">
                <label for="recipient-name" class="form-label">Nombre de la categoria</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Crear categoria</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection