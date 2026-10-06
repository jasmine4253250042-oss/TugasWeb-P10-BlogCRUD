@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <h1>{{ $post->title }}</h1>

    @if ($post->image)
        <div>
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="300">
        </div>
    @endif

    <p>{{ $post->content }}</p>

    <br>

    <a href="{{ route('posts.edit', $post) }}">Edit Post</a>
    |
    <a href="{{ route('posts.index') }}">Kembali</a>

@endsection