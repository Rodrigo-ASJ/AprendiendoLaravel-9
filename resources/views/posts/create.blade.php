<x-layouts.app
title=" crear"
meta-description="meta"
:sum="2 + 2">

<!-- requerimiento añadir si se encuentran en el template-->
<x-slot name="elemento">
    About title
</x-slot>




<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label for="title"><br/>
        Title
        <input type="text" name="title" value="{{ old('title') }}" >
        <br>
        @error('title')
        <small> {{ $message }}</small>
        @enderror
    </label><br/>
    <label for="body"><br/>
        body
        <textarea name="body" >{{ old('body') }}</textarea>
        <br>
        @error('body')
        <small> {{ $message }}</small>
        @enderror
    </label><br/>
<button type="submit">Enviar</button>

</form>
</x-layouts.app>
