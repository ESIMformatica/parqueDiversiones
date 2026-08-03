<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Juego de Feria')</title>
    
    @stack('styles')
    
    <link rel="stylesheet" href="{{ asset('css/var.css') }}">
</head>
<body>

    <header class="navbar">
        <h1 class="navbar-title">@yield('attraction_title', 'Atracción')</h1>
    </header>

    <input type="checkbox" id="sidebar-toggle" class="sidebar-checkbox">

    <label for="sidebar-toggle" class="fixed-menu-button">
        <span class="hamburger-icon">☰</span>
    </label>

    <aside class="sidebar">
        <div class="sidebar-frame"></div>

        <div class="sidebar-content">
            <div class="sidebar-header">
                <!-- <span class="menu-text">Menú</span> Menú como solo texto y no botón para redireccionar-->
                 <a href="{{ url('/') }}" class="menu-text-link">Menú</a>
            </div>
            
            <hr class="sidebar-divider">

            <nav class="sidebar-nav">
                <ul>
                    <li><a href="{{ url('/carrusel') }}" class="{{ request()->is('carrusel') ? 'active' : '' }}">Carrusel</a></li>
                    <li><a href="{{ url('/gusano-loco') }}" class="{{ request()->is('gusano-loco') ? 'active' : '' }}">Gusano Loco</a></li>
                    <li><a href="{{ url('/caida-libre') }}" class="{{ request()->is('caida-libre') ? 'active' : '' }}">Caída Libre</a></li>
                    <li><a href="{{ url('/barco-pirata') }}" class="{{ request()->is('barco-pirata') ? 'active' : '' }}">Barco Pirata</a></li>
                    <li>
                        <a href="{{ url('/boo-pathway') }}" 
                           class="@yield('page_id') == 'boo' ? 'active' : ''">
                           Boo’s Pathway
                        </a>
                    </li>
                    <li><a href="{{ url('/montana-rusa') }}">Montaña Rusa</a></li>
                    <li><a href="{{ url('/kamikaze') }}">Kamikaze</a></li>
                    <li><a href="{{ url('/mirror-maze') }}">Mirror Maze</a></li>
                </ul>
            </nav>

            <div class="sidebar-footer-img">
                <img src="{{ asset('imgBoo/beta-luigi60DETRANSPARENCIA.png') }}" alt="Luigi" class="luigi-avatar">
            </div>
        </div>
    </aside>

    <label for="sidebar-toggle" class="sidebar-overlay"></label>

    <main class="main-wrapper">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>