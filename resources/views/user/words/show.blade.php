@extends('app')

@push('styles')

@endpush

@section('title', $word->title)

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>{{ $word->title }}</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

{{-- <div class="text-center">
   <a href="http://mercurioapp.medellin.gov.co/mercurio/index.jsp" class="btn-default mt-4" target="_blank">
      Compartir esta noticia
   </a>
</div> --}}

<section class="featured-projects-sec">
   <div class="container">
      <div class="projects-list">
         <div class="project-details">
            <div class="row justify-content-center align-items-center">
               <div class="col-sm-10">
                  {!! $word->content !!}

                  <hr>

                  <div class="sec-title">
                     <p>Publicado el {{ $word->created_at->format('d/m/y') }}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@stop