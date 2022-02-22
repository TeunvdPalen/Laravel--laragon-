<form method="POST" action="/contact"  novalidate>
	@csrf

	@if(session('status'))
		<p>{{ session('status') }}</p>
	@endif
	<div>
		Naam: <input type="text" name="naam" value="{{ old('naam') }}">
		@error('naam')
			<span>{{ $message }}</span>
		@enderror
	</div>
	<div>
		Email: <input type="email" name="email" value="{{  old('email') }}">
		@error('email')
		<span>{{ $message }}</span>
		@enderror
	</div>
	<div>
		Bericht: <br>
		<textarea name="bericht">{{ old('bericht') }}</textarea>
		@error('bericht')
		<span>{{ $message }}</span>
		@enderror
	</div>
	<div>
		<input type="submit" value="Verzenden">
	</div>
</form>