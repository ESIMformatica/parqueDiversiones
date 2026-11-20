{{-- Hueco del ascensor: la cabina con King Kong baja a medida que se hace scroll --}}
<aside class="esb-shaft" data-esb-shaft aria-label="Indicador de altura del recorrido">

    <div class="esb-shaft-rails" aria-hidden="true"></div>

    <div class="esb-machine" aria-hidden="true">
        <span class="esb-machine-label">Sala de máquinas</span>
        <span class="esb-sheave">
            <svg class="esb-sheave-svg" data-esb-sheave viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="13" fill="#1d1f21" stroke="#8d9295" stroke-width="3"/>
                <line x1="16" y1="3" x2="16" y2="29" stroke="#6b7074" stroke-width="2"/>
                <line x1="3" y1="16" x2="29" y2="16" stroke="#6b7074" stroke-width="2"/>
                <line x1="6.8" y1="6.8" x2="25.2" y2="25.2" stroke="#6b7074" stroke-width="1.5"/>
                <line x1="25.2" y1="6.8" x2="6.8" y2="25.2" stroke="#6b7074" stroke-width="1.5"/>
                <circle cx="16" cy="16" r="4" fill="#a6844a" stroke="#1d1f21" stroke-width="1.5"/>
            </svg>
        </span>
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
                <g fill="#181513">
                    {{-- Piernas agachadas sobre el techo --}}
                    <ellipse cx="49" cy="88" rx="18" ry="9.5"/>
                    <ellipse cx="91" cy="88" rx="18" ry="9.5"/>
                    <ellipse cx="37" cy="94" rx="8.5" ry="3.5"/>
                    <ellipse cx="103" cy="94" rx="8.5" ry="3.5"/>
                    {{-- Torso y hombros anchos --}}
                    <path d="M44 88 C36 69 38 48 52 41 L88 41 C102 48 104 69 96 88 Z"/>
                </g>
                {{-- Pecho y volumen de torso --}}
                <path d="M55 52 Q70 62 85 52 L83 72 Q70 78 57 72 Z" fill="#2b2521"/>
                <path d="M52 44 Q70 39 88 44" fill="none" stroke="#38312c" stroke-width="2" stroke-linecap="round"/>
                <path d="M58 58 Q70 64 82 58" fill="none" stroke="#38312c" stroke-width="1.6" stroke-linecap="round"/>

                {{-- Brazo izquierdo apoyado firme en la cabina --}}
                <path d="M49 48 C34 57 27 75 29 92" fill="none" stroke="#181513" stroke-width="12" stroke-linecap="round"/>
                <path d="M48 52 C37 61 32 74 32 87" fill="none" stroke="#38312c" stroke-width="2" stroke-linecap="round"/>
                <ellipse cx="29" cy="93" rx="7.5" ry="4" fill="#181513"/>

                {{-- Brazo derecho aferrado al cable de tracción --}}
                <path d="M90 48 C102 36 98 19 82 11" fill="none" stroke="#181513" stroke-width="11" stroke-linecap="round"/>
                <path d="M92 44 C99 34 95 21 84 14" fill="none" stroke="#38312c" stroke-width="2" stroke-linecap="round"/>
                <ellipse cx="81" cy="11" rx="6" ry="7" fill="#181513"/>

                {{-- Cabeza, cresta y rostro --}}
                <path d="M57 41 C54 28 59 16 70 13 C81 16 86 28 83 41 C77 48 63 48 57 41 Z" fill="#181513"/>
                <path d="M63 17 Q70 13 77 17" fill="none" stroke="#38312c" stroke-width="2" stroke-linecap="round"/>
                <path d="M62 33 Q70 29 78 33 L77 42 Q70 46 63 42 Z" fill="#5a4e45"/>
                <path d="M60 30 Q70 25 80 30 L80 32.8 Q70 28.8 60 32.8 Z" fill="#181513"/>
                <circle cx="65.5" cy="34" r="1.35" fill="#d9a441"/>
                <circle cx="74.5" cy="34" r="1.35" fill="#d9a441"/>
                <circle cx="68.5" cy="38.5" r="0.8" fill="#181513"/>
                <circle cx="71.5" cy="38.5" r="0.8" fill="#181513"/>
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
            <span class="esb-rig-dir" data-esb-dir aria-hidden="true">&bull;</span>
            <span data-esb-meters>381 m</span>
        </div>
    </div>

    <div class="esb-pit" aria-hidden="true">
        <span class="esb-buffer esb-buffer--left"></span>
        <span class="esb-buffer esb-buffer--right"></span>
        <span class="esb-pit-label">Foso</span>
    </div>
</aside>
