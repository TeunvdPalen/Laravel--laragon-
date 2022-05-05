@extends('layouts.default')

@section('title', 'Sportnieuzs')
@section('nav1', 'Hondensporten')
@section('nav1-link')
	{{ route('hondensport.index') }}
@endsection
@section('nav2', 'agility')
@section('nav3', 'obedience')
@section('nav4', 'recreanten')
@section('nav5', 'sportnieuws')

@section('content')
	<div>
		<h1>sportnieuws</h1>
		<h2>Regionaal kampioen 2019</h2>
		<p>
			Hubert Dreesen is met Bizzii Regionaal Kampioen 2019 geworden.
		</p>
		<p>
			Gedurende de vrienschappelijke wedstrijden in 2019, waar verschillende regionale hondenverenigingen aan meedoen, liep Hubert en Bizzii regelmatig in de top van zijn klasse. Dit leidde uiteindelijk tot kampioen.
		</p>
		<p>
			Van harte gefeliciteerd
		</p>
	</div>
@endsection
