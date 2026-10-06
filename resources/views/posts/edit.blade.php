@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $post->title) }}"
            >

            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label for="content">Isi</label>
            <textarea
                id="content"
                name="content"
                rows="8"
            >{{ old('content', $post->content) }}</textarea>

            @error('content')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label for="image">Gambar</label>
            <input
                type="file"
                id="image"
                name="image"
            >

            @error('image')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <button type="submit">Update Post</button>
        <a href="{{ route('posts.index') }}">Batal</a>
    </form>

@endsection