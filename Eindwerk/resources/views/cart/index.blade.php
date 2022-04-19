@extends('layouts.default')

@section('title', 'Shopping cart')

@section('content')
	<div class="grid grid-cols-5 gap-4 bg-gray-100 p-4">
		<div class="col-span-3 grid content-start gap-4">
			<div class="bg-white p-4">
				<h1 class="text-2xl font-semibold">Shopping cart</h1>
				<p class="text-lg text-gray-500">{{ $products->count() }} producten</p>

				<div class="mt-4 grid gap-4">
					@foreach ($products as $product)
						@include('cart.includes.cart-item', ['product' => $product])
					@endforeach
				</div>
			</div>
			@include('cart.includes.delivery')
		</div>
		<div class="col-span-2 grid content-start gap-4">
			@include('cart.includes.discount-code')
			<div class="bg-white p-4">
				<h1 class="text-2xl font-semibold">Totaal prijs</h1>
				<table class="w-full">
					<tr>
						<td class="py-4">Subtotaal:</td>
						<td class="py-4 text-right">&euro; {{ $subtotal }}</td>
					</tr>
					<tr>
						<td class="py-4">Verzending:</td>
						<td class="py-4 text-right">&euro; {{ $shipping }}</td>
					</tr>
					{{-- Als kortingscode toon je het stukje hieronder; met de juiste gegevens --}}
					{{-- <tr>
									<td class="py-4">
											Kortingscode:
											<span class="block text-gray-500">
													KORTING20 (-20%)
													<a href="{{ route('discount.remove') }}" class=""><i class="fa-solid fa-circle-minus"></i></a>
											</span>
									</td>
									<td class="py-4 text-right">- &euro;5</td>
							</tr> --}}
					<tfoot class="border-t border-gray-200">
						<tr>
							<td class="py-4 font-semibold">Totaalprijs (inclusief BTW)</td>
							<td class="py-4 text-right font-semibold">&euro; {{ $total }}</td>
						</tr>
					</tfoot>
				</table>

				@if ($products->count() > 0)
					<a href="{{ route('checkout') }}"
						class="mt-4 block w-full cursor-pointer bg-orange-500 px-4 py-2 text-center text-lg font-semibold uppercase text-white hover:bg-orange-600">
						Bestelling plaatsen
					</a>
				@else
					<p class="mt-4 block w-full px-4 py-2 text-center text-lg font-semibold text-white">
						Er zitten nog geen producten in je winkelmand
					</p>
				@endif
			</div>
		</div>
	</div>
@endsection
