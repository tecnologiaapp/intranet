@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Mesa de ayuda</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="page-content">
	<div class="container">
		<div class="page-title wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
			<h2>Contáctanos</h2>
		</div><!--page-title end-->
		<div class="row">
			<div class="col-lg-6">
				<div class="get-touch-content wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
					<div class="email-tk">
						<h4>¿Necesitas algo urgente?</h4>
						<h2>
							<a href="tel:0344481740" title="">4481740 Ext. 123</a>
						</h2>
					</div>
					<ul>								
						<li>
							<span>Correo electrónico</span>
							<h3>
								<a href="mailto:info@app.gov.co">info@app.gov.co</a>
							</h3>
						</li>
					</ul>
					<p>Conocemos lo importante que es tu requerimiento. Sin embargo, si NO es algo urgente abre un nuevo ticket para dar seguimiento a tu requerimiento.</p>
				</div><!--get-touch-content end-->
			</div>
			<div class="col-lg-6">
				<div class="contact-sec-v1 wow fadeInRight" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInRight;">
					<h3>Abrir ticket</h3>
					<form class="contact-form-v1">
						<label>Placa del equipo (Opcional)</label>
						<input type="text" name="name" placeholder="Ingresa la placa del equipo" class="form-control">

						<label>Temas de ayuda</label>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="Hardware">
							<label class="form-check-label" for="Hardware">
							Hardware (Parte física)
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label" for="Software">
							Software (Programas)
							</label>
							<input class="form-check-input" type="checkbox" value="" id="Software" checked>
							
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="Drive" checked>
							<label class="form-check-label" for="Drive">
							Acceso a correo electrónico o Drive
							</label>
						</div>

						{{-- <input type="email" name="email" placeholder="Your E-mail" class="form-control"> --}}
						<textarea placeholder="Explícanos tu inconveniente" class="form-control"></textarea>
						<div class="form-button">
							<button type="submit" class="btn-form btn-default">
								<span>Enviar ticket</span>
							</button>
						</div>
					</form>
				</div><!-- contact-sec-v1 end-->
			</div>
		</div>
	</div>
</section>
@endsection