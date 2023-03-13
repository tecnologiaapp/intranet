@extends('panel.app')

@section('title', 'Contratistas y funcionarios')
@section('content')

<div class="nk-content-inner">
   <div class="nk-content-body">
      <div class="nk-block-head nk-block-head-sm">
         <div class="nk-block-between">
            <div class="nk-block-head-content">
               <div class="nk-block-des text-soft"><p>{{ $entrepreneurships->count() }} en total.</p></div>
            </div>
            <div class="nk-block-head-content">
               <div class="toggle-wrap nk-block-tools-toggle">
                  <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                  <div class="toggle-expand-content" data-content="more-options">
                     <ul class="nk-block-tools g-3">
                        {{-- <li>
                           <div class="form-control-wrap">
                              <div class="form-icon form-icon-right"><em class="icon ni ni-search"></em></div>
                              <input type="text" class="form-control" id="default-04" placeholder="Search by name" />
                           </div>
                        </li>
                        <li>
                           <div class="drodown">
                              <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Status</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <ul class="link-list-opt no-bdr">
                                    <li>
                                       <a href="#"><span>Actived</span></a>
                                    </li>
                                    <li>
                                       <a href="#"><span>Inactived</span></a>
                                    </li>
                                    <li>
                                       <a href="#"><span>Blocked</span></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li> --}}
                        <li class="nk-block-tools-opt">
                           <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a href="{{ route('panel.entrepreneurship.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon lni lni-plus"></em><span>Agregar</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="nk-block">
         <div class="nk-tb-list is-separate mb-3">
            <div class="nk-tb-item nk-tb-head">
               <div class="nk-tb-col"><span class="sub-text">Título</span></div>
               <div class="nk-tb-col tb-col-lg"><span class="sub-text">Estado</span></div>
               <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha de publicación</span></div>
               <div class="nk-tb-col tb-col-md text-right"><span class="sub-text">Opciones</span></div>
            </div>
            @foreach($entrepreneurships as $entrepreneurship)
            <div class="nk-tb-item">
               <div class="nk-tb-col">
                  {{-- <a href="{{ route('user.team.show', [$user->dependency, $user]) }}" target="_blank">
                     <div class="user-card">
                        <div class="user-avatar"><img src="{{ asset($user->thumbnail()) }}" alt="" /></div>
                        <div class="user-info">
                           <span class="tb-lead">{{ $user->name }} <span class="dot dot-warning d-md-none ml-1"></span></span><span>{{ $user->email }}</span>
                        </div>
                     </div>
                  </a> --}}

                  {{ $entrepreneurship->title }}
               </div>

               <div class="nk-tb-col tb-col-mb">
                  <span class="tb-amount">{{ __($entrepreneurship->status) }}</span>
               </div>

               <div class="nk-tb-col tb-col-mb">
                  <span class="tb-amount">{{ $entrepreneurship->created_at->diffForHumans() }}</span>
               </div>
               
               <div class="nk-tb-col nk-tb-col-tools">
                  <ul class="nk-tb-actions gx-1">
                     <li>
                        <div class="drodown">
                           <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon lni lni-more"></em></a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <ul class="link-list-opt no-bdr">
                                 <li>
                                    <a href="{{ route('user.entrepreneurship.show', $entrepreneurship) }}" target="_blank"><em class="icon lni lni-eye"></em><span>Ver</span></a>
                                 </li>
                              	<li>
                                    <a href="{{ route('panel.entrepreneurship.edit', $entrepreneurship) }}"><em class="icon lni lni-pencil-alt"></em><span>Editar</span></a>
                                 </li>
                                 {{-- <li>
                                    <a href="#"><em class="icon ni ni-repeat"></em><span>Ver estudios</span></a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#"><em class="icon ni ni-shield-star"></em><span>Resetear contraseña</span></a>
                                 </li> --}}
                                 {{-- <li>
                                    <form action="{{ route('panel.user.destroy', $user) }}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-link text-decoration-none">
                                          @if($user->status == 'Active')
                                          <em class="icon lni lni-cross-circle text-danger"></em><span class="text-danger">Suspender</span>
                                          @else
                                          <em class="icon lni lni-checkmark-circle text-dark"></em><span class="text-dark">Activar</span>
                                          @endif
                                       </button>
                                    </form>
                                 </li> --}}
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            @endforeach
         </div>
         {{-- <div class="card">
            <div class="card-inner">
               <div class="nk-block-between-md g-3">
                  <div class="g">
                     <ul class="pagination justify-content-center justify-content-md-start">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                           <span class="page-link"><em class="icon ni ni-more-h"></em></span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div> --}}
      </div>
   </div>
</div>
@endsection