@extends('layouts.default')

@section('title', 'Delete publisher')

@section('content')

    @include('publishers.includes.back-to-list', ['showLink' => true])

    <h2 class="text-4xl font-semibold mb-4">Delete publisher: {{ $publisher->name }}</h2>

    <form class="bg-gray-100 shadow-2xl p-4 rounded-lg" action="{{ route('publishers.destroy', $publisher->id) }}" method="post">
        @csrf
        @method('delete')
        <p class="text-2xl mb-4">Are you sure?</p>

        <div class="flex gap-8 items-center">
            <input class="cursor-pointer inline-block px-4 py-2 bg-red-200 text-red-600 hover:bg-red-300 hover:text-red-700" type="submit" value="Yes, delete!">
            <a class="text-blue-500 hover:underline" href="{{ route('publishers.show', $publisher->id) }}">No... take me back to safety!!</a>
        </div>
    </form>
@endsection
