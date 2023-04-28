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
                    <a href="{{ route('user.soporte.configuracion.index') }}" class="btn-get-blue">Listado de solicitudes</a>
                    </div>
                </div>
                <div class="card-body">
                <form class="row g-3" action="{{ route('user.soporte.configuracion.update',$configuracion->id) }}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                @csrf
                @method('PUT')
                   
                      <div class="col-md-12 pt-5">
                        <h2 align="center">Datos del usuario</h2>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Cedula</label>
                            <input type="number" class="form-control" name="cedula_usuario" value="{{ $configuracion->cedula_usuario}}" required>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre_usuario" value="{{ $configuracion->nombres_usuario}}" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido_usuario" value="{{ $configuracion->apellidos_usuario}}" required>
                      </div>
              
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="correo_usuario" value="{{ $configuracion->correo_usuario}}" required>
                      </div>

                      <div class="col-md-6 pb-2">
                      <label class="form-label">Subdirección:</label>
                        <select class="form-control" name="subdireccion_usuario" required>
                        <option selected disabled value="">{{ $configuracion->subdirección_usuario}}</option>
                        <option value="Dirección General">Dirección General</option>
                        <option value="Dirección Técnica">Dirección Técnica</option>
                        <option value="Subdirección App">Subdirección App</option>
                        <option value="Subdirección paisaje y patrimonio">Subdirección paisaje y patrimonio</option>
                        <option value="Subdirección inmobiliaria">Subdirección inmobiliaria</option>
                        </select>
                      </div>           
       
                      <div class="col-md-6">
                      <label class="form-label">Tipo de soporte:</label>
                      <select class="form-control" name="soporte">
                        <option selected disabled value="">{{$configuracion->tipo_soporte}}</option>
                        <option value="Instalación">Instalación</option>
                        <option value="Configuración">Configuración</option>
                        </select>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Detalle</label>
                            <input type="text" class="form-control" value="{{ $configuracion->detalle}}" name="detalle">
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Observación</label>
                            <input class="form-control" name="observacion" value="{{ $configuracion->observacion}}"></input>
                      </div>
                      <div class="col-md-6 pb-2">
                            <label class="form-label">Estado</label>
                            <select class="form-control" name="estado" required>
                                <option selected disabled value="">{{ $configuracion->estado}}</option>
                                <option value="Recibido">Recibido</option>
                                <option value="En proceso">En proceso</option>
                                <option value="Finalizado">Finalizado</option>
                            </select>
                      </div>

                      <div class="col-md-12 pt-2" align="center">
                        <button type="submit" class="btn-get-principal">Enviar solicitud</button>
                      </div>
                  </form>
                </div>
              </div>


</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop