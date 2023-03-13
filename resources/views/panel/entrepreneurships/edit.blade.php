@extends('panel.app')

@section('title', 'Editar emprendimiento')
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.entrepreneurship.update', $entrepreneurship) }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="mb-3 col-sm-12 col-lg-12 col-xl-6">
					<label for="title" class="form-label">Título de las palabras del director</label>
					<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $entrepreneurship->title }}" placeholder="Título de las palabras del director">
					@error('title')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-6 col-xl-3">
					<label for="date" class="form-label">Fecha de publicación</label>
					<input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="date" value="{{ $entrepreneurship->created_at->format('Y-m-d') }}">
					@error('date')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-6 col-xl-3">
					<label for="image" class="form-label">Imagen (Opcional)</label>
					<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
					@error('image')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<!-- Description -->
            <div class="col-sm-12">
               <div class="form-group">
                  <label for="body" class="disabled">
                     {{ __('Description') }} (Max. 1800)
                  </label>

                  <textarea class="form-control" id="body" name="body">{!! $entrepreneurship->content !!}</textarea>
                  <div class="md-form form-sm mb-0">
                     @error('body')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>
            <!-- /Description -->

				<div class="mb-3 mt-4 col-sm-12 text-right">
					<button type="submit" class="btn btn-primary">
						Actualizar
					</button>
				</div>
			</div>
		</form>
	</div>
</div><!-- .card-preview -->
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
   $(document).ready(function () {
      state = false;
      id = "body";
      CKEDITOR.replace('body', {
         filebrowserUploadUrl: "{{ route('ckeditor', ['_token' => csrf_token()]) }}",
         filebrowserUploadMethod: 'form'
      });
      //$("#select2").select2({ width: 'resolve' });
   });
</script>
@endpush

