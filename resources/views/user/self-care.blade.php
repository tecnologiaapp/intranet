@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Autocuidado</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="featured-projects-sec">
   <div class="container">
      <div class="sec-title">
         <h3>Protocolo de bioseguridad</h3>
      </div>
      
      <div class="row text-center justify-content-center align-items-center">
      	<div class="col-sm-12 col-md-10">
      		<div class='embed-responsive' style="padding-bottom:150%">
      			<object data='{{ asset('pdf/protocolo-de-bioseguridad.pdf') }}' type='application/pdf' width='100%' height='100%'></object>
      		</div>
      	</div>
      </div>
      
      <div class="row text-center justify-content-center align-items-center mt-5">
      	<div class="col-sm-12 col-md-10">
      		<a href="{{ asset('pdf/protocolo-de-bioseguridad.pdf') }}" target="_blank" class="btn-default"><i class="lni lni-pdf"></i> Ver documento<span></span></a>
      	</div>
      </div>
   </div>
</section>

<section class="featured-projects-sec">
   <div class="container">
      <div class="sec-title">
         <h3>Seguridad y salud en el trabajo</h3>
      </div>
      
      <div class="row">
         <div class="col-sm-12 col-md-6 pl-5 pr-5">
            <h1>Política de Seguridad y Salud en el Trabajo</h1>

            <p class="mt-3 text-justify">
               La Agencia para la Gestión del Paisaje, el Patrimonio y las Alianzas Público Privadas - APP en la prestación de sus servicios se encuentra comprometida con la seguridad y salud de sus empleados y contratistas en el desarrollo de sus actividades. La Agencia APP, mediante la implementación, desarrollo y mejora continua de un Sistema de Gestión de la Seguridad y Salud en el Trabajo tiene como razón fundamental, velar por la prevención de incidentes, accidentes y enfermedades laborales.
            </p>

            <img class="mt-3 img-fluid" src="{{ asset('images/care/seguridad.jpeg') }}">
         </div>

         <div class="col-sm-12 col-md-6 pl-5 pr-5">
            <h1>Objetivos de Seguridad y Salud en el trabajo</h1>

            <p class="mt-3 text-justify">
               Cumplir con los requisitos legales que en materia de seguridad y salud en el trabajo apliquen a la empresa.
            </p>

            <ol class="mt-3">
               <li class="mt-2">Identificar, evaluar, eliminar o controlar los peligros, riesgos y amenazas en las actividades de la empresa.</li>
               <li class="mt-2">Prevenir incidentes, accidentes y enfermedades laborales.</li>
               <li class="mt-2">Otorgar los recursos necesarios para la gestión de la seguridad y salud en el trabajo.</li>
               <li class="mt-2">Promover la cultura del cuidado, de la salud integral de los empleados mediante la mejora continua del SG- SST.</li>
               <li class="mt-2">Permitir el espacio en tiempo laboral para la formación y el cumplimiento de todas las actividades inherentes al SG- SST.</li>
            </ol>

            <h1 class="mt-4">Vigía de Seguridad y Salud en el Trabajo</h1>

            <img class="mt-3 img-fluid" src="{{ asset('images/care/barreto.jpeg') }}">
            <p class="text-center"><b>Javier Barreto Bonilla</b></p>

            <p class="text-justify mt-3">
               Queremos que conozcas las principales funciones de nuestro Vigía:
            </p>

            <ol class="mt-3">
               <li class="mt-2">Participar en las actividades de promoción, divulgación e información sobre el SGSST.</li>
               <li class="mt-2">Servir de puente entre empleador y trabajador.</li>
               <li class="mt-2">Vigilar el cumplimiento del SGSST en la Agencia APP.</li>
            </ol>
         </div>

         <div class="col-sm-12 mt-5">
            <div class="sec-title">
               <h3>Números de emergencia</h3>
               <p>Tener presente estos teléfonos es fundamental</p>
            </div>
         </div>

         <div class="col-sm-12 col-md-6 mt-5">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/emergencia1.png') }}">
         </div>

         <div class="col-sm-12 col-md-6 mt-5">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/emergencia2.png') }}">
         </div>

         <div class="col-sm-12 text-center mt-5">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/emergencia3.jpeg') }}">
         </div>

         <div class="col-sm-12 mt-5">
            <div class="sec-title">
               <h3>¿Sabes qué hacer en caso de una emergencia?</h3>
               <p>Estas son algunas recomendaciones para una situación de emergencia</p>
            </div>
         </div>

         <div class="col-sm-12 col-md-6 mt-5">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/sismo.png') }}">
         </div>

         <div class="col-sm-12 col-md-6 mt-5">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/emergencia.png') }}">
         </div>

         <div class="col-sm-12 mt-5">
            <div class="sec-title">
               <h3>Puntos de encuentro ante emergencia</h3>
            </div>
         </div>

         <div class="col-sm-12 col-md-6 mt-5 my-auto">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/map.png') }}">
         </div>

         <div class="col-sm-12 col-md-6 mt-5 my-auto">
            <img class="mt-3 img-fluid" src="{{ asset('images/care/map2.png') }}">
         </div>
      </div>
      
   </div>
</section>
@stop

