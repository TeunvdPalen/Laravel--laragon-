@extends('layouts.default')

@section('title', 'Profiel')
@section('hidden', 'hidden')

@section('content')
	<div>
		<h1>Jouw honden</h1>
		<h2>Hond toevoegen</h2>
		<form action="{{ route('profiel.hond-toevoegen') }}" method="post" novalidate>
			@csrf
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Roepnaam hond: <br>
						<input type="text" name="name" value="{{ old('name') }}" autofocus>
						@error('name')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Geslacht hond: <br>
						<label for="m">Rue</label>
						<input type="radio" name="sex" id="m" value="rue">
						<label for="v">Teef</label>
						<input type="radio" name="sex" id="v" value="teef">
						@error('sex')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Ras hond: <br>
						<input type="text" name="breed" value="{{ old('breed') }}">
						@error('breed')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Geboorte datum hond: <br>
						<input type="date" name="birth" value="{{ old('birth') }}">
						@error('birth')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
			<div>
				<button type="submit">Toevoegen</button>
			</div>
		</form>
		{{-- <h2>Hond wijzigen</h2>
		<form action="{{ route('profiel.hond-edit') }}" method="post" novalidate>
            @csrf
            @method('put')
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Roepnaam hond: <br>
						<input type="text" name="name" value="{{ $user->hond->name }}">
						@error('name')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Geslacht hond: <br>
						<label for="m">Rue</label>
						<input type="radio" name="sex" id="m" value="rue">
						<label for="v">Teef</label>
						<input type="radio" name="sex" id="v" value="teef">
						@error('sex')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Ras hond: <br>
						<input type="text" name="breed" value="{{ $user->hond->breed }}>
								@error('breed')
		<p class=" error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Geboorte datum hond: <br>
						<input type="date" name="birth" value="{{ $user->hond->birth }}>
								@error('birth')
		<p class=" error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
		</form> --}}
	</div>
@endsection
