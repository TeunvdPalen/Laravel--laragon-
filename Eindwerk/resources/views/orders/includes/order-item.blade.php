<div class="flex gap-4 border border-gray-200 p-4">
	<div class="w-24">
		<img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
	</div>

	<div class="flex-1">
		<a href="{{ route('brands.show', $product->brand) }}"
			class="text-gray-500 hover:underline">{{ $product->brand->name }}</a>
		<h1 class="text-lg">
			<a href="{{ route('products.show', $product) }}" class="hover:underline">{{ $product->name }}</a>
		</h1>
		<p class="text-sm text-gray-800">Maat: {{ $product->pivot->size }}</p>

		<div class="mt-4 flex justify-between border-t border-gray-500 pt-2 text-right">
			<span class="font-normal text-gray-500">{{ $product->pivot->quantity }} &times &euro;{{ $product->price }}</span>
			<span class="font-semibold">&euro;{{ $product->price * $product->pivot->quantity }}</span>
		</div>
	</div>
</div>
