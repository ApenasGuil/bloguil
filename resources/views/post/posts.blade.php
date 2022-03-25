@extends('layouts.master')
@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Subtítulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts->reverse() as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><a href="{{ route('post.show', ['post' => $post->id]) }}">{{ $post->title }}</a></td>
                    <td>{{ $post->subtitle }}</td>
                    <td><a href="{{ $post->user_id }}">{{ $post->user->name }}</td>
                    <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum post encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
