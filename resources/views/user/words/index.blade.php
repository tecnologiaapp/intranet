@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Mensajes de la Dirección General</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="featured-projects-sec">
   <div class="container">
      <div class="projects-list">
         @foreach($words as $word)
         <div class="project-details">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="project-text wow fadeInUp" data-wow-duration="1000ms">
                     <span>
                        <a href="{{ route('user.words.show', $word) }}">{{ $word->title }}</a>
                     </span>
                  </div>
                  <!--project-text end-->
               </div>
               <div class="col-lg-6">
                  <div class="project-thumb">
                     <div class="ban_img">
                        <img src="{{ asset($word->image) }}" class="w-100" alt="" />
                        <div class="project-caption">
                           <h2><a href="{{ route('user.words.show', $word) }}" title="">Leer más</a></h2>
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