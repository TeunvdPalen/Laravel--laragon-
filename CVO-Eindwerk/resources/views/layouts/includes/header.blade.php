<header>
	<div class="container">
		<div class="header-1 flex">
			<div class="img-scale logo">
				<a href="{{ route('home.index') }}"><img src="/assets/images/vvhtxt.jpg" alt="" class=""></a>
			</div>
			<div class="login">
				@guest
					<a href="{{ route('login') }}">Login</a> |
					<a href="{{ route('aanmelden') }}">Aanmelden</a>
				@endguest
				@auth
					<p>Welcome Naam | <a href="{{ route('logout') }}">Uitloggen</a></p>
				@endauth
			</div>
		</div>
		<div class="header-2">
			<nav class="flex">
				<a href="{{ route('home.index') }}">Home</a>
				<a href="{{ route('algemeen.index') }}">Algemeen</a>
				<a href="{{ route('cursus.index') }}">Cursus</a>
				<a href="{{ route('inschrijven.index') }}">Inschrijven</a>
				<a href="{{ route('kalender.index') }}">Kalender</a>
				<a href="{{ route('hondensport.index') }}">Hondensport</a>
				<a href="{{ route('maatschappelijk.index') }}">Maatschappelijk</a>
			</nav>
		</div>
	</div>
</header>