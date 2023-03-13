@extends('panel.app')

@section('title', 'Agregar seguimiento')
@section('content')

<div class="card card-preview">
   <div class="card-inner mt-3">
      <form action="{{ route('panel.projects.store') }}" method="POST">
         @csrf
         <div class="row">
            <div class="mb-3 col-sm-12 col-md-6 col-xl-3">
               <label for="title" class="form-label">Nombre del seguimiento</label>
               <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" placeholder="Nombre del seguimiento">
               @error('title')
                  <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>

            <div class="mb-3 col-sm-12 col-md-6 col-xl-3">
               <label for="username" class="form-label">Subdirección</label>
               <select name="dependency_id" class="form-control @error('dependency_id') is-invalid @enderror" id="dependency_id">
                  @foreach($dependencies as $dependency)
                  <option value="{{ $dependency->id }}">{{ $dependency->title }}</option>
                  @endforeach
               </select>
               @error('dependency_id')
                  <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>

            <div class="mb-3 col-sm-12 col-md-6 col-xl-3">
               <label for="end_date" class="form-label">Fecha de finalización</label>
               <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ old('end_date') }}"  placeholder="Ej: Contratación">
               @error('end_date')
                  <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>

            <div class="mb-3 col-sm-12 col-md-6 col-xl-3">
               <label for="budget" class="form-label">Presupuesto (Opcional)</label>
               <input type="number" name="budget" class="form-control @error('budget') is-invalid @enderror" id="budget" value="{{ old('budget' , 'Contratación') }}"  placeholder="Ej: Contratación">
               @error('budget')
                  <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>

            <div class="mb-3 col-sm-12">
               <div class="form-group">
                  <label class="form-label">Involucrados en el seguimiento</label>
                  <div class="form-control-wrap">
                     <select class="form-select" multiple="multiple" name="users[]" data-placeholder="Selecciona los contratistas involucrados">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">
                           {{ $user->name }} - {{ $user->email }}
                        </option>
                        @endforeach
                     </select>
                  </div>
               </div>
            </div>

            <div class="mb-3 col-sm-12">
               <label for="status" class="form-label">Descripción corta (Opcional)</label>
               <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{ old('description') }}</textarea>
               @error('description')
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


