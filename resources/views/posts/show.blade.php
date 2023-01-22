<x-layouts.app
:title=" $post->title "
:meta-description="$post->body"
:sum="2 + 2">

<!-- requerimiento añadir si se encuentran en el template-->
<x-slot name="elemento">
    About title
</x-slot>

<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.index') }}">volver</a>

</x-layouts.app>
