@extends('layouts.default')

@section('title', 'Obedience')
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
		<h1>Alles over Obedience Fun</h1>
		<p>
			Wanneer je met je hond het VVH Gehoorzame Hond-diploma hebt behaald (of vergelijkbaar bij een andere vereniging), kun je bij onze vereniging verder met o.a. Obedience Fun. Bij Obedience Fun ligt het accent op een hogere graad van gehoorzaamheid. De richtlijnen van FCI Obedience worden gehanteerd, maar er wordt getraind met een knipoog. Fun staat in deze groep voorop met Obedience in het achterhoofd.
		</p>
		<ul>
			<p>Het FCI Obedience programma is opgebouwd uit oefeningen, zoals onder andere:</p>
			<li>volgen aan de lijn en los volgen</li>
			<li>komen op bevel met extra opdrachten</li>
			<li>extra opdrachten tijdens het volgen, zoals zitten, liggen of staan</li>
			<li>terugzenden</li>
			<li>appeloefeningen op afstand</li>
			<li>een hoogtesprong zonder of met apport</li>
			<li>sorteren en apporteren</li>
		</ul>
	</div>
@endsection
