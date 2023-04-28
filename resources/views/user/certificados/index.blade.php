@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 156px; padding-bottom: 15px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Certificados Tributarios</h2>
         <p>Aqui podras ver todo el registro de los certificados existentes</p>
      </div>
   </div>
</section>

<section class="page-content v4">
<div class="container">

<div class="card-header">
    <div class="row" style="justify-content: space-between;">
   
        <a href="{{ route('user.certificados.create') }}" class="btn-get-principal">Añadir certificado</a>
        <div class="d-md-flex justify-content-md-end">
        
            <form action="{{ route('user.certificados.index') }}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control" placeholder="Cedula o Nit">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>

        </div>
         
    </div>
</div>
<table class="table">
<thead>
    <th>id</th>
    <th>Documento</th>
    <th>Razon social</th>
    <th>Opciones</th>
</thead>
<tbody>
    @foreach($certificados as $certificado)
    <tr>
        <td>{{$certificado->id}}</td>
        <td>{{$certificado->documento}}</td>
        <td>
        @if($certificado->razon_social)
                {{$certificado->razon_social}}
            @else
                N/A
            @endif
        </td>
        <td class="btn-group">
            <a class="btn-get-principal" href="Archivos/{{$certificado->pdf}}" target="_blank">Ver Documento</a>
            <a href="{{ route('user.certificados.edit', $certificado->id) }}" class="btn-get-blue">Editar</a>
            <!-- <form action="{{ route('user.certificados.destroy', $certificado->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Eliminar" class="btn-get-red">
            </form> -->
        </td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <td colspan="4"> {{$certificados->appends(['busqueda'=>$busqueda])}} </td>
    </tr>
</tfoot>
</table>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop