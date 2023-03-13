@extends('panel.app')

@section('title', $task->title)
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
                  <div class="nk-block-head-content">
                     <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                           <ul class="nk-block-tools g-3">
                              <li class="nk-block-tools-opt">
                                 <a href="" class="btn btn btn-white btn-dim btn-outline-light">
                                    <em class="icon lni lni-arrow-left"></em><span></span></button> Volver
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- .toggle-wrap -->
                  </div>
                  <!-- .nk-block-head-content -->
               </div>
               <!-- .nk-block-between -->
            </div>
            <!-- .nk-block-head -->
            <div class="nk-block">
               <div class="container-fluid"> 
                  <div class="progress progress-lg">
                     <div class="progress-bar" data-progress="{{ $task->progress }}">{{ $task->progress }}%</div>
                  </div>
                            
                  <div class="card card-preview mt-2">
                     <div class="card-inner mt-3">
                        <h5>{{ $task->title }}</h5>
                        <p class="mt-4">
                           {{ $task->description }}
                        </p>
                        <hr>
                        <p>
                           Presupuesto: ${{ number_format($task->budget) }}
                        </p>
                        <p>
                           Fecha de finalización: {{ $task->end_date->format('d - M - Y') }}
                        </p>
                     </div>
                  </div><!-- .card-preview -->

                  <div class="card card-preview mt-2">
                     <div class="card-inner mt-3">

                        <div id="accordion-2" class="accordion accordion-s3">
                           <div class="accordion-item">
                              <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-2-1">
                                 <h6 class="title">Comentarios</h6>
                                 <span class="accordion-icon"></span>
                              </a>
                              <div class="accordion-body collapse show" id="accordion-item-2-1" data-parent="#accordion-2">
                                 <div class="accordion-inner">
                                    <p><b>Marisol Restrepo</b></p>
                                    <p>Comentario 1</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-2-2">
                                 <h6 class="title">Archivos</h6>
                                 <span class="accordion-icon"></span>
                              </a>
                              <div class="accordion-body collapse" id="accordion-item-2-2" data-parent="#accordion-2">
                                 <div class="accordion-inner">
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                       consequat.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div><!-- .card-preview -->
               </div>
            </div>
            <!-- .nk-block -->
         </div>
      </div>
   </div>
</div>
@endsection
