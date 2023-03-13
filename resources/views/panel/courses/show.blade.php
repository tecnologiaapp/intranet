@extends('panel.app')
@section('title', 'Lista de cursos de la AGENCIA APP')
@section('content')

<div class="nk-content">
   <div class="container-fluid">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <!-- .nk-block-head -->
            <div class="nk-block">
               <div class="row g-gs">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="row">
                           <div class="col-sm-12 col-lg-6 my-auto">
                              <img
                                 class="card-img-top img-fluid p-5"
                                 @if ($course->image)
                                 src="{{ $course->photo_url }}" alt="{{ $course->photo_url }}"
                                 @else
                                 src="https://fakeimg.pl/500x300/100/?text=AGENCIA%20APP"
                                 @endif
                              />
                           </div>

                           <div class="col-sm-12 col-lg-6 my-auto">
                              <h5>{{ $course->title }}</h5>
                              <p>{{ $course->subtitle }}</p>
                              <div class="mr-5">
                                 <hr>
                              </div>
                              <p>Actualizado {{ $course->updated_at->diffForHumans() }}</p>

                              @if($course->students()->where('user_id', Auth::id())->count() > 0)
                                 @if($course->lessons->count() > 0)
                                    <a
                                       href="{{ route('user.lesson.show', [$course, $course->lessons->first()]) }}"
                                       class="btn btn-round btn-outline-light">
                                       <i class="fas fa-award f-12 mr-2"></i>
                                       {{__('Ver primer lección')}}
                                    </a>
                                 @else
                                    <a
                                       class="btn btn-round btn-outline-light">
                                       <i class="fas fa-award f-12 mr-2"></i>
                                       {{__('El curso iniciará pronto')}}
                                    </a>
                                 @endif
                              @else
                                 <form method="POST" action="{{ route('panel.courses.student.store', $course) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-round btn-outline-light">
                                       Tomar capacitación
                                    </button>
                                 </form>
                              @endif
                           </div>

                           <div class="col-sm-12">
                              <ul class="team-statistics">
                                 <li><span>{{ $course->students->count() }}</span><span>Inscritos</span></li>
                                 <li><span>{{ $course->lessons->count() }}</span><span>Lecciones</span></li>
                                 <li><span>02:23:00</span><span>Duración</span></li>
                              </ul>
                           </div>
                        </div>

                        <div class="col-sm-12 col-md-8 offset-md-2 text-center mt-3 pb-5">
                           <div id="accordion" class="accordion">
                              <div class="accordion-item">
                                 <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#course_description">
                                    <h6 class="title">Descripción de la capacitación</h6>
                                    <span class="accordion-icon"></span>
                                 </a>
                                 <div class="accordion-body collapse" id="course_description" data-parent="#accordion">
                                    <div class="accordion-inner">
                                       <p>
                                          {!! $course->description->body !!}
                                       </p>
                                    </div>
                                 </div>
                              </div>

                              <div class="accordion-item">
                                 <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#course_lessons">
                                    <h6 class="title">Lecciones</h6>
                                    <span class="accordion-icon"></span>
                                 </a>
                                 <div class="accordion-body collapse" id="course_lessons" data-parent="#accordion">
                                    <div class="accordion-inner">
                                       <p>
                                          Lección 1
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection