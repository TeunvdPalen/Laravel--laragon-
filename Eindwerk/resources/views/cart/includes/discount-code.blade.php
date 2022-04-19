{{-- indien er al een code ingesteld is in de sessie zet je de input op "disabled" zodat je geen nieuwe code kan invullen --}}
<div class="bg-white p-4">
	<h1 class="text-2xl font-semibold">Kortingscode</h1>
	<p class="text-lg text-gray-500">Vul een kortingscode in om te genieten van extra voordelen</p>
	<form action="{{ route('discount.set') }}" method="post" class="mt-2 flex gap-4">
		@csrf
		<input placeholder="Code" name="code" class="appearance-none border border-gray-500 bg-white px-4 py-2 uppercase"
			value="{{ old('code') }}">
		<button type="submit" class="text-xl">
			<i class="fa-solid fa-circle-check"></i>
		</button>
	</form>
	@error('code')
		<p class="text-red-500">{{ $message }}</p>
	@enderror
</div>
