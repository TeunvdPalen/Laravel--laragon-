<form method="POST" action="/review"  novalidate>
	@csrf

	@if(session('status'))
		<p>{{ session('status') }}</p>
	@endif
	<div class="review">
		Naam: <input type="text" name="naam" value="{{ old('naam') }}">
		@error('naam')
			<span class="error">{{ $message }}</span>
		@enderror
	</div>
	<div class="review">
		Email: <input type="email" name="email" value="{{  old('email') }}">
		@error('email')
		<span class="error">{{ $message }}</span>
		@enderror
	</div>
	<div class="review">
		Bericht: <br>
		<textarea name="bericht">{{ old('bericht') }}</textarea>
		@error('bericht')
		<span class="error">{{ $message }}</span>
		@enderror
	</div>
	<div class="review">
		Score:
		@for ($i = 0; $i < 11; $i++)
		<input type="radio" name="score" id="{{ $i }}" value="{{ $i }}" {{ old('score') == $i ? "checked" : "" }}>
		<label for="{{ $i }}">{{ $i }}</label>
		@endfor
		@error('score')
		<span class="error">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="review">
		Ik accepteer het privacybeleid: <input type="checkbox" name="privacy" {{ old('privacy') == true ? "checked" : "" }}>
		@error('privacy')
		<span class="error">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="review">
		<input type="submit" value="Verzenden">
	</div>
</form>