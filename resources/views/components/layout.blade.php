<!DOCTYPE html>
<html data-theme="retro" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LiveWire</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>

    <!-- Styles -->
    @livewireStyles
    <!-- Scripts Vite-->
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="flex flex-col items-center px-10 py-8 space-y-9">
    @include('partials.header')

    {{ $slot }}

    @livewireScripts
</body>

</html>
