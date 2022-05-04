@extends('layouts.default')

@section('title', 'Cursus')
@section('nav1', 'Cursus informatie')
@section('nav1-link')
	{{ route('cursus.index') }}
@endsection
@section('nav2', 'lidmaatschap')
@section('nav3', 'opvoeden')
@section('nav4', 'trainingsmiddelen')

@section('content')
	<div>
		<h1>Cursus informatie</h1>
		<p>
			De cursussen die de VVH aanbiedt zijn onder te verdelen in Opvoedcursussen en Sport. Om deel te kunnen nemen aan een
			van onze cursussen dient men lid te worden van de VVH.
		</p>

		<h2>Opvoedcursussen bij de VVH</h2>
		<p>
			De VVH heeft een aantal (her-)opvoedcursussen ontwikkeld die er op gericht zijn om hondeneigenaren te ondersteunen bij
			de opvoeding van hun (huis)hond. Deze cursussen zijn afgestemd op de verschillende ontwikkelingsfases die de hond
			doorloopt van pup tot volwassenheid.
			De verschillende opvoedcursussen zijn een combinatie van praktijkoefeningen die aansluiten op de dagelijkse omgang met
			de hond en theoretische ondersteuning om te leren begrijpen waarom de hond doet zoals hij doet.
		</p>
		<p>
			Heeft u vragen over opvoeden kunt u via de contactpagina een email sturen
		</p>
		<p>
			Wij kunnen u de volgende opvoedcursussen aanbieden:
		</p>

		<h2>Puppycursus</h2>
		<p>
			Een cursus voor eigenaren van pups vanaf 8 weken oud, waarin de basis wordt gelegd voor de verdere opvoedcursussen.
			Veel aandacht wordt besteed aan de opbouw van de band met je hond. Bovendien zullen er, d.m.v. het aanbieden van
			verschillende oefeningen met uitleg, handvatten en tips worden aangereikt waarmee je ook thuis aan de slag kunt gaan
		</p>

		<h2>Jonge hondencursus</h2>
		<p>
			Het vervolg op de puppycursus voor eigenaren en honden vanaf de leeftijd van ongeveer 5 maanden. De oefeningen worden
			uitgebreid en verder geoefend.
			Het op een juiste en rustige manier omgaan met je puberende (!) hond krijgt veel aandacht.
			Ook hier veel informatie over hondengedrag en de band tussen de eigenaar en hond.
		</p>

		<h2>Basiscursus</h2>
		<p>
			Deze opvoedcursus is speciaal bedoeld voor eigenaren en honden vanaf de leeftijd van + 6 maanden zonder eerdere
			trainingservaring. Veel aandacht voor het versterken van de band met je hond, gedrag van de hond met andere mensen en
			honden. Verder worden dezelfde oefeningen aangeleerd als in de andere cursussen.
		</p>

		<h2>Gehoorzame hond</h2>
		<p>
			In deze cursus (GH) ligt de nadruk op het afronden van de opvoeding en wordt afgesloten met een examen. Hier worden
			geleider en hond niet alleen beoordeeld op de aangeleerde oefeningen, maar ook op de juiste manier van samenwerken, de
			omgang van de hond met andere honden én evt. andere afleidingen / prikkels. Na het behalen van dit examen kan men deel
			gaan nemen aan de sporten die de VVH aanbiedt.
		</p>
	</div>
@endsection
