{{-- Basamento: entrada de la Quinta Avenida, vidrieras Art Déco, farolas y vereda --}}
<div class="esb-base" id="basamento">
    @include('partials.fall.floor-band', ['floor' => 1, 'name' => 'Nivel de calle', 'section' => 'Lobby', 'meters' => 0])

    <svg viewBox="0 0 1200 240" aria-hidden="true">
        <defs>
            <pattern id="esbCoursing" width="120" height="50" patternUnits="userSpaceOnUse">
                <rect width="120" height="50" fill="#d4c9b5"/>
                <path d="M0 0.5 H120 M0 25.5 H120 M0.5 0 V25 M60.5 25 V50" stroke="#bfb29c" stroke-width="1"/>
            </pattern>
        </defs>

        {{-- Muro de sillería --}}
        <rect width="1200" height="200" fill="url(#esbCoursing)"/>

        {{-- Vidrieras laterales con montantes geométricos Art Déco --}}
        <g fill="#4f5658" stroke="#a6844a" stroke-width="3">
            <rect x="60" y="70" width="100" height="110"/>
            <rect x="190" y="70" width="100" height="110"/>
            <rect x="320" y="70" width="100" height="110"/>
            <rect x="780" y="70" width="100" height="110"/>
            <rect x="910" y="70" width="100" height="110"/>
            <rect x="1040" y="70" width="100" height="110"/>
        </g>
        {{-- Reflejos cálidos y trama geométrica de bronce en vidrieras --}}
        <g fill="none" stroke="#a6844a" stroke-width="1.5">
            @foreach ([60, 190, 320, 780, 910, 1040] as $wx)
                <line x1="{{ $wx }}" y1="96" x2="{{ $wx + 100 }}" y2="96"/>
                <line x1="{{ $wx + 50 }}" y1="70" x2="{{ $wx + 50 }}" y2="180"/>
                <path d="M{{ $wx + 12 }} 96 L{{ $wx + 50 }} 74 L{{ $wx + 88 }} 96"/>
                <rect x="{{ $wx + 10 }}" y="106" width="32" height="62" fill="#5e6567" stroke="none"/>
                <rect x="{{ $wx + 58 }}" y="106" width="32" height="62" fill="#6d685c" stroke="none"/>
            @endforeach
        </g>

        {{-- Portal Art Déco --}}
        <rect x="540" y="4" width="120" height="12" fill="#c9bda8"/>
        <rect x="500" y="16" width="200" height="16" fill="#c9bda8"/>
        <rect x="450" y="32" width="300" height="168" fill="#c3b6a0"/>
        <rect x="450" y="32" width="300" height="34" fill="#221e1a"/>
        <text x="600" y="55" text-anchor="middle" font-size="14" font-weight="700" letter-spacing="6" fill="#d9bc78">350 FIFTH AVENUE</text>
        <rect x="470" y="66" width="260" height="134" fill="#3a3d3f"/>
        <rect x="470" y="66" width="260" height="24" fill="#a6844a"/>
        <g stroke="#7a5f32" stroke-width="2">
            <path d="M490 66 V90 M510 66 V90 M530 66 V90 M550 66 V90 M570 66 V90 M590 66 V90 M610 66 V90 M630 66 V90 M650 66 V90 M670 66 V90 M690 66 V90 M710 66 V90"/>
        </g>
        {{-- Cuatro puertas del lobby con interior iluminado en tono cálido --}}
        <g stroke="#a6844a" stroke-width="3">
            <rect x="482" y="98" width="50" height="102" fill="#826d44"/>
            <rect x="544" y="98" width="50" height="102" fill="#9a804d"/>
            <rect x="606" y="98" width="50" height="102" fill="#9a804d"/>
            <rect x="668" y="98" width="50" height="102" fill="#826d44"/>
        </g>
        {{-- Cristales interiores y tiradores de bronce --}}
        <g fill="#c9aa69" stroke="#7a5f32" stroke-width="1">
            <rect x="492" y="110" width="30" height="44"/>
            <rect x="554" y="110" width="30" height="44"/>
            <rect x="616" y="110" width="30" height="44"/>
            <rect x="678" y="110" width="30" height="44"/>
        </g>
        <g stroke="#d9bc78" stroke-width="2">
            <line x1="490" y1="158" x2="524" y2="158"/>
            <line x1="552" y1="158" x2="586" y2="158"/>
            <line x1="614" y1="158" x2="648" y2="158"/>
            <line x1="676" y1="158" x2="710" y2="158"/>
        </g>

        {{-- Farolas clásicas de Manhattan sobre la vereda --}}
        @foreach ([418, 782] as $lx)
            <g>
                <rect x="{{ $lx - 7 }}" y="190" width="14" height="10" fill="#221e1a"/>
                <rect x="{{ $lx - 4 }}" y="168" width="8" height="22" fill="#2e3133"/>
                <rect x="{{ $lx - 2.5 }}" y="118" width="5" height="50" fill="#2e3133"/>
                <rect x="{{ $lx - 8 }}" y="114" width="16" height="4" fill="#221e1a"/>
                <polygon points="{{ $lx - 7 }},114 {{ $lx + 7 }},114 {{ $lx + 5 }},98 {{ $lx - 5 }},98" fill="#efe7d6" stroke="#221e1a" stroke-width="1.5"/>
                <rect x="{{ $lx - 4 }}" y="101" width="8" height="10" fill="#d9bc78"/>
                <polygon points="{{ $lx - 7 }},98 {{ $lx + 7 }},98 {{ $lx }},91" fill="#221e1a"/>
            </g>
        @endforeach

        {{-- Vereda --}}
        <rect y="200" width="1200" height="40" fill="#bdb3a2"/>
        <rect y="200" width="1200" height="4" fill="#a89a83"/>
        <g stroke="#a89a83" stroke-width="1">
            <path d="M80 204 V240 M200 204 V240 M320 204 V240 M440 204 V240 M560 204 V240 M680 204 V240 M800 204 V240 M920 204 V240 M1040 204 V240 M1160 204 V240"/>
        </g>
    </svg>
</div>

<div class="esb-street">
    <span>Fin del recorrido · Zona de frenado</span>
    <span>350 Fifth Avenue, Manhattan</span>
</div>
