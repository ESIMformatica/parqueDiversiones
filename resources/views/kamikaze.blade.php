<x-layout.appMirror title="Ochurus | La aventura del movimiento">
    <x-slot:sidebar>
        <x-layout.attraction-sidebar theme="kamikaze" />
    </x-slot:sidebar>

    <x-slot:head>
        <meta name="description" content="Conocé Ochurus: una atracción tipo kamikaze donde el movimiento, la emoción y la tecnología se encuentran.">
        <meta name="theme-color" content="#11132b">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/ochurus.css') }}">
    </x-slot:head>

    <div class="ochurus-page">
    <!-- Pantalla de bienvenida -->
    <div id="ochurus-loader" aria-hidden="true">
        <div class="loader-mark">
            <span class="loader-arm"></span>
            <span class="loader-hub"></span>
            <span class="loader-seat loader-seat-left"></span>
            <span class="loader-seat loader-seat-right"></span>
        </div>
        <p>Preparando la aventura<span class="loader-dots">...</span></p>
    </div>

    <div id="ochurus-progress" role="progressbar" aria-label="Progreso de la página"></div>

    <div class="ochurus-topbar">
        <a class="brand-mini" href="#inicio" aria-label="Ochurus, volver al inicio">
            <span class="brand-symbol">O</span>
            <span>OCHURUS</span>
        </a>

        <nav class="topbar-nav" aria-label="Navegación principal">
            <a href="#inicio">Inicio</a>
            <a href="#atraccion">La atracción</a>
            <a href="#experiencia">Experiencia</a>
            <a href="#tecnologia">Tecnología</a>
            <a href="#logros">Logros</a>
        </nav>

        <div class="topbar-clock"><span class="clock-dot"></span><span id="ochurus-clock">00:00</span></div>
    </div>

    <div id="ochurus-toast-area" aria-live="polite"></div>

    <!-- Portada -->
    <header id="inicio" class="hero">
        <div class="hero-noise"></div>
        <div class="hero-orbit orbit-one"></div>
        <div class="hero-orbit orbit-two"></div>

        <div class="hero-content">
            <span class="eyebrow eyebrow-light"><span class="eyebrow-star">✦</span> Una atracción para vivirla</span>
            <h1>OCHU<span>R</span>US<span class="title-exclaim">!</span></h1>
            <p class="hero-subtitle">Agarrate fuerte.<br><strong>¡La diversión está por dar una vuelta!</strong></p>
            <p class="hero-description">Una experiencia inspirada en el clásico kamikaze de los parques de diversiones: movimiento, balanceo y muchas ganas de repetir.</p>
            <a href="#atraccion" class="main-button"><span>Descubrir Ochurus</span><span class="button-arrow">↘</span></a>
            <div class="hero-note"><span class="note-line"></span> PROYECTO · ATRACCIÓN TIPO MARTILLO</div>
        </div>

        <div class="hero-art" aria-label="Fotografía de la maqueta de Ochurus">
            <div class="hero-sticker sticker-top">¡SUBITE!</div>
            <div class="hero-photo-frame">
                <img src="{{ asset('imagenesOchurus/ochurus-maqueta.jpg') }}" alt="Maqueta de la atracción Ochurus" fetchpriority="high">
            </div>
            <div class="hero-sticker sticker-bottom">DIVERSIÓN<br>EN MOVIMIENTO</div>
            <span class="hero-spark spark-one">✳</span>
            <span class="hero-spark spark-two">✦</span>
        </div>

        <a class="scroll-cue" href="#menu"><span>Deslizá para explorar</span><b>⌄</b></a>
        <div class="hero-side-label">OCHURUS · RIDE EXPERIENCE</div>
    </header>

    <main>
        <!-- Menú de secciones -->
        <section id="menu" class="channel-menu reveal-section">
            <div class="section-heading centered-heading">
                <span class="eyebrow">Tu recorrido empieza acá</span>
                <h2>Elegí tu próxima <span>parada</span></h2>
                <p>Explorá cada rincón de Ochurus.</p>
            </div>

            <div class="channel-grid">
                <a href="#atraccion" class="channel-tile tile-red" data-achievement="atraccion">
                    <span class="tile-number">01</span><span class="tile-icon">🎡</span><strong>La atracción</strong><small>Conocé Ochurus</small>
                </a>
                <a href="#experiencia" class="channel-tile tile-yellow" data-achievement="experiencia">
                    <span class="tile-number">02</span><span class="tile-icon">⚡</span><strong>La experiencia</strong><small>¿Qué se siente?</small>
                </a>
                <a href="#partes" class="channel-tile tile-green" data-achievement="partes">
                    <span class="tile-number">03</span><span class="tile-icon">🔩</span><strong>Sus partes</strong><small>Un vistazo de cerca</small>
                </a>
                <a href="#tecnologia" class="channel-tile tile-blue" data-achievement="tecnologia">
                    <span class="tile-number">04</span><span class="tile-icon">⚙️</span><strong>Tecnología</strong><small>Cómo cobra vida</small>
                </a>
                <a href="#objetivos" class="channel-tile tile-purple" data-achievement="objetivos">
                    <span class="tile-number">05</span><span class="tile-icon">🎯</span><strong>Objetivos</strong><small>La idea del proyecto</small>
                </a>
                <a href="#logros" class="channel-tile tile-dark">
                    <span class="tile-number">06</span><span class="tile-icon">🏆</span><strong>Logros</strong><small>Completá el recorrido</small>
                </a>
            </div>
        </section>

        <!-- Presentación -->
        <section id="atraccion" class="intro-section reveal-section">
            <div class="intro-copy">
                <span class="eyebrow eyebrow-red">Canal 01 · Conocé la atracción</span>
                <h2>No es un paseo tranquilo.<br><span>¡Es Ochurus!</span></h2>
                <p>Ochurus es una maqueta de una atracción mecánica inspirada en el <strong>kamikaze</strong>, también conocido como martillo. Su propuesta es recrear esa sensación tan característica de ir de un lado al otro, ganar altura y sentir cómo cambia la dirección del movimiento.</p>
                <p>La estructura, los asientos y el sistema de movimiento se combinan para representar una atracción pensada para quienes buscan emoción y diversión.</p>
                <div class="intro-highlight"><span class="highlight-icon">✦</span><span>Un clásico de los parques de diversiones, llevado a nuestro propio proyecto.</span></div>
            </div>
            <div class="intro-visual">
                <div class="photo-label">EL PROYECTO OCHURUS <span>★</span></div>
                <img src="{{ asset('imagenesOchurus/ochurus-estructura.jpg') }}" alt="Vista de la estructura principal y los laterales de la maqueta de Ochurus" loading="lazy">
                <div class="visual-caption">Diseño y construcción de nuestra maqueta</div>
            </div>
        </section>

        <!-- Experiencia -->
        <section id="experiencia" class="experience-section reveal-section">
            <div class="section-heading">
                <span class="eyebrow eyebrow-light">Canal 02 · La experiencia</span>
                <h2>¿Listo para sentir <span>el movimiento?</span></h2>
                <p>La esencia de un kamikaze está en cómo cambia el recorrido a medida que la atracción se mueve.</p>
            </div>

            <div class="experience-grid">
                <article class="experience-card experience-card-red">
                    <div class="experience-icon">↗</div><span class="card-kicker">01 / IMPULSO</span>
                    <h3>De un lado al otro</h3>
                    <p>El movimiento pendular transforma un simple balanceo en un recorrido lleno de emoción.</p>
                    <div class="card-decoration">〰</div>
                </article>
                <article class="experience-card experience-card-yellow">
                    <div class="experience-icon">⤴</div><span class="card-kicker">02 / ALTURA</span>
                    <h3>Cada vez más arriba</h3>
                    <p>La inclinación y la altura forman parte de esa sensación de estar en una atracción de parque.</p>
                    <div class="card-decoration">✳</div>
                </article>
                <article class="experience-card experience-card-green">
                    <div class="experience-icon">✦</div><span class="card-kicker">03 / DIVERSIÓN</span>
                    <h3>¡Una vuelta más!</h3>
                    <p>El objetivo es compartir una experiencia entretenida, dinámica y diferente.</p>
                    <div class="card-decoration">★</div>
                </article>
            </div>
        </section>

        <!-- Galería de partes -->
        <section id="partes" class="parts-section reveal-section">
            <div class="section-heading centered-heading">
                <span class="eyebrow eyebrow-red">Canal 03 · Mirá más de cerca</span>
                <h2>Una atracción, <span>muchos detalles</span></h2>
                <p>Cada elemento aporta algo a la maqueta y a la experiencia que representa.</p>
            </div>

            <div class="parts-grid">
                <article class="part-card part-card-large">
                    <div class="part-image"><img src="{{ asset('imagenesOchurus/ochurus-estructura.jpg') }}" alt="Estructura central y cuerpo de la maqueta" loading="lazy"></div>
                    <div class="part-text"><span>01 · ESTRUCTURA</span><h3>El corazón de Ochurus</h3><p>La estructura sostiene el conjunto y representa el mecanismo principal de la atracción.</p></div>
                </article>
                <article class="part-card">
                    <div class="part-image"><img src="{{ asset('imagenesOchurus/ochurus-asientos.jpg') }}" alt="Detalle de los asientos y barras de protección de la maqueta" loading="lazy"></div>
                    <div class="part-text"><span>02 · ASIENTOS</span><h3>Donde empieza el viaje</h3><p>Los asientos y sus barras representan el espacio de los pasajeros.</p></div>
                </article>
                <article class="part-card">
                    <div class="part-image"><img src="{{ asset('imagenesOchurus/ochurus-control.jpg') }}" alt="Detalle del botón de control de la maqueta" loading="lazy"></div>
                    <div class="part-text"><span>03 · CONTROL</span><h3>Un toque para empezar</h3><p>El botón permite interactuar con el prototipo y poner en marcha la demostración.</p></div>
                </article>
            </div>
        </section>

        <!-- Tecnología -->
        <section id="tecnologia" class="tech-section reveal-section">
            <div class="tech-copy">
                <span class="eyebrow eyebrow-light">Canal 04 · Detrás del movimiento</span>
                <h2>La diversión también tiene <span>ingeniería.</span></h2>
                <p>Para darle movimiento al prototipo se integran componentes electrónicos y programación. El sistema permite controlar el motor y representar el balanceo de la atracción.</p>
                <div class="tech-tags">
                    <span>ESP32</span><span>28BYJ-48</span><span>ULN2003</span><span>Electrónica</span><span>Programación</span><span>Prototipado</span>
                </div>
            </div>
            <div class="tech-diagram" aria-label="Esquema visual de la electrónica del prototipo">
                <div class="diagram-orbit orbit-a"></div><div class="diagram-orbit orbit-b"></div>
                <div class="diagram-center"><span>⚙</span><strong>OCHURUS</strong><small>SISTEMA DE MOVIMIENTO</small></div>
                <div class="diagram-node node-top"><span>▣</span> ESP32</div>
                <div class="diagram-node node-left"><span>ϟ</span> CONTROL</div>
                <div class="diagram-node node-right"><span>↻</span> MOTOR</div>
                <div class="diagram-node node-bottom"><span>⌁</span> MOVIMIENTO</div>
            </div>
        </section>

        <!-- Objetivos -->
        <section id="objetivos" class="objectives-section reveal-section">
            <div class="section-heading centered-heading">
                <span class="eyebrow eyebrow-red">Canal 05 · El desafío</span>
                <h2>¿Qué buscamos <span>lograr?</span></h2>
                <p>Ochurus es una oportunidad para aprender, construir y llevar una idea a algo tangible.</p>
            </div>
            <div class="objective-list">
                <div class="objective-item"><span class="objective-check">✓</span><p>Construir una maqueta inspirada en una atracción tipo kamikaze.</p></div>
                <div class="objective-item"><span class="objective-check">✓</span><p>Representar el movimiento pendular característico de un martillo.</p></div>
                <div class="objective-item"><span class="objective-check">✓</span><p>Integrar programación, electrónica y componentes mecánicos.</p></div>
                <div class="objective-item"><span class="objective-check">✓</span><p>Permitir la interacción con el prototipo mediante un control.</p></div>
                <div class="objective-item"><span class="objective-check">✓</span><p>Crear una experiencia visual y recreativa que invite a conocer el proyecto.</p></div>
            </div>
        </section>

        <!-- Datos -->
        <section id="datos" class="facts-section reveal-section">
            <div class="facts-heading"><span class="eyebrow eyebrow-light">Un proyecto en movimiento</span><h2>Ochurus en <span>números</span></h2></div>
            <div class="facts-grid">
                <div class="fact"><strong data-count="1">0</strong><span>ATRACCIÓN<br>PROTAGONISTA</span></div>
                <div class="fact"><strong data-count="3">0</strong><span>COMPONENTES<br>CLAVE DEL CONTROL</span></div>
                <div class="fact"><strong data-count="5">0</strong><span>OBJETIVOS<br>DEL PROYECTO</span></div>
                <div class="fact"><strong data-count="100">0</strong><span>POR CIENTO<br>ACTITUD</span></div>
            </div>
            <p class="facts-footnote">Los números representan elementos y metas de este prototipo, no especificaciones de una atracción comercial.</p>
        </section>

        <!-- Logros interactivos -->
        <section id="logros" class="achievements-section reveal-section">
            <div class="section-heading centered-heading">
                <span class="eyebrow eyebrow-red">Canal 06 · Explorador Ochurus</span>
                <h2>Desbloqueá los <span>logros</span></h2>
                <p>Recorré la página y descubrí todas las medallas.</p>
            </div>
            <div class="achievement-shelf">
                <div class="achievement" data-medal="inicio"><div class="medal-icon">🎟️</div><strong>Primer ingreso</strong><small>Entraste a Ochurus</small></div>
                <div class="achievement locked" data-medal="atraccion"><div class="medal-icon">🎡</div><strong>Curioso</strong><small>Conociste la atracción</small></div>
                <div class="achievement locked" data-medal="experiencia"><div class="medal-icon">⚡</div><strong>Adrenalina</strong><small>Descubriste la experiencia</small></div>
                <div class="achievement locked" data-medal="partes"><div class="medal-icon">🔩</div><strong>Observador</strong><small>Miraste los detalles</small></div>
                <div class="achievement locked" data-medal="tecnologia"><div class="medal-icon">⚙️</div><strong>Ingeniero</strong><small>Exploraste la tecnología</small></div>
                <div class="achievement locked" data-medal="objetivos"><div class="medal-icon">🎯</div><strong>Visionario</strong><small>Conociste los objetivos</small></div>
                <div class="achievement locked" data-medal="completo"><div class="medal-icon">👑</div><strong>Maestro Ochurus</strong><small>Completaste el recorrido</small></div>
            </div>
            <div class="achievement-progress"><div class="achievement-progress-label"><span>Tu recorrido</span><strong id="achievement-count">1 / 7 logros</strong></div><div class="achievement-track"><span id="achievement-fill"></span></div></div>
        </section>

        <!-- Cierre -->
        <section class="closing-section reveal-section">
            <div class="closing-burst">✳</div>
            <span class="eyebrow eyebrow-light">La aventura te espera</span>
            <h2>¿Te animás a subirte<br>a <span>Ochurus?</span></h2>
            <p>La próxima vuelta puede ser la mejor.</p>
            <a href="#inicio" class="main-button main-button-light"><span>Volver al comienzo</span><span class="button-arrow">↑</span></a>
        </section>
    </main>

    <footer class="ochurus-footer">
        <a class="footer-brand" href="#inicio"><span>O</span> OCHURUS</a>
        <p>Un proyecto hecho para poner la diversión en movimiento.</p>
        <small>© {{ date('Y') }} · Proyecto tecnológico</small>
    </footer>

    <canvas id="confetti-canvas" aria-hidden="true"></canvas>
    <script src="{{ asset('js/ochurus.js') }}" defer></script>

    </div>
</x-layout.appMirror>
