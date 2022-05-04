@extends('layouts.default')

@section('title', 'Algemeen')
@section('nav1', 'Algemeen')
@section('nav1-link')
	{{ route('algemeen.index') }}
@endsection
@section('nav2', 'nieuws')
@section('nav3', 'smoelenboek')
@section('nav4', 'contact')

@section('content')
	<div>
		<h1>Algemeen</h1>
		<p>
			De Verenigde Valkenswaardse Hondenliefhebbers, kortweg VVH, werd op 19 maart 1988 opgericht met als doelstelling het
			bevorderen van het contact tussen mens en hond in de ruimste zin van het woord. De VVH is een vereniging zonder winst
			belangen, waarin onze kaderleden volledig op vrijwillige basis en met passie voor honden de vereniging een warm hart
			toedragen. Zonder deze passie en inzet is de VVH geen VVH.
		</p>
		<p>
			Op dit moment verzorgen wij vooral cursussen die gericht zijn op het opvoeden van de (huis)hond. Hierbij is
			kennisoverdracht over het gedrag van honden een belangrijk onderdeel. Met deze kennis wordt de eigenaar in staat
			gesteld om in dagelijkse situaties op een juiste manier met de hond om te gaan. Verder verzorgen wij cursussen zoals
			Fun Obedience en Agility waarbij u op een leuke manier met hondensport bezig kunt zijn en kunt trainen om deel te
			nemen aan examens en/of wedstrijden. Als u wel op een leuke manier met uw hond bezig wilt zijn maar dit alleen
			recreatief wenst te doen dan kunt u terecht in onze Recreanten groep. Daarnaast bieden wij onze leden nog allerlei
			andere diensten en activiteiten.
		</p>
		<p>
			In 2005 werd onze jarenlange inzet beloond door aansluiting bij de stichting 'Gedrag en Gehoorzaamheid en
			Behendigheid' van de Koninklijke Nederlandse Kennelclub 'Cynophilia'. Hierdoor kunnen we onze cursisten de
			mogelijkheid bieden om via de VVH een startlicentie aan te vragen en op landelijk niveau mee te doen aan diverse
			wedstrijden in FCI Obedience en Agility. Het biedt ons ook de mogelijkheid om landelijke wedstrijden plaats te laten
			vinden op eigen terrein.
			Een aantal jaren later zijn de sporten varhuisd van Cynuphilia naar de Raad van Beheer. Door deze verhuizing is ook de
			VVH aangesloten bij de Raad van Beheer. Via de Raad van Beheer worden de sporten nu gehouden onder het reglement van
			de FCI.
		</p>
	</div>
@endsection
