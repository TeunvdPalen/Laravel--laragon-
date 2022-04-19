<div class="flex gap-4 border border-gray-200 p-4">
	<div class="w-24">
		<img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
	</div>

	<div class="flex-1">
		<a href="{{ route('brands.show', $product->brand) }}"
			class="text-gray-500 hover:underline">{{ $product->brand->name }}</a>
		<h1 class="text-lg">
			<a class="hover:underline" href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
		</h1>
		<p class="text-sm text-gray-800">Maat: {{ $product->pivot->size }} </p>
		<div class="mt-2">
			<form action="{{ route('cart.delete', $product) }}" method="post" class="text-gray-400 hover:underline">
				@method('delete') @csrf
				<button class="group appearance-none">
					<span class="group-hover:underline">
						<i class="fa-solid fa-trash"></i> Verwijderen
					</span>
				</button>
			</form>
		</div>
	</div>

	<div class="flex flex-col justify-between">

		<form action="{{ route('cart.update', $product) }}" method="post" class=""> @method('put') @csrf
			<input value="{{ $product->pivot->quantity }}" placeholder="Aantal"
				class="appearance-none border border-gray-500 bg-white py-2 px-4" type="number" name="quantity">
			<button class="ml-2" type="submit">
				<i class="fa-solid fa-pen-to-square"></i>
			</button>
		</form>

		<div class="mt-4 flex justify-between border-t border-gray-500 pt-2 text-right">
			<span class="font-normal text-gray-500">{{ $product->pivot->quantity }} &times
				&euro;{{ $product->price }}</span>
			<span class="font-semibold">&euro;{{ $product->price * $product->pivot->quantity }}</span>
		</div>
	</div>
</div>
