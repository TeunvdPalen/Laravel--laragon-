@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <section class="post-details">
        <header class="post-header">
            <h2 class="post-title">{{ $post->title }}</h2>
            <p class="post-subtitle">{{ $post->subtitle }}</p>
        </header>

        <div class="post-actions">
            <a href="/posts/{{ $post->id }}/edit">Edit this post</a> or
            <a href="/posts/{{ $post->id }}/delete">Delete this post</a>
        </div>

        <div>
            {{ $post->content }}
        </div>

        <aside class="comments">
            <h3>Comments</h3>
            <div class="comment-section">
                <div class="comment-form">
                    <form action="/comments/store" method="post">
                        @include('comments.includes.form', ['buttonText' => "Add comment"])
                    </form>
                </div>
                <div class="comments-list">
                    @include('comments.includes.comment')
                    @include('comments.includes.comment')
                    @include('comments.includes.comment')
                </div>
            </div>
        </aside>
    </section>
@endsection
