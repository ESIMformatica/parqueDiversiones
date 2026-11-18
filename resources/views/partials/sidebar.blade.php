
<aside class="sidebar" id="sidebar">

    <div class="sidebar-header">
        <span class="sidebar-title">Explorar</span>

        <button
            class="sidebar-collapse"
            type="button"
            aria-label="Contraer menú lateral"
            aria-controls="sidebar"
            aria-expanded="true"
        >
            <span>‹</span>
        </button>
    </div>

    <nav class="sidebar-menu" aria-label="Secciones del sitio">

    {{-- INICIO --}}
    <a href="{{ route('inicio') }}"
       class="sidebar-item {{ request()->routeIs('inicio') ? 'active' : '' }}"
       {{ request()->routeIs('inicio') ? 'aria-current=page' : '' }}>

        <span class="sidebar-icon icon-home">
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M3 10.5 12 3l9 7.5"/>
                <path d="M5.5 9v11h13V9M9 20v-7h6v7"/>
            </svg>
        </span>

        <span class="sidebar-label">Inicio</span>
    </a>

    {{-- ATRACCIONES --}}

        <div class="sidebar-group">

            <button
                class="sidebar-item sidebar-toggle"
                type="button"
                aria-expanded="{{ request()->routeIs('mirror', 'fall', 'roller', 'boo', 'carousel', 'pirate', 'worm', 'kamikaze') ? 'true' : 'false' }}"
                aria-controls="submenu-atracciones"
            >
                <span class="sidebar-icon icon-rides">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 20h14M7 20l5-15 5 15M8.2 14h7.6M9.5 10h5M12 5v15"/>
                    </svg>
                </span>

                <span class="sidebar-label">Atracciones</span>
                <span class="sidebar-chevron" aria-hidden="true">⌄</span>
            </button>

            <div
                class="sidebar-submenu"
                id="submenu-atracciones"
                {{ request()->routeIs('mirror', 'fall', 'roller', 'boo', 'carousel', 'pirate', 'worm', 'kamikaze') ? '' : 'hidden' }}
            >

                <a href="{{ route('mirror') }}"
                   class="sidebar-subitem {{ request()->routeIs('mirror') ? 'active' : '' }}"
                   {{ request()->routeIs('mirror') ? 'aria-current=page' : '' }}>
                    Mirror Maze
                </a>

                <a href="{{ route('fall') }}"
                   class="sidebar-subitem {{ request()->routeIs('fall') ? 'active' : '' }}"
                   {{ request()->routeIs('fall') ? 'aria-current=page' : '' }}>
                    Fall
                </a>

                <a href="{{ route('roller') }}"
                   class="sidebar-subitem {{ request()->routeIs('roller') ? 'active' : '' }}"
                   {{ request()->routeIs('roller') ? 'aria-current=page' : '' }}>
                    Roller Coaster
                </a>

                <a href="{{ route('boo') }}"
                   class="sidebar-subitem {{ request()->routeIs('boo') ? 'active' : '' }}"
                   {{ request()->routeIs('boo') ? 'aria-current=page' : '' }}>
                    Boo
                </a>

                <a href="{{ route('carousel') }}"
                   class="sidebar-subitem {{ request()->routeIs('carousel') ? 'active' : '' }}"
                   {{ request()->routeIs('carousel') ? 'aria-current=page' : '' }}>
                    Carousel
                </a>

                <a href="{{ route('pirate') }}"
                   class="sidebar-subitem {{ request()->routeIs('pirate') ? 'active' : '' }}"
                   {{ request()->routeIs('pirate') ? 'aria-current=page' : '' }}>
                    Pirate
                </a>

                <a href="{{ route('worm') }}"
                   class="sidebar-subitem {{ request()->routeIs('worm') ? 'active' : '' }}"
                   {{ request()->routeIs('worm') ? 'aria-current=page' : '' }}>
                    Worm
                </a>

                <a href="{{ route('kamikaze') }}"
                   class="sidebar-subitem {{ request()->routeIs('kamikaze') ? 'active' : '' }}"
                   {{ request()->routeIs('kamikaze') ? 'aria-current=page' : '' }}>
                    Kamikaze
                </a>

            </div>
        </div>

        {{-- PREGUNTAS FRECUENTES --}}
        <a href="{{ route('preguntas') }}"
           class="sidebar-item {{ request()->routeIs('preguntas') ? 'active' : '' }}"
           {{ request()->routeIs('preguntas') ? 'aria-current=page' : '' }}>

            <span class="sidebar-icon icon-help">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="8"/>
                    <path d="M9.8 9.5a2.3 2.3 0 1 1 3.1 2.2c-.9.4-.9 1-.9 1.8M12 17h.01"/>
                </svg>
            </span>

            <span class="sidebar-label">Preguntas frecuentes</span>
        </a>

        {{-- CONTACTO DESPLEGABLE --}}
        <div class="sidebar-group">

            <button
                class="sidebar-item sidebar-contact-toggle"
                type="button"
                aria-expanded="false"
                aria-controls="submenu-contacto"
            >
                <span class="sidebar-icon icon-contact">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 6h16v12H4zM4 7l8 6 8-6"/>
                    </svg>
                </span>

                <span class="sidebar-label">Contacto</span>
                <span class="sidebar-chevron" aria-hidden="true">⌄</span>
            </button>

            <div
                class="sidebar-submenu sidebar-contact-info"
                id="submenu-contacto"
                hidden
            >
                <p><strong>Teléfono</strong></p>

                <a href="tel:+543764123456" class="sidebar-subitem">
                    +54 376 412-3456
                </a>

                <p><strong>Correo electrónico</strong></p>

                <a href="mailto:esimpark@esim.edu.ar" class="sidebar-subitem">
                    esimpark@esim.edu.ar
                </a>
            </div>

        </div>

    </nav>

</aside>

{{-- Fondo para el menú móvil --}}
<div class="sidebar-overlay" aria-hidden="true"></div>
