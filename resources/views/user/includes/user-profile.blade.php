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
      <h3>{{ $user->name }}</h3>
      <small>{{ $user->dependency->title }}</small>
     
      <p><i class="fas fa-birthday-cake text-muted"></i> {{ $user->day }} de {{ $month }}</p>
      <!-- <span>{{ $user->position }}</span> -->
   </div>
   <!--team-col end-->
</div>