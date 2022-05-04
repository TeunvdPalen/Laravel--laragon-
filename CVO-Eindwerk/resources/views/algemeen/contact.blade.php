@extends('layouts.default')

@section('title', 'Contact')
@section('nav1', 'Algemeen')
@section('nav1-link')
	{{ route('algemeen.index') }}
@endsection
@section('nav2', 'nieuws')
@section('nav3', 'smoelenboek')
@section('nav4', 'contact')

@section('content')
	<div>
		<h1>Contact</h1>
		<div class="row">
			<div class="col-12 col-md-6">
				<p>
					U kunt in contact komen met onderstaande afdelingen door op de link te klikken.
				</p>
				<p>
					Stuurt u liever met de post?

				</p>
				<p>
					Verenigde Valkenswaardse Hondenliefhebbers
					Postbus 549
					5550 AM Valkenswaard
				</p>
				<p>
					Tijdens de lessen op zondag-morgen en donderdag-avond is de kantine te bereiken:
					040-2012373
				</p>
			</div>
			<div class="col-12 col-md-6">
				<p>
					Contact algemeen
					<br>
					Contact ledenadministratie
					<br>
					Contact penningmeester
					<br>
					Contact opvoeden
				</p>
			</div>
		</div>
		<h1>Adres en route</h1>
		<div class="row">
			<div class="col-12 col-md-6">
				<p>
					Het oefenterrein ligt in Valkenswaard aan de Pastoor Heerkensdreef 19. Dit is op Sportpark Den Dries. Het veld ligt
					tussen zwembad De Wedert en Scoutinggroep Dick van Toor.
				</p>
				<p>
					U kunt op het sportpak parkeren op P3. Op het sportpark is ook bewegwijzering aanwezig die u naar de parkeerplaats
					en ons oefenterrein wijst.

				</p>
				<p>
					Als u deze <a
						href="https://www.google.nl/maps/dir//Pastoor+Heerkensdreef+19,+5552+BG+Valkenswaard/@51.3629145,5.4557122,16z/data=!4m13!1m4!3m3!1s0x47c6d7135fb33363:0xa2f116ec54337c81!2sPastoor+Heerkensdreef+19!3b1!4m7!1m0!1m5!1m1!1s0x47c6d7135fb33363:0xa2f116ec54337c81!2m2!1d5.4523004!2d51.365306?hl=nl">link</a>
					gebruikt komt u in Google Maps en kunt u de routebeschrijving vinden.
				</p>
			</div>
			<div class="col-12 col-md-6 img-scale">
				<img src="/assets/images/dendries_vvh.jpg" alt="locatie van vvh op een kaart">
			</div>
		</div>
	</div>
@endsection
