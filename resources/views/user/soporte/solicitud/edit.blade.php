@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 156px; padding-bottom: 15px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Mesa de ayuda</h2>
         <p>Edita el estado de la solicitud</p>
      </div>
   </div>
</section>

<section class="page-content v4">
<div class="container">


              <div class="card">
                <div class="card-header">
                    <div>
                    <a href="{{ route('user.soporte.solicitud.index') }}" class="btn btn-primary">Listado de solicitudes</a>
                    </div>
                </div>
                <div class="card-body">
                <form class="row g-3" action="{{ route('user.soporte.solicitud.update',$solicitud->id) }}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                @csrf
                @method('PUT')

                <div class="col-md-12 pb-3">
                        <h2 align="center">Datos del solicitante</h2>
                      </div>
                      <div class="col-md-6 pb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre_solicitante" value="{{ $solicitud->nombres_solicitante}}" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido_solicitante" value="{{ $solicitud->apellidos_solicitante}}" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" name="correo_solicitante" value="{{ $solicitud->correo_solicitante}}" required>
                      </div>
                      <div class="col-md-6">
                      <label class="form-label">Subdirección:</label>
                        <select class="form-control" name="subdireccion_solicitante"  required>
                        <option selected disabled value="">{{ $solicitud->subdirección_solicitante}}</option>
                        <option value="Direccion_general">Dirección General</option>
                        <option value="Direccion_tecnica">Dirección Técnica</option>
                        <option value="Subdireccion_app">Subdirección de alianzas publico privadas</option>
                        <option value="Subdireccion_paisaje">Subdirección de paisaje y patrimonio</option>
                        <option value="Subdireccion_inmo">Subdirección de inmobiliaria</option>
                        </select>
                      </div>
                   
                      <div class="col-md-12 pt-5">
                        <h2 align="center">Datos del usuario</h2>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Cedula</label>
                            <input type="number" class="form-control" name="cedula_usuario" value="{{ $solicitud->cedula_usuario}}" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre_usuario" value="{{ $solicitud->nombres_usuario}}" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido_usuario" value="{{ $solicitud->apellidos_usuario}}" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Telefono</label>
                            <input type="number" class="form-control" name="telefono_usuario" value="{{ $solicitud->telefono_usuario}}" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="correo_usuario" value="{{ $solicitud->correo_usuario}}" required>
                      </div>

                      <div class="col-md-6 pb-2">
                      <label class="form-label">Subdirección:</label>
                        <select class="form-control" name="subdireccion_usuario" required>
                        <option selected disabled value="">{{ $solicitud->subdirección_usuario}}</option>
                        <option value="Direccion_General">Dirección General</option>
                        <option value="Direccion_Tecnica">Dirección Técnica</option>
                        <option value="Subdireccion_App">Subdirección de alianzas publico privadas</option>
                        <option value="Subdireccion_Paisaje">Subdirección de paisaje y patrimonio</option>
                        <option value="Subdireccion_Inmobiliaria">Subdirección de inmobiliaria</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                            <label class="form-label">Numero de contrato</label>
                            <input type="number" class="form-control" name="numero_contrato" value="{{ $solicitud->numero_contrato}}"  required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Fecha de inicio del contrato</label>
                            <input type="date" class="form-control" name="fecha_inicio" value="{{ $solicitud->fecha_inicio}}" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Fecha de finalización del contrato</label>
                            <input type="date" class="form-control" name="fecha_fin" value="{{ $solicitud->fecha_fin}}" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Unidad compartida</label>
                            <input type="text" class="form-control" value="{{ $solicitud->unidad}}" name="unidad">
                      </div>
                      <div class="col-md-6">
                      <label class="form-label">Tipo de permiso:</label>
                        <select class="form-control" name="permiso_unidad">
                        <option selected disabled value="">{{ $solicitud->permiso_unidad}}</option>
                        <option value="Lector">Lector</option>
                        <option value="Comentador">Comentador</option>
                        <option value="Colaborador">Colaborador (Añadir y editar archivos)</option>
                        <option value="Gestor">Gestor de contenido (Añadir, editar, mover y eliminar archivos)</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Objeto del contrato</label>
                            <input class="form-control" name="objeto_contrato" value="{{ $solicitud->objeto_contrato}}"></input>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Estado</label>
                            <select class="form-control" name="estado">
                                <option selected disabled value="">{{ $solicitud->estado}}</option>
                                <option value="Recibido">Recibido</option>
                                <option value="Comentador">En proceso</option>
                                <option value="Colaborador">Finalizado</option>
                                <option value="Gestor">Gestor de contenido (Añadir, editar, mover y eliminar archivos)</option>
                            </select>
                      </div>

                      <button type="submit" class="btn btn-primary justify-content-md-end mt-2" style="background-color:#b3348a; border-color:#b3348a;">Actualizar registro</button>
                  </form>
                </div>
              </div>


</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop