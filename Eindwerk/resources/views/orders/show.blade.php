@extends('layouts.default')

@section('title', 'Mijn bestellingen')

@section('content')
	<div>
		<a href="{{ route('orders.index') }}" class="mb-8 inline-block rounded-full bg-black px-4 py-2 text-white">
			<i class="fa-solid fa-hand-point-left"></i>
			<span class="ml-2">Mijn bestellingen</span>
		</a>
	</div>

	<div class="">
		<h1 class="text-2xl font-semibold mb-4">Bestelling van {{ $order->created_at->formatLocalized('%a %d %b') }} </h1>
		<p class="text-lg text-gray-500">{{ $products->count() }} producten</p>

		{{-- Indien kortingscode gekoppeld aan het order --}}
		{{-- <p class="my-8">
            <span class="font-semibold">Kortingscode:</span>
            <span class="inline-block ml-2 bg-green-500 text-green-100 rounded-full px-3 py-2 font-semibold">
                DISCOUNT20 (-20%)
            </span>
        </p> --}}

		<div class="mt-4 grid grid-cols-2 gap-4">
			@foreach ($products as $product)
				@include('orders.includes.order-item', ['product' => $product])
			@endforeach
		</div>
	</div>
@endsection
