@extends('layouts.app')

@section('title', 'Buat Post')

@section('content')

    <h1>Buat Post Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Judul</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
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
            >{{ old('content') }}</textarea>

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

        <button type="submit">Simpan Post</button>
        <a href="{{ route('posts.index') }}">Batal</a>
    </form>

@endsection