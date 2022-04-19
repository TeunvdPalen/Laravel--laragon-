@extends('layouts.default')

@section('title', 'My favorites')

@section('content')
	<div class="grid grid-cols-6 gap-24">
		<div class="col-span-2">
			<h1 class="mb-4 text-4xl font-semibold">Aanmelden</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corporis perferendis reprehenderit alias eligendi
				laudantium quisquam magnam, totam vel nobis maxime nemo aliquid impedit ipsam repellendus autem eos doloribus iste.
			</p>
		</div>
		<div class="col-span-4">
			<form action="{{ route('login.post') }}" method="post" novalidate class="flex flex-col gap-4">
				@csrf

				<div class="flex flex-col">
					<label class="text-gray-500" for="voornaam">E-mailadres: *</label>
					<input name="email" value="{{ old('email') }}" type="email" class="border border-gray-500 bg-white px-4 py-2">
					@error('email')
						<p class="text-red-500">{{ $message }}</p>
					@enderror
				</div>

				<div class="flex flex-col">
					<label class="text-gray-500" for="voornaam">Wachtwoord: *</label>
					<input name="password" type="password" class="border border-gray-500 bg-white px-4 py-2">
				</div>

				<div>
					<button type="submit"
						class="mt-4 block w-full cursor-pointer bg-orange-500 px-4 py-2 text-center text-lg font-semibold uppercase text-white hover:bg-orange-600">
						Login
					</button>
					<p class="mt-4 text-center">of <a class="text-orange-500 hover:underline"
							href="{{ route('register') }}">registreer een nieuwe account</a></p>
				</div>
			</form>
		</div>
	</div>
@endsection
