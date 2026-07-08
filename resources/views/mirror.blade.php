<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Maze & Slug Cat Robot — Wii Zone</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/mirrorstyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

    <!-- ===================================================
         PANTALLA DE CARGA ESTILO "LECTURA DE DISCO" WII
    =================================================== -->
    <div id="disc-loader" aria-hidden="true">
        <div class="disc">
            <div class="disc-shine"></div>
            <div class="disc-hole"></div>
        </div>
        <p class="loader-text">Leyendo disco<span class="dots"><span>.</span><span>.</span><span>.</span></span></p>
    </div>

    <!-- ===================================================
         BARRA SUPERIOR ESTILO CANAL WII
    =================================================== -->
    <div id="scroll-progress" role="progressbar" aria-label="Progreso de lectura"></div>

    <div id="wii-topbar">
        <div class="wii-topbar-left">
            <span class="wii-dot"></span>
            <span id="wii-clock">00:00</span>
        </div>

        <nav class="wii-topbar-nav" aria-label="Accesos directos">
            <a href="#inicio">Inicio</a>
            <a href="#maze">Mirror Maze</a>
            <a href="#robot">Slug Cat</a>
            <a href="#tech">Tecnologías</a>
            <a href="#logros">Logros</a>
        </nav>

        <div class="wii-topbar-right">
            <button id="sound-toggle" class="wii-icon-btn" aria-pressed="false" title="Activar/Desactivar sonido">
                <span class="icon-sound">🔊</span>
            </button>
        </div>
    </div>

    <!-- ===================================================
         TOASTS DE LOGROS
    =================================================== -->
    <div id="achievement-toast-container" aria-live="polite"></div>

    <header id="inicio">

        <div class="logo floaty">
            <img src="{{ asset('imagenesMirror/logomirror.png') }}" alt="Mirror Maze Logo">
        </div>

        <h1>¡Bienvenido a la aventura!</h1>
        <h2>Un mundo de espejos, robots y realidad virtual te espera</h2>

        <button id="start-btn" class="wii-button wii-button-big">
            <span class="wii-button-shine"></span>
            ▶ Empezar aventura
        </button>

        <div class="scroll-hint">
            <span>Desliza para explorar</span>
            <div class="scroll-hint-arrow">⌄</div>
        </div>

    </header>

    <main>

        <!-- ===================================================
             MENÚ DE CANALES (estilo Wii Menu)
        =================================================== -->
        <section class="channel-menu reveal" aria-label="Menú de secciones">
            <h2 class="section-eyebrow">Menú principal</h2>
            <div class="channel-grid">

                <a href="#maze" class="channel-tile" data-tile="maze">
                    <div class="channel-icon">🪞</div>
                    <span class="channel-label">Mirror Maze</span>
                </a>

                <a href="#robot" class="channel-tile" data-tile="robot">
                    <div class="channel-icon">🤖</div>
                    <span class="channel-label">Slug Cat</span>
                </a>

                <a href="#tech" class="channel-tile" data-tile="tech">
                    <div class="channel-icon">⚙️</div>
                    <span class="channel-label">Tecnologías</span>
                </a>

                <a href="#objetivos" class="channel-tile" data-tile="objetivos">
                    <div class="channel-icon">🎯</div>
                    <span class="channel-label">Objetivos</span>
                </a>

                <a href="#logros" class="channel-tile" data-tile="logros">
                    <div class="channel-icon">🏆</div>
                    <span class="channel-label">Logros</span>
                </a>

                <a href="#stats" class="channel-tile" data-tile="stats">
                    <div class="channel-icon">📊</div>
                    <span class="channel-label">Datos curiosos</span>
                </a>

            </div>
        </section>

        <!-- ===================================================
             PRESENTACIÓN DEL PROYECTO (HERO)
        =================================================== -->
        <section class="hero reveal card-3d">

            <div class="hero-text">
                <span class="section-eyebrow">De qué trata</span>
                <h2>Robótica, espejos y realidad virtual en un solo proyecto</h2>

                <p>
                    Este proyecto combina robótica, electrónica, programación,
                    impresión 3D y realidad virtual para desarrollar una experiencia
                    interactiva compuesta por dos elementos principales:
                    un <strong>Laberinto de Espejos</strong> y un <strong>Robot inspirado en Slug Cat</strong>.
                </p>

                <p>
                    Ambos proyectos trabajan en conjunto para demostrar la aplicación
                    de distintas tecnologías en el diseño de experiencias recreativas
                    e inmersivas.
                </p>
            </div>

            <div class="hero-image">
                <img src="{{ asset('imagenesMirror/mirrormaze.png') }}" alt="Mirror Maze" class="floaty-slow">
            </div>

        </section>

        <!-- ===================================================
             MIRROR MAZE
        =================================================== -->
        <section id="maze" class="reveal card-3d">
            <span class="section-eyebrow">Canal 01</span>
            <h2>🪞 Mirror Maze</h2>

            <p>
                El Mirror Maze es una maqueta inspirada en las atracciones de parques
                de diversiones. Está construida con paredes de acrílico espejado que
                generan ilusiones ópticas y dificultan encontrar la salida del recorrido.
            </p>

            <div class="mini-stats">
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="1">0</span>
                    <span class="mini-stat-label">Laberinto</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="360">0</span>
                    <span class="mini-stat-label">Grados de reflejo</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="100">0</span>
                    <span class="mini-stat-label">% ilusión óptica</span>
                </div>
            </div>
        </section>

        <!-- ===================================================
             SLUG CAT ROBOT
        =================================================== -->
        <section id="robot" class="reveal card-3d">
            <span class="section-eyebrow">Canal 02</span>
            <h2>🤖 Robot Slug Cat</h2>

            <p>
                El robot está inspirado en el personaje Slug Cat del videojuego
                Rain World. Cuenta con una cabeza articulada mediante un servomotor,
                una cámara integrada y comunicación inalámbrica con una aplicación
                de realidad virtual desarrollada para controlar sus movimientos.
            </p>

            <div class="mini-stats">
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="1">0</span>
                    <span class="mini-stat-label">Servomotor</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="1">0</span>
                    <span class="mini-stat-label">Cámara OV3660</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="0">0</span>
                    <span class="mini-stat-label">Cables a la vista</span>
                </div>
            </div>
        </section>

        <!-- ===================================================
             TECNOLOGÍAS
        =================================================== -->
        <section id="tech" class="reveal card-3d">
            <span class="section-eyebrow">Canal 03</span>
            <h2>⚙️ Tecnologías utilizadas</h2>

            <ul class="tech-grid">
                <li class="tech-chip">ESP32-S3</li>
                <li class="tech-chip">Programación</li>
                <li class="tech-chip">Electrónica</li>
                <li class="tech-chip">Impresión 3D</li>
                <li class="tech-chip">Realidad Virtual</li>
                <li class="tech-chip">Modelado 3D</li>
                <li class="tech-chip">Servomotores</li>
                <li class="tech-chip">Cámara OV3660</li>
            </ul>
        </section>

        <!-- ===================================================
             OBJETIVOS
        =================================================== -->
        <section id="objetivos" class="reveal card-3d">
            <span class="section-eyebrow">Canal 04</span>
            <h2>🎯 Objetivos</h2>

            <ul class="objective-list">
                <li><span class="objective-check">✔</span> Construir una maqueta funcional de un laberinto de espejos.</li>
                <li><span class="objective-check">✔</span> Desarrollar un robot inspirado en Slug Cat.</li>
                <li><span class="objective-check">✔</span> Aplicar conocimientos de programación, electrónica y diseño.</li>
                <li><span class="objective-check">✔</span> Integrar realidad virtual con robótica.</li>
                <li><span class="objective-check">✔</span> Crear una experiencia inmersiva e interactiva.</li>
            </ul>
        </section>

        <!-- ===================================================
             DATOS CURIOSOS / CONTADORES
        =================================================== -->
        <section id="stats" class="reveal card-3d">
            <span class="section-eyebrow">Canal 05</span>
            <h2>📊 Datos curiosos del proyecto</h2>

            <div class="mini-stats mini-stats-wide">
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="8">0</span>
                    <span class="mini-stat-label">Tecnologías integradas</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="2">0</span>
                    <span class="mini-stat-label">Sistemas principales</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="5">0</span>
                    <span class="mini-stat-label">Objetivos cumplidos</span>
                </div>
                <div class="mini-stat">
                    <span class="mini-stat-number" data-count="100">0</span>
                    <span class="mini-stat-label">% diversión garantizada</span>
                </div>
            </div>
        </section>

        <!-- ===================================================
             LOGROS DESBLOQUEABLES
        =================================================== -->
        <section id="logros" class="reveal">
            <span class="section-eyebrow">Canal 06</span>
            <h2>🏆 Logros</h2>
            <p>Explora la página para desbloquear medallas. ¡Recorre todas las secciones!</p>

            <div class="achievements-shelf" id="achievements-shelf">
                <!-- Las medallas se generan e iluminan vía mirror.js -->
                <div class="achievement-badge" data-achievement="inicio">
                    <div class="badge-icon">🌟</div>
                    <span class="badge-name">Bienvenida</span>
                </div>
                <div class="achievement-badge" data-achievement="maze">
                    <div class="badge-icon">🪞</div>
                    <span class="badge-name">Exsplorador del laberinto</span>
                </div>
                <div class="achievement-badge" data-achievement="robot">
                    <div class="badge-icon">🤖</div>
                    <span class="badge-name">Amigo de Slug Cat</span>
                </div>
                <div class="achievement-badge" data-achievement="tech">
                    <div class="badge-icon">⚙️</div>
                    <span class="badge-name">Mente técnica</span>
                </div>
                <div class="achievement-badge" data-achievement="objetivos">
                    <div class="badge-icon">🎯</div>
                    <span class="badge-name">Visionario</span>
                </div>
                <div class="achievement-badge" data-achievement="stats">
                    <div class="badge-icon">📊</div>
                    <span class="badge-name">Curioso de datos</span>
                </div>
                <div class="achievement-badge" data-achievement="completo">
                    <div class="badge-icon">👑</div>
                    <span class="badge-name">¡Maestro Wii!</span>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="footer-disc">💽</div>
        <p>&copy; <?php echo date("Y"); ?> - Proyecto Tecnológico</p>
        <p class="footer-sub">Hecho con cariño, tornillos y muchos "espejos".</p>
    </footer>

    <!-- Canvas para partículas / burbujas flotantes -->
    <canvas id="bubble-canvas" aria-hidden="true"></canvas>
   
    <!-- Música de fondo -->
    <audio id="background-music" loop>
     <source src="{{ asset('music/mirror.mp3') }}" type="audio/mpeg">
    </audio>

    <!-- JS -->
    <script src="{{ asset('js/mirror.js') }}"></script>
</body>
</html>