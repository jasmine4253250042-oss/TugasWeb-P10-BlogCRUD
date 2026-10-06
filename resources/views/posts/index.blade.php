@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <h1>Daftar Post</h1>

    <x-alert :message="session('success')" />

    <a href="{{ route('posts.create') }}">+ Buat Post Baru</a>

    <hr>

    @forelse ($posts as $post)
         <x-card
        :title="$post->title"
        :content="Str::limit($post->content, 150)"
        />

        <a href="{{ route('posts.show', $post) }}">Lihat</a>
        |
        <a href="{{ route('posts.edit', $post) }}">Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
            </form>
        </article>

        <hr>
    @empty
        <p>Belum ada post.</p>
    @endforelse

    {{ $posts->links() }}

@endsection