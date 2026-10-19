<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ isset($title) ? $title.' · '.config('app.name') : config('app.name') }}</title>

    {{-- Estilos del layout --}}
    <link href="{{ asset('css/retro-layout.css') }}" rel="stylesheet">

    {{-- Fuentes del layout --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600;700&family=IBM+Plex+Sans:wght@400;500&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">

      <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mirror Maze & Slug Cat Robot — Wii Zone</title>
     <link rel="icon" type="image/png" href="{{ asset('favicon/mirror/favicon-96x96.png') }}" sizes="96x96" />
     <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/mirror/favicon.svg') }}" />
     <link rel="shortcut icon" href="{{ asset('favicon/mirror/favicon.ico') }}" />
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/mirror/apple-touch-icon.png') }}" />
      <meta name="apple-mobile-web-app-title" content="Mirror Maze" />
      <link rel="manifest" href="{{ asset('favicon/mirror/site.webmanifest') }}" />

      <!-- CSS -->
     <link rel="stylesheet" href="{{ asset('css/mirrorstyle.css') }}">
     <link rel="preconnect" href="https://fonts.googleapis.com">

    {{ $head ?? '' }}
</head>

<body class="retro-shell">

    <x-layout.sidebar />

    <div class="retro-main">

        @isset($header)
            <header class="retro-main__header">
                {{ $header }}
            </header>
        @endisset

        <main class="retro-main__content">
            {{ $slot }}
        </main>

    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
    
</body>

</html>