@section('title', "blog")

@extends('layouts.app')

@section('content')


<h1>Blog 3</h1>

<a href="{{ route('posts.create') }}">Crear nuevo post</a>

@dump($errors)

@foreach ( $posts as $post)
{{-- se accede al registro como un objeto --}}
<div style="display:flex; flex-direction:column; align-items:baseline; border-bottom:1px solid red;">
<h2>
    <a href="{{ route('posts.show' , $post) }}">
    {{ $post->title }}
    </a>
</h2>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.edit', $post ) }}">Editar blog post</a>
</div>
@endforeach

@endsection
