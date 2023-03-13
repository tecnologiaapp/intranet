@extends('app')

@section('content')

<section class="work-together-sec" style="padding-top: 200px;">
   <div class="container">
      <div class="wrk-tgt text-center wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
         <h2>Suscribirse a la lista de correo</h2>
      </div>
      <!--wrk-tgt end-->
   </div>
</section>

<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="page-title wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
					<h2>Suscribirse</h2>
				</div><!--page-title end-->
				<div class="get-touch-content wow fadeInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
					<p>Cuando te suscribes a la lista de correo electrónico te notificamos de todas las publicaciones que realicemos. Así estarás al día de lo que suceda en la AGENCIA APP.</p>
				</div><!--get-touch-content end-->
			</div>
			<div class="col-lg-6">
				<div class="contact-sec-v1 wow fadeInRight" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInRight;">
					<h3>Completar información</h3>
					<form class="contact-form-v1">
						<div class="mb-4">
							<label>Correo electrónico</label>
							<input type="email" required name="mailing_email" placeholder="Ingresa tu correo electrónico" value="{{ $request->mailing_email }}" class="form-control">
						</div>

						<div class="mb-4">
							<label>Nombre completo</label>
							<input type="text" name="name" maxlength="50" required placeholder="Ingresa tu nombre completo" class="form-control">
						</div>

						<div class="form-button">
							<button class="btn-form btn-default mailing_email">
								<span>Confirmar suscripción</span>
							</button>
						</div>
					</form>
				</div><!-- contact-sec-v1 end-->
			</div>
		</div>
	</div>
</section>
@endsection

@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
   $(".mailing_email").click(function(e){
      e.preventDefault();
      let email = $("input[name=mailing_email]").val();
      let name = $("input[name='name']").val();

      console.log(name);

      $.ajax({
         url: '{{ route('user.mailing.store') }}',
         type: 'POST',
         data: {
            "_token": "{{ csrf_token() }}",
            "mailing_email": email,
            name
         }, 
         success: function (result) {
         	console.log(result);
            if (result.success == true) {
               $("input[name=mailing_email]").val("");
               $("input[name=name]").val("");
               $(document).ready(function(){
				      swal(result.title, result.message, "success");     
				   });
            } else {
               $(document).ready(function(){
				      swal(result.title, result.message, "error");    
				   });
            }
         },
         error: function (result) {
            $(document).ready(function(){
			      swal("Error", "Ha ocurrido un error, por favor intenta nuevamente.", "error");    
			   });
         }
      });  
   });
</script>
@endpush