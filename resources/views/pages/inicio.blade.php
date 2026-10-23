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
    </div>

@endsection