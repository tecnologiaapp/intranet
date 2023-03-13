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

    <div class="card-header">
    <div class="row" style="justify-content: space-between;">

        <div class="d-md-flex justify-content-md-end">
        
            <form action="{{ route('user.soporte.solicitud.index') }}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="enviar" class="btn btn-primary">
                </div>
            </form>

        </div>
         
    </div>
</div>
<div class="table-responsive" style="width:100%; height:100%; overflow:auto; vertical-align: middle;">
<table class="table table-hover table-bordered" style="vertical-align: middle;">
    <thead>
        <th colspan="5" class="text-center">Solicitante</th>
        <th colspan="13" class="text-center">Usuario</th>
    </thead>
<thead style="vertical-align: middle; width:50px">
    <th>id</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Correo</th>
    <th>Subdirección</th>
    <th>Cedula</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Subdirección</th>
    <th>Numero de contrato</th>
    <th style="">Fecha de inicio</th>
    <th>Fecha de finalización</th>
    <th>Unidad de almacenamiento</th>
    <th>Permiso de unidad</th>
    <th>Objeto del contrato</th>
    <th>Estado</th>
</thead>
<tbody>
    @foreach($solicitud as $sol)
    <tr>
        <td>{{$sol->id}}</td>
        <td>{{$sol->nombres_solicitante}}</td>
        <td>{{$sol->apellidos_solicitante}}</td>
        <td>{{$sol->correo_solicitante}}</td>
        <td>{{$sol->subdirección_solicitante}}</td>
        <td>{{$sol->cedula_usuario}}</td>
        <td>{{$sol->nombres_usuario}}</td>
        <td>{{$sol->apellidos_usuario}}</td>
        <td>{{$sol->telefono_usuario}}</td>
        <td>{{$sol->correo_usuario}}</td>
        <td>{{$sol->subdirección_usuario}}</td>
        <td>{{$sol->numero_contrato}}</td>
        <td>{{$sol->fecha_inicio}}</td>
        <td>{{$sol->fecha_fin}}</td>
        <td>{{$sol->unidad}}</td>
        <td>{{$sol->permiso_unidad}}</td>
        <td>{{$sol->objeto_contrato}}</td>
        <td>{{$sol->estado}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <td colspan="18"> {{$solicitud->appends(['busqueda'=>$busqueda])}} </td>
    </tr>
</tfoot>
</table>
</div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop