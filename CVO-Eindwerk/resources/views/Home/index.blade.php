@extends('layouts.default')

@section('title', 'Home')
@section('hidden', 'hidden')

@section('content')
	<div>
		<h1 class="main-title">Welcome bij VVH</h1>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('nieuws') }}">
					<h1 class="home-nav-title">Nieuws</h1>
				</a>
				<a href="{{ route('nieuws') }}" class="img-scale">
					<img src="{{ asset('/images/hond_krant.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('algemeen.index') }}">
					<h1 class="home-nav-title">Algemeen</h1>
				</a>
				<a href="{{ route('algemeen.index') }}" class="img-scale">
					<img src="{{ asset('/images/algemeen.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('cursus.index') }}">
					<h1 class="home-nav-title">Cursus</h1>
				</a>
				<a href="{{ route('cursus.index') }}" class="img-scale">
					<img src="{{ asset('/images/cursus.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('inschrijven.index') }}">
					<h1 class="home-nav-title">Inschrijven</h1>
				</a>
				<a href="{{ route('inschrijven.index') }}" class="img-scale">
					<img src="{{ asset('/images/inschrijven2.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('kalender.index') }}">
					<h1 class="home-nav-title">Kalender</h1>
				</a>
				<a href="{{ route('kalender.index') }}" class="img-scale">
					<img src="{{ asset('/images/kalender.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('hondensport.index') }}">
					<h1 class="home-nav-title">Hondensport</h1>
				</a>
				<a href="{{ route('hondensport.index') }}" class="img-scale">
					<img src="{{ asset('/images/hondensport.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('maatschappelijk.index') }}">
					<h1 class="home-nav-title">Maat-<br>schappelijk</h1>
				</a>
				<a href="{{ route('maatschappelijk.index') }}" class="img-scale">
					<img src="{{ asset('/images/maatschappelijk.jpg') }}" alt="">
				</a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 home-nav">
				<a href="{{ route('contact') }}">
					<h1 class="home-nav-title">Contact</h1>
				</a>
				<a href="{{ route('contact') }}" class="img-scale">
					<img src="{{ asset('/images/contact.jpg') }}" alt="">
				</a>
			</div>
		</div>
	</div>
@endsection
