{{-- Hueco del ascensor: la cabina con King Kong baja a medida que se hace scroll --}}
<aside class="esb-shaft" data-esb-shaft aria-label="Indicador de altura del recorrido">

    <div class="esb-shaft-rails" aria-hidden="true"></div>

    <div class="esb-machine" aria-hidden="true">
        <span class="esb-machine-label">Sala de máquinas</span>
        <span class="esb-sheave"></span>
        <span class="esb-motor"></span>
    </div>

    <div class="esb-scale" aria-hidden="true">
        @for ($floor = 102; $floor >= 6; $floor -= 6)
            <span>{{ $floor }}</span>
        @endfor
        <span>1</span>
    </div>

    <div class="esb-counterweight" data-esb-counterweight aria-hidden="true"></div>

    <div class="esb-rig" data-esb-rig>
        <svg viewBox="0 0 140 230" aria-hidden="true">
            {{-- Cables de tracción --}}
            <rect x="59" y="0" width="2" height="98" fill="#8d9295"/>
            <rect x="79" y="0" width="2" height="98" fill="#8d9295"/>

            {{-- King Kong sobre el techo de la cabina --}}
            <g class="esb-kong">
                <g fill="#1f1b19">
                    <ellipse cx="50" cy="88" rx="17" ry="9"/>
                    <ellipse cx="90" cy="88" rx="17" ry="9"/>
                    <ellipse cx="38" cy="94" rx="8" ry="3"/>
                    <ellipse cx="102" cy="94" rx="8" ry="3"/>
                    <path d="M46 88 C40 70 42 52 54 44 L86 44 C98 52 100 70 94 88 Z"/>
                </g>
                <path d="M57 54 Q70 62 83 54 L81 70 Q70 75 59 70 Z" fill="#2c2622"/>
                <path d="M52 50 C36 58 28 76 30 92" fill="none" stroke="#1f1b19" stroke-width="11" stroke-linecap="round"/>
                <ellipse cx="30" cy="93" rx="7" ry="4" fill="#1f1b19"/>
                <path d="M88 50 C100 38 96 20 82 12" fill="none" stroke="#1f1b19" stroke-width="10" stroke-linecap="round"/>
                <ellipse cx="81" cy="11" rx="5.5" ry="6.5" fill="#1f1b19"/>
                <path d="M58 42 C55 30 60 18 70 15 C80 18 85 30 82 42 C77 48 63 48 58 42 Z" fill="#1f1b19"/>
                <path d="M62 34 Q70 30 78 34 L77 42 Q70 46 63 42 Z" fill="#5a4e45"/>
                <path d="M60 31 Q70 26 80 31 L80 33.5 Q70 29.5 60 33.5 Z" fill="#1f1b19"/>
                <circle cx="65.5" cy="34.6" r="1.3" fill="#d9a441"/>
                <circle cx="74.5" cy="34.6" r="1.3" fill="#d9a441"/>
                <circle cx="68.5" cy="39" r="0.8" fill="#1f1b19"/>
                <circle cx="71.5" cy="39" r="0.8" fill="#1f1b19"/>
            </g>

            {{-- Cabezal y patines guía --}}
            <rect x="64" y="90" width="12" height="8" fill="#1d1f21"/>
            <rect x="6" y="96" width="128" height="8" fill="#1d1f21"/>
            <rect x="0" y="104" width="6" height="14" fill="#6b7074"/>
            <rect x="134" y="104" width="6" height="14" fill="#6b7074"/>
            <rect x="0" y="206" width="6" height="14" fill="#6b7074"/>
            <rect x="134" y="206" width="6" height="14" fill="#6b7074"/>

            {{-- Cabina --}}
            <rect x="6" y="104" width="128" height="120" fill="#2b2e30"/>
            <rect x="12" y="110" width="116" height="108" fill="none" stroke="#a6844a" stroke-width="1.5"/>

            {{-- Dial indicador de piso Art Déco --}}
            <path d="M50 138 A20 20 0 0 1 90 138 Z" fill="#efe7d6" stroke="#a6844a" stroke-width="2"/>
            <path d="M55.5 134.1 L51.6 133.1 M58.5 128.4 L55.4 125.8 M63.7 124.4 L62 120.8 M70 123 L70 119 M76.3 124.4 L78 120.8 M81.5 128.4 L84.6 125.8 M84.5 134.1 L88.4 133.1" stroke="#221e1a" stroke-width="1"/>
            <g data-esb-needle transform="rotate(75 70 138)">
                <rect x="69.2" y="121" width="1.6" height="17" fill="#8f2d1f"/>
            </g>
            <circle cx="70" cy="138" r="2.5" fill="#221e1a"/>

            {{-- Puertas de bronce --}}
            <rect x="20" y="146" width="49" height="72" fill="#a6844a"/>
            <rect x="71" y="146" width="49" height="72" fill="#a6844a"/>
            <g fill="none" stroke="#7a5f32" stroke-width="1.5">
                <rect x="26" y="152" width="37" height="60"/>
                <rect x="77" y="152" width="37" height="60"/>
                <path d="M30 196 L44.5 184 L59 196 M30 204 L44.5 192 L59 204"/>
                <path d="M81 196 L95.5 184 L110 196 M81 204 L95.5 192 L110 204"/>
            </g>

            {{-- Umbral --}}
            <rect x="6" y="218" width="128" height="6" fill="#1d1f21"/>
            <rect x="16" y="224" width="108" height="6" fill="#3d4144"/>
        </svg>

        <div class="esb-rig-plate">
            <span>Piso</span>
            <strong data-esb-floor>102</strong>
            <span data-esb-meters>381 m</span>
        </div>
    </div>

    <div class="esb-pit" aria-hidden="true">
        <span class="esb-buffer esb-buffer--left"></span>
        <span class="esb-buffer esb-buffer--right"></span>
        <span class="esb-pit-label">Foso</span>
    </div>
</aside>

