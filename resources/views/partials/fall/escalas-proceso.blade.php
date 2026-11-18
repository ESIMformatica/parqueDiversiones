<section class="esb-bay" id="escalas" aria-labelledby="esb-scales-title">
    <div class="esb-plaque">

        <header class="esb-section-head">
            <div>
                <p class="esb-label esb-label--accent">Escalas</p>
                <h2 class="esb-heading" id="esb-scales-title">De 443 metros a 88 centímetros</h2>
            </div>
            <p class="esb-text">
                El edificio se redujo a escala 1:500 para que cupiera en el parque. Kong y el carrito
                se hicieron más grandes de lo que les corresponde, para que se lean bien de lejos.
            </p>
        </header>

        <div class="esb-scales">

            <figure class="esb-elevation">
                <svg viewBox="0 0 360 430" role="img" aria-label="Alzado de la maqueta con sus alturas principales">
                    {{-- Silueta --}}
                    <path d="M50 400 V336 H60 V150 H74 V122 H86 V106 H96 V89 H103 V58 H109 V40 H111 V58 H117 V89 H124 V106 H134 V122 H146 V150 H160 V336 H170 V400 Z" fill="#ddd3c1" stroke="#221e1a" stroke-width="1.2"/>
                    <g stroke="#c9bda8" stroke-width="1">
                        <line x1="70" y1="160" x2="70" y2="330"/>
                        <line x1="82" y1="160" x2="82" y2="330"/>
                        <line x1="94" y1="160" x2="94" y2="330"/>
                        <line x1="126" y1="160" x2="126" y2="330"/>
                        <line x1="138" y1="160" x2="138" y2="330"/>
                        <line x1="150" y1="160" x2="150" y2="330"/>
                    </g>

                    {{-- Guía: tramo de caída y tramo de frenado --}}
                    <line x1="110" y1="105" x2="110" y2="343" stroke="#8f2d1f" stroke-width="3"/>
                    <line x1="110" y1="343" x2="110" y2="398" stroke="#221e1a" stroke-width="4"/>
                    <rect x="101" y="100" width="18" height="8" fill="#221e1a"/>

                    {{-- Suelo --}}
                    <line x1="20" y1="400" x2="200" y2="400" stroke="#221e1a" stroke-width="1.5"/>
                    <g stroke="#a89a83" stroke-width="1">
                        <path d="M30 400 L22 410 M50 400 L42 410 M70 400 L62 410 M90 400 L82 410 M110 400 L102 410 M130 400 L122 410 M150 400 L142 410 M170 400 L162 410 M190 400 L182 410"/>
                    </g>

                    {{-- Líneas de cota --}}
                    <g stroke="#221e1a" stroke-width="1">
                        <line x1="210" y1="40" x2="210" y2="400"/>
                        <path d="M205 40 H215 M205 89 H215 M205 105 H215 M205 343 H215 M205 400 H215"/>
                    </g>
                    <g stroke="#a89a83" stroke-width="1" stroke-dasharray="3 3">
                        <path d="M112 40 H205 M125 89 H205 M120 105 H205 M171 343 H205"/>
                    </g>

                    <text x="222" y="44"><tspan class="esb-dim-value">88 cm</tspan>  Aguja</text>
                    <text x="222" y="93"><tspan class="esb-dim-value">76 cm</tspan>  Azotea</text>
                    <text x="222" y="109"><tspan class="esb-dim-value">72 cm</tspan>  Kong suelta</text>
                    <text x="222" y="347"><tspan class="esb-dim-value">14 cm</tspan>  Frenado</text>
                    <text x="222" y="404"><tspan class="esb-dim-value">0</tspan>  Nivel de calle</text>
                </svg>
                <figcaption class="esb-caption">
                    <span>Alzado frontal</span>
                    <span>Esc. 1:500</span>
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
                            <td>76 cm</td>
                        </tr>
                        <tr>
                            <td>Altura con aguja</td>
                            <td>443 m</td>
                            <td>88 cm</td>
                        </tr>
                        <tr>
                            <td>Recorrido de caída</td>
                            <td>320 m</td>
                            <td>58 cm</td>
                        </tr>
                        <tr>
                            <td>Zona de frenado</td>
                            <td>70 m</td>
                            <td>14 cm</td>
                        </tr>
                        <tr>
                            <td>King Kong (altura)</td>
                            <td>7,6 m</td>
                            <td>14 cm</td>
                        </tr>
                        <tr>
                            <td>Carrito</td>
                            <td>16 pasajeros</td>
                            <td>8 cm</td>
                        </tr>
                    </tbody>
                </table>

                <p class="esb-note">
                    Kong y el carrito se modelaron a una escala más grande que la del edificio. Si se hubieran
                    hecho a 1:500 exacto, Kong mediría apenas 1,5 cm.
                </p>
            </div>

        </div>
    </div>
</section>
