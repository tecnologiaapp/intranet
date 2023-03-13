@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>{{ $dependency->title }}</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="page-content v4">
   <div class="container">
   <div class="sec-v2-title v2">
   <p> Reporta el uso indebido del espacio público   <p>
   <a href="https://arcg.is/1zqPSO1" target="_blank"><b>Click Aqui</b></a>
</div>
        
         {!! $dependency->description !!}
      
      
      <!--sec-v2-title end-->
      <div class="team-section">
         <div class="row">
            <div class="col-lg-4">
               <div class="team-col">
                  <div class="team-thumbnail">
                     <img src="{{ asset($owner->image()) }}" alt="" />
                     <ul class="tm-social">
                        <li>
                           <a href="{{ route('user.team.show', [$owner->dependency, $owner]) }}" title=""><i class="fas fa-eye"></i></a>
                        </li>
                        <li>
                           <a href="mailto:{{ $owner->email }}" target="_blank" title=""><i class="far fa-envelope"></i></a>
                        </li>
                     </ul>
                  </div>
                  <!--team-thumbnail end-->
                  <small>{{ $owner->dependency->title }}</small>
                  <h3>{{ $owner->name }}</h3>
                  <span>{{ $owner->position }}</span>
               </div>
               <!--team-col end-->
            </div>
            @foreach($users as $user)
            <div class="col-lg-4">
               <div class="team-col">
                  <div class="team-thumbnail">
                    <img src="{{ asset($user->image()) }}" alt="" />
                     <ul class="tm-social">
                        <li>
                           <a href="{{ route('user.team.show', [$user->dependency, $user]) }}" title=""><i class="fas fa-eye"></i></a>
                        </li>
                        <li>
                           <a href="mailto:{{ $user->email }}" target="_blank" title=""><i class="far fa-envelope"></i></a>
                        </li>
                     </ul>
                  </div>
                  <!--team-thumbnail end-->
                  <small>{{ $user->dependency->title }}</small>
                  <h3>{{ $user->name }}</h3>
                  <span>{{ $user->position }}</span>
               </div>
               <!--team-col end-->
            </div>
            @endforeach
         </div>
      </div>
      <!--team-section end-->
   </div>
</section>
@stop