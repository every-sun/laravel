<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    @inertia
    <script src="{{ mix('resources/js/app.js') }}" defer></script>
    <body class="antialiased">
    </body>
</html>
