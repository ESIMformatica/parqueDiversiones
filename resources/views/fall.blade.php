@extends('layouts.app')

@section('title', 'Empire State Building: La Caída de King Kong | Web Fun Park')

@push('styles')
    <!-- Tipografías editoriales y técnicas -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=JetBrains+Mono:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Estilos modulares de la fachada del Empire State Building -->
    <link
        rel="stylesheet"
        href="{{ asset('css/fall.css') }}"
    >
@endpush

@section('content')
    <div class="fall-facade-shell" id="fallFacadeShell">

        {{-- Cornisa superior del edificio (Punto de partida del descenso: Piso 102) --}}
        <header class="facade-cornice">
            <span>EMPIRE STATE BUILDING — TORRE DE CAÍDA LIBRE</span>
            <span class="facade-cornice-coords">CÚSPIDE • PISO 102 • 381 METROS</span>
        </header>

        {{-- Cuerpo del edificio: Riel vertical de descenso a la izquierda + Muros de piedra caliza a la derecha --}}
        <div class="facade-body-grid">

            @include('partials.fall.facade-rail')

            <div class="facade-wall-content">

                {{-- 1. Introducción y fotografía principal de la maqueta --}}
                @include('partials.fall.intro-maqueta')

                {{-- 2. Video de la atracción y explicación de su funcionamiento --}}
                @include('partials.fall.video-funcionamiento')

                {{-- 3. Estudio de escalas y el trabajo detrás de la maqueta --}}
                @include('partials.fall.escalas-proceso')

                @stack('fall_extra_sections')

            </div>
        </div>

        {{-- Base del edificio al llegar al final del scroll (Piso 01) --}}
        <footer class="facade-ground-plinth">
            <span>NIVEL DE CALLE — 350 FIFTH AVENUE, MANHATTAN</span>
            <span>PISO 01 • 0 METROS • ZONA DE FRENADO FINAL</span>
        </footer>

    </div>
@endsection

@push('scripts')
    <!-- Script modular para el descenso interactivo en scroll por los 102 pisos -->
    <script src="{{ asset('js/fall/facade-scroll.js') }}"></script>
@endpush
