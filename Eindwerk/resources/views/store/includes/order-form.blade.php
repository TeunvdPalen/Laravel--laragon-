<form class="my-8" action="{{ route('cart.add', $product) }}" method="post">
	@csrf
	<div class="flex gap-4">
		<div class="relative flex-1">
			<select class="block w-full appearance-none rounded-none border border-gray-500 bg-white py-2 px-4" name="size" id="">
				@foreach ($product->available_sizes as $size)
					<option value="{{ $size }}">{{ $size }}</option>
				@endforeach
			</select>
			<div class="absolute inset-y-0 right-4 flex items-center">
				<i class="fa-regular fa-arrows-up-down"></i>
			</div>
		</div>
		<div class=""> <input placeholder="Aantal" value="1"
				class="appearance-none border border-gray-500 bg-white py-2 px-4" type="number" name="quantity">
		</div>
	</div>
	<div class="my-4 flex gap-4">
		<button class="block w-full bg-black px-4 py-2 text-white hover:bg-gray-800" type="submit">
			Bestel nu!
		</button>
		@include('store.includes.favorite')

	</div>
	@if (\Session::has('failed'))
		<p class="block w-full text-center text-lg font-semibold text-red-500">{!! \Session::get('failed') !!}</p>
	@endif
</form>
