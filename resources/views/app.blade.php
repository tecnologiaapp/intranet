<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <title>@yield('title', '') Intranet de Agencia APP - Alcaldía de Medellín</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="Intranet de AGENCIA APP - Alcaldía de Medellín" />
      <meta name="author" content="Brayan Angarita @brayanangaritar" />
      <link rel="icon" href="{{ asset('assets/images/favicon.PNG')}}" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
      <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/styx.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/responsiv.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/cust.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cust.css')}}" />
      @stack('styles')
   </head>

   <body>
      <!-- Start  Loading Mask-->
      {{-- <div id="mask">
         <div class="material-icon">
            <div class="spinner">
               <div class="right-side">
                  <div class="bar"></div>
               </div>
               <div class="left-side">
                  <div class="bar"></div>
               </div>
            </div>
            <div class="spinner color-2">
               <div class="right-side">
                  <div class="bar"></div>
               </div>
               <div class="left-side">
                  <div class="bar"></div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- End Loading Mask-->

      <div class="wrapper">
         <header>
            <div class="container">
               <div class="header-content">
                  <div class="logo">
                     <h2><a href="{{ route('index') }}" title=""><img src="{{ asset('assets/images/logo-landing.png')}}" style=" width: 200px;
    height: 100px;  padding-left: 25px;"></a></h2>
                  </div>
                  <!--logo end-->
                  <nav>
                     <ul>
                        <li><a href="{{ route('index') }}" title="">Inicio</a></li>
                      
                        <li>
                           <a href="#" title="">APPtualízate</a>
                           <ul>
                              <li><a href="{{ route('user.notices.index') }}" title="">Noticias</a></li>
                              <li><a href="https://app.gov.co/Prensa/galery" target="_blank" title="">Galería</a></li>
                              <li><a href="{{ route('user.learn.index') }}" title="">Aprendamos</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" title="">De tu interés</a>
                           <ul>
                              <li><a href="{{ route('user.tools.index') }}" title="">Herramientas</a></li>
                              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSe_7N76d-cmnhAP6jh_qXL9S6xr77KyUNpEKz2nnjGuDIfhLw/viewform" target="_blank">Certificados</a></li>
                              <!-- <li><a href="{{ route('user.words.index') }}" title="">Del director</a></li> -->
                              <li><a href="{{ route('user.soporte.index') }}" title="">Appyuda</a></li>
                              <li><a href="{{ route('user.certificados.user') }}" title="">Certificados tributarios</a></li>
                              <li><a href="{{ route('user.mercurio.index') }}" title="">Mercurio</a></li>
                              <li><a href="{{ route('user.entrepreneurship.index') }}" title="">Emprendedores</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" title="">Nosotros</a>
                           <ul>
                              <li><a href="{{ route('user.team.index', 'direccion-general') }}" title="">Dirección General</a></li>
                              <li><a href="{{ route('user.team.index', 'direccion-tecnica') }}" title="">Dirección Técnica</a></li>
                              <li><a href="{{ route('user.team.index', 'subdireccion-de-gestión-de-alianzas-público-privadas') }}" title="">Subdirección APP</a></li>
                              <li><a href="{{ route('user.team.index', 'subdireccion-de-gestión-inmobiliaria') }}" title="">Subdirección Inmobiliaria</a></li>
                              <li><a href="{{ route('user.team.index', 'subdireccion-de-paisaje-y-patrimonio') }}" title="">Subdirección Paisaje</a></li>
                           </ul>
                        </li>
                        
                     
                        
                        @guest
                        <li><a href="{{ route('login') }}" title="">Ingresar</a></li>
                        @else
                        <li><a href="{{ route('panel.projects.index') }}" title="">Panel</a></li>
                        @endguest
                        {{-- <li><a href="#" title="">Mesa de ayuda</a></li> --}}
                     </ul>
                  </nav>
                  <!--nav end-->
                  <div class="menu-btn">
                     <span class="bar1"></span>
                     <span class="bar2"></span>
                     <span class="bar3"></span>
                  </div>
                  <!--menu-btn end-->
               </div>
               <!--header-content end-->
            </div>
         </header>
         <!--header end-->

         <div class="responsive-mobile-menu">
            <ul>
               <li><a href="{{ route('index') }}" title="">Inicio</a></li>
               <li><a href="{{ route('user.mercurio.index') }}" title="">Mercurio</a></li>
               <li>
                  <a href="#" title="">Equipo APP</a>
                  <ul>
                     <li><a href="{{ route('user.team.index', 'direccion-general') }}" title="">Dirección General</a></li>
                     <li><a href="{{ route('user.team.index', 'direccion-tecnica') }}" title="">Dirección Técnica</a></li>
                     <li><a href="{{ route('user.team.index', 'subdireccion-de-gestión-de-alianzas-público-privadas') }}" title="">Subdirección APP</a></li>
                     <li><a href="{{ route('user.team.index', 'subdireccion-de-gestión-inmobiliaria') }}" title="">Subdirección Inmobiliaria</a></li>
                     <li><a href="{{ route('user.team.index', 'subdireccion-de-paisaje-y-patrimonio') }}" title="">Subdirección Paisaje</a></li>
                  </ul>
               </li>
               <li><a href="#" title="">Institucional</a></li>
               <li>
                  <a href="#" title="">APPtualízate</a>
                  <ul>
                     {{-- <li><a href="#" title="">APPtualízate</a></li>
                     <li><a href="#" title="">Boletines</a></li> --}}
                     <li><a href="{{ route('user.notices.index') }}" title="">Noticias</a></li>
                     <li><a href="{{ route('user.gallery.index') }}" title="">Galería</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#" title="">Más</a>
                  <ul>
                      <li><a href="https://drive.google.com/drive/u/2/folders/0ABx1o6DDSGXQUk9PVA" target="_blank" title="">AulaAPP</a></li>
                     <li><a href="{{ route('user.self-care') }}" title="">Autocuidado</a></li>
                     <li><a href="#" title="">Mesa de ayuda</a></li>
                  </ul>
               </li>
                @guest
                        <li><a href="{{ route('login') }}" title="">Ingresar</a></li>
                        @else
                        <li><a href="{{ route('panel.projects.index') }}" title="">Panel</a></li>
                        @endguest
                        {{-- <li><a href="#" title="">Mesa de ayuda</a></li> --}}
            </ul>
         </div>
         <!--responsive-menu end-->

         @yield('content')

         <!-- <section class="contact-section">
            <div class="container">
               <div class="contact-content">
                  <div class="address-info">
                     <h3>Nuestra dirección</h3>
                     <p>Carrera 55 # 42-180 Local 203. Edificio Plaza de La Libertad, Medellín, Antioquia</p>
                  </div>
                  <div class="contact_info">
                     <h3>Contáctanos</h3>
                     <ul>
                        <li><a href="mailto:info@app.gov.co" title="">info@app.gov.co</a></li>
                        <li>(57) 604 448 1740 Ext 100</li>
                     </ul>
                  </div>
               </div>
              
            </div>
         </section> -->
         <!--contact-section end-->

         <footer>
            <div class="container">
               <div class="footer-content">
                  <div class="row">
                     <div class="col-lg-3">
                        <div class="widget-about" style="padding-top: 30px;">
                           <h2>AGENCIA APP</h2>
                           <p>Derechos Reservados</p>
                           <span>©2021</span>
                        </div>
                        <!--widget-about end-->
                     </div>
                     <div class="col-lg-3">
                     <div class="address-info" style="padding-top: 30px;">
                     <h3>Nuestra dirección</h3>
                     <p>Carrera 55 # 42-180 Local 203. Edificio Plaza de La Libertad, Medellín, Antioquia</p>
                  </div>
                        <!--widget-newsletter end-->
                     </div>
                     <div class="col-lg-3">
                     <div class="contact_info" style="padding-top: 30px;">
                     <h3>Contáctanos</h3>
                     <ul>
                        <li>info@app.gov.co</li>
                        <li>(57) 604 448 1740 Ext 100</li>
                     </ul>
                  </div>
                        <!--widget-newsletter end-->
                     </div>
                     <div class="col-lg-3" style="padding-top: 30px;">
                        <div class="widget-follow">
                           <h3>Síguenos</h3>
                           <ul class="social-links">
                              <li>
                                 <a href="https://twitter.com/agenciaappmed" target="_blank" title=""><i class="fab fa-twitter"></i></a>
                              </li>
                              <li>
                                 <a href="https://www.facebook.com/AgenciaAPPMed" target="_blank" title=""><i class="fab fa-facebook-f"></i></a>
                              </li>
                              <li>
                                 <a href="https://www.instagram.com/agenciaappmed/" target="_blank" title=""><i class="fab fa-instagram"></i></a>
                              </li>
                           </ul>
                        </div>
                        <!--widget-follow end-->
                     </div>
                  </div>
               </div>
               <!--footer-content end-->
            </div>
         </footer>
         <!--footer end-->
      </div>
      <!--wrapper end-->

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-LZ65KDPSDW"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'G-LZ65KDPSDW');
      </script>

      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/jquery-migrate-1.4.1.min.js') }}"></script>
      <script src="{{ asset('js/popper.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/slick.min.js') }}"></script>
      <script src="{{ asset('js/html5lightbox.js') }}"></script>
      <script src="{{ asset('js/wow.min.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      @stack('scripts')
   </body>
</html>
