<x-layouts.app
:title=" $post->title "
:meta-description="$post->body"
:sum="2 + 2">

<!-- requerimiento añadir si se encuentran en el template-->
<x-slot name="elemento">
   edición
</x-slot>

<h1>Formulario de edición</h1>
<form method="POST" action="{{ route('posts.update' , $post) }}">
@csrf @method('PATCH') {{-- crea un input oculto co --}}
<label for="title">
    Title
    <br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
    <br>
    @error('title')
    <small>{{ $message }}</small>
    @enderror

    <label for="body">
        <br>
        Body
        <br>
        <textarea name="body" id="" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
        @error('body')
        <small>{{  $message }}</small>
        @enderror
        <br>
    </label>
<button type="submit">Enviar</button>
</label>


</form>
<a href="{{ route('posts.index') }}">volver</a>

</x-layouts.app>
