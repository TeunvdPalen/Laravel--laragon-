@extends('layouts.default')

@section('title', 'Our products')

@section('content')
	<div class="grid grid-cols-6 gap-24">
		<div class="col-span-2">
			<h1 class="mb-4 text-4xl font-semibold">Brands</h1>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde aut eaque reprehenderit quo illo error veritatis
				aliquam est soluta, officia voluptatibus iusto magnam nam? Porro eos consectetur illo aperiam earum!</p>
		</div>
		<div class="col-span-4">
			<p class="mb-4 text-gray-400">{{ $brands->count() }} brands</p>
			<div class="grid grid-cols-3 gap-x-4 gap-y-12">
				@foreach ($brands as $brand)
					<a href="{{ route('brands.show', $brand->id) }}"
						class="font-size text-3xl font-bold uppercase text-orange-500 hover:underline">{{ $brand->name }}</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection
