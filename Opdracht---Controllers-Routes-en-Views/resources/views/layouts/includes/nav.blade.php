<nav id="nav">
	<ul>
			<li><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
			<li><a href="/about" class="{{ (request()->is('about')) ? 'active' : '' }}">About</a></li>
			<li><a href="/getstarted" class="{{ (request()->is('getstarted')) ? 'active' : '' }}">Get Started</a></li>
			<li><a href="/contact" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</a></li>
	</ul>
</nav>