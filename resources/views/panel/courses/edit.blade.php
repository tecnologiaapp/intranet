@extends('panel.app')
@section('title', 'Editar curso ' . $course->title)
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
                        <form action="{{ route('panel.courses.update', $course) }}" method="POST">
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
	                              	<label>Subtítulo del curso</label>
	                              	<input type="text" name="subtitle" value="{{ $course->subtitle }}" class="form-control">
	                              </div>
	                           </div>

	                           <div class="col-sm-12 col-lg-6 col-xl-4 mt-4">
	                              <div class="form-group">
	                              	<label>Estado de la publicación del curso</label>
	                              	<select name="status" class="form-control">
	                              		<option value="Published" 
	                              		@if($course->status == 'Published') selected @endif
	                              		>{{ __('Published') }}</option>

	                              		<option value="Rejected" 
	                              		@if($course->status == 'Rejected') selected @endif
	                              		>{{ __('Rejected') }}</option>

	                              		<option value="Pending" 
	                              		@if($course->status == 'Pending') selected @endif
	                              		>{{ __('Pending') }}</option>
	                              	</select>
	                              </div>
	                           </div>

	                           <div class="col-sm-12 col-lg-6 col-xl-4 mt-4">
	                              <div class="form-group">
	                              	<label>Nivel de aprendizaje</label>
	                              	<select name="level" class="form-control">
	                              		<option value="All" 
	                              		@if($course->level == 'All') selected @endif
	                              		>{{ __('All') }}</option>

	                              		<option value="Beginner" 
	                              		@if($course->level == 'Beginner') selected @endif
	                              		>{{ __('Beginner') }}</option>

	                              		<option value="Intermediate" 
	                              		@if($course->level == 'Intermediate') selected @endif
	                              		>{{ __('Intermediate') }}</option>

	                              		<option value="Advanced" 
	                              		@if($course->level == 'Advanced') selected @endif
	                              		>{{ __('Advanced') }}</option>
	                              	</select>
	                              </div>
	                           </div>

	                           <div class="col-sm-12 col-lg-6 col-xl-4 mt-4">
	                              <div class="form-group">
	                              	<label>Lenguaje del contenido</label>
	                              	<select name="language" class="form-control">
	                              		<option value="Spanish" 
	                              		@if($course->language == 'Spanish') selected @endif
	                              		>{{ __('Spanish') }}</option>
	                              	</select>
	                              </div>
	                           </div>

	                           <div class="col-sm-12 mt-4">
	                              <div class="form-group">
	                              	<label>¿Qué aprenderán los asistentes?</label>
	                              	<textarea name="to_learn" id="skills" class="form-control">{{ $course->to_learn }}</textarea>
	                              </div>
	                           </div>

	                           <div class="col-sm-12 mt-4">
	                              <div class="form-group">
	                              	<label>Descripción</label>
	                              	<textarea name="description" id="body" class="form-control">{!! $course->description->body !!}</textarea>
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