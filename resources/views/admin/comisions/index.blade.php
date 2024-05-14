@extends('admin.layouts.maind')
@section('section')
<div class="page-content">
  <div class="row">
    <div class="col-lg-2">
      <div class="d-grid my-1">
        <a class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">Crear</a>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="d-grid my-1">
        <a class="btn btn-primary"  href="{{route('admin.com')}}">salir</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">LISTA DE COMISIONES</h4>
          <div class="table-responsive pt-3">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nº</th>
                  <th>Name</th>
                  <th>accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($comisions as $comision)
                <tr class="table-info">
                  <td>{{$comision->id}}</td>
                  <td>{{$comision->name}}</td>
                  <td width='10px'>
                      <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edModal{{$comision->id}}"><i data-feather="edit"></i></a>
                      <!--MODAL EDITAR COMISION-->
                        <div class="modal fade" id="edModal{{$comision->id}}" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="varyingModalLabel">New message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                              </div>
                              <form method="POST" id="comision" action="{{route('admin.comisions.update', $comision)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="recipient-name" class="form-label">Nombre de la comision</label>
                                      <input type="text" name="name" class="form-control" id="name" value="{{$comision->name}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-primary">Actualizar comision</button>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      <!--MODAL COMISION-->
                    </td>
                  <td width='10px'>
                      <x-danger-button class="btn btn-danger"  onclick="deleteComision()">
                          <i data-feather="delete"></i>
                      </x-danger-button>
                  </td> 
                </tr>   
                @endforeach
              </tbody>
            </table>
            <form   action=""
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
        <h5 class="modal-title" id="varyingModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
      </div>
      <form method="POST" id="comision" action="{{route('admin.comisions.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="form-label">Nombre de la comision</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Crear comision</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection