@extends('app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
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

            <div class="card">
             
                <div class="card-body">
                    <!-- @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>
                    @endif -->
                    <form class="row g-3" action="{{ route('user.soporte.solicitud.store') }}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                      @csrf
                      <div class="col-md-12 pb-3">
                        <h2 align="center">Datos del solicitante</h2>
                      </div>
                      <div class="col-md-6 pb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre_solicitante" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido_solicitante" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" name="correo_solicitante" required>
                      </div>
                      <div class="col-md-6">
                      <label class="form-label">Subdirección:</label>
                        <select class="form-control" name="subdireccion_solicitante"required>
                        <option selected disabled value="">Seleccionar</option>
                        <option value="general_solicitante">Dirección General</option>
                        <option value="tecnica_solicitante">Dirección Técnica</option>
                        <option value="app_solicitante">Subdirección de alianzas publico privadas</option>
                        <option value="paisaje_solicitante">Subdirección de paisaje y patrimonio</option>
                        <option value="inmo_solicitante">Subdirección de inmobiliaria</option>
                        </select>
                      </div>
                   
                      <div class="col-md-12 pt-5">
                        <h2 align="center">Datos del usuario</h2>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Cedula</label>
                            <input type="number" class="form-control" name="cedula_usuario" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre_usuario" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido_usuario" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Telefono</label>
                            <input type="number" class="form-control" name="telefono_usuario" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="correo_usuario" required>
                      </div>

                      <div class="col-md-6 pb-2">
                      <label class="form-label">Subdirección:</label>
                        <select class="form-control" name="subdireccion_usuario" required>
                        <option selected disabled value="">Seleccionar</option>
                        <option value="general_usuario">Dirección General</option>
                        <option value="tecnica_usuario">Dirección Técnica</option>
                        <option value="app_usuario">Subdirección de alianzas publico privadas</option>
                        <option value="paisaje_usuario">Subdirección de paisaje y patrimonio</option>
                        <option value="inmo_usuario">Subdirección de inmobiliaria</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                            <label class="form-label">Numero de contrato</label>
                            <input type="number" class="form-control" name="numero_contrato" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Fecha de inicio del contrato</label>
                            <input type="date" class="form-control" name="fecha_inicio" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Fecha de finalización del contrato</label>
                            <input type="date" class="form-control" name="fecha_fin" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Unidad compartida</label>
                            <input type="text" class="form-control" name="unidad">
                      </div>
                      <div class="col-md-6">
                      <label class="form-label">Tipo de permiso:</label>
                        <select class="form-control" name="permiso_unidad">
                        <option selected disabled value="">Seleccionar</option>
                        <option value="">Lector</option>
                        <option value="">Comentador</option>
                        <option value="">Colaborador (Añadir y editar archivos)</option>
                        <option value="">Gestor de contenido (Añadir, editar, mover y eliminar archivos)</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Objeto del contrato</label>
                            <textarea class="form-control" required cols="30" rows="8" name="objeto_contrato"></textarea>
                      </div>
                      <div class="col-md-12 pt-2" align="center">
                        <button type="submit" class="btn btn-primary" style="background-color:#b3348a; border-color:#b3348a;">Enviar solicitud</button>
                      </div>
                      
                  </form>
                </div>
           </div>


    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop