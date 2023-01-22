<x-layouts.app
title=" crear"
meta-description="meta"
:sum="2 + 2">

<!-- requerimiento añadir si se encuentran en el template-->
<x-slot name="elemento">
    Create a new post
</x-slot>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    @include('partials.form-fields')
<button type="submit">Enviar</button>

</form>
</x-layouts.app>
