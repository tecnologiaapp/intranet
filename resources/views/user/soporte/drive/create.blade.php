@extends('app')

@section('content')
<head>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<section class="work-together-sec" style="padding-top: 156px; padding-bottom: 15px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Mesa de ayuda</h2>
         <p>Aqui podras diligenciar todas las solicitudes tecnologicas de la Agencia APP</p>
      </div>
   </div>
</section>

<section  class="why-us">
    <div class="container" >
    @if(session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Mensaje de éxito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#successModal').modal('show');
        });
    </script>
@endif        

            <div class="card">
             
                <div class="card-body">
                      <div class="col-md-12 pt-2">
                        <a href="{{ route('user.soporte.drive.user') }}">
                           <button type="submit" class="btn-get-principal">Consultar</button>
                        </a>                     
                      </div>
                    <form class="row g-3" action="{{ route('user.soporte.drive.store') }}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                      @csrf
                   
                      <div class="col-md-12 pt-1">
                        <h2 align="center">Datos del usuario</h2>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Cedula</label>
                            <input type="number" class="form-control" name="cedula_usuario" placeholder="Ingrese cedula" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre_usuario" placeholder="Ingrese nombres" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido_usuario" placeholder="Ingrese apellidos" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="correo_usuario" placeholder="Ingrese correo electrónico" required>
                      </div>

                      <div class="col-md-6 pb-2">
                      <label class="form-label">Subdirección:</label>
                        <select class="form-control" name="subdireccion_usuario" required>
                        <option selected disabled value="">Seleccionar</option>
                        <option value="Dirección General">Dirección General</option>
                        <option value="Dirección Técnica">Dirección Técnica</option>
                        <option value="Subdirección App">Subdirección App</option>
                        <option value="Subdirección paisaje y patrimonio">Subdirección paisaje y patrimonio</option>
                        <option value="Subdirección inmobiliaria">Subdirección inmobiliaria</option>
                        </select>
                      </div>

                      <div class="col-md-6 pb-2">
                            <label class="form-label">Unidad compartida</label>
                            <input type="text" class="form-control" name="unidad" placeholder="Ingrese unidad compartida" required>
                      </div>
                      <div class="col-md-6">
                      <label class="form-label">Tipo de permiso:</label>
                        <select class="form-control" name="permiso_unidad" required>
                        <option selected disabled value="">Seleccionar</option>
                        <option value="Lector">Lector</option>
                        <option value="Comentador">Comentador</option>
                        <option value="Colaborador">Colaborador (Añadir y editar archivos)</option>
                        <option value="Gestor">Gestor de contenido (Añadir, editar, mover y eliminar archivos)</option>
                        </select>
                      </div>
      
                      <div class="col-md-12 pt-2" align="center">
                        <button type="submit" class="btn-get-principal">Registrar solicitud</button>
                      </div>
                      
                  </form>
                </div>
           </div>


    </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $(function() {
    $('#successModal').modal('show');
    setTimeout(function() {
        $('#successModal').modal('hide');
    }, 15000);
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop