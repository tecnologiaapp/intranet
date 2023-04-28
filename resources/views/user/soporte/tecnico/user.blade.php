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
            <form action="{{ route('user.soporte.tecnico.user') }}" method="GET">
                <div class="btn-group">
                    <input type="text" id="texto" name="texto" class="form-control" value="{{$texto}}" placeholder="Digite su Cedula">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>            
        </div>
       
            <a href="{{ route('user.soporte.tecnico.create') }}">
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
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cedula</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombres</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellidos</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subdirección</th>                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo de soporte</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detalle</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Imagen</th>  
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
                    @foreach($tecnico as $tecni)
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->id}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->cedula_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->nombres_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->apellidos_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->correo_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->subdirección_usuario}}</p>                          
                          </div>
                        </div>
                      </td>
                     
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->tipo_soporte}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->detalle}}</p>                          
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                          @if($tecni->imagen)
                          <a href="{{ asset('soporte/' . $tecni->imagen) }}" class="btn-get-blue" target="_blank">
                            Observar
                          </a>
                            @else
                            <p class="text-xs font-weight-bold mb-0">No aplica</p>
                            @endif
                         
                          <!-- <img src="{{ asset('soporte/' . $tecni->imagen) }}" alt="Imagen de usuario">                         -->
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->observacion}}</p>                          
                          </div>
                        </div>
                      </td> 
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">{{$tecni->estado}}</p>                          
                          </div>
                        </div>
                      </td>                 
                      <td class="btn-group">
                          <a href="{{ route('user.soporte.tecnico.edit', $tecni->id) }}" class="btn-get-blue">Editar</a>
                          <form action="{{ route('user.soporte.tecnico.destroy', $tecni->id) }}" method="POST">
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
                          <td colspan="18"> {{$tecnico->appends(['texto'=>$texto])}} </td>
                      </tr>
                  </tfoot>
                </table>
              </div>
            </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop