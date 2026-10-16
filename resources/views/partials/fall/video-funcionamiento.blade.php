<div class="floor-spandrel-divider" aria-hidden="true">
    <span>NIVEL INTERMEDIO — TRAMO DE FACHADA CENTRAL</span>
    <span>PISO 68 • 254 METROS</span>
</div>

<section class="facade-section" id="funcionamiento" aria-labelledby="video-title">
    <div>
        <span class="editorial-kicker">Registro Audiovisual y Mecánica</span>
        <h2 class="editorial-heading" id="video-title">
            Funcionamiento de la Atracción
        </h2>
        <p class="editorial-lead" style="max-width: 720px;">
            Demostración en video del recorrido vertical sobre la estructura del Empire State Building y desglose de
            las tres etapas mecánicas que componen el ciclo completo de ascenso y caída.
        </p>
    </div>

    <div class="video-operation-layout">
        <div class="video-stage-frame">
            <div class="video-Viewport-box">
                <video
                    controls
                    preload="metadata"
                    poster="{{ asset('images/fall/video-poster.jpg') }}"
                >
                    <source src="{{ asset('videos/fall/funcionamiento.mp4') }}" type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>
            </div>

            <div class="video-meta-bar">
                <span>ARCHIVO: public/videos/fall/funcionamiento.mp4</span>
                <span>CICLO DE ASCENSO Y CAÍDA</span>
            </div>
        </div>

        <div class="operation-steps-stack" aria-label="Etapas del funcionamiento">
            <article class="operation-step-item">
                <div class="step-header-row">
                    <span class="step-index-tag">FASE 01 — EMBARQUE</span>
                    <span class="step-altitude-tag">PISO 01 • NIVEL BASE</span>
                </div>
                <h3>Acoplamiento en la Base</h3>
                <p>
                    Los pasajeros se ubican en el carrito al pie del edificio. La figura de King Kong, integrada al
                    sistema elevador, sujeta firmemente el chasis antes de iniciar el recorrido vertical.
                </p>
            </article>

            <article class="operation-step-item">
                <div class="step-header-row">
                    <span class="step-index-tag">FASE 02 — ELEVACIÓN</span>
                    <span class="step-altitude-tag">PISO 02 AL PISO 102</span>
                </div>
                <h3>Ascenso con King Kong hasta la Punta</h3>
                <p>
                    A través del riel guía central sobre la fachada del Empire State, King Kong eleva el carrito de
                    manera continua hasta alcanzar la aguja superior en el punto más alto de la maqueta.
                </p>
            </article>

            <article class="operation-step-item">
                <div class="step-header-row">
                    <span class="step-index-tag">FASE 03 — DESPLOME</span>
                    <span class="step-altitude-tag">PISO 102 A BASE</span>
                </div>
                <h3>Liberación y Caída Libre</h3>
                <p>
                    Tras detenerse unos instantes en la cima del edificio, el mecanismo suelta el carrito para que
                    descienda en caída libre vertical por el riel hasta su detención segura en la estación inferior.
                </p>
            </article>
        </div>
    </div>
</section>

