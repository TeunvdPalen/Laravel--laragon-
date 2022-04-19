<div class="relative relative flex items-center justify-between bg-gray-100 p-4">
	<div>
		<h1 class="text-xl font-semibold">Bestelling van {{ $order->created_at->formatLocalized('%a %d %b') }}</h1>
		<p class="text-lg text-gray-500">{{ $order->products->count() }} producten</p>
	</div>
	<div class="text-4xl">
		<i class="fa-solid fa-angle-right"></i>
	</div>
	<a class="absolute inset-0" href="{{ route('orders.show', $order->id) }}">
		<span class="hidden">Toon bestelling</span>
	</a>
</div>
