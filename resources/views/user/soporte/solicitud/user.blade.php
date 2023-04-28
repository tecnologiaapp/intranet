@extends('app')

@section('content')
<head>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<style>
  tfoot nav ul li {
    display: inline-block;
    margin-right: 0px;
    padding: 0 0px 0px 0px;
    position: relative;
}

</style>
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
            <form action="{{ route('user.soporte.solicitud.user') }}" method="GET">
                <div class="btn-group">
                    <input type="text" id="texto" name="texto" class="form-control" value="{{$texto}}" placeholder="Digite su Cedula">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>            
        </div>
       
            <a href="{{ route('user.soporte.solicitud.create') }}">
                 <button type="submit" class="btn-get-principal">Nueva solicitud</button>
            </a>
                   
    </div>
</div>
<div class="card-body px-0 pt-0 pb-2">
              @if(session('notificacion'))
                     <div class="alert alert-success" role="alert">
                        {{ session('notificacion') }}
                     </div>
              @endif
              <div class="table-responsive p-0" style="width:100%; height:100%; overflow:auto; vertical-align: middle;">
                <table class="table align-items-center mb-0 table-bordered">
                <thead>
                    <th colspan="5" class="text-center font-weight-bold mb-0">Solicitante</th>
                    <th colspan="13" class="text-center font-weight-bold mb-0">Usuario</th>
                </thead>
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombres</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellidos</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subdirección</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cedula</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombres</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellidos</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subdirección</th>  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Numero de contrato</th>  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de inicio</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de finalización</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unidad de almacenamiento</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Permiso de unidad</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Objeto del contrato</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Observación</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>                   
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(($texto) === '')
                    <tr>
                        <td colspan="10">No hay resultados</td>
                    </tr>
                    @else
                    @foreach($solicitud as $sol)
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->id}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->nombres_solicitante}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->apellidos_solicitante}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->correo_solicitante}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->subdirección_solicitante}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->cedula_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">                        
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->nombres_usuario}}</p>
                          </div>
                        </div>                                            
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->apellidos_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->telefono_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->correo_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->subdirección_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->numero_contrato}}</p>                          
                          </div>
                        </div>
                      </td>  
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->fecha_inicio}}</p>                          
                          </div>
                        </div>
                      </td>    
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->fecha_fin}}</p>                          
                          </div>
                        </div>
                      </td>  
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->unidad}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->permiso_unidad}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->objeto_contrato}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->observacion}}</p>                          
                          </div>
                        </div>
                      </td> 
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$sol->estado}}</p>                          
                          </div>
                        </div>
                      </td>                 
                      <td class="btn-group">
                          <a href="{{ route('user.soporte.solicitud.edit', $sol->id) }}" class="btn-get-blue">Editar</a>
                          <form action="{{ route('user.soporte.solicitud.destroy', $sol->id) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <input type="submit" value="Eliminar" class="btn-get-red">
                          </form>
                      </td>
            
                    </tr>
                    
                  @endforeach
                  @endif
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="18"> {{$solicitud->appends(['texto'=>$texto])}} </td>
                      </tr>
                  </tfoot>
                </table>
              </div>
            </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop