@extends('admin.layouts.maind')
@section('section')
<div class="page-content">

  <nav class="page-breadcrumb">
  
                    @error('user_id')
                    <script>
                        Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "El Docente ya esta asignado en una comisión",
                        showConfirmButton: false,
                        timer: 2000
                        });
                    </script>
                    @enderror

                    
                      @error('fecha')
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
                          title: "Deve incluir la fecha de comision"
                          });
                      </script>
                      @enderror    
                      
                      @error('tarea')
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
                          title: "Deve incluir el detalle de la asignación del Docente en la comisión "
                          });
                      </script>
                      @enderror

  </nav>
  <div class="row justify-content-center">
      <div class="col-md-8 stretch-card">
          <div class="card">
              <div class="card-body">
                <h2 class="card-title mb-1 text-center">ASIGNACION DE RESPONSABILIDADES A LAS Y LOS DOCENTES EN CADA COMISION</h2>
                <hr>  
                <h6 class="card-title mb-1">Asignación del Docente a la comision</h6>

                      <form method="POST" id="asignacion" action="{{route('admin.asignacions.store')}}" enctype="multipart/form-data">
                          @csrf 
                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="mb-3">
                                      <label class="form-label">Docente</label>
                                      <select name="user_id" id="user_id" class="form-control" aria-label="Default select example">
                                        @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach  
                                      </select>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label">Comision</label>
                                    <select name="comision_id" id="comision_id" class="form-control" aria-label="Default select example">
                                      @foreach ($comisions as $comision)
                                      <option value="{{$comision->id}}">{{$comision->name}}</option>
                                      @endforeach  
                                    </select>
                                    </select>
                                </div>
                            </div>
                              <div class="col-sm-4">
                                  <div class="mb-3 text-center">
                                      <p class="form-label">Fecha </p>
                                      <div class="input-group flatpickr" id="flatpickr-date">
                                          <input name="fecha" id="fecha" type="text" class="form-control" placeholder="Fecha" data-input>
                                          <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                      </div>
                                  </div>
                              </div>
                          </div><!-- Row -->
                          <div class="row">
                              <div class="col-sm-12">
                                  <h4 class="card-title">Detalle de la asignacion del Docente en la comisión</h4>
                                  <textarea class="form-control" name="tarea" id="tinymceExample" rows="15"></textarea>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary submit mt-3">Crear Asignacion del Docente</button>
                      </form>
                      
              </div>
          </div>
      </div>
  </div>
</div> 
@endsection