{{-- Corona del Empire State: nubes, biplanos, antena, mástil y retranqueos Art Déco --}}
<div class="esb-crown" aria-hidden="true">
    <svg viewBox="0 0 1200 364" preserveAspectRatio="xMidYMax meet">
        <defs>
            <pattern id="esbCrownFacade" width="16" height="20" patternUnits="userSpaceOnUse">
                <rect width="16" height="20" fill="#ddd3c1"/>
                <rect x="10" width="6" height="14" fill="#4f5658"/>
                <rect x="10" y="14" width="6" height="6" fill="#a3a5a2"/>
            </pattern>
        </defs>

        {{-- Siluetas geométricas de nubes detrás del edificio --}}
        <g fill="#e8e0d0">
            <rect x="70" y="196" width="210" height="12" rx="6"/>
            <rect x="120" y="184" width="130" height="12" rx="6"/>
            <rect x="150" y="174" width="76" height="10" rx="5"/>

            <rect x="880" y="150" width="240" height="12" rx="6"/>
            <rect x="920" y="138" width="165" height="12" rx="6"/>
            <rect x="955" y="128" width="90" height="10" rx="5"/>

            <rect x="210" y="254" width="140" height="10" rx="5"/>
            <rect x="840" y="238" width="160" height="10" rx="5"/>
        </g>

        {{-- Biplanos --}}
        <g transform="translate(300 120) scale(1.4)">
            <g class="esb-biplane" fill="#3a3530">
                <path d="M0 11 L8 9 L34 9 Q40 10 40 12 Q40 14 34 14 L8 14 Z"/>
                <path d="M0 11 L2 3 L8 9 Z"/>
                <rect x="16" y="3" width="14" height="2"/>
                <rect x="15" y="15" width="14" height="2"/>
                <rect x="18" y="5" width="1" height="4"/>
                <rect x="27" y="5" width="1" height="4"/>
                <rect x="41" y="6" width="1.5" height="12"/>
                <circle cx="26" cy="20" r="2"/>
            </g>
        </g>
        <g transform="translate(860 64) scale(-1.1 1.1)">
            <g class="esb-biplane esb-biplane--late" fill="#3a3530">
                <path d="M0 11 L8 9 L34 9 Q40 10 40 12 Q40 14 34 14 L8 14 Z"/>
                <path d="M0 11 L2 3 L8 9 Z"/>
                <rect x="16" y="3" width="14" height="2"/>
                <rect x="15" y="15" width="14" height="2"/>
                <rect x="18" y="5" width="1" height="4"/>
                <rect x="27" y="5" width="1" height="4"/>
                <rect x="41" y="6" width="1.5" height="12"/>
                <circle cx="26" cy="20" r="2"/>
            </g>
        </g>

        {{-- Antena y baliza --}}
        <rect x="598" y="4" width="4" height="44" fill="#6f7273"/>
        <rect x="595" y="30" width="10" height="3" fill="#9da09d"/>
        <circle class="esb-beacon" cx="600" cy="5" r="4" fill="#8f2d1f"/>

        {{-- Mástil de amarre con nervaduras y barandilla superior (Piso 102) --}}
        <path d="M585 62 Q600 39 615 62 Z" fill="#b9bbb8"/>
        <rect x="582" y="62" width="36" height="66" fill="#b9bbb8"/>
        <g stroke="#9da09d" stroke-width="1.5">
            <line x1="589" y1="64" x2="589" y2="126"/>
            <line x1="594.5" y1="64" x2="594.5" y2="126"/>
            <line x1="600" y1="64" x2="600" y2="126"/>
            <line x1="605.5" y1="64" x2="605.5" y2="126"/>
            <line x1="611" y1="64" x2="611" y2="126"/>
            <line x1="582" y1="84" x2="618" y2="84"/>
            <line x1="582" y1="106" x2="618" y2="106"/>
        </g>
        {{-- Barandilla mirador piso 102 --}}
        <rect x="572" y="121" width="56" height="5" fill="#9da09d"/>
        <g stroke="#6f7273" stroke-width="1">
            <line x1="576" y1="121" x2="576" y2="126"/>
            <line x1="586" y1="121" x2="586" y2="126"/>
            <line x1="614" y1="121" x2="614" y2="126"/>
            <line x1="624" y1="121" x2="624" y2="126"/>
        </g>

        {{-- Retranqueos con alas laterales de profundidad arquitectónica --}}
        {{-- Nivel 1 --}}
        <rect x="568" y="126" width="64" height="4" fill="#efe8db"/>
        <rect x="572" y="130" width="56" height="20" fill="url(#esbCrownFacade)"/>
        <rect x="572" y="130" width="8" height="20" fill="#cfc3ae"/>
        <rect x="620" y="130" width="8" height="20" fill="#cfc3ae"/>

        {{-- Nivel 2 --}}
        <rect x="544" y="148" width="112" height="5" fill="#efe8db"/>
        <rect x="548" y="153" width="104" height="31" fill="url(#esbCrownFacade)"/>
        <rect x="548" y="153" width="12" height="31" fill="#cfc3ae"/>
        <rect x="640" y="153" width="12" height="31" fill="#cfc3ae"/>

        {{-- Nivel 3 --}}
        <rect x="506" y="182" width="188" height="5" fill="#efe8db"/>
        <rect x="510" y="187" width="180" height="35" fill="url(#esbCrownFacade)"/>
        <rect x="510" y="187" width="18" height="35" fill="#cfc3ae"/>
        <rect x="672" y="187" width="18" height="35" fill="#cfc3ae"/>

        {{-- Barandilla mirador piso 86 --}}
        <rect x="454" y="215" width="292" height="5" fill="#9da09d"/>
        <g stroke="#6f7273" stroke-width="1">
            <line x1="462" y1="215" x2="462" y2="220"/>
            <line x1="478" y1="215" x2="478" y2="220"/>
            <line x1="494" y1="215" x2="494" y2="220"/>
            <line x1="706" y1="215" x2="706" y2="220"/>
            <line x1="722" y1="215" x2="722" y2="220"/>
            <line x1="738" y1="215" x2="738" y2="220"/>
        </g>

        {{-- Nivel 4 --}}
        <rect x="446" y="220" width="308" height="5" fill="#efe8db"/>
        <rect x="450" y="225" width="300" height="43" fill="url(#esbCrownFacade)"/>
        <rect x="450" y="225" width="26" height="43" fill="#cfc3ae"/>
        <rect x="724" y="225" width="26" height="43" fill="#cfc3ae"/>

        {{-- Nivel 5 --}}
        <rect x="356" y="266" width="488" height="5" fill="#efe8db"/>
        <rect x="360" y="271" width="480" height="45" fill="url(#esbCrownFacade)"/>
        <rect x="360" y="271" width="34" height="45" fill="#cfc3ae"/>
        <rect x="806" y="271" width="34" height="45" fill="#cfc3ae"/>

        {{-- Cornisa superior de la torre alineada con los pilares laterales de 10px --}}
        <rect x="0" y="312" width="1200" height="4" fill="#efe8db"/>
        <rect x="0" y="316" width="1200" height="2" fill="#a6844a"/>
        <rect x="0" y="318" width="1200" height="46" fill="#c9bda8"/>
        <rect x="0" y="318" width="10" height="46" fill="#bfb29c"/>
        <rect x="1190" y="318" width="10" height="46" fill="#bfb29c"/>
        <text x="600" y="347" text-anchor="middle" font-size="14" font-weight="800" letter-spacing="8" fill="#5b5248">EMPIRE STATE BUILDING &middot; 350 FIFTH AVE</text>
    </svg>
</div>
