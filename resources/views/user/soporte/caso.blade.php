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
              <span>Solicitudes y permisos</span>
              <div align="center">
                <a href="{{ route('user.soporte.solicitud')}}">
                <img src="https://cdn-icons-png.flaticon.com/512/2262/2262143.png" width="200px;" height="200px;">
                </a>
              </div>
              <h4>Realiza peticiones como la creación de un correo electronico, conceder permisos de Google Drive, etc.</h4>
        
            </div>
          </div>   

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Soporte tecnico</span>
              <div align="center">
                  <img src="https://cdn-icons-png.flaticon.com/512/2345/2345581.png" width="200px;" height="200px;">
              </div>
              <h4>Reporta una falla con tu equipo de computo o solicita algun elemento como teclado, mouse, monitor, base refrigerante. </h4>
        
            </div>
          </div>   

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Configuración</span>
              <div align="center">
                  <img src="https://cdn-icons-png.flaticon.com/512/5106/5106024.png" width="200px;" height="200px;">
              </div>
              <h4>Solicita el acompañamiento o la instalación y configuración de alguna herramienta de Software como Office, AutoCad, Project.</h4>
        
            </div>
          </div>       

        </div>


      </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop