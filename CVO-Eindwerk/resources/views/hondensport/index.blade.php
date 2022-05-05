@extends('layouts.default')

@section('title', 'Hondensport')
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
		<h1>Sporten</h1>
		<p>
			Het hoofddoel van de VVH is het ondersteunen van de hondeneigenaar bij de opvoeding van de (huis)hond. Dit doen we door ons cursusprogramma zoveel mogelijk aan te passen aan de behoeftes van de hond en de baas. Het opvoeden van de hond begint zodra de pup in huis komt en onze cursussen zijn daar een prima hulpmiddel bij. Meer over de puppy cursus en andere opvoedcursussen kunt u lezen onder <a href="{{ route('cursus.index') }}">Cursusinformatie en Opvoeden</a>.
		</p>
		<p>
			Als u een opgevoede hond heeft kunt u bij de VVH deel nemen aan bijvoorbeeld een tak van hondensport zoals
		</p>
		<ul>
			<li>Fun Obedience (gedrag & gehoorzaamheid)</li>
			<li>Agility (behendigheid)</li>
			<li>Recreanten</li>
		</ul>
		<p>
			Alle takken van sport hebben als doel om naar een niveau te trainen waarbij de hond aan landelijke wedstrijden of examens deel kan gaan nemen. <br>
			Zodra er wedstrijden of examens zijn geweest wordt dat ook op deze website vermeld.
		</p>
		<p>
			Mocht u zin hebben in allerlei vormen van hondensport en daarbij vooral leuk bezig willen zijn met de hond dan kunt u dat bij de VVH in de Recreantencursus. Hier worden ongeveer iedere 4 weken nieuwe dingen gedaan zoals Hersenwerk, Breitensport, Spelletjes voor baas en hond, Hulphondenwedstrijd en Speuren.
		</p>
		<p>
			Ook daar waar het allemaal niet zo soepel verloopt, biedt de VVH ondersteuning in de vorm van Gedragstherapie voor honden. Samen met de instructeur en de hondeneigenaar wordt gekeken naar de juiste oplossing. Soms kan het niet binnen de cursus opgelost worden maar dan is er de mogelijkheid om met een van onze gedragstherapeuten een afspraak te maken.
		</p>
		<p>
			Kortom…… wij zijn een vereniging die probeert te bereiken dat u een heel hondenleven lang plezier bij ons kunt beleven.
		</p>
	</div>
@endsection
