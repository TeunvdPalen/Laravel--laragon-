@extends('layouts.default')

@section('title', 'Recreanten')
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
		<h1>Alles over recreanten</h1>
		<p>
			De recreanten bestaat uit een groep van +/- 15 mensen die onder begeleiding van in totaal 3 instructeurs iedere zondagmorgen enthousiast met elkaar en hun honden bezig zijn.
		</p>
		<p>
			De onderwerpen die aan bod komen zijn zeer gevarieerd. We werken met verschillende thema’s die om de 4 weken wisselen, zoals bijvoorbeeld: speuren, sorteren, breitensport, spelletjes doggy dance en clickertraining. Vergis je niet, het is geen vrijblijvende, ongeregelde bende. Als je mee wil doen betekent dit ook dat je aan alles meedoet, ook de onderwerpen die je wellicht niet zo goed liggen.
		</p>
		<p>
			Het zijn mensen die allemaal al een E.G. diploma hebben of hun G.H1 diploma gehaald hebben, en daarom ook al iets meer te vertellen hebben over hun hond. De insteek achter deze groepen is in ieder geval veel plezier hebben met je hond en elkaar want zonder lol bestaan de groepen niet lang; zo wordt er ook vaak 's zondags na de les gezellig koffie gedronken
		</p>
		<p>
			Al met al is het een echte 'doe-groep' die als doel heeft alle honden meer buiten de deur te krijgen en deze zo te stimuleren dat het een genot wordt voor de eigenaar om te zien dat ook hun hond dit soort dingen kan bereiken zonder dwang!
		</p>
	</div>
@endsection
