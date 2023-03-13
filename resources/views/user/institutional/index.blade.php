@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Institucional</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="featured-projects-sec">
   <div class="container">
      <div class="sec-title">
         <h3>Organigrama</h3>
      </div>
      
      <div class="row text-center justify-content-center align-items-center">
      	<div class="col-sm-12 col-md-10">
      		<img class="img-fluid" src="{{ asset('images/institutional/organigrama.png') }}">
      	</div>
      </div>

      <div class="sec-title mt-5">
         <h3>Nuestro mapa de procesos</h3>
      </div>
      
      <div class="row text-center justify-content-center align-items-center">
      	<div class="col-sm-12 col-md-10">
      		<img class="img-fluid" src="{{ asset('images/institutional/mapa.jpeg') }}">
      	</div>
      </div>

      <div class="sec-title mt-5">
         <h3>Procesos y procedimientos</h3>
      </div>

      <p class="mb-4">En el enlace que encontrarás a continuación verás:</p>
      <ul>
      	<li>1. Formatos generales</li>
      	<li>2. Archivo fotográfico</li>
      	<li>3. Manuales de la Agencia APP</li>
      	<li>4. Procesos y procedimientos</li>
      </ul>
      
      <div class="row text-center justify-content-center align-items-center">
      	<div class="col-sm-12 col-md-10">
      		<a href="https://drive.google.com/drive/u/2/folders/0AEjeGDwGYXM4Uk9PVA" target="_blank" class="btn-default"><i class="lni lni-google-drive"></i> Ir a Google Drive<span></span></a>
      	</div>
      </div>
   </div>
</section>

@stop