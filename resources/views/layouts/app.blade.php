<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('title', 'ESIMPark')</title>


    <!-- Fuentes -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet"
    >


    <!-- CSS general -->

    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    >


    <!-- CSS específico de cada página -->

    @stack('styles')

</head>


<body>

    @include('partials.sidebar')


    <main class="main-content">

        @yield('content')

    </main>


    <div class="sidebar-overlay"></div>


    <!-- JS general -->

    <script src="{{ asset('js/sidebar.js') }}"></script>


    <!-- JS específico de cada página -->

    @stack('scripts')

</body>

</html>