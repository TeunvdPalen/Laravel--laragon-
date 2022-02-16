<h1>Home</h1>

@if($logged_in)
<p>
	{{ $greeting }} {{ $name }}
</p>
@else
<p>You are not logged in.</p>
@endif

@include('shared.nav')