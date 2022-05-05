@extends('layouts.default')

@section('title', 'Inschrijven')

@section('content')
	@guest
		<h2>Maak eerst een account aan voordat je je kan inschrijven</h2>
	@endguest
	<div>
		<h1>Hier kan je je inschrijven</h1>
		<form action="{{ route('inschrijven.post') }}" method="post" novalidate>
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
					<div class="row">
						<div class="col-9">
							<label>
								Straat: <br>
								<input type="text" name="street" value="{{ old('street') }}">
								@error('street')
									<p class="error">{{ $message }}</p>
								@enderror
							</label>
						</div>
						<div class="col-3">
							<label>
								HuisNr: <br>
								<input type="text" name="houseNumber" value="{{ old('houseNumber') }}">
								@error('houseNumber')
									<p class="error">{{ $message }}</p>
								@enderror
							</label>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Voornaam: <br>
						<input type="text" name="firstName" value="{{ old('firstName') }}">
						@error('firstName')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Telefoon: <br>
						<input type="text" name="phone" value="{{ old('phone') }}">
						@error('phone')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Gemeente: <br>
						<input type="text" name="city" value="{{ old('city') }}">
						@error('city')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Roepnaam hond: <br>
						<input type="text" name="dogName">
						@error('dogName')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Geslacht hond: <br>
						<label for="m">Rue</label>
						<input type="radio" name="dogSex" id="m" value="rue">
						<label for="v">Teef</label>
						<input type="radio" name="dogSex" id="v" value="teef">
						@error('sex')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Ras hond: <br>
						<input type="text" name="dogBreed">
						@error('dogBreed')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
					<br>
					<label>
						Geboorte datum hond: <br>
						<input type="date" name="dogBirthday">
						@error('dogBirthday')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Ik meld mij aan voor cursus: <br>
						<select name="cursus">
							@for ($i = 0; $i < 5; $i++)
								<option value="cursus{{ $i }}">cursus-{{ $i }}</option>
							@endfor
						</select>
						@error('cursus')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<div>
						<button type="submit" class="">Aanmelden</button>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection
