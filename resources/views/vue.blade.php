<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>
<div id="app">

    <nav-component></nav-component>
    <my-data-component></my-data-component>

</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
