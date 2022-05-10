@extends('layouts.default')

@section('title', 'Inschrijven')
@section('hidden', 'hidden')

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
						Ik meld mij aan voor cursus: <br>
						<select name="cursus">
							<option value="">Selecteer een cursu</option>
							@foreach ($cursus as $item)
								<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>
						@error('cursus')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Ik meld mij aan voor cursus: <br>
						<select name="hond">
							<option value="">Selecteer een hond</option>
							@foreach ($honds as $hond)
								<option value="{{ $hond->id }}">{{ $hond->name }}</option>
							@endforeach
						</select>
						@error('hond')
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
