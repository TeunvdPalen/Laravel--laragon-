@extends('layouts.default')

@section('title', 'Aanmelden')
@section('hidden', 'hidden')

@section('content')
	<div>
		<h1>Aanmelden</h1>
		<form action="{{ route('aanmelden.post') }}" method="post" novalidate>
			@csrf
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Naam: <br>
						<input type="text" name="name" value="{{ old('name') }}">
						@error('name')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Email: <br>
						<input type="email" name="email" value="{{ old('email') }}">
						@error('email')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Voornaam: <br>
						<input type="text" name="firstName" value="{{ old('firstName') }}">
						@error('firstName')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
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
				<button type="submit" class="">Aanmelden</button>
				<p> of je kan hier <a href="{{ route('aanmelden') }}"><b>inloggen</b></a> als je al account hebt.
				</p>
			</div>
		</form>
	</div>
@endsection
