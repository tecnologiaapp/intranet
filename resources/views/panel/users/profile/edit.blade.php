@extends('panel.app')

@section('title', 'Editar el usuario ' . $user->name)
@section('content')

<div class="card card-preview">
	<div class="card-inner mt-3">
		<form action="{{ route('panel.profile.update', $user) }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-sm-12 col-lg-2">
					<img src="{{ asset($user->image()) }}" alt="" />
				</div>

				<div class="col-sm-12 col-lg-10">
					<div class="row">
						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="name" class="form-label">Nombre completo</label>
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $user->name }}" placeholder="Nombre completo">
							@error('name')
							a	<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="email" class="form-label">Correo electrónico</label>
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $user->email }}" placeholder="Ej: rodrigo.foronda@app.gov.co">
							@error('email')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="username" class="form-label">Nombre de usuario</label>
							<input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $user->username }}" placeholder="Ej: rodrigo.foronda">
							@error('username')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="status" class="form-label">Estado</label>
							<input type="text" class="form-control @error('status') is-invalid @enderror" id="status" disabled value="{{ __($user->status) }}">
							@error('status')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="city_id" class="form-label">Ciudad de nacimiento</label>
							<select name="city_id" class="form-control" id="city_id">
								@foreach($cities as $city)
								<option @if($user->city_id == $city->id) selected @endif value="{{ $city->id }}">{{ $city->name }} ({{ $city->state }})</option>
								@endforeach
							</select>
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="sex" class="form-label">Sexo</label>
							<select name="sex" class="form-control" id="sex">
								<option @if($user->sex == 'Male') selected @endif value="Male">{{ __('Male') }}</option>
								<option @if($user->sex == 'Female') selected @endif value="Female">{{ __('Female') }}</option>
							</select>
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="date_of_birth" class="form-label">Cumpleaños (Mes - Día)</label>
							<div class="row">
								<div class="col-sm-6 col-lg-4">
									<select name="day" class="form-control @error('day') is-invalid @enderror" id="day">
										@foreach($days as $day)
										<option @if($user->day == $day) selected @endif value="{{ $day }}">{{ $day }}</option>
										@endforeach
									</select>
									@error('day')
										<p class="text-danger">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-sm-6 col-lg-8">
									<select name="month" class="form-control @error('month') is-invalid @enderror" id="month">
										@foreach($months as $month)
										<option @if($user->month == $month['id']) selected @endif value="{{ $month['id'] }}">{{ $month['name'] }}</option>
										@endforeach
									</select>
									@error('month')
										<p class="text-danger">{{ $message }}</p>
									@enderror
								</div>
							</div>
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="city_id" class="form-label">(Sub)dirección</label>
							<select name="dependency_id" class="form-control @error('dependency_id') is-invalid @enderror" id="dependency_id">
								@foreach($dependencies as $dependency)
								<option @if($user->dependency_id == $dependency->id) selected @endif value="{{ $dependency->id }}">{{ $dependency->title }}</option>
								@endforeach
								@error('dependency_id')
									<p class="text-danger">{{ $message }}</p>
								@enderror
							</select>
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="phone_number" class="form-label">Número de contacto</label>
							<input type="number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" value="{{ $user->phone_number }}" placeholder="Ej: 4481740">
							@error('phone_number')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="ext_number" class="form-label">Extensión</label>
							<input type="number" name="ext_number" class="form-control @error('ext_number') is-invalid @enderror" id="ext_number" value="{{ $user->ext_number }}" placeholder="Ej: 100">
							@error('ext_number')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-6">
							<label for="position" class="form-label">Cargo</label>
							<input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="position" value="{{ $user->position }}" placeholder="Ej: Apoya la gestión de...">
							@error('position')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="profession" class="form-label">Profesión</label>
							<input type="text" name="profession" class="form-control @error('profession') is-invalid @enderror" id="profession" value="{{ $user->profession }}" placeholder="Ej: Abogado">
							@error('profession')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12 col-lg-3">
							<label for="user_type" class="form-label">Tipo de usuario</label>
							<select name="user_type" class="form-control" id="user_type">
								<option @if($user->user_type == 'Linked') selected @endif value="Linked">{{ __('Linked') }}</option>
								<option @if($user->user_type == 'Contractor') selected @endif value="Contractor">{{ __('Contractor') }}</option>
							</select>
						</div>

						<div class="mb-3 col-sm-12 col-lg-6">
							<label for="image" class="form-label">Imagen</label>
							<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
							<small>Si agregas una nueva imagen se reemplazará la anterior</small>
							@error('image')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>

						<div class="mb-3 col-sm-12">
							<div class="form-check">
								<input class="form-check-input" name="changePassword" type="checkbox" id="changePassword">
								<label class="form-check-label" for="changePassword">
									Cambiar contraseña
								</label>
							</div>
						</div>

						<div class="mb-3 mt-2 col-sm-12" id="changeUserPassword" style="display: none;">
							<div class="row">
								<div class="col-sm-12 col-lg-4">
									<label for="new_password" class="form-label">Nueva contraseña</label>
									<input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password">
									@error('new_password')
										<p class="text-danger">{{ $message }}</p>
									@enderror
								</div>	

								<div class="col-sm-12 col-lg-4">
									<label for="confirm_password" class="form-label">Repite la contraseña</label>
									<input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password">
									@error('confirm_password')
										<p class="text-danger">{{ $message }}</p>
									@enderror
								</div>	
							</div>
						</div>

						<div class="mb-3 mt-3 col-sm-12 text-right">
							<button type="submit" class="btn btn-primary">
								Actualizar
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div><!-- .card-preview -->
@endsection

@push('scripts')

<script type="text/javascript">
	$(function () {
		$("#changePassword").click(function () {
			if ($(this).is(":checked")) {
				$("#changeUserPassword").fadeIn(300);
			} else {
				$("#changeUserPassword").fadeOut(200);
			}
		});
	});
</script>
@endpush

