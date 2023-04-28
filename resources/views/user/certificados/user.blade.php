@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 156px; padding-bottom: 15px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Certificados Tributarios</h2>
         <p>Digita tu numero de cedula y accede a tu certificado tributario</p>
      </div>
   </div>
</section>

<section class="page-content v4">
<div class="container">

<div class="card-header">
    <div class="row" style="justify-content: space-between;">

        <div class="d-md-flex justify-content-md-end">
        
            <form action="{{ route('user.certificados.user') }}" method="GET">
                <div class="btn-group">
                    <input type="text" id="texto" name="texto" class="form-control" value="{{$texto}}" placeholder="Digite su Cedula">
                    <input type="submit" value="Buscar" class="btn btn-primary" >
                </div>
            </form>

        </div>
         
    </div>
</div>
<table class="table">
<thead>
    <th>id</th>
    <th>Documento</th>
    <th>Nombre o razón social</th>  
    <th>Opciones</th>
</thead>
<tbody>
 
    @if(($texto) === '')
    <tr>
        <td colspan="6">No hay resultados</td>
    </tr>
    @else
    @foreach($archivos as $archivo)
    <tr>
        <td>{{$archivo->id}}</td>
        <td>{{$archivo->documento}}</td>
        <td>{{$archivo->razon_social}}</td>
        <td class="btn-group">
            <a class="btn-get-blue" href="Archivos/{{$archivo->pdf}}" target="_blank">Ver Documento</a>
        </td>
    </tr>
  @endforeach
    @endif

</tbody>

</table>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop