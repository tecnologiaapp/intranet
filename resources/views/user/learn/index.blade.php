@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Un portafolio de contenidos pensado para ti</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="featured-projects-sec">
   <div class="container">
      <div class="sec-title">
         <h3>Aprendamos</h3>
      </div>
      <!--sec-title end-->
      <div class="projects-list">
         @foreach($learns as $learn)
         <div class="project-details">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="project-text wow fadeInUp" data-wow-duration="1000ms">
                     <span>
                        <a href="{{ route('user.learn.show', $learn) }}">{{ $learn->title }}</a>
                     </span>
                  </div>
                  <!--project-text end-->
               </div>
               <div class="col-lg-6">
                  <div class="project-thumb">
                     <div class="ban_img">
                        <img src="{{ asset($learn->image) }}" class="w-100" alt="" />
                        <div class="project-caption">
                           <h2><a href="{{ route('user.learn.show', $learn) }}" title="">Leer más</a></h2>
                        </div>
                        <!--project-caption end-->
                     </div>
                  </div>
                  <!--project-thumb end-->
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <!--projects-list end-->
   </div>
</section>

@stop