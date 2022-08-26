<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App icon parser</title>
</head>
<body>
@if ($errMsg)
    Error: {{ $errMsg }}
@else
    <img src="{{ $imgSrc }}" alt="App icon">
@endif
</body>
</html>
