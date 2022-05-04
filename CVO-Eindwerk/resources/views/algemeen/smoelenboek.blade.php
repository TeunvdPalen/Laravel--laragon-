@extends('layouts.default')

@section('title', 'Smoelenboek')
@section('nav1', 'Algemeen')
@section('nav1-link')
	{{ route('algemeen.index') }}
@endsection
@section('nav2', 'nieuws')
@section('nav3', 'smoelenboek')
@section('nav4', 'contact')

@section('content')
	<div>
		<h1>Smoelenboek</h1>
		<div class="row">
			<p>hier komt een collage van personen die hier werken</p>
		</div>
	</div>
@endsection
