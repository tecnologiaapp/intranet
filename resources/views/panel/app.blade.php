<!DOCTYPE html>
<html lang="zxx" class="js">
	<head>
	   <meta charset="utf-8">
	   <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <meta name="description" content="Aplicativo para reservar espacios de espacio público en Medellín - AGENCIA APP">
      <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />
	   <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
	   <title>@yield('title', 'AEEP') - AGENCIA APP</title>
	   <link rel="stylesheet" href="{{ asset('assets/panel/css/dashlite.min.css')}}">
	   <link id="skin-default" rel="stylesheet" href="{{ asset('assets/panel/css/theme.css')}}">
	   <link rel="stylesheet" href="{{ asset('assets/panel/css/custom.css')}}">
      <meta name="csrf-token" content="{{ csrf_token() }}">
	   @stack('styles')
	</head>

   <body class="nk-body bg-lighter npc-default has-sidebar">

      @include('panel.includes._modals')

      <div class="nk-app-root">
         <!-- main @s -->
         <div class="nk-main">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
               <div class="nk-sidebar-element nk-sidebar-head">
                  <div class="nk-sidebar-brand">
                     <a href="/" class="logo-link nk-sidebar-logo">
                        <img class="logo-light logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo">
                        <img class="logo-dark logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo-dark">
                        <img class="logo-small logo-img logo-img-small" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo-small">
                     </a>
                  </div>
                  <div class="nk-menu-trigger mr-n2">
                     <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                     <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="lni lni-menu"></em></a>
                  </div>
               </div>
               <!-- .nk-sidebar-element -->
               <div class="nk-sidebar-element">
                  <div class="nk-sidebar-content">
                     <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">
                           <li class="nk-menu-heading">
                              <h6 class="overline-title text-primary-alt">Administración</h6>
                           </li>
                           <!-- .nk-menu-item -->
                           <li class="nk-menu-item">
                              <a href="{{ route('index') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><i class="lni lni-dashboard"></i></span>
                                 <span class="nk-menu-text">Home</span>
                              </a>
                           </li>

                           @role('rh|admin')
                           <li class="nk-menu-item has-sub">
                              <a href="{{ route('user.Indicadores.index') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><i class="lni lni-dashboard"></i></span>
                                 <span class="nk-menu-text">Presupuestos financieros</span>
                              </a>
                           </li>
                           <!-- <li class="nk-menu-item has-sub">
                              <a href="{{ route('user.certificados.index') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><i class="lni lni-library"></i></span>
                                 <span class="nk-menu-text">Certificados tributarios</span>
                              </a>
                           </li> -->
                           <!-- <li class="nk-menu-item has-sub">
                              <a href="{{ route('user.archivo.thesis') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><i class="lni lni-dashboard"></i></span>
                                 <span class="nk-menu-text">Registro de archivos</span>
                              </a>
                           </li> -->

                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle">
                                 <span class="nk-menu-icon"><em class="lni lni-world"></em></span>
                                 <span class="nk-menu-text">Ciudades</span>
                              </a>
                              <ul class="nk-menu-sub">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.cities.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar ciudad</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.cities.index') }}" class="nk-menu-link"><span class="nk-menu-text">Todas las ciudades</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>

                          
                           @endrole

                           <!-- .nk-menu-item -->
                           <!-- <li class="nk-menu-heading">
                              <h6 class="overline-title text-primary-alt">Capacitaciones</h6>
                           </li> -->
                           <!-- .nk-menu-heading -->
                           <!-- <li class="nk-menu-item has-sub">

                              <a href="{{ route('panel.courses.index') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="lni lni-checkmark"></em></span>
                                 <span class="nk-menu-text">Todas</span>
                              </a>

                              <a href="{{ route('panel.courses.index') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="lni lni-graduation"></em></span>
                                 <span class="nk-menu-text">Capacitaciones</span>
                              </a>

                              <a href="#" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="lni lni-video"></em></span>
                                 <span class="nk-menu-text">Mis capacitaciones</span>
                              </a>

                              <a href="#" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="lni lni-certificate"></em></span>
                                 <span class="nk-menu-text">Mis certificados</span>
                              </a>
                             
                           </li> -->
                           <!-- .nk-menu-item -->

                           <!-- .nk-menu-item -->
                           <!-- <li class="nk-menu-heading">
                              <h6 class="overline-title text-primary-alt">SuperAPP</h6>
                           </li> -->
                           <!-- .nk-menu-heading -->
                           <!-- <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle">
                                 <span class="nk-menu-icon"><em class="lni lni-folder"></em></span>
                                 <span class="nk-menu-text">Seguimiento de tareas</span>
                              </a>
                              <ul class="nk-menu-sub">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.projects.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar seguimiento</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.projects.index') }}" class="nk-menu-link"><span class="nk-menu-text">Todos los seguimientos</span></a>
                                 </li>
                              </ul>
                             
                           </li> -->
                           <!-- .nk-menu-item -->

                           <!-- .nk-menu-item -->
                           <!-- <li class="nk-menu-heading">
                              <h6 class="overline-title text-primary-alt">Usuarios</h6>
                           </li> -->

                           @role('rh|admin')

                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-users"></em></span>
                                 <span class="nk-menu-text">Contratistas</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.index') }}" class="nk-menu-link"><span class="nk-menu-text">Todos los contratistas</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar contratista</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.inactive.index') }}" class="nk-menu-link"><span class="nk-menu-text">Contratistas inactivos</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>

                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-layers"></em></span>
                                 <span class="nk-menu-text">(Sub)direcciones</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.dependency.index', 'direccion-general') }}" class="nk-menu-link"><span class="nk-menu-text">Dirección General</span></a>
                                 </li>

                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.dependency.index', 'direccion-tecnica') }}" class="nk-menu-link"><span class="nk-menu-text">Dirección Técnica</span></a>
                                 </li>

                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.dependency.index', 'subdireccion-de-gestión-de-alianzas-público-privadas') }}" class="nk-menu-link"><span class="nk-menu-text">Subdirección APP</span></a>
                                 </li>

                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.dependency.index', 'subdireccion-de-gestion-inmobiliaria') }}" class="nk-menu-link"><span class="nk-menu-text">Subdirección Inmobiliaria</span></a>
                                 </li>

                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.user.dependency.index', 'subdireccion-de-paisaje-y-patrimonio') }}" class="nk-menu-link"><span class="nk-menu-text">Subdirección de Paisaje</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>
                           @endrole

                           @role('editor|admin')

                           <!-- .nk-menu-item -->
                           <li class="nk-menu-heading">
                              <h6 class="overline-title text-primary-alt">Noticias</h6>
                           </li>

                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-tag"></em></span>
                                 <span class="nk-menu-text">Categorías</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a data-toggle="modal" data-target="#createCategoryNotice" class="nk-menu-link"><span class="nk-menu-text">Agregar categoría</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.notices.create') }}" class="nk-menu-link"><span class="nk-menu-text">Todas las categorías</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>

                           <!-- Modal Trigger Code -->
                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-bullhorn"></em></span>
                                 <span class="nk-menu-text">Noticias</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.notices.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar noticia</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.notices.index') }}" class="nk-menu-link"><span class="nk-menu-text">Todas las noticias</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>

                           <!-- Modal Trigger Code -->
                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-thought"></em></span>
                                 <span class="nk-menu-text">Palabras del director</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.words.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar palabras</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.words.index') }}" class="nk-menu-link"><span class="nk-menu-text">Todas las palabras</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>

                           <!-- Modal Trigger Code -->
                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-bulb"></em></span>
                                 <span class="nk-menu-text">Aprendamos</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.learn.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar información</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.learn.index') }}" class="nk-menu-link"><span class="nk-menu-text">Toda la información</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>

                           <!-- Modal Trigger Code -->
                           <li class="nk-menu-item has-sub">
                              <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                 <span class="nk-menu-icon"><em class="icon lni lni-briefcase"></em></span>
                                 <span class="nk-menu-text">Emprendimiento</span>
                              </a>
                              <ul class="nk-menu-sub" style="display: none;">
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.entrepreneurship.create') }}" class="nk-menu-link"><span class="nk-menu-text">Agregar información</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('panel.entrepreneurship.index') }}" class="nk-menu-link"><span class="nk-menu-text">Toda la información</span></a>
                                 </li>
                              </ul>
                              <!-- .nk-menu-sub -->
                           </li>
                           
                           <!-- <li class="nk-menu-item">
                              <a href="{{ route('panel.mailing.index') }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><i class="lni lni-list"></i></span>
                                 <span class="nk-menu-text">Suscriptores</span>
                              </a>
                           </li> -->
                           @endrole
                           <!-- .nk-menu-item -->
                        </ul>
                        <!-- .nk-menu -->
                     </div>
                     <!-- .nk-sidebar-menu -->
                  </div>
                  <!-- .nk-sidebar-content -->
               </div>
               <!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap">
               <!-- main header @s -->
               <div class="nk-header nk-header-fixed is-light">
                  <div class="container-fluid">
                     <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                           <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="lni lni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                           <a href="html/index.html" class="logo-link">
                              <img class="logo-light logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo" />
                              <img class="logo-dark logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo-dark" />
                           </a>
                        </div>
                        <!-- .nk-header-brand -->
                        <div class="nk-header-search ml-3 ml-xl-0">
                           <em class="icon lni lni-search"></em>
                           <input type="text" class="form-control border-transparent form-focus-none" placeholder="Buscar..." />
                        </div>
                        <!-- .nk-header-news -->
                        <div class="nk-header-tools">
                           <ul class="nk-quick-nav">
                              <!-- <li class="dropdown chats-dropdown hide-mb-xs">
                                 <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-na"><em class="icon lni lni-comments-alt"></em></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                    <div class="dropdown-head">
                                       <span class="sub-title nk-dropdown-title">Mensajes recientes</span>
                                       <a href="#">Configuración</a>
                                    </div>
                                    <div class="dropdown-body">
                                       <ul class="chat-list">
                                          <li class="chat-item">
                                             <a class="chat-link" href="#">
                                                <div class="chat-media user-avatar">
                                                   <span>LM</span>
                                                   <span class="status dot dot-lg dot-gray"></span>
                                                </div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Lina Martínez</div>
                                                      <span class="time">Ahora</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Bienvenido a la AGENCIA APP.</div>
                                                      <div class="status delivered">
                                                         <em class="icon lni lni-checkmark"></em>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          
                                       </ul>
                                      
                                    </div>
                                    
                                    <div class="dropdown-foot center">
                                       <a href="html/apps-chats.html">Ver todos</a>
                                    </div>
                                 </div>
                              </li> -->
                              <!-- <li class="dropdown notification-dropdown">
                                 <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-info"><em class="icon lni lni-alarm"></em></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                    <div class="dropdown-head">
                                       <span class="sub-title nk-dropdown-title">Notificaciones</span>
                                       <a href="#">Marcar todo como leído</a>
                                    </div>
                                    <div class="dropdown-body">
                                       <div class="nk-notification">
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim lni lni-folder"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">Te han asignado a un nuevo proyecto</div>
                                                <div class="nk-notification-time">Hace 14 minutos</div>
                                             </div>
                                          </div>
                                       </div>
                                     
                                    </div>
                                    
                                    <div class="dropdown-foot center">
                                       <a href="#">Ver todas</a>
                                    </div>
                                 </div>
                              </li> -->
                              <li class="dropdown user-dropdown">
                                 <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                    <div class="user-toggle">
                                       <div class="user-avatar sm">
                                          <img src="{{ asset(Auth::user()->thumbnail()) }}">
                                       </div>
                                       <div class="user-info d-none d-xl-block">
                                          @if(Auth::user()->email_verified_at == null)
                                          <div class="user-status user-status-unverified">Sin verificar</div>
                                          @elseif(Auth::user()->email_verified_at == !null)
                                          <div class="user-status user-status-verified">Verificado</div>
                                          @endif
                                          <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                       <div class="user-card">
                                          <div class="user-info">
                                             <span class="lead-text">{{ Auth::user()->name }}</span>
                                             <span class="sub-text">{{ Auth::user()->email }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li>
                                             <a href="{{ route('user.team.show', [Auth::user()->dependency, Auth::user()]) }}" target="_blank"><em class="icon lni lni-user"></em><span>Ver perfil</span></a>
                                          </li>
                                          <li>
                                             <a href="{{ route('panel.profile.edit') }}"><em class="icon lni lni-cog"></em><span>Configurar mi cuenta</span></a>
                                          </li>
                                          <li>
                                             <a class="dark-switch" href="#"><em class="icon lni lni-bulb"></em><span>Modo oscuro</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li>
                                             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-danger"><em class="icon lni lni-close"></em><span>Cerrar sesión</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                    </form>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- .nk-header-wrap -->
                  </div>
                  <!-- .container-fliud -->
               </div>
               <!-- main header @e -->
               <!-- content @s -->
               <div class="nk-content ">
                  <div class="container-fluid">
                     <h4 class="mb-4">@yield('title', 'Intranet APP')</h4>
                     @if(session()->has('message'))
                     <div class="mt-4 alert alert-{{ session('message')[0] }} text-center">
                        {{ session('message')[1] }}
                     </div>
                     @endif
                     @if(Auth::user()->status == 'Active')
                        @yield('content')
                     @else
                        <div class="mt-4 alert alert-danger text-center">
                           Tu cuenta está desactivada. Contacta con la AGENCIA APP.
                        </div>
                     @endif
                  </div>
                  <!-- content @e -->
               </div>
               <!-- content @e -->
               <!-- footer @s -->
               <div class="nk-footer">
                  <div class="container-fluid">
                     <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright">&copy; {{ date('Y') }} AGENCIA APP - Intranet</div>
                        <div class="nk-footer-links">
                           {{-- <ul class="nav nav-sm">
                              <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                              <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                              <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                           </ul> --}}
                        </div>
                     </div>
                  </div>
               </div>
               <!-- footer @e -->
            </div>
            <!-- wrap @e -->
         </div>
         <!-- main @e -->
      </div>
      <!-- app-root @e -->
      <!-- JavaScript -->
      <script src="{{ asset('assets/panel/js/bundle.js')}}"></script>
      <script src="{{ asset('assets/panel/js/scripts.js')}}"></script>

      <script type="text/javascript">
         $(".notice_category").click(function(e){
            e.preventDefault();
            let title = $("input[name=notice_category_title]").val();
            let url = '{{ route('panel.notices.categories.store') }}';
            let token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
               url: '{{ route('panel.notices.categories.store') }}',
               type: 'POST',
               data: {
                  "_token": "{{ csrf_token() }}",
                  "notice_category_title": title
               }, 
               success: function (result) {
                  if (result.success == true) {
                     $('#createCategoryNotice').modal('hide');
                     $('#successModal').modal('show');
                     $('#successModalMessage').append(result.message);
                     $("input[name=notice_category_title]").val("")
                  } else {
                     $('#createCategoryNotice').modal('hide');
                     $('#errorModal').modal('show');
                     $('#errorModalMessage').append(result.message);
                  }
               },
               error: function (result) {
                  $('#createCategoryNotice').modal('hide');
                  $('#errorModal').modal('show');
                  $('#errorModalMessage').append("Ha ocurrido un error, por favor intenta nuevamente.");
               }
            });  
         });
      </script>
      @stack('scripts')
   </body>
</html>
