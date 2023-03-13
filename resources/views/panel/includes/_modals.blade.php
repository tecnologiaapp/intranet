<!-- Modal Category Notice -->
<div class="modal fade" tabindex="-1" id="createCategoryNotice">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <a href="#" class="close" data-dismiss="modal" aria-label="Close">
            <em class="icon lni lni-close"></em>
         </a>
         <div class="modal-header">
            <h5 class="modal-title">Agregar categoría</h5>
         </div>

         <div class="modal-body">
            <div class="row">
					<div class="mb-3 col-sm-12">
						<label for="notice_category_title" class="form-label">Título de la categoría</label>
						<input type="text" name="notice_category_title" class="form-control @error('notice_category_title') is-invalid @enderror" id="notice_category_title" value="{{ old('notice_category_title') }}" autocomplete="off" placeholder="Título de la categoría">
						@error('notice_category_title')
							<p class="text-danger">{{ $message }}</p>
						@enderror
					</div>

					<div class="col-sm-12 mt-3 text-right">
						<button class="btn btn-primary notice_category">
		         		Guardar
		         	</button>
					</div>
				</div>
         </div>
      </div>
   </div>
</div>

<!-- Modal Success -->
<div class="modal fade" tabindex="-1" id="successModal">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
		   <a href="#" class="close" data-dismiss="modal"><em class="icon lni lni-close"></em></a>
		   <div class="modal-body modal-body-lg text-center">
		      <div class="nk-modal">
		         <em class="nk-modal-icon icon icon-circle icon-circle-xxl lni lni-checkmark-circle bg-success"></em>
		         <h4 class="nk-modal-title">Éxito!</h4>
		         <div class="nk-modal-text">
		            <div class="caption-text" id="successModalMessage"></div>
		         </div>
		         <div class="nk-modal-action"><a href="#" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal">Cerrar</a></div>
		      </div>
		   </div>
		</div>
   </div>
</div>

<!-- Modal Error -->
<div class="modal fade" tabindex="-1" id="errorModal">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
		   <div class="modal-body modal-body-lg text-center">
		      <div class="nk-modal">
		         <em class="nk-modal-icon icon icon-circle icon-circle-xxl lni lni-close bg-danger"></em>
		         <h4 class="nk-modal-title">¡Ha ocurrido un error!</h4>
		         <div class="nk-modal-text">
		            <p class="lead" id="errorModalMessage"></p>
		            <p class="text-soft">Si sigues teniendo el mismo error, por favor contacta al administrador del sitio web (brayan.angarita@app.gov.co)</p>
		         </div>
		         <div class="nk-modal-action mt-5"><a href="#" class="btn btn-lg btn-mw btn-light" data-dismiss="modal">Volver</a></div>
		      </div>
		   </div>
		</div>
   </div>
</div>



