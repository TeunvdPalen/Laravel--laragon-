<a href="{{ route('favorites.toggle', $product) }}" class="group bg-white px-4 py-1 text-2xl">

	@if (Auth::guest())
		{{-- Als not favorite --}}
		<i class="fa-regular fa-heart group-hover:hidden"></i>
		<i class="fa-solid fa-heart hidden group-hover:inline"></i>
	@elseif (Auth::user()->favorites()->where('product_id', $product->id)->count())
		{{-- Als favorite --}}
		<i class="fa-solid fa-heart text-red-500 group-hover:hidden"></i>
		<i class="fa-regular fa-heart hidden text-red-500 group-hover:inline"></i>
	@else
		{{-- Als not favorite --}}
		<i class="fa-regular fa-heart group-hover:hidden"></i>
		<i class="fa-solid fa-heart hidden group-hover:inline"></i>
	@endif
</a>
