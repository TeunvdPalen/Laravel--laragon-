<header class="mb-8 border-b border-gray-300 py-4">
	<div class="container mx-auto flex items-center justify-between px-8">
		<div class="flex items-center gap-4 text-xl">
			<a class="hover:text-orange-500" href="{{ route('products.index') }}">producten</a>
			<a class="hover:text-orange-500" href="{{ route('brands.index') }}">brands</a>
		</div>
		<div>
			<h1 class="text-2xl">
				<a href="{{ route('products.index') }}">
					<span class="text-orange-500"><i class="fa-solid fa-shoe-prints"></i></span>
					<span class="text-orange-500">Awesome</span> Shoestore
				</a>
			</h1>
		</div>
		<div class="flex items-center gap-4 text-xl">
			@guest
				<a href="{{ route('login') }}">Login</a>
			@endguest
			@auth
				<a href="{{ route('profile') }}"><i class="fa-solid fa-user"></i></a>
				<a href="{{ route('favorites') }}"><i class="fa-solid fa-heart"></i></a>
				<a href="{{ route('cart') }}" class="rounded-full bg-gray-200 px-4 py-1">
					<i class="fa-solid fa-cart-shopping"></i>
					<span> {{ Auth::user()->cart()->count() }} items</span>
				</a>
			@endauth
		</div>
	</div>
</header>
