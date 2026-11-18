<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'ESIM Park')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/tokens.css') }}">
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout/sidebar-collapsed.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/overlay.css') }}">
        <link rel="stylesheet" href="{{ asset('css/utilities/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mapa.css') }}">
        @stack('styles')
    </head>
    <body>
        @include('partials.sidebar')

        @isset($header)
            <header class="main-content__header">
                {{ $header }}
            </header>
        @endisset

        <main class="main-content">
            @hasSection('content')
                @yield('content')
            @else
                {{ $slot ?? '' }}
            @endif
        </main>

        <script src="{{ asset('js/sidebar.js') }}"></script>
        @stack('scripts')
    </body>
</html>
