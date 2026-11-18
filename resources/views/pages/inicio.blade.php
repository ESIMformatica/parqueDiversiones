@extends('layouts.app')

@section('title', 'Inicio | Web Fun Park')

@section('content')

    <div class="inicio">

        {{-- ============ HERO ============ --}}
        <section class="hero-card">

            <div class="hero-shape hero-shape-green"></div>
            <div class="hero-shape hero-shape-orange"></div>
            <div class="hero-shape hero-shape-purple"></div>

            <p class="hero-kicker">Portal principal</p>

            <h1>¡Bienvenidos a Web Fun Park!</h1>

            <p class="hero-copy">
                El parque de diversiones de la escuela: juegos, desafíos y
                mucha aventura para aprender mientras te divertís.
            </p>

            <div class="hero-actions">
                <a href="/mirror" class="btn btn-primary">Descubrir atracciones</a>
                <a href="#mapa" class="btn btn-secondary">Ver el mapa</a>
            </div>
        </section>

        {{-- ============ SOBRE EL PARQUE ============ --}}
        <section class="about" aria-labelledby="titulo-parque">
            <h2 class="section-title" id="titulo-parque">¿Qué es Web Fun Park?</h2>

            <p class="about-intro">
                Web Fun Park es un parque de diversiones hecho por y para la comunidad
                escolar. Cada atracción esconde un desafío distinto, así que se aprende
                jugando. Podés ir con tus compañeros, con tu curso o en familia.
            </p>

            <ul class="passes">
                <li class="pass" style="--c: var(--orange)">
                    <div class="pass-emoji" aria-hidden="true">🎢</div>
                    <h3>Atracciones</h3>
                    <p>Juegos para todas las edades, de los tranquilos a los que dan vértigo.</p>
                </li>
                <li class="pass" style="--c: var(--green)">
                    <div class="pass-emoji" aria-hidden="true">🧠</div>
                    <h3>Aprendé jugando</h3>
                    <p>Retos, preguntas y misiones que hacen de cada vuelta una clase divertida.</p>
                </li>
                <li class="pass" style="--c: var(--purple)">
                    <div class="pass-emoji" aria-hidden="true">🎒</div>
                    <h3>Para toda la escuela</h3>
                    <p>Espacios pensados para cursos, grupos y excursiones.</p>
                </li>
            </ul>
        </section>

        {{-- ============ MAPA ILUSTRADO ============ --}}
        @php
            // Datos del mapa: se editan en config/parque.php
            $lugares    = config('parque.lugares');
            $proporcion = config('parque.proporcion', '8 / 5');

            // Devuelve la URL del primer archivo que exista, o null
            $buscarImagen = function (string $base, array $extensiones) {
                foreach ($extensiones as $ext) {
                    if (file_exists(public_path("{$base}.{$ext}"))) {
                        return asset("{$base}.{$ext}");
                    }
                }
                return null;
            };

            $fondo = $buscarImagen(config('parque.fondo'), ['webp', 'png', 'jpg', 'jpeg', 'svg']);
        @endphp

        {{-- Filtros SVG: contorno de tinta + brillo que siguen la silueta de cada imagen --}}
        <svg class="filtros-svg" width="0" height="0" aria-hidden="true" focusable="false">
            <defs>
                <filter id="contorno" x="-30%" y="-30%" width="160%" height="160%" color-interpolation-filters="sRGB">
                    <feMorphology in="SourceAlpha" operator="dilate" radius="3" result="expandido"/>
                    <feFlood flood-color="#1d1a4d" style="flood-color: var(--ink, #1d1a4d)"/>
                    <feComposite in2="expandido" operator="in" result="borde"/>
                    <feGaussianBlur in="expandido" stdDeviation="7" result="difuso"/>
                    <feFlood flood-color="#8b5cf6" flood-opacity=".9" style="flood-color: var(--purple, #8b5cf6)"/>
                    <feComposite in2="difuso" operator="in" result="brillo"/>
                    <feMerge>
                        <feMergeNode in="brillo"/>
                        <feMergeNode in="borde"/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>

                <filter id="contorno-activo" x="-35%" y="-35%" width="170%" height="170%" color-interpolation-filters="sRGB">
                    <feMorphology in="SourceAlpha" operator="dilate" radius="4" result="expandido"/>
                    <feFlood flood-color="#1d1a4d" style="flood-color: var(--ink, #1d1a4d)"/>
                    <feComposite in2="expandido" operator="in" result="borde"/>
                    <feGaussianBlur in="expandido" stdDeviation="10" result="difuso"/>
                    <feFlood flood-color="#ff8a3d" style="flood-color: var(--orange, #ff8a3d)"/>
                    <feComposite in2="difuso" operator="in" result="brillo"/>
                    <feMerge>
                        <feMergeNode in="brillo"/>
                        <feMergeNode in="brillo"/>
                        <feMergeNode in="borde"/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            </defs>
        </svg>

        <section class="map" id="mapa" aria-labelledby="titulo-mapa">
            <h2 class="section-title" id="titulo-mapa">Mapa del parque</h2>
            <p class="map-help">Tocá una atracción del mapa para entrar. Pasando el mouse por arriba ves de qué se trata.</p>

            {{-- Mapa a la izquierda, tarjeta de descripción a la derecha --}}
            <div class="map-layout">

            <div class="park-map" role="group" aria-label="Mapa ilustrado del parque" style="aspect-ratio: {{ $proporcion }}">

                @if ($fondo)
                    {{-- Imagen guía de fondo --}}
                    <img class="park-bg" src="{{ $fondo }}" alt="" decoding="async">
                @else
                    {{-- Dibujo de respaldo: camino, lago y árboles --}}
                    <svg class="park-svg" viewBox="0 0 800 500" aria-hidden="true">
                        <path class="park-path-border" d="M 70 430 C 200 330, 300 470, 420 340 S 640 220, 740 120"/>
                        <path class="park-path"        d="M 70 430 C 200 330, 300 470, 420 340 S 640 220, 740 120"/>

                        <ellipse class="park-lake" cx="610" cy="360" rx="120" ry="70"/>

                        <circle class="park-tree" cx="60"  cy="70"  r="26"/>
                        <circle class="park-tree" cx="130" cy="150" r="20"/>
                        <circle class="park-tree" cx="360" cy="70"  r="24"/>
                        <circle class="park-tree" cx="520" cy="150" r="20"/>
                        <circle class="park-tree" cx="740" cy="420" r="26"/>
                        <circle class="park-tree" cx="380" cy="440" r="20"/>
                        <circle class="park-tree" cx="220" cy="190" r="18"/>
                    </svg>
                @endif

                @foreach ($lugares as $lugar)
                    @php
                        $imagen = $buscarImagen('img/atracciones/' . $lugar['id'], ['webp', 'png']);
                        $url    = \Illuminate\Support\Facades\Route::has($lugar['ruta'] ?? '') ? route($lugar['ruta']) : '';
                    @endphp

                    <a href="{{ $url ?: '#' }}"
                            class="spot {{ $imagen ? 'spot--img' : '' }}"
                            style="--x: {{ $lugar['x'] }}%; --y: {{ $lugar['y'] }}%; --c: {{ $lugar['color'] }}; --w: {{ $lugar['ancho'] ?? 12 }}%"
                            data-emoji="{{ $lugar['emoji'] }}"
                            data-nombre="{{ $lugar['nombre'] }}"
                            data-texto="{{ $lugar['texto'] }}"
                            data-imagen="{{ $imagen }}"
                            data-url="{{ $url }}"
                            aria-label="{{ $lugar['nombre'] }}">
                        @if ($imagen)
                            <img class="spot-img" src="{{ $imagen }}" alt="" loading="lazy" decoding="async" draggable="false">
                        @else
                            <span class="spot-emoji" aria-hidden="true">{{ $lugar['emoji'] }}</span>
                        @endif
                        <span class="spot-label">{{ $lugar['nombre'] }}</span>
                    </a>
                @endforeach
            </div>

            <div class="spot-info" aria-live="polite">
                <div class="spot-media" id="info-media" aria-hidden="true"><span>👆</span></div>
                <div class="spot-info-body">
                    <h3 id="info-titulo">Elegí una atracción</h3>
                    <p id="info-texto">Pasá el mouse por una atracción del mapa y acá vas a ver la descripción.</p>
                    <a id="info-link" class="btn btn-primary spot-link" href="#" hidden>Ir a la atracción</a>
                </div>
            </div>

            </div>{{-- /map-layout --}}
        </section>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mapa   = document.querySelector('.inicio .park-map');
            var spots  = document.querySelectorAll('.inicio .spot');
            var media  = document.getElementById('info-media');
            var titulo = document.getElementById('info-titulo');
            var texto  = document.getElementById('info-texto');
            var enlace = document.getElementById('info-link');

            // Muestra la imagen de la atracción (o su emoji si no tiene imagen)
            function mostrarMedia(spot) {
                media.textContent = '';

                if (spot.dataset.imagen) {
                    var img = document.createElement('img');
                    img.src = spot.dataset.imagen;
                    img.alt = '';
                    img.className = 'spot-media-img';
                    media.appendChild(img);
                } else {
                    var emoji = document.createElement('span');
                    emoji.textContent = spot.dataset.emoji;
                    media.appendChild(emoji);
                }
            }

            // Muestra la info de la atracción en el cartel
            function mostrar(spot) {
                spots.forEach(function (s) { s.classList.remove('is-active'); });
                spot.classList.add('is-active');

                mostrarMedia(spot);
                titulo.textContent = spot.dataset.nombre;
                texto.textContent  = spot.dataset.texto;

                if (spot.dataset.url) {
                    enlace.href = spot.dataset.url;
                    enlace.hidden = false;
                } else {
                    enlace.hidden = true;
                }
            }

            spots.forEach(function (spot) {
                // Con mouse o teclado: se ve la info al pasar / enfocar
                spot.addEventListener('mouseenter', function () { mostrar(spot); });
                spot.addEventListener('focus', function () { mostrar(spot); });

                // Al hacer click se entra a la página de la atracción (es un enlace real).
                // Si todavía no tiene ruta, solo se muestra la info.
                spot.addEventListener('click', function (e) {
                    mostrar(spot);

                    if (!spot.dataset.url) {
                        e.preventDefault();
                    }
                });
            });

            // Ayuda para ubicar atracciones: abrí la página con /?coords y hacé click en el mapa
            if (window.location.search.indexOf('coords') !== -1) {
                mapa.style.cursor = 'crosshair';

                mapa.addEventListener('click', function (e) {
                    if (e.target.closest('.spot')) { return; }

                    var r = mapa.getBoundingClientRect();
                    var x = Math.round((e.clientX - r.left) / r.width * 100);
                    var y = Math.round((e.clientY - r.top) / r.height * 100);

                    media.textContent = '📍';
                    titulo.textContent = 'Coordenadas';
                    texto.textContent = "'x' => " + x + ", 'y' => " + y;
                    enlace.hidden = true;
                });
            }
        });
    </script>

@endsection