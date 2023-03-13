@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 156px; padding-bottom: 15px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Certificados Tributarios</h2>
         <p>Registra los datos para su posterior consulta</p>
      </div>
   </div>
</section>

<section class="page-content v4">
<div class="container">


              <div class="card">
                <div class="card-header">
                    <div>
                    <a href="{{ route('user.certificados.index') }}" class="btn btn-primary">Listado de documentos</a>
                    </div>
                </div>
                <div class="card-body">
                <form class="row g-3" action="{{ route('user.certificados.update',$certificados->id) }}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                @csrf
                @method('PUT')

                      <div class="col-md-6">
                      <label class="form-label">Nombres</label>
                      <input type="text" class="form-control" name="nombre" value="{{$certificados->nombre}}">
                      </div>
                      <div class="col-md-6">
                      <label class="form-label">Apellidos</label>
                      <input type="text" class="form-control" name="apellido" value="{{$certificados->apellido}}">
                      </div>
                      <div class="col-md-6">
                        <label  class="form-label">Documento de identidad</label>
                        <input type="numbers" class="form-control" name="cedula" value="{{$certificados->documento}}">
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Correo electronico</label>
                            <input type="text" class="form-control" name="correo" value="{{$certificados->correo}}">
                      </div>
                      <div class="col-md-6">
                            <label  class="form-label">Adjuntar certificado</label>
                            <input type="file" class="form-control-file" name="pdf" value="{{$certificados->pdf}}">
                      </div>

                      <button type="submit" class="btn btn-primary justify-content-md-end mt-2" style="background-color:#b3348a; border-color:#b3348a;">Actualizar registro</button>
                  </form>
                </div>
              </div>


</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop