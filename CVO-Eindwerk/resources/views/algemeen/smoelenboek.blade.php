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
			@foreach ($members as $member)
				<div class="col-12 col-sm-12 col-md-6 col-lg-4">
					<div class="row">
						<div class="col-6 img-scale">
							<img src="{{ asset('images/' . $member->image) }}" class="member" alt="lid">
						</div>
						<div class="col-6">
							<h2>{{ $member->name }}</h2>
							<p>
								{{ $member->function }}
							</p>
							@auth
								<p>
									Tel: <br>
									{{ $member->phone }}
								</p>
							@endauth
						</div>
					</div>
				</div>
			@endforeach
			<div></div>
		</div>
	</div>
@endsection
