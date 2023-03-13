@extends('panel.app')

@section('title', 'Lista de suscriptores al correo electrónico')
@section('content')

<div class="nk-content-inner">
   <div class="nk-content-body">
      <div class="nk-block-head nk-block-head-sm">
         <div class="nk-block-between">
            <div class="nk-block-head-content">
               <div class="nk-block-des text-soft"><p>{{ $mailings->count() }} en total.</p></div>
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
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="nk-block">
         <div class="nk-tb-list is-separate mb-3">
            <div class="nk-tb-item nk-tb-head">
               <div class="nk-tb-col"><span class="sub-text">Nombre completo</span></div>
               <div class="nk-tb-col tb-col-md"><span class="sub-text">Correo electrónico</span></div>
               <div class="nk-tb-col tb-col-lg"><span class="sub-text">Estado</span></div>
               <div class="nk-tb-col tb-col-md"><span class="sub-text">Fecha de suscripción</span></div>
            </div>
            @foreach($mailings as $mailing)
            <div class="nk-tb-item">
               <div class="nk-tb-col">
                  {{ $mailing->name }}
               </div>
               <div class="nk-tb-col tb-col-mb">
                  <span class="tb-amount">{{ $mailing->mailing_email }}</span>
               </div>

               <div class="nk-tb-col tb-col-mb">
                  <span class="tb-amount">{{ __($mailing->status) }}</span>
               </div>

               <div class="nk-tb-col tb-col-mb">
                  <span class="tb-amount">{{ $mailing->created_at->diffForHumans() }}</span>
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