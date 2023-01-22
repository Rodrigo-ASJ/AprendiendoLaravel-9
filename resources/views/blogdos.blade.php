@section('title', "blog")

@extends('layouts.app')

@section('content')
<h1>Blog 2</h1>

@foreach ( $posts as $post)
{{-- se accede al registro como un objeto --}}
<h2>{{ $post->title }}</h2>
@endforeach

@endsection