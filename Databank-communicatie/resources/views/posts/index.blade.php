@extends('layouts.default')

@section('title', 'Posts')

@section('content')
    <section>
        <h2>Posts</h2>
        <div class="posts-list">
            @forelse ($posts as $post)
                @include('posts/includes/post-small', ['post' => $post])
            @empty
                <p>There are not post yet</p>
            @endforelse
        <div class="pagination">
            Previous ... 1 2 3 ... Next
        </div>
    </section>
@endsection
