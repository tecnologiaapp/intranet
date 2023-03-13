@extends('panel.app')

@section('title', 'Agregar noticia')
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.notices.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="mb-3 col-sm-12 col-lg-6 col-xl-6">
					<label for="title" class="form-label">Título de la noticia</label>
					<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" placeholder="Título de la noticia">
					@error('title')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-6 col-xl-3">
					<label for="notice_category_id" class="form-label">Categoría de la noticia</label>
					<select name="notice_category_id" class="form-control @error('notice_category_id') is-invalid @enderror" id="notice_category_id">
						@foreach($notice_categories as $category)
						<option {{ old('notice_category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->notice_category_title }}</option>
						@endforeach
					</select>
					@error('notice_category_id')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-6 col-xl-3">
					<label for="date" class="form-label">Fecha de publicación</label>
					<input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="date" value="{{ old('date') }}" placeholder="Título de la noticia">
					@error('date')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<!-- Description -->
            <div class="col-sm-12">
               <div class="form-group">
                  <label for="body" class="disabled">
                     {{ __('Description') }} (Max. 1800)
                  </label>

                  <textarea class="form-control" id="body" name="body">{!! old('body') !!}</textarea>
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

				<div class="mb-3 col-sm-12 col-lg-6 mt-4">
					<label for="image" class="form-label">Imagen (Opcional)</label>
					<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
					@error('image')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 text-right">
					<button type="submit" class="btn btn-primary">
						Agregar
					</button>
				</div>
			</div>
		</form>
	</div>
</div><!-- .card-preview -->
@endsection

@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script> --}}
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

