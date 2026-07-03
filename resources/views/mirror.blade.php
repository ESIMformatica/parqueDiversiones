<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - Mirror Maze & Slug Cat Robot</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/mirrorstyle.css') }}">
    
</head>
<body>

    <header>

      <div class="logo">
           <img src="{{ asset('imagenesMirror/logomirror.png') }}" alt="Mirror Maze Logo">
      </div>

      <h1>¡Bienvenido a la aventura!</h1>

    </header>

    <main>

        <section class="hero">

            <div class="hero-text">
                <h2>¿De qué trata el proyecto?</h2>

                <p>
                    Este proyecto combina robótica, electrónica, programación,
                    impresión 3D y realidad virtual para desarrollar una experiencia
                    interactiva compuesta por dos elementos principales:
                    un Laberinto de Espejos y un Robot inspirado en Slug Cat.
                </p>

                <p>
                    Ambos proyectos trabajan en conjunto para demostrar la aplicación
                    de distintas tecnologías en el diseño de experiencias recreativas
                    e inmersivas.
                </p>
            </div>

            <div class="hero-image">
                <img src="{{ asset('imagenesMirror/mirrormaze.png') }}" alt="Mirror Maze">
            </div>

        </section>

        <section class="about">

            <h2>Mirror Maze</h2>

            <p>
                El Mirror Maze es una maqueta inspirada en las atracciones de parques
                de diversiones. Está construida con paredes de acrílico espejado que
                generan ilusiones ópticas y dificultan encontrar la salida del recorrido.
            </p>

        </section>

        <section class="robot">

            <h2>Robot Slug Cat</h2>

            <p>
                El robot está inspirado en el personaje Slug Cat del videojuego
                Rain World. Cuenta con una cabeza articulada mediante un servomotor,
                una cámara integrada y comunicación inalámbrica con una aplicación
                de realidad virtual desarrollada para controlar sus movimientos.
            </p>

        </section>

        <section class="technologies">

            <h2>Tecnologías utilizadas</h2>

            <ul>
                <li>ESP32-S3</li>
                <li>Programación</li>
                <li>Electrónica</li>
                <li>Impresión 3D</li>
                <li>Realidad Virtual</li>
                <li>Modelado 3D</li>
                <li>Servomotores</li>
                <li>Cámara OV3660</li>
            </ul>

        </section>

        <section class="objectives">

            <h2>Objetivos</h2>

            <ul>
                <li>Construir una maqueta funcional de un laberinto de espejos.</li>
                <li>Desarrollar un robot inspirado en Slug Cat.</li>
                <li>Aplicar conocimientos de programación, electrónica y diseño.</li>
                <li>Integrar realidad virtual con robótica.</li>
                <li>Crear una experiencia inmersiva e interactiva.</li>
            </ul>

        </section>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Proyecto Tecnológico</p>
    </footer>

</body>
</html>