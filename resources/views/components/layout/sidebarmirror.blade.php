@php
    // Atracciones del parque: acá podés cambiar etiquetas, íconos u orden.
    $attractions = [
        ['label' => 'Mirror Maze', 'route' => 'mirror',   'icon' => '🪞'],
        ['label' => 'Fall',        'route' => 'fall',     'icon' => '🪂'],
        ['label' => 'Roller',      'route' => 'roller',   'icon' => '🎢'],
        ['label' => 'Boo',         'route' => 'boo',      'icon' => '👻'],
        ['label' => 'Carousel',    'route' => 'carousel', 'icon' => '🎠'],
        ['label' => 'Pirate',      'route' => 'pirate',   'icon' => '🚢'],
        ['label' => 'Worm',        'route' => 'worm',     'icon' => '🐛'],
        ['label' => 'Kamikaze',    'route' => 'kamikaze', 'icon' => '💥'],
    ];

    $inicioActive  = Route::has('inicio') && request()->routeIs('inicio', 'inicio.page');
    $inAttractions = request()->routeIs(...array_column($attractions, 'route'));
@endphp

<aside class="retro-sidebar" id="sidebar">

    <div class="retro-sidebar__head">
        <button class="retro-toggle" id="sidebarToggle" type="button"
                aria-label="Mostrar u ocultar el menú" aria-expanded="true">
            ☰
        </button>
        <span class="retro-sidebar__brand">ESIMPark</span>
    </div>

    <nav class="retro-sidebar__nav" aria-label="Navegación principal">
        <ul class="retro-sidebar__list">

            {{-- Inicio --}}
            <li>
                <a href="{{ Route::has('inicio') ? route('inicio') : '#' }}"
                   class="retro-sidebar__link {{ $inicioActive ? 'is-active' : '' }}">
                    <span class="retro-sidebar__icon">🏠</span>
                    <span class="retro-sidebar__text">Inicio</span>
                </a>
            </li>

            {{-- Atracciones (desplegable) --}}
            <li class="retro-sidebar__group {{ $inAttractions ? 'is-open' : '' }}">
                <button type="button"
                        class="retro-sidebar__link retro-sidebar__trigger"
                        aria-expanded="{{ $inAttractions ? 'true' : 'false' }}"
                        aria-controls="submenu-atracciones">
                    <span class="retro-sidebar__icon">🎡</span>
                    <span class="retro-sidebar__text">Atracciones</span>
                    <span class="retro-sidebar__caret" aria-hidden="true">▾</span>
                </button>

                <div class="retro-sidebar__sub" id="submenu-atracciones">
                    <ul class="retro-sidebar__sublist">
                        @foreach($attractions as $item)
                            @php
                                $active = Route::has($item['route']) && request()->routeIs($item['route']);
                            @endphp
                            <li>
                                <a href="{{ Route::has($item['route']) ? route($item['route']) : '#' }}"
                                   class="retro-sidebar__sublink {{ $active ? 'is-active' : '' }}">
                                    <span class="retro-sidebar__icon">{{ $item['icon'] }}</span>
                                    <span class="retro-sidebar__text">{{ $item['label'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            @auth
                <li>
                    <a href="{{ route('profile.edit') }}"
                       class="retro-sidebar__link {{ request()->routeIs('profile.*') ? 'is-active' : '' }}"
                       aria-label="Mi perfil: {{ Auth::user()->name }}">
                        <span class="retro-sidebar__icon">👤</span>
                        <span class="retro-sidebar__text">Mi perfil · {{ Auth::user()->name }}</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="retro-sidebar__link">
                            <span class="retro-sidebar__icon">↪</span>
                            <span class="retro-sidebar__text">Cerrar sesión</span>
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"
                       class="retro-sidebar__link {{ request()->routeIs('login') ? 'is-active' : '' }}">
                        <span class="retro-sidebar__icon">🔑</span>
                        <span class="retro-sidebar__text">Iniciar sesión</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}"
                       class="retro-sidebar__link {{ request()->routeIs('register') ? 'is-active' : '' }}">
                        <span class="retro-sidebar__icon">＋</span>
                        <span class="retro-sidebar__text">Crear cuenta</span>
                    </a>
                </li>
            @endauth

        </ul>
    </nav>

</aside>