<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 10 - Vue 3</title>

        @vite('resources/js/app.js')
        @inertiaHead

    </head>
    <body>
        @inertia
    </body>
</html>
