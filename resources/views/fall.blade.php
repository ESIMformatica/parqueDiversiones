@extends('layouts.app')

@section('title', 'La caída del Empire State | Web Fun Park')

@push('styles')
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/fall.css') }}"
    >
@endpush

@section('content')
    <article class="esb">

        {{-- Corona: antena, mástil y retranqueos --}}
        @include('partials.fall.crown')

        {{-- Directorio de pisos Art Déco y altura en vivo en móvil --}}
        @include('partials.fall.floor-nav')

        {{-- Torre: hueco del ascensor + fachada --}}
        <div class="esb-tower">

            @include('partials.fall.elevator')

            <div class="esb-facade">

                @include('partials.fall.floor-band', ['floor' => 102, 'name' => 'Cúspide', 'section' => 'La atracción', 'meters' => 381])
                @include('partials.fall.intro-maqueta')

                @include('partials.fall.floor-band', ['floor' => 86, 'name' => 'Observatorio', 'section' => 'Funcionamiento', 'meters' => 320])
                @include('partials.fall.video-funcionamiento')

                @include('partials.fall.floor-band', ['floor' => 40, 'name' => 'Tramo medio', 'section' => 'Escalas', 'meters' => 149])
                @include('partials.fall.escalas-proceso')

                @include('partials.fall.floor-band', ['floor' => 12, 'name' => 'Tramo bajo', 'section' => 'Taller', 'meters' => 45])
                @include('partials.fall.taller')

                @stack('fall_extra_floors')

            </div>
        </div>

        {{-- Basamento: entrada sobre la Quinta Avenida --}}
        @include('partials.fall.base')

    </article>
@endsection

@push('scripts')
    <script src="{{ asset('js/fall/elevator.js') }}"></script>
    <script src="{{ asset('js/fall/media-fallback.js') }}"></script>
@endpush
