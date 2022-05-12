<header>
	<div class="container">
		<div class="header-1 flex">
			<div class="img-scale logo">
				<a href="{{ route('home.index') }}"><img src="{{ asset('/images/vvhtxt.jpg') }}" alt=""
						class=""></a>
			</div>
			<div class="login">
				@guest
					<a href="{{ route('login') }}">Login</a> |
					<a href="{{ route('aanmelden') }}">Aanmelden</a>
				@endguest
				@auth
					Welcome <a href="{{ route('profiel') }}">{{ Auth::user()->firstName }}
						@if (Auth::user()->admin == false)
							<i class="fa-solid fa-user"></i>
						@else
							<i class="fa-solid fa-user-shield"></i>
						@endif
					</a>| <a href="{{ route('logout') }}">Uitloggen</a>
				@endauth
			</div>
			<div class="hamburger">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
		</div>
		<div class="header-2">
			<nav class="nav-menu">
				<div>
					<a href="{{ route('home.index') }}" class="{{ Request::is('/') ? 'active' : '' }}">
						Home
					</a>
				</div>
				<div class="dropdown">
					<a href="{{ route('algemeen.index') }}"
						class="{{ Request::is('algemeen', 'nieuws', 'smoelenboek', 'contact') ? 'active' : '' }} dropLink">
						Algemeen <i class="fa-solid fa-caret-down"></i>
					</a>
					<div class="dropdown-content">
						<a href="{{ route('algemeen.index') }}">Algemeen</a>
						<a href="{{ route('nieuws') }}">Nieuws</a>
						<a href="{{ route('smoelenboek') }}">Smoelenboek</a>
						<a href="{{ route('contact') }}">Contact</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="{{ route('cursus.index') }}"
						class="{{ Request::is('cursus', 'lidmaatschap', 'opvoeden', 'trainingsmiddelen') ? 'active' : '' }} dropLink">
						Cursus <i class="fa-solid fa-caret-down"></i>
					</a>
					<div class="dropdown-content">
						<a href="{{ route('cursus.index') }}">Cursus</a>
						<a href="{{ route('lidmaatschap') }}">Lidmaatschap</a>
						<a href="{{ route('opvoeden') }}">Opvoeden</a>
						<a href="{{ route('trainingsmiddelen') }}">Trainingsmiddelen</a>
					</div>
				</div>
				<div>
					<a href="{{ route('inschrijven.index') }}" class="{{ Request::is('inschrijven') ? 'active' : '' }}">
						Inschrijven
					</a>
				</div>
				<div>
					<a href="{{ route('kalender.index') }}" class="{{ Request::is('kalender') ? 'active' : '' }}">
						Kalender
					</a>
				</div>
				<div class="dropdown">
					<a href="{{ route('hondensport.index') }}"
						class="{{ Request::is('hondensport', 'agility', 'obedience', 'recreanten', 'sportnieuws') ? 'active' : '' }} dropLink">
						Hondensport <i class="fa-solid fa-caret-down"></i>
					</a>
					<div class="dropdown-content">
						<a href="{{ route('hondensport.index') }}">Hondensport</a>
						<a href="{{ route('agility') }}">Agility</a>
						<a href="{{ route('obedience') }}">Obedeience</a>
						<a href="{{ route('recreanten') }}">Recreanten</a>
						<a href="{{ route('sportnieuws') }}">Sportnieuws</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="{{ route('maatschappelijk.index') }}"
						class="{{ Request::is('maatschappelijk', 'aaihonden', 'verhalen') ? 'active' : '' }} dropLink">
						Maatschappelijk <i class="fa-solid fa-caret-down"></i>
					</a>
					<div class="dropdown-content">
						<a href="{{ route('maatschappelijk.index') }}">Maatschappelijk</a>
						<a href="{{ route('aaihonden') }}">Aaihonden</a>
						<a href="{{ route('verhalen') }}">Verhalen</a>
					</div>
				</div>


			</nav>
			<nav class='nav-menu-burger'>
				<ul class="nav-burger">
					<li class="nav-burger-item">
						<a href="{{ route('home.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Home
						</a>
					</li>
					<li class="nav-burger-item">
						<a href="{{ route('algemeen.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Algemeen
						</a>
					</li>
					<li class="nav-burger-item"><a href="{{ route('cursus.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Cursus
						</a></li>
					<li class="nav-burger-item">
						<a href="{{ route('inschrijven.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Inschrijven
						</a>
					</li>
					<li class="nav-burger-item">
						<a href="{{ route('kalender.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Kalender
						</a>
					</li>
					<li class="nav-burger-item">
						<a href="{{ route('hondensport.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Hondensport
						</a>
					</li>
					<li class="nav-burger-item">
						<a href="{{ route('maatschappelijk.index') }}"
							class="{{ Request::is('/') ? 'active-burger-item' : '' }} nav-burger-link">
							Maatschappelijk
						</a>
					</li>
					<li class="burger-fill"></li>
					<li class="nav-burger-item">
						@guest
							<a href="{{ route('login') }}" class="nav-burger-link">Login</a> |
							<a href="{{ route('aanmelden') }}" class="nav-burger-link">Aanmelden</a>
						@endguest
						@auth
							Welcome <a href="{{ route('profiel') }}" class="nav-burger-link">{{ Auth::user()->firstName }} <i
									class="fa-solid fa-user"></i></a> | <a href="{{ route('logout') }}" class="nav-burger-link">Uitloggen</a>
						@endauth
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
