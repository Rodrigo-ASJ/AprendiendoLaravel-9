{{-- @component('components.layout') --}}

{{-- @endcomponent --}}


<x-layouts.app 
title="About" 
meta-description="kebabCase para definir"
:sum="2 + 2">

{{-- añadir : a los atributos para ejecutarlos en php --}}



<x-slot name="elemento">
    About title
</x-slot>

{{-- todo fuera de etiquetas xslot ira al slot --}}
    <h1>About</h1>
    <p>lorem ipsum dolor sit amet, consectetur adipis</p>


</x-layouts.app>