@props(['theme'])

@php
    $themes = [
        'boo' => [
            'route' => 'boo',
            'title' => "Boo's Pathway",
            'subtitle' => 'Mansión encantada',
            'icon' => '👻',
            'sections' => [
                ['label' => 'Recorrido', 'href' => '#inicio', 'icon' => '🕯️'],
                ['label' => 'Equipo', 'href' => '#equipo', 'icon' => '🧑‍🤝‍🧑'],
            ],
        ],
        'carousel' => [
            'route' => 'carousel',
            'title' => 'Carousel Racing',
            'subtitle' => 'Pista de carreras',
            'icon' => '🏁',
            'sections' => [
                ['label' => 'Portada', 'href' => '#inicio', 'icon' => '🏎️'],
                ['label' => 'En vivo', 'href' => '#en-vivo', 'icon' => '📹'],
                ['label' => 'La atracción', 'href' => '#que-es', 'icon' => '🎠'],
                ['label' => 'Cómo se usa', 'href' => '#como-usar', 'icon' => '🎟️'],
                ['label' => 'Seguridad', 'href' => '#seguridad', 'icon' => '🛡️'],
            ],
        ],
        'kamikaze' => [
            'route' => 'kamikaze',
            'title' => 'Ochurus',
            'subtitle' => 'Kamikaze en movimiento',
            'icon' => '⚡',
            'sections' => [
                ['label' => 'Portada', 'href' => '#inicio', 'icon' => '🎡'],
                ['label' => 'Menú', 'href' => '#menu', 'icon' => '🧭'],
                ['label' => 'La atracción', 'href' => '#atraccion', 'icon' => '🎢'],
                ['label' => 'Experiencia', 'href' => '#experiencia', 'icon' => '⚡'],
                ['label' => 'Partes', 'href' => '#partes', 'icon' => '🔩'],
                ['label' => 'Tecnología', 'href' => '#tecnologia', 'icon' => '⚙️'],
                ['label' => 'Objetivos', 'href' => '#objetivos', 'icon' => '🎯'],
                ['label' => 'Logros', 'href' => '#logros', 'icon' => '🏆'],
            ],
        ],
    ];

    if (! isset($themes[$theme])) {
        throw new \InvalidArgumentException("Unknown attraction sidebar theme [{$theme}].");
    }

    $settings = $themes[$theme];
    $attractions = [
        ['label' => 'Mirror Maze', 'route' => 'mirror', 'icon' => '🪞'],
        ['label' => 'Fall', 'route' => 'fall', 'icon' => '🪂'],
        ['label' => 'Roller Coaster', 'route' => 'roller', 'icon' => '🎢'],
        ['label' => "Boo's Pathway", 'route' => 'boo', 'icon' => '👻'],
        ['label' => 'Carousel Racing', 'route' => 'carousel', 'icon' => '🏁'],
        ['label' => 'Pirate', 'route' => 'pirate', 'icon' => '🚢'],
        ['label' => 'Worm', 'route' => 'worm', 'icon' => '🐛'],
        ['label' => 'Ochurus', 'route' => 'kamikaze', 'icon' => '⚡'],
    ];
@endphp

<aside class="retro-sidebar ride-sidebar ride-sidebar--{{ $theme }}" id="sidebar">
    <div class="retro-sidebar__head ride-sidebar__head">
        <button class="retro-toggle" id="sidebarToggle" type="button"
                aria-label="Contraer o expandir menú de {{ $settings['title'] }}" aria-expanded="true">
            ☰
        </button>
        <a class="retro-sidebar__brand ride-sidebar__brand" href="{{ route('inicio') }}">
            <span class="ride-sidebar__mark" aria-hidden="true">{{ $settings['icon'] }}</span>
            <span class="ride-sidebar__brand-copy">
                <strong>{{ $settings['title'] }}</strong>
                <small>{{ $settings['subtitle'] }}</small>
            </span>
        </a>
    </div>

    <nav class="retro-sidebar__nav ride-sidebar__nav" aria-label="Navegación de {{ $settings['title'] }}">
        <ul class="retro-sidebar__list">
            <li>
                <a href="{{ route('inicio') }}" class="retro-sidebar__link ride-sidebar__link">
                    <span class="retro-sidebar__icon" aria-hidden="true">🏠</span>
                    <span class="retro-sidebar__text">Parque ESIM</span>
                </a>
            </li>

            @foreach ($settings['sections'] as $section)
                <li>
                    <a href="{{ $section['href'] }}" class="retro-sidebar__link ride-sidebar__link">
                        <span class="retro-sidebar__icon" aria-hidden="true">{{ $section['icon'] }}</span>
                        <span class="retro-sidebar__text">{{ $section['label'] }}</span>
                    </a>
                </li>
            @endforeach

            <li class="retro-sidebar__group ride-sidebar__group">
                <button type="button"
                        class="retro-sidebar__link retro-sidebar__trigger ride-sidebar__link"
                        aria-expanded="false"
                        aria-controls="submenu-atracciones">
                    <span class="retro-sidebar__icon" aria-hidden="true">🎡</span>
                    <span class="retro-sidebar__text">Otras atracciones</span>
                    <span class="retro-sidebar__caret" aria-hidden="true">▾</span>
                </button>

                <div class="retro-sidebar__sub" id="submenu-atracciones">
                    <ul class="retro-sidebar__sublist">
                        @foreach ($attractions as $item)
                            @continue($item['route'] === $settings['route'])
                            <li>
                                <a href="{{ route($item['route']) }}" class="retro-sidebar__sublink">
                                    <span class="retro-sidebar__icon" aria-hidden="true">{{ $item['icon'] }}</span>
                                    <span class="retro-sidebar__text">{{ $item['label'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>

            <li>
                <a href="{{ route('preguntas') }}" class="retro-sidebar__link ride-sidebar__link">
                    <span class="retro-sidebar__icon" aria-hidden="true">❔</span>
                    <span class="retro-sidebar__text">Ayuda</span>
                </a>
            </li>

            @auth
                <li>
                    <a href="{{ route('profile.edit') }}"
                       class="retro-sidebar__link ride-sidebar__link {{ request()->routeIs('profile.*') ? 'is-active' : '' }}"
                       aria-label="Mi perfil: {{ Auth::user()->name }}">
                        <span class="retro-sidebar__icon" aria-hidden="true">👤</span>
                        <span class="ride-sidebar__account">
                            <small>Mi perfil</small>
                            <strong>{{ Auth::user()->name }}</strong>
                        </span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="retro-sidebar__link ride-sidebar__link">
                            <span class="retro-sidebar__icon" aria-hidden="true">↪</span>
                            <span class="retro-sidebar__text">Cerrar sesión</span>
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" class="retro-sidebar__link ride-sidebar__link">
                        <span class="retro-sidebar__icon" aria-hidden="true">🔑</span>
                        <span class="retro-sidebar__text">Iniciar sesión</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="retro-sidebar__link ride-sidebar__link">
                        <span class="retro-sidebar__icon" aria-hidden="true">＋</span>
                        <span class="retro-sidebar__text">Crear cuenta</span>
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
</aside>
