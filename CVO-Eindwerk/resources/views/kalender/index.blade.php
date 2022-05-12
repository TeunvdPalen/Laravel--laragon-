@extends('layouts.default')

@section('title', 'Home')
@section('hidden', 'hidden')

@section('content')
	<div>
		@Auth
			@if (Auth::user()->admin == true)
				<section class="kalender-main">
					<h2>Voeg een nieuw evenement toe</h2>
					<form action="{{ route('kalender.post') }}" method="post" novalidate>
						@csrf
						<div class="row">
							<div class="col-12 col-md-6">
								<label>
									titel: <br>
									<input type="title" name="title" value="{{ old('title') }}" autofocus>
									@error('title')
										<p class="error">{{ $message }}</p>
									@enderror
								</label>
							</div>
							<div class="col-12 col-md-6">
								<label>
									Datum: <br>
									<input type="date" name="date" value="{{ old('date') }}">
									@error('date')
										<p class="error">{{ $message }}</p>
									@enderror
								</label>
							</div>
							<div class="col-12 col-md-6">
								<label>
									Beschrijving: <br>
									<textarea name="description" cols="30" rows="10"></textarea>
									@error('description')
										<p class="error">{{ $message }}</p>
									@enderror
								</label>
							</div>
						</div>
						<div>
							<button type="submit" class="kalender-submit">Voeg toe</button>
						</div>
					</form>
				</section>
		@endif @endAuth <h1>Kalender</h1>
		@foreach ($events as $event)
			<div class="{{ $loop->index % 2 == 0 ? 'kalender-kleur' : '' }} kalender row">
				<div class="col-11">
					<h2>{{ $event->date }}</h2>
					<h3>{{ $event->title }}</h3>
					<p>{{ $event->description }}</p>
				</div>
				<div class="col-1">
					<form action="{{ route('kalender.destroy', $event) }}" method="post">
						@csrf
						@method("DELETE")

						<input type="submit" value="delete" class="delete">

					</form>
				</div>
			</div>
		@endforeach
	</div>
@endsection
