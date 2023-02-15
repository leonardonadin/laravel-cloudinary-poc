<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @cloudinaryJS
    </head>
    <body class="antialiased">
        <div class="bg-gradient-to-r from-emerald-200 to-fuchsia-200 p-10 min-h-screen">
            <div class="container mx-auto bg-white/50 shadow-lg p-5 rounded">
                @yield('content')
            </div>
        </div>
    </body>
</html>
