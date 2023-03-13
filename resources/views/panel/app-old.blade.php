<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
   <meta charset="utf-8">
   <meta name="author" content="Agencia APP - Alcaldía de Medellín. Desarrollado por Brayan Angarita">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Aplicativo para reservar espacios de espacio público en Medellín - AGENCIA APP">
   <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
   <title>@yield('title', 'AEEP') - AGENCIA APP</title>
   <link rel="stylesheet" href="{{ asset('assets/panel/css/dashlite.min.css')}}">
   <link id="skin-default" rel="stylesheet" href="{{ asset('assets/panel/css/theme.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/panel/css/custom.css')}}">

   @stack('styles')
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
	<div class="nk-app-root">
		<div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
            	<div class="nk-sidebar-element nk-sidebar-head">
            		<div class="nk-sidebar-brand">
            			<a href="html/index.html" class="logo-link nk-sidebar-logo">
            				<img class="logo-light logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo">
            				<img class="logo-dark logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo-dark">
            				<img class="logo-small logo-img logo-img-small" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}} 2x" alt="logo-small">
            			</a>
            		</div>
            		<div class="nk-menu-trigger mr-n2">
            			<a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            			<a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            		</div>
            	</div><!-- .nk-sidebar-element -->


            	<div class="nk-sidebar-element">
            		<div class="nk-sidebar-content">
            			<div class="nk-sidebar-menu" data-simplebar>
            				<ul class="nk-menu">
            					<li class="nk-menu-heading">
            						<h6 class="overline-title text-primary-alt">Use-Case Preview</h6>
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-item">
            						<a href="html/ecommerce/index.html" class="nk-menu-link">
            							<span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
            							<span class="nk-menu-text">E-Commerce Panel</span><span class="nk-menu-badge badge-danger">HOT</span>
            						</a>
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-heading">
            						<h6 class="overline-title text-primary-alt">Dashboards</h6>
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-item">
            						<a href="html/index.html" class="nk-menu-link">
            							<span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span>
            							<span class="nk-menu-text">Default</span>
            						</a>
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-item">
            						<a href="html/index-sales.html" class="nk-menu-link">
            							<span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
            							<span class="nk-menu-text">Sales</span>
            						</a>
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-item">
            						<a href="html/index-analytics.html" class="nk-menu-link">
            							<span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
            							<span class="nk-menu-text">Analytics</span>
            						</a>
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-heading">
            						<h6 class="overline-title text-primary-alt">Applications</h6>
            					</li><!-- .nk-menu-heading -->
            					<li class="nk-menu-item has-sub">
            						<a href="#" class="nk-menu-link nk-menu-toggle">
            							<span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
            							<span class="nk-menu-text">Projects</span>
            						</a>
            						<ul class="nk-menu-sub">
            							<li class="nk-menu-item">
            								<a href="html/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a>
            							</li>
            							<li class="nk-menu-item">
            								<a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a>
            							</li>
            						</ul><!-- .nk-menu-sub -->
            					</li><!-- .nk-menu-item -->
            					<li class="nk-menu-item has-sub">
            						<a href="#" class="nk-menu-link nk-menu-toggle">
            							<span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
											<span class="nk-menu-text">User Manage</span>
										</a>
										<ul class="nk-menu-sub">
											<li class="nk-menu-item">
												<a href="html/user-list-default.html" class="nk-menu-link"><span class="nk-menu-text">User List - Default</span></a>
											</li>
											<li class="nk-menu-item">
												<a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
											</li>
											<li class="nk-menu-item">
												<a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
											</li>
											<li class="nk-menu-item">
												<a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
											</li>
											<li class="nk-menu-item">
												<a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
											</li>
											<li class="nk-menu-item">
												<a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span> <span class="nk-menu-badge badge-warning">New</span></a>
											</li>
										</ul><!-- .nk-menu-sub -->
									</li><!-- .nk-menu-item -->
								</ul>
							</div>
						</div>
					</div>
				</div>

							<!-- Menu -->
							{{-- @include('panel.includes.menu._sidebar') --}}

							{{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
														<em class="icon ni ni-signout"></em>
														<span>Cerrar sesión</span>
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														{{ csrf_field() }}
													</form> --}}



				
			

         {{-- @include('panel.includes.menu._submenu') --}}
     

     <!-- main @s -->
     <div class="nk-main ">
     	<!-- wrap @s -->
     	<div class="nk-wrap ">
     		<!-- main header @s -->
     		<div class="nk-header nk-header-fixed nk-header-fluid is-light">
     			<div class="container-fluid">
					<div class="nk-header-wrap">
						<div class="nk-menu-trigger d-xl-none ml-n1">
							<a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
						</div>

						<div class="nk-header-brand d-xl-none">
							<a href="{{ url('/') }}" class="logo-link">
								<img class="logo-light logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}}" alt="Intranet">
								<img class="logo-dark logo-img" src="{{ asset('assets/images/logo.png')}}" srcset="{{ asset('assets/images/logo.png')}}" alt="Intranet">
							</a>
						</div><!-- .nk-header-brand -->
						<div class="nk-header-search ml-3 ml-xl-0">
							<em class="icon ni ni-search"></em>
							<input type="text" class="form-control border-transparent form-focus-none" placeholder="Buscar...">
						</div><!-- .nk-header-news -->

						<div class="nk-header-tools">
							<ul class="nk-quick-nav">

								<!-- Chat -->
								{{-- @include('panel.includes.menu._chat') --}}
 								<!-- Notifications -->
								{{-- @include('panel.includes.menu._notifications') --}}
								<!-- /Notifications -->

								<li class="dropdown user-dropdown">
                        	<a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                        		<div class="user-toggle">
											<div class="user-avatar sm">
												<em class="icon ni ni-user-alt"></em>
											</div>
										</div>
									</a>

									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<div class="dropdown-inner user-card-wrap bg-lighter">
											<div class="user-card">
												<div class="user-avatar">
													<span>BA</span>
												</div>
												<div class="user-info">
													<span class="lead-text">{{ Auth::user()->name }}</span>
													<span class="sub-text">{{ Auth::user()->email }}</span>
												</div>
											</div>
										</div>

										<div class="dropdown-inner">
										<ul class="link-list">
										<li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>Ver perfil</span></a></li>
										<li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Configurar mi cuenta</span></a></li>
										<li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Mis documentos</span></a></li>
										<li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Modo nocturno</span></a></li>
										</ul>
										</div>

										<div class="dropdown-inner">
											<ul class="link-list">
												<li>
													
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div><!-- .nk-header-wrap -->
				</div><!-- .container-fliud -->
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
					@yield('content')
				</div>
				<!-- content @e -->
			</div>
			<!-- wrap @e -->
		</div>

	<!-- app-root @e -->
	<!-- JavaScript -->
	<script src="{{ asset('assets/panel/js/bundle.js')}}"></script>
	<script src="{{ asset('assets/panel/js/scripts.js')}}"></script>

	@stack('scripts')
</body>

</html>