@extends('layouts.app')

@section('title', 'Inicio | ESIMPark')

@section('content')

    <div class="inicio">

        {{-- ============ HERO ============ --}}
        <section class="hero-card">

            <div class="hero-shape hero-shape-green"></div>
            <div class="hero-shape hero-shape-orange"></div>
            <div class="hero-shape hero-shape-purple"></div>

            <p class="hero-kicker">Portal principal</p>

            <h1>¡Bienvenidos a ESIMPark!</h1>

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
            <h2 class="section-title" id="titulo-parque">¿Qué es ESIMPark?</h2>

            <p class="about-intro">
                ESIMPark es un parque de diversiones hecho por y para la comunidad
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
            // Para agregar o mover una atracción, editá esta lista.
            // x = distancia desde la izquierda (0 a 100), y = distancia desde arriba (0 a 100)
            $lugares = [
                ['emoji' => '🚪', 'nombre' => 'Entrada',         'x' => 9,  'y' => 84, 'color' => 'var(--green)',  'texto' => 'Acá empieza la aventura. Retirá tu pase y listo para entrar.'],
                ['emoji' => '🎡', 'nombre' => 'La Gran Noria',   'x' => 24, 'y' => 28, 'color' => 'var(--orange)', 'texto' => 'La vista más linda del parque. Ideal para empezar con calma.'],
                ['emoji' => '🎢', 'nombre' => 'Montaña rusa',    'x' => 72, 'y' => 24, 'color' => 'var(--purple)', 'texto' => 'Para los más valientes. Agarrate fuerte y no cierres los ojos.'],
                ['emoji' => '🎠', 'nombre' => 'Carrusel',        'x' => 47, 'y' => 56, 'color' => 'var(--orange)', 'texto' => 'Un clásico para grandes y chicos, justo en el centro del parque.'],
                ['emoji' => '🍿', 'nombre' => 'Zona de comidas', 'x' => 30, 'y' => 76, 'color' => 'var(--green)',  'texto' => 'Pochoclos, helados y un buen lugar para descansar.'],
                ['emoji' => '🚣', 'nombre' => 'Lago de botes',   'x' => 77, 'y' => 70, 'color' => 'var(--purple)', 'texto' => 'Remá con tus amigos y recorré el lago.'],
            ];
        @endphp

        <section class="map" id="mapa" aria-labelledby="titulo-mapa">
            <h2 class="section-title" id="titulo-mapa">Mapa del parque</h2>
            <p class="map-help">Tocá una atracción del mapa para ver de qué se trata.</p>

            <div class="park-map" role="group" aria-label="Mapa ilustrado del parque">

                {{-- Dibujo de fondo: camino, lago y árboles --}}
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

                @foreach ($lugares as $lugar)
                    <button type="button"
                            class="spot"
                            style="--x: {{ $lugar['x'] }}%; --y: {{ $lugar['y'] }}%; --c: {{ $lugar['color'] }}"
                            data-emoji="{{ $lugar['emoji'] }}"
                            data-nombre="{{ $lugar['nombre'] }}"
                            data-texto="{{ $lugar['texto'] }}"
                            aria-pressed="false">
                        <span class="spot-emoji" aria-hidden="true">{{ $lugar['emoji'] }}</span>
                        <span class="spot-label">{{ $lugar['nombre'] }}</span>
                    </button>
                @endforeach
            </div>

            <div class="spot-info" aria-live="polite">
                <div class="spot-info-emoji" id="info-emoji" aria-hidden="true">👆</div>
                <div>
                    <h3 id="info-titulo">Elegí una atracción</h3>
                    <p id="info-texto">Tocá cualquier ícono del mapa y acá vas a ver la descripción.</p>
                </div>
            </div>
        </section>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var spots  = document.querySelectorAll('.inicio .spot');
            var emoji  = document.getElementById('info-emoji');
            var titulo = document.getElementById('info-titulo');
            var texto  = document.getElementById('info-texto');

            spots.forEach(function (spot) {
                spot.addEventListener('click', function () {
                    spots.forEach(function (s) { s.setAttribute('aria-pressed', 'false'); });
                    spot.setAttribute('aria-pressed', 'true');

                    emoji.textContent  = spot.dataset.emoji;
                    titulo.textContent = spot.dataset.nombre;
                    texto.textContent  = spot.dataset.texto;
                });
            });
        });
    </script>

@endsection