@extends('layouts.default')

@section('title', 'Edit post')

@section('content')
    <section>
        <h2>Edit post</h2>

				<p>Are you sure?</p>

        <form action="/posts/{{ $post->id }}" method="post">
					@method('delete')
					@csrf
					<input type="submit" value="Yes, delete!!">
					<a href="/posts/{{ $post->id }}">No, take me back to safety!!</a>
			</form>
    </section>
@endsection
