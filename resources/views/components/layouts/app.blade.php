<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? ''}}</title>
    <meta name="description" content="{{ $metaDescription ?? "Default meta description" }}"> 
</head>
<body>
<x-layouts.navigation />

<div>
    {{$elemento}}
    {{ $sum }}
</div>

{{$slot}}

</body>
</html>
