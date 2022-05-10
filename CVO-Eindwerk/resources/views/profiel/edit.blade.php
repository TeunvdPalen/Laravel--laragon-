@extends('layouts.default')

@section('title', 'Profiel')
@section('hidden', 'hidden')

@section('content')
	<div>
		<h1>Welkom op jouw profiel <span class="capitalize">{{ $user->firstName }}</span></h1>

		<form action="{{ route('profiel.edit-email') }}" method="post" novalidate class=""> @csrf @method('put')

			<h2>Email nummer wijzigen</h2>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Email: <br>
						<input type="email" name="email" value="{{ $user->email }}">
						@error('email')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>

			<div>
				<button type="submit" class="">Email wijzigen</button>
			</div>
		</form>
		<form action="{{ route('profiel.edit-phone') }}" method="post" novalidate class=""> @csrf @method('put')

			<h2>Telefoon nummer wijzigen</h2>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Telefoon: <br>
						<input type="text" name="phone" value="{{ $user->phone }}">
						@error('phone')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>

			<div>
				<button type="submit" class="">Telefoon wijzigen</button>
			</div>
		</form>
		<form action="{{ route('profiel.edit-password') }}" method="post" novalidate class=""> @csrf
			@method('put')

			<h2>Wachtwoord opnieuw instellen</h2>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Wachtwoord: <br>
						<input type="password" name="password">
						@error('password')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Wachtwoord confirmatie: <br>
						<input type="password" name="password_confirmation">
						@error('password_confirmation')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>

			<div>
				<button type="submit" class="">Wachtwoord instellen</button>
			</div>
		</form>
	</div>
@endsection
