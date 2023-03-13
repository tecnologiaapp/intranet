@extends('panel.app')
@section('title', 'Agregar lección al curso ' . $course->title)
@section('content')

<div class="nk-content">
   <div class="container-fluid">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <!-- .nk-block-head -->
            <div class="nk-block">
               <div class="row g-gs">
                  <div class="col-sm-12">
                     <div class="card p-5">
                        <form action="{{-- {{ route('panel.courses.update', $course) }} --}}" method="POST">
                        	@csrf
                        	<div class="row">
	                           <div class="col-sm-12 col-lg-6">
	                              <div class="form-group">
	                              	<label>Título del curso</label>
	                              	<input type="text" name="title" value="{{ $course->title }}" class="form-control">
	                              </div>
	                           </div>

	                           <div class="col-sm-12 col-lg-6">
	                              <div class="form-group">
	                              	<label>Video principal (Tráiler del curso)</label>
	                              	<input type="text" name="video" placeholder="https://youtube.com" class="form-control">
	                              </div>
	                           </div>	                           

	                           <div class="col-sm-12 col-lg-6 col-xl-4 mt-4">
	                              <div class="form-group">
	                              	<label>Tipo de lección</label>
	                              	<select name="lesson_type" class="form-control">
	                              		<option value="Lecture">{{ __('Lecture') }}</option>
	                              		<option value="Quiz">{{ __('Quiz') }}</option>
	                              		<option value="Video">{{ __('Video') }}</option>
	                              		<option value="Document">{{ __('Document') }}</option>
	                              	</select>
	                              </div>
	                           </div>

	                           <div class="col-sm-12 col-lg-6 col-xl-4 mt-4">
	                           	<div class="form-group">
	                              	<label>Orden de la lección</label>
	                              	<input type="number" name="sortOrder" class="form-control">
	                              </div>
	                           </div>

	                           <div class="col-sm-12 mt-4">
	                              <div class="form-group">
	                              	<label>Descripción</label>
	                              	<textarea name="description" id="body" class="form-control">{!! $course->description->body !!}</textarea>
	                              </div>
	                           </div>

	                           <div class="col-sm-12 col-lg-6 col-xl-4 mt-4">
	                              <div class="form-group">
	                              	<div class="custom-control custom-switch">
	                              		<input type="checkbox" checked class="custom-control-input" id="published">
	                              		<label class="custom-control-label" for="published">Esta lección se puede publicar ya</label>
	                              	</div>
	                              </div>
	                           </div>

	                           <div class="col-12 mt-4 text-right">
	                              <button type="submit" class="btn btn-primary"><em class="icon lni lni-plus"></em><span>{{ __('Update') }}</span></button>
	                           </div>
	                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- .nk-block -->
         </div>
      </div>
   </div>
</div>
@endsection

@push('scripts')
@include('panel.includes.scripts._file-adapter', ['path' => 'courses@' . $course->slug . '@'])
<script type="text/javascript">
	//Initialize the ckeditor
	ClassicEditor.create(document.querySelector("#skills"), {
		toolbar: [ 'bold', 'italic', 'link', 'bulletedList', '|', 'undo', 'redo'],
	}).catch((error) => {
	   console.error(error);
	});
</script>
@endpush