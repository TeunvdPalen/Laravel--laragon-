@extends('layouts.default')

@section('title', 'Home')

@section('content')
	<div>
		<h1>Hallo</h1>
		<p>Welcome bij VVH</p>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('nieuws') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=1" alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('algemeen.index') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=2"
						alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('cursus.index') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=3"
						alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('inschrijven.index') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=4"
						alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('kalender.index') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=5"
						alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('hondensport.index') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=6"
						alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('maatschappelijk.index') }}" class="img-scale"><img
						src="https://picsum.photos/300/300?random=7" alt=""></a>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="{{ route('contact') }}" class="img-scale"><img src="https://picsum.photos/300/300?random=8"
						alt=""></a>
			</div>
		</div>
	</div>
@endsection
