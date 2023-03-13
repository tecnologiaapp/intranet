@extends('app')


@section('content')

<style>
#content {
 
    
}

#left, #right {
    display: inline-block;
    width: 640px;
    height: 400px;
}

* {
				margin:0px;
				padding:0px;
			}
			
	
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>

<section class="work-together-sec" style="padding-top: 100px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Convenios interadministrativos</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="page-content v4"  style="padding-top: 0px;">
  
<div id="header">
      <ul class="nav">
				<li><a href="{{ route('user.Indicadores.index') }}">Presupuesto App</a></li>
				<li><a href="#">Subdirección paisaje</a>
					<ul>
						<li><a href="{{ route('user.Paisaje.urbano') }}">Paisaje urbano (334)</a></li>
						<li><a href="{{ route('user.Paisaje.patrimonio') }}">Paisaje y patrimonio (326)</a></li>
					  <li><a href="{{ route('user.Paisaje.prado') }}">Paisaje prado (333)</a></li>
            <li><a href="{{ route('user.Paisaje.POT') }}">Paisaje POT (335)</a></li>
					</ul>
				</li>
				<li><a href="{{ route('user.App.index') }}">Subdirección APP</a></li>
				<li><a href="{{ route('user.Inmo.index') }}">Subdirección Inmobiliaria</a></li>
        <li><a href="{{ route('user.Paisaje.index') }}">Convenios Interadministrativos</a></li>
			</ul>
    </div>


 
    <script id="infogram_0_5b31e45f-407d-4866-8291-21a08cc647e7" title="General" src="https://e.infogram.com/js/dist/embed.js?1ZB" type="text/javascript"></script>




</section>




@stop
