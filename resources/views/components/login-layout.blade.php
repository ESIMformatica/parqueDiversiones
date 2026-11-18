@props([
    'sceneKicker' => 'Tu próxima aventura empieza aquí',
    'sceneTitleTop' => 'La emoción',
    'sceneTitleBottom' => 'está a la vuelta.',
    'sceneDescription' => 'Un lugar para soltar el día y volver a sentirlo todo.',
    'pageTitle' => 'Iniciar sesión · ESIM Park',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#183b32">

        <title>{{ $pageTitle }}</title>

        @unless (request()->routeIs('login', 'register'))
            <link rel="stylesheet" href="{{ asset('css/tokens.css') }}">
            <link rel="stylesheet" href="{{ asset('css/base.css') }}">
            <link rel="stylesheet" href="{{ asset('css/layout/sidebar.css') }}">
            <link rel="stylesheet" href="{{ asset('css/layout/sidebar-collapsed.css') }}">
            <link rel="stylesheet" href="{{ asset('css/components/overlay.css') }}">
            <link rel="stylesheet" href="{{ asset('css/utilities/responsive.css') }}">
        @endunless

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="park-login-page {{ request()->routeIs('login', 'register') ? '' : 'park-login-page--with-sidebar' }}">
        @unless (request()->routeIs('login', 'register'))
            @include('partials.sidebar')
        @endunless

        <div class="park-login">
            <section class="park-login__scene" aria-labelledby="park-scene-title">
                <img
                    class="park-login__photo"
                    src="https://images.unsplash.com/photo-1627035983655-0ceec61bb733?auto=format&fit=crop&w=1600&q=85"
                    alt="Montaña rusa con rieles naranjas en un parque de diversiones"
                    fetchpriority="high"
                >
                <div class="park-login__scene-shade" aria-hidden="true"></div>

                <a class="park-login__brand" href="{{ url('/') }}" aria-label="ESIM Park, inicio">
                    <span class="park-login__brand-mark" aria-hidden="true">PD</span>
                    <span class="park-login__brand-name">ESIM <strong>Park</strong></span>
                </a>

                <div class="park-login__scene-copy">
                    <p class="park-login__scene-kicker"><span></span> {{ $sceneKicker }}</p>
                    <h1 id="park-scene-title">{{ $sceneTitleTop }}<br>{{ $sceneTitleBottom }}</h1>
                    <p>{{ $sceneDescription }}</p>
                </div>

                <div class="park-login__scene-footer">
                    <span>ESTACIÓN DE ACCESO</span>
                    <a href="https://unsplash.com/photos/a-roller-coaster-at-an-amusement-park-IU50vDwlhEc" target="_blank" rel="noreferrer">Foto: Unsplash</a>
                </div>
            </section>

            <main class="park-login__content">
                {{ $slot }}
                <p class="park-login__security"><span aria-hidden="true"></span> Acceso seguro para visitantes</p>
            </main>
        </div>
        @unless (request()->routeIs('login', 'register'))
            <script src="{{ asset('js/sidebar.js') }}"></script>
        @endunless
    </body>
</html>