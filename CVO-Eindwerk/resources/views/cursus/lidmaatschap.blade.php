@extends('layouts.default')

@section('title', 'Lidmaadschap')
@section('nav1', 'Cursus informatie')
@section('nav1-link')
	{{ route('cursus.index') }}
@endsection
@section('nav2', 'lidmaatschap')
@section('nav3', 'opvoeden')
@section('nav4', 'trainingsmiddelen')

@section('content')
	<div>
		<h1>Cursusgeld / lidmaatschap</h1>
		<h2>Kosten</h2>
		<p>
			Iedereen die bij de VVH deel wil nemen aan een cursus dient lid te worden van de vereniging.
			Het lidmaatschap bedraagt € 22,50 per jaar (met ingang van 01-01-2021) en daarvoor kunt u deel nemen aan de cursussen
			en aan de overige activiteiten die de VVH organiseert.
		</p>
		<p>
			De prijzen (vanaf 01-01-2021) van onze cursussen:
		</p>
		<ul>
			<li>Puppycursus (incl theorieavond) € 55,-</li>
			<li>Basiscursus € 55,-</li>
			<li>Jonge Hondencursus € 55,-</li>
			<li>Gehoorzame Hond € 55,-</li>
			<li>Hondensport € 90,- per jaar (2e hond of 2e sport voor € 45,-)</li>
		</ul>

		<h2>Betalingsverkeer VVH leden/cursisten</h2>
		<ul>
			<li>
				Cursisten dienen voorafgaand aan de start van een cursus het cursusgeld en indien van toepassing het lidmaatschap te
				voldoen op het rekeningnummer wat terug te vinden is op de website en in de welkomstmail van de ledenadministratie.
			</li>
			<li>
				Cursisten die de 4e les nog niet betaald hebben zullen worden doorgegeven aan de penningmeester. De penningmeester
				zal dan de desbetreffende mensen aanschrijven.
			</li>
			<li>
				Cursisten die halverwege de cursus nog niet betaald hebben worden persoonlijk aangesproken door de penningmeester.
			</li>
			<li>
				Wanneer een cursist zich aanmeldt voor een vervolgcursus maar de vorige cursus nog niet betaald heeft wordt de
				inschrijving pas verwerkt als beide cursussen betaald zijn. Hierdoor kan de cursist niet starten voordat de
				achterstand betaald is.
			</li>
			<li>
				Halve cursussen worden niet aangeboden. Mocht dit toch bij uitzondering het geval zijn dan wordt dit door de
				opvoedcommissie gemeld bij ledenadministratie en zal zij ook de reden aangegeven waarom er sprake is van een halve
				cursus.
			</li>
			<li>
				Bij cursisten uit de sporten, de zogenaamde jaarleden wordt gekeken naar de maand waarin men van start gaat in de
				sport. Het cursusgeld zal dan naar rato in rekening worden gebracht.
			</li>
			<li>
				Het lidmaatschap bedraagt bij een start voor de zomervakantie € 22,50. Na de zomervakantie bedraagt het € 11,25. Bij
				de laatste cursus van het jaar als deze in december van start gaat wordt alleen lidmaatschap voor het volgende jaar
				in rekening gebracht.
			</li>
		</ul>
	</div>
@endsection
