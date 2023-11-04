<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
         <!-- Styles -->
        <style>
            /* html {
                scroll-behavior: smooth;
            }

            body {
                padding: 0 !important;
                -ms-overflow-style: none;
                scrollbar-width: none;
            } */

            [x-cloak] { display: none !important; }

        </style>
        <!-- Scripts -->

        @stack('head-scripts')
        @stack('styles')
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/alpine.js'])
    </head>
    <body class="antialiased">
        <main>
            {{ $slot }}
        </main>
        @stack('scripts')
    </body>
</html>
