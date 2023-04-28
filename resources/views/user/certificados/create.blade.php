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
                    <a href="{{ route('user.certificados.index') }}" class="btn-get-principal">Listado de documentos</a>
                    </div>
                </div>
                <div class="card-body">
                  <form class="row g-3" action="{{ route('user.certificados.store') }}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                      @csrf

                      <div class="col-md-6">
                        <label  class="form-label">Cedula o Nit</label>
                        <input type="numbers" class="form-control" name="cedula" placeholder="Ingrese Cedula o Nit" required>
                      </div>
                      <div class="col-md-6">
                            <label class="form-label">Nombre o Razón social</label>
                            <input type="text" class="form-control" name="razon"  placeholder="Opcional">
                      </div>
                      <div class="col-md-6">
                            <label  class="form-label">Adjuntar certificado</label>
                            <input type="file" class="form-control" name="pdf" required>
                      </div>

                      <div class="col-md-12 pt-2" align="center">
                        <button type="submit" class="btn-get-principal">Guardar registro</button>
                      </div>
                  </form>
                </div>
              </div>





</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop