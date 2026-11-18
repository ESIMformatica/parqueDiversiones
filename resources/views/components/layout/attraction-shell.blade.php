@props(['title' => 'ESIM Park'])

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600;700&family=IBM+Plex+Sans:wght@400;500&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/tokens.css') }}">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout/sidebar-collapsed.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/overlay.css') }}">
        <link rel="stylesheet" href="{{ asset('css/utilities/responsive.css') }}">
        {{ $head ?? '' }}
    </head>
    <body>
        @include('partials.sidebar')

        <main class="main-content">
            {{ $slot }}
        </main>

        <script src="{{ asset('js/sidebar.js') }}"></script>
    </body>
</html>
