@extends('panel.app')
@section('title', 'Lista de cursos de la AGENCIA APP')
@section('content')

<div class="nk-content">
   <div class="container-fluid">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
               <div class="nk-block-between">
                  <div class="nk-block-head-content">
                     <div class="nk-block-des text-soft">
                        {{-- <p>You have total 95 projects.</p> --}}
                     </div>
                  </div>
                  <!-- .nk-block-head-content -->
                  <div class="nk-block-head-content text-right">
                     <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                           <ul class="nk-block-tools g-3">
                              <li>
                                 <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right"><em class="icon lni lni-search"></em></div>
                                    <input type="text" class="form-control" id="default-04" placeholder="Buscar un curso" />
                                 </div>
                              </li>
                              <li>
                                 <div class="drodown">
                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Ordenar por</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                       <ul class="link-list-opt no-bdr">
                                          <li>
                                             <a href="#"><span>Cursos nuevos</span></a>
                                          </li>
                                          <li>
                                             <a href="#"><span>Cursos antiguos</span></a>
                                          </li>
                                          <li>
                                             <a href="#"><span>Destacados</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li class="nk-block-tools-opt">
                                 <a href="#" data-target="addCourse" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon lni lni-plus"></em></a>
                                 <a href="#" data-target="addCourse" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon lni lni-plus"></em><span>Agregar curso</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- .nk-block-head-content -->
               </div>
               <!-- .nk-block-between -->
            </div>
            <!-- .nk-block-head -->
            <div class="nk-block">
               <div class="row g-gs">
                  @foreach($courses as $course)
                  <div class="col-xxl-3 col-lg-4 col-sm-6">
                     <div class="card">
                        <a href="{{ route('panel.courses.show', $course) }}">
                           <img
                              class="card-img-top img-fluid"
                              @if ($course->image)
                              src="{{ $course->photo_url }}" alt="{{ $course->photo_url }}"
                              @else
                              src="https://fakeimg.pl/500x300/100/?text=AGENCIA%20APP"
                              @endif
                           />
                        </a>

                        <div class="card-inner">
                           <div class="team">
                              <div class="team-options">
                                 <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon lni lni-more"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                       <ul class="link-list-opt no-bdr">
                                          <li>
                                             <a href="{{ route('panel.courses.edit', $course) }}"><em class="icon lni lni-pencil"></em><span>Editar curso</span></a>
                                          </li>
                                          <li>
                                             <a href="{{ route('user.lesson.index', $course) }}"><em class="icon lni lni-layers"></em><span>Lecciones</span></a>
                                          </li>
                                          <li>
                                             <a href="#"><em class="icon lni lni-unlink"></em><span>Ocultar</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="team-details">
                                 <h6><a href="{{ route('panel.courses.show', $course) }}" class="text-dark"> {{ Str::limit($course->title, 50) }}</a></h6>
                              </div>
                              <ul class="team-statistics mt-3">
                                 <li><span>{{ $course->students->count() }}</span><span>Inscritos</span></li>
                                 <li><span>{{ $course->lessons->count() }}</span><span>Lecciones</span></li>
                              </ul>
                              <div class="team-view">
                                 <a href="{{ route('panel.courses.show', $course) }}" class="btn btn-round btn-outline-light w-150px"><span>Ver capacitación</span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>

            <div class="nk-add-product toggle-slide toggle-slide-right toggle-screen-any" data-content="addCourse" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar="init">
               <div class="simplebar-wrapper" style="margin: -24px;">
                  <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                  <div class="simplebar-mask">
                     <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                           <div class="simplebar-content" style="padding: 24px;">
                              <form action="{{ route('panel.courses.store') }}" method="POST">
                                 @csrf
                              
                                 <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                       <h5 class="nk-block-title">Nuevo curso</h5>
                                       <div class="nk-block-des"><p>Agrega la información del nuevo curso</p></div>
                                    </div>
                                 </div>
                                 <div class="nk-block">
                                    <div class="row g-3">
                                       <div class="col-12">
                                          <div class="form-group">
                                             <label class="form-label" for="course_title">Título</label>
                                             <div class="form-control-wrap">
                                                <input type="text" name="title" class="form-control" id="course_title" />
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-12">
                                          <div class="form-group">
                                             <label class="form-label" for="course_subtitle">Subtítulo</label>
                                             <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="course_subtitle" name="subtitle" />
                                             </div>
                                          </div>
                                       </div>

                                       {{-- <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="form-label" for="price">Precio</label>
                                             <div class="form-control-wrap"><input type="text" class="form-control" id="price" /></div>
                                          </div>
                                       </div> --}}
                                       <div class="col-12">
                                          <div class="form-group">
                                             <label class="form-label" for="sale-price">
                                                ¿Qué aprenderán?
                                             </label>
                                             <div class="form-control-wrap">
                                                <textarea name="to_learn" class="form-control"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <button type="submit" class="btn btn-primary"><em class="icon lni lni-plus"></em><span>Guardar</span></button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="simplebar-placeholder"></div>
               </div>
               <div class="simplebar-track simplebar-horizontal"><div class="simplebar-scrollbar"></div></div>
               <div class="simplebar-track simplebar-vertical"><div class="simplebar-scrollbar" ></div></div>
            </div>
            <!-- .nk-block -->
         </div>
      </div>
   </div>
</div>
@endsection