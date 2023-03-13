@extends('app')

@section('content')

<section class="main-banner">
   <div class="container">
      <div class="banner-content">
         <div class="banner-text wow fadeInDown" data-wow-duration="1000ms">
            <span>{{ $user->name }} - {{ $user->profession }}</span>
            <p class="m-0">
               {{ $user->position }}
            </p>

            <hr>
            
            <p class="m-0">
               <b>{{ $user->dependency->title }}</b>
            </p>

            <hr>
            <p class="m-0 mt-1">
               <i class="fas fa-map-marked-alt mr-2"></i> @if($user->sex == 'Female') Nacida @else Nacido @endif en {{ $user->city->name }}, {{ $user->city->state }}
            </p>
            <p class="m-0 mt-1">
               <i class="far fa-envelope mr-2"></i> {{ $user->email }}
            </p>
            <p class="m-0">
               <i class="fas fa-phone-alt mr-2"></i> {{ $user->phone_number }} @if($user->ext_number) Extensión {{ $user->ext_number }} @endif @if($user->cellular_number) | {{ $user->cellular_number }} @endif
            </p>
            <a href="mailto:{{$user->email}}"  target="_blank" class="mt-4 btn-default">Enviar mensaje <span></span></a>
         </div>
         <!--banner-text end-->
         <div class="banner-imz wow fadeInUp" data-wow-duration="1000ms">
            <div class="banner-img-slider">
               <div class="banner-slide-main">
                  <div class="banner-slide">
                     <img src="{{ asset($user->image()) }}" alt="" />
                  </div>
               </div>
            </div>
         </div>
         <!--banner-imz end-->
      </div>
      <!--banner-content end-->
   </div>
</section>
<!--main-banner end-->
@stop