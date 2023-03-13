@extends('app')

@section('content')

<section class="main-banner">
   <div class="container">
      <div class="banner-content">
         <div class="banner-text wow fadeInDown" data-wow-duration="1000ms">
            <span>Galería de la Agencia para la gestion del paisaje el patrimonio y las alianzas público privadas</span>
         </div>
         <!--Featured gallery-->
         <div class="banner-imz wow fadeInUp" data-wow-duration="1000ms">
            <div class="banner-img-slider">
               <div class="banner-slide-main">
                  <div class="banner-slide">
                     <img src="{{ asset('images/home/1-min.jpg') }}" alt="" />
                  </div>
                  <!--banner-slide end-->
                  <p class="next-slide-title"><span>Siguiente: </span>Pilsen</p>
               </div>
               <!--banner-main-slide end-->
               <div class="banner-slide-main">
                  <div class="banner-slide">
                     <img src="{{ asset('images/home/2-min.jpg') }}" alt="" />
                  </div>
                  <!--banner-slide end-->
                  <p class="next-slide-title"><span>Siguiente: </span>Naviera</p>
               </div>
               <!--banner-main-slide end-->
               <div class="banner-slide-main">
                  <div class="banner-slide">
                     <img src="{{ asset('images/home/3-min.jpg') }}" alt="" />
                  </div>
                  <!--banner-slide end-->
                  <p class="next-slide-title"><span>Siguiente: </span>Johan - APP</p>
               </div>
               <!--banner-main-slide end-->
            </div>
            <!--banner-img end-->
            <ul class="social-linkss">
               <li><a href="#" title="">Twitter</a></li>
               <li><a href="#" title="">Facebook</a></li>
               <li><a href="#" title="">Instagram</a></li>
            </ul>
            <!--social-linkss end-->
         </div>
         <!--Featured gallery-->
      </div>
      <!--banner-content end-->
   </div>
</section>
<!--main-banner end-->

<section class="project-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <div class="pr-large">
               <img src="{{ asset('images/gallery/bici.jpeg') }}" alt="" class="w-100 img-fluid" />
            </div>
            <!--pr-large end-->
         </div>
         <div class="col-lg-6">
            <div class="pr-text wow fadeInUp" data-wow-duration="1000ms">
               <h2 class="text-dark">Ciclada día del arquitecto</h2>
               <p class="text-dark">El viernes 30 de octubre,  como actividad de cierre del mes del arquitecto, recorrimos en bicicleta algunas calles de la ciudad. La primera para en la Iglesia del Perpetuo Socorro y luego ingresamos al centro por la carrera Palacé y Bolívar, para llegar a la estación EnCicla del Museo de Antioquia. </p>
               <p class="text-dark"><small>Fotografías de Nicolas Tieck</small></p>
               <a href="#" title="" class="btn-default">Ver galería <span></span></a>
            </div>
            <!--pr-text end-->
         </div>
      </div>
   </div>
</section>

<section class="project-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <div class="pr-text wow fadeInUp" data-wow-duration="1000ms">
               <h2 class="text-dark">Día del padre 2020</h2>
               <p class="text-dark">El cuentero Diego Ruíz de Te leo en voz alta,  nos acompañó en la AGENCIA APP para homenajear a los padres  en su día.</p>
               <p class="text-dark"><small>Fotografías de Erika Tobón </small></p>
               <a href="#" title="" class="btn-default">Ver galería <span></span></a>
            </div>
            <!--pr-text end-->
         </div>
         <div class="col-lg-6">
            <div class="pr-large">
               <img src="{{ asset('images/gallery/dia-del-padre.jpeg') }}" alt="" class="w-100 img-fluid" />
            </div>
            <!--pr-large end-->
         </div>
         
      </div>
   </div>
</section>

<section class="project-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <div class="pr-large">
               <img src="{{ asset('images/gallery/estadio.jpeg') }}" alt="" class="w-100 img-fluid" />
            </div>
            <!--pr-large end-->
         </div>
         <div class="col-lg-6">
            <div class="pr-text wow fadeInUp" data-wow-duration="1000ms">
               <h2 class="text-dark">Unidad Deportiva Atanasio Girardot</h2>
               <p class="text-dark">Reuniones del equipo del proceso de Factibilidad de la modernización  de la Unidad Deportiva Atanasio Girardot. </p>
               <p class="text-dark"><small>Fotografías de Nicolas Tieck</small></p>
               <a href="#" title="" class="btn-default">Ver galería <span></span></a>
            </div>
            <!--pr-text end-->
         </div>
      </div>
   </div>
</section>

<section class="project-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <div class="pr-text wow fadeInUp" data-wow-duration="1000ms">
               <h2 class="text-dark">Protocolo de bioseguridad </h2>
               <p class="text-dark">Como parte de las acciones para promover el protocolo de bioseguridad, el 1 de septiembre, fecha de la apertura económica de la ciudad después de la cuarentena por el COVID, en la AGENCIA APP , sede Plaza de la Libertad y OPT, se dispuso de la entrega de un kit de protección personal. Septiembre 1 de 2020</p>
               <p class="text-dark"><small>Fotografías de Erika Tobón </small></p>
               <a href="#" title="" class="btn-default">Ver galería <span></span></a>
            </div>
            <!--pr-text end-->
         </div>
         <div class="col-lg-6">
            <div class="pr-large">
               <img src="{{ asset('images/gallery/protocolo.jpeg') }}" alt="" class="w-100 img-fluid" />
            </div>
            <!--pr-large end-->
         </div>
         
      </div>
   </div>
</section>


@stop