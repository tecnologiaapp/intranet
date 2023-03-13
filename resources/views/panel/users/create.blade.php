@extends('panel.app')

@section('title', 'Agregar contratista o funcionario')
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.user.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="name" class="form-label">Nombre completo</label>
					<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Nombre completo">
					@error('name')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="email" class="form-label">Correo electrónico</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Ej: rodrigo.foronda@app.gov.co">
					@error('email')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="username" class="form-label">Nombre de usuario</label>
					<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" placeholder="Ej: rodrigo.foronda">
					@error('username')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="status" class="form-label">Estado</label>
					<select name="status" class="form-control" id="status">
						<option value="Active">{{ __('Active') }}</option>
						<option value="Inactive">{{ __('Inactive') }}</option>
					</select>
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="city_id" class="form-label">Ciudad de nacimiento</label>
					<select name="city_id" class="form-control @error('city_id') is-invalid @enderror" id="city_id">
						@foreach($cities as $city)
						<option {{ old('city_id') == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }} ({{ $city->state }})</option>
						@endforeach
					</select>
					@error('city_id')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="sex" class="form-label">Sexo</label>
					<select name="sex" class="form-control @error('sex') is-invalid @enderror" id="sex">
						<option {{ old('sex') == 'Male' ? 'selected' : '' }} value="Male">{{ __('Male') }}</option>
						<option {{ old('sex') == 'Female' ? 'selected' : '' }} value="Female">{{ __('Female') }}</option>
					</select>
					@error('sex')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="date_of_birth" class="form-label">Cumpleaños (Mes - Día)</label>
					<div class="row">
						<div class="col-sm-6 col-lg-4">
							<select name="day" class="form-control @error('day') is-invalid @enderror" id="day">
								@foreach($days as $day)
								<option {{ old('day') == $day ? 'selected' : '' }} value="{{ $day }}">{{ $day }}</option>
								@endforeach
							</select>
							@error('day')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>
						<div class="col-sm-6 col-lg-8">
							<select name="month" class="form-control @error('month') is-invalid @enderror" id="month">
								@foreach($months as $month)
								<option {{ old('month') == $month['id'] ? 'selected' : '' }} value="{{ $month['id'] }}">{{ $month['name'] }}</option>
								@endforeach
							</select>
							@error('month')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="dependency_id" class="form-label">(Sub)dirección</label>
					<select name="dependency_id" class="form-control @error('dependency_id') is-invalid @enderror" id="dependency_id">
						@foreach($dependencies as $dependency)
						<option {{ old('dependency_id') == $dependency->id ? 'selected' : '' }} value="{{ $dependency->id }}">{{ $dependency->title }}</option>
						@endforeach
					</select>
					@error('dependency_id')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="phone_number" class="form-label">Número de contacto</label>
					<input type="number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" value="{{ old('phone_number' , '4481740') }}"  placeholder="Ej: 4481740">
					@error('phone_number')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="ext_number" class="form-label">Extensión</label>
					<input type="number" name="ext_number" class="form-control @error('ext_number') is-invalid @enderror" id="ext_number" value="{{ old('ext_number') }}" placeholder="Ej: 100">
					@error('ext_number')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-6">
					<label for="position" class="form-label">Cargo</label>
					<input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="position" value="{{ old('position') }}" placeholder="Ej: Apoya la gestión de...">
					@error('position')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="profession" class="form-label">Profesión</label>
					<input type="text" name="profession" class="form-control @error('profession') is-invalid @enderror" id="profession" value="{{ old('profession') }}" placeholder="Ej: Abogado">
					@error('profession')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-3">
					<label for="user_type" class="form-label">Tipo de usuario</label>
					<select name="user_type" class="form-control @error('user_type') is-invalid @enderror" id="user_type">
						<option {{ old('user_type') == 'Linked' ? 'selected' : '' }} value="Linked">{{ __('Linked') }}</option>
						<option {{ old('user_type') == 'Contractor' ? 'selected' : '' }} value="Contractor">{{ __('Contractor') }}</option>
					</select>
					@error('user_type')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-3 col-sm-12 col-lg-6">
					<label for="image" class="form-label">Imagen</label>
					<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
					<small>Si agregas una nueva imagen se reemplazará la anterior</small>
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


