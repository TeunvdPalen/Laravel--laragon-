@extends('layouts.default')

@section('title', 'Profiel')
@section('hidden', 'hidden')

@section('content')
	<div>
		<h1>Welkom op jouw profiel <span class="capitalize">{{ $user->firstName }}</span></h1>

		<h2>Jouw honden</h2>
		<div class="row">
			@foreach ($honds as $hond)
				<div class="col-12 col-md-6 profiel-item">
					<h3>{{ $hond->name }}</h3>
					<p>Ras: {{ $hond->breed }}</p>
					<p>Geslacht: {{ $hond->sex }}</p>
					<p>Geboren: {{ $hond->birth }}</p>
				</div>
			@endforeach
			<div class="col-12 col-md-6 profiel-item">
				<div class="row">
					<div class="col-10">
						<a href="{{ route('profiel.hond') }}" class="">
							<h3>Hond toevoegen</h3>
							<p>Voeg een hond toe om een cursus te starten.</p>
						</a>
					</div>
					<div class="col-2 cheveron">
						<i class="fa-solid fa-chevron-right"></i>
					</div>
				</div>
			</div>
		</div>
		<h2>Gegevens wijzigen</h2>
		<div class="row">
			<div class="col-12 col-md-6 profiel-item">
				<div class="row">
					<div class="col-10">
						<a href="{{ route('profiel.edit') }}" class="">
							<h3>Gegevens wijzigen</h3>
							<p>Verander je Email of telefoon of stel je wachtwoord opnieuw in.</p>
						</a>
					</div>
					<div class="col-2 cheveron">
						<i class="fa-solid fa-chevron-right"></i>
					</div>
				</div>
			</div>
		</div>
	@endsection
