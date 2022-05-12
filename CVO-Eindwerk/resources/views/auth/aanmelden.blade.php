@extends('layouts.default')

@section('title', 'Aanmelden')
@section('hidden', 'hidden')

@section('content')
	<div>
		<h1>Aanmelden</h1>
		<form action="{{ route('aanmelden.post') }}" method="post" novalidate @submit.prevent="submit">
			@csrf
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Naam: <br>
						<input type="text" name="name" v-bind="name" value="{{ old('name') }}" autofocus>
						@error('name')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Voornaam: <br>
						<input type="text" name="firstName" v-model="firstName" value="{{ old('firstName') }}">
						@error('firstName')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Email: <br>
						<input type="email" name="email" v-model="email" value="{{ old('email') }}">
						@error('email')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Telefoon: <br>
						<input type="text" name="phone" v-model="phone" value="{{ old('phone') }}">
						@error('phone')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<label>
						Wachtwoord: <br>
						<input type="password" name="password" v-model="password">
						@error('password')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
				<div class="col-12 col-md-6">
					<label>
						Wachtwoord confirmatie: <br>
						<input type="password" name="password_confirmation" v-model="password_confirmation">
						@error('password_confirmation')
							<p class="error">{{ $message }}</p>
						@enderror
					</label>
				</div>
			</div>
			<div>
				<button type="submit" class="aanmelden">Aanmelden</button>
				<p> of je kan hier <a href="{{ route('aanmelden') }}"><b>inloggen</b></a> als je al account hebt.
				</p>
			</div>
		</form>
	</div>
@endsection

@section('vue-script')
	<script>
	 const app = {
	  data: function() {
	   return {
	    name: '',
	    firstName: '',
	    email: '',
	    phone: '',
	    password: '',
	    password_confirmation: '',
	    allescorrect: true
	   };
	  },
	  methods: {
	   submit: function() {
	    if (this.name < 2) {
	     this.allescorrect = false
	    } else {
	     this.allescorrect = true
	    }
	    if (this.firstName < 2) {
	     this.allescorrect = false
	    } else {
	     this.allescorrect = true
	    }
	    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) {
	     this.allescorrect = false
	    } else {
	     this.allescorrect = true
	    }
	    if (this.phone < 8) {
	     this.allescorrect = false
	    } else {
	     this.allescorrect = true
	    }
	    if (this.password < 4) {
	     this.allescorrect = false
	    } else {
	     this.allescorrect = true
	    }
	    if (this.password_confirmation < 4) {
	     this.allescorrect = false
	    } else {
	     this.allescorrect = true
	    }
	    e.preventDefault();
	   }
	  },
	 };

	 Vue.createApp(app).mount("#app");
	</script>
@endsection
