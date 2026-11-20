<section class="esb-bay" id="escalas" aria-labelledby="esb-scales-title">
    <div class="esb-plaque">

        <header class="esb-section-head">
            <div>
                <p class="esb-label esb-label--accent">Escalas</p>
                <h2 class="esb-heading" id="esb-scales-title">De 443 metros a 120 centímetros</h2>
            </div>
            <p class="esb-text">
                El edificio se redujo a una escala aproximada de 1:370 para alcanzar los 120 cm en el parque.
                King Kong queda estático en la punta y el carrito se hizo más grande de lo que le corresponde
                para que se lea bien de lejos.
            </p>
        </header>

        <div class="esb-scales">

            <figure class="esb-elevation">
                <svg viewBox="0 0 360 430" role="img" aria-label="Alzado de la maqueta de 120 cm con 90 cm de caída libre y King Kong fijo en la punta">
                    {{-- Retícula técnica de plano en el fondo --}}
                    <g stroke="#e0d7c7" stroke-width="0.75">
                        @for ($x = 20; $x <= 340; $x += 20)
                            <line x1="{{ $x }}" y1="20" x2="{{ $x }}" y2="400"/>
                        @endfor
                        @for ($y = 20; $y <= 400; $y += 20)
                            <line x1="20" y1="{{ $y }}" x2="340" y2="{{ $y }}"/>
                        @endfor
                    </g>

                    {{-- Silueta (escala 3px = 1cm: 0 cm = y400, 10 cm = y370, 100 cm = y100, 103 cm = y91, 120 cm = y40) --}}
                    <path d="M50 400 V340 H60 V152 H74 V124 H86 V108 H96 V91 H103 V58 H109 V40 H111 V58 H117 V91 H124 V108 H134 V124 H146 V152 H160 V340 H170 V400 Z" fill="#ddd3c1" stroke="#221e1a" stroke-width="1.2"/>
                    <g stroke="#c9bda8" stroke-width="1">
                        <line x1="70" y1="162" x2="70" y2="334"/>
                        <line x1="82" y1="162" x2="82" y2="334"/>
                        <line x1="94" y1="162" x2="94" y2="334"/>
                        <line x1="126" y1="162" x2="126" y2="334"/>
                        <line x1="138" y1="162" x2="138" y2="334"/>
                        <line x1="150" y1="162" x2="150" y2="334"/>
                    </g>

                    {{-- Guía: 90 cm de caída libre (y100 a y370) y 10 cm de frenado (y370 a y400) --}}
                    <line x1="110" y1="100" x2="110" y2="370" stroke="#8f2d1f" stroke-width="3"/>
                    <line x1="110" y1="370" x2="110" y2="398" stroke="#221e1a" stroke-width="4"/>

                    {{-- Silueta de King Kong estático en la punta (103 cm · azotea / mástil) --}}
                    <g fill="#181513">
                        <ellipse cx="118" cy="86" rx="7" ry="6"/>
                        <circle cx="116" cy="77" r="4.2"/>
                        <path d="M113 82 L106 76" stroke="#181513" stroke-width="2.6" stroke-linecap="round"/>
                        <path d="M122 83 L127 89" stroke="#181513" stroke-width="2.6" stroke-linecap="round"/>
                    </g>

                    {{-- Marcador de inicio de caída del carrito (100 cm · y100 · 20 cm de ancho) --}}
                    <rect x="86" y="96" width="48" height="8" fill="#221e1a"/>
                    <rect x="89" y="98" width="42" height="4" fill="#a6844a"/>

                    {{-- Suelo --}}
                    <line x1="20" y1="400" x2="200" y2="400" stroke="#221e1a" stroke-width="1.5"/>
                    <g stroke="#a89a83" stroke-width="1">
                        <path d="M30 400 L22 410 M50 400 L42 410 M70 400 L62 410 M90 400 L82 410 M110 400 L102 410 M130 400 L122 410 M150 400 L142 410 M170 400 L162 410 M190 400 L182 410"/>
                    </g>

                    {{-- Líneas de cota --}}
                    <g stroke="#221e1a" stroke-width="1">
                        <line x1="210" y1="40" x2="210" y2="400"/>
                        <path d="M205 40 H215 M205 91 H215 M205 100 H215 M205 370 H215 M205 400 H215"/>
                    </g>
                    <g stroke="#a89a83" stroke-width="1" stroke-dasharray="3 3">
                        <path d="M112 40 H205 M125 91 H205 M135 100 H205 M171 370 H205"/>
                    </g>
                    <circle cx="210" cy="100" r="2.5" fill="#8f2d1f"/>

                    <text x="222" y="44"><tspan class="esb-dim-value">120 cm</tspan>  Aguja</text>
                    <text x="222" y="89"><tspan class="esb-dim-value">103 cm</tspan>  Azotea · Kong fijo</text>
                    <text x="222" y="104"><tspan class="esb-dim-value">100 cm</tspan>  Inicio de caída</text>
                    <text x="222" y="374"><tspan class="esb-dim-value">10 cm</tspan>  Frenado</text>
                    <text x="222" y="404"><tspan class="esb-dim-value">0</tspan>  Nivel de calle</text>
                </svg>

                <div class="esb-elevation-legend">
                    <span class="esb-legend-item">
                        <span class="esb-legend-swatch esb-legend-swatch--drop" aria-hidden="true"></span>
                        Zona de caída libre (90 cm)
                    </span>
                    <span class="esb-legend-item">
                        <span class="esb-legend-swatch esb-legend-swatch--brake" aria-hidden="true"></span>
                        Zona de frenado (10 cm)
                    </span>
                </div>

                <figcaption class="esb-caption">
                    <span>Alzado frontal</span>
                    <span>Esc. ~1:370</span>
                </figcaption>
            </figure>

            <div>
                <table class="esb-table">
                    <thead>
                        <tr>
                            <th scope="col">Elemento</th>
                            <th scope="col">Real</th>
                            <th scope="col">Maqueta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Altura hasta la azotea</td>
                            <td>381 m</td>
                            <td>103 cm</td>
                        </tr>
                        <tr>
                            <td>Altura con aguja</td>
                            <td>443 m</td>
                            <td>120 cm aprox.</td>
                        </tr>
                        <tr>
                            <td>Zona de caída libre</td>
                            <td>330 m</td>
                            <td>90 cm</td>
                        </tr>
                        <tr>
                            <td>Zona de frenado</td>
                            <td>37 m</td>
                            <td>10 cm</td>
                        </tr>
                        <tr>
                            <td>King Kong</td>
                            <td>7,6 m</td>
                            <td>Estático en la punta</td>
                        </tr>
                        <tr>
                            <td>Carrito</td>
                            <td>16 pasajeros</td>
                            <td>20 cm de ancho</td>
                        </tr>
                    </tbody>
                </table>

                <p class="esb-note">
                    Kong (fijo en la punta) y el carrito se modelaron a una escala mayor que la del edificio.
                    Si se hubieran hecho a 1:370 exacto, Kong mediría apenas 2 cm.
                </p>
            </div>

        </div>
    </div>
</section>
