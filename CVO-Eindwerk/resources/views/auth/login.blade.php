@extends('layouts.default')

@section('title', 'Login')

@section('content')
	<div>
		<h1>Inloggen</h1>
		<form action="{{ route('login.post') }}" method="post" novalidate>
			@csrf
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Email: <br>
						<input type="email" name="email" value="{{ old('email') }}" autofocus>
						@error('email')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Wachtwoord: <br>
						<input type="password" name="password">
					</label>
				</div>
			</div>
			<div>
				<button type="submit" class="">Login</button>
				<p>
					of je kan hier <a href="{{ route('aanmelden') }}"><b>aanmelden</b></a> als je nog geen account hebt.
				</p>
			</div>
	</form>
	</div>
@endsection
