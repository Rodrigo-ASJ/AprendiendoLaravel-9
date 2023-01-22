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

@include('partials.form-fields')

<button type="submit">Enviar</button>
</label>


</form>
<a href="{{ route('posts.index') }}">volver</a>

</x-layouts.app>
