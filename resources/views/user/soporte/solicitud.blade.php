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

        <div class="row" style="justify-content: space-around">

        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Correo electronico</span>
              <div align="center">
                  <a href="{{ route('user.soporte.solicitud.create')}}">
                  <img src="https://cdn-icons-png.flaticon.com/512/888/888853.png" width="200px;" height="200px;">
                  </a>
              </div>
              <h4>Realiza la solicitud para crear tu correo electronico de la entidad bajo el dominio @app.gov.co. </h4>
        
            </div>
          </div>   

           <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Acceso Drive</span>
              <div align="center">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111390.png" width="200px;" height="200px;">
              </div>
              <h4>Realiza la solicitud para concederte permisos de acceso a alguna carpeta de la entidad, especificando el tipo de permiso.</h4>
        
            </div>
          </div>   

   

        </div>


      </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop