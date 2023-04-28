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

          <div class="col-lg-4">
            <div class="box">
              <span>Crear caso</span>
            <div align="center"> 
                <a href="{{ route('user.soporte.caso')}}">
                    <img src="https://cdn-icons-png.flaticon.com/512/675/675523.png" width="200px;" height="200px;">
                </a>
            </div>
              <h4 >Proporciona toda la información que necesitamos para ayudarte a resolver tu solicitud lo mas pronto posible.</h4>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>Appyudas virtuales</span>
              <div align="center">
                <a href="{{ route('user.soporte.virtual.index')}}">
                    <img src="https://cdn-icons-png.flaticon.com/512/3246/3246823.png"  width="200px;" height="200px;">
                </a>
              </div>
              <h4 >Accede y encuentra toda la información necesaria para hacer mas agil tu proceso: manuales, capacitaciones, instructivos.</h4>
              
            </div>
          </div>

          <!-- <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4 style="text-align:left;">Ofrecer un acompañamiento y tratamiento psicosocial a los sindicados y a sus familias.</h4>
        
            </div>
          </div>        -->

        </div>

        <!-- <div class="row pt-5">
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>04</span>
              <h4 style="text-align:left;">Generar espacios e infraestructura adecuada para promover el respeto y la garantía de los derechos humanos de los sindicados.</h4>
        
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>05</span>
              <h4 style="text-align:left;">Cumplir la sentencia judicial que exige al Distrito de Medellín la construcción de una cárcel para sindicados.  </h4>
        
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>06</span>
              <h4 style="text-align:center;">Te invitamos a conocer el proyecto de pliegos publicado en SECOP I </h4>
              <div align="center">
              <a href="https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=23-19-13468568&g-recaptcha-response=03AFY_a8VEiZSIA2iO5feV8iEeAHinJ8b0yMa17XKODavYIgZYR3hAjUcH2pZvbYrh6WMt9SFbbpZqMFE-t4Div8ITZzF8vHUf7Y-X6cEFC6FdSYoE6ee680GQH1y16kTLa2QHOdObvj19kJJvwfl69V5T665wNc063Bh99ZyfgcLUMQKKFiDtLt8bU_RPk_rk8GpPIl1hZg7f6YKQ5SpSEk3r02QKxZ-oB0ARJx-NnmUz2dFatmOX1k63hkwd84ZjdgAt0ZOkszciVa2R2GabRuYvm9h9S32NPoSkG0Eo02izRK97f_LwP4z_JhHuSXxkI5YZwyhJIxbSUv-bGoPO86yrQZe8wSnKpT7GC3VcQ65tZ-NMLcRxvTiyzFZ9Reb5qIP2nooWNMkO7c5gknRD1Visnv542NkRFOzKFTZE054dzqGjkSzGuY4F03wtHBnaqQ6oqvKmCmeiaTo-CarAhuUEUQ6OkpZNiy_vTpY8FlHFiEXjYSuU1RqSe3jaxpzehCLTMIgUV9rIQM_z7ooCF-IArejWJllilA" class="btn btn-primary btn-block" style="background-color:#b3348a; border-color:#b3348a;" target="_blank">Conócelo ahora</a>
              </div>
             
            </div>
          </div>
        </div> -->

      </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop