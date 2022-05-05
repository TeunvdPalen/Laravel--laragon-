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
			@for ($i = 0; $i < 20; $i++)
				<div class="col-12 col-sm-12 col-md-6 col-lg-4">
					<div class="row">
						<div class="col-6 img-scale">
							<img src="https://picsum.photos/300/300?random={{ $i }}" alt="">
						</div>
						<div class="col-6">
							@guest
								<p>Naam</p>
								<p>
									Instructeur <br>
									Gedragstherpeut
								</p>
							@endguest
							@auth
								<p>Naam</p>
								<p>
									Instructeur <br>
									Gedragstherpeut
								</p>
								<p>
									Tel: <br>
									04/1234567890
								</p>
							@endauth
						</div>
					</div>
				</div>
			@endfor
			<div></div>
		</div>
	</div>
@endsection
