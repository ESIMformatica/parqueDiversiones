<?php

/*
|--------------------------------------------------------------------------
| Mapa del parque
|--------------------------------------------------------------------------
|
| IMÁGENES (no hace falta tocar este archivo para agregarlas):
|   - Fondo del mapa:  public/img/mapa/fondo.(webp|png|jpg|svg)
|   - Cada atracción:  public/img/atracciones/{id}.(webp|png)   <- PNG/WEBP con fondo transparente
|
| Si el archivo existe, se usa automáticamente (con contorno luminoso).
| Si no existe, se muestra el ícono con emoji y el dibujo de respaldo.
|
| POSICIÓN (igual que antes):
|   x     = % desde la izquierda (0 a 100)
|   y     = % desde arriba       (0 a 100)
|   ancho = ancho de la imagen como % del ancho del mapa (opcional, por defecto 12)
|
| TIP: abrí la página con  /?coords  y hacé click en el mapa para ver
|      las coordenadas x / y de ese punto.
|
*/

return [

    // Ruta del fondo SIN extensión (dentro de /public)
    'fondo' => 'img/mapa/fondo',

    // Proporción del mapa (ancho / alto). Ponela igual a la de tu imagen de fondo.
    'proporcion' => '1 / 1',

    'lugares' => [
        [
            'id'     => 'mirror',   // nombre del archivo de imagen: mirror.png
            'ruta'   => 'mirror',   // nombre de la ruta de Laravel
            'nombre' => 'Mirror Maze',
            'emoji'  => '🪞',
            'x' => 16.2, 'y' => 15, 'ancho' => 20,
            'color'  => 'var(--purple)',
            'texto'  => 'Descripción de Mirror Maze. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'fall',
            'ruta'   => 'fall',
            'nombre' => 'Fall',
            'emoji'  => '🪂',
            'x' => 90, 'y' => 54, 'ancho' => 27,
            'color'  => 'var(--orange)',
            'texto'  => 'Descripción de Fall. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'roller',
            'ruta'   => 'roller',
            'nombre' => 'Roller',
            'emoji'  => '🎢',
            'x' => 70, 'y' => 19, 'ancho' => 20,
            'color'  => 'var(--green)',
            'texto'  => 'Descripción de Roller. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'boo',
            'ruta'   => 'boo',
            'nombre' => 'Boo’s Pathways',
            'emoji'  => '👻',
            'x' => 23, 'y' => 82, 'ancho' => 40,
            'color'  => 'var(--purple)',
            'texto'  => 'Descripción de Boo’s Pathways. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'carousel',
            'ruta'   => 'carousel',
            'nombre' => 'Carousel',
            'emoji'  => '🎠',
            'x' => 64, 'y' => 51, 'ancho' => 12,
            'color'  => 'var(--orange)',
            'texto'  => 'Descripción de Carousel. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'pirate',
            'ruta'   => 'pirate',
            'nombre' => 'Pirate Ship',
            'emoji'  => '🏴‍☠️',
            'x' => 85, 'y' => 82.8, 'ancho' => 24,
            'color'  => 'var(--green)',
            'texto'  => 'Descripción de Pirate Ship. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'worm',
            'ruta'   => 'worm',
            'nombre' => 'Crazy Worm',
            'emoji'  => '🐛',
            'x' => 14, 'y' => 48, 'ancho' => 25,
            'color'  => 'var(--purple)',
            'texto'  => 'Descripción de Crazy Worm. (Reemplazar por el texto real).',
        ],
        [
            'id'     => 'kamikaze',
            'ruta'   => 'kamikaze',
            'nombre' => 'Ochurus',
            'emoji'  => '🌀',
            'x' => 41, 'y' => 45, 'ancho' => 20,
            'color'  => 'var(--orange)',
            'texto'  => 'Descripción de Ochurus. (Reemplazar por el texto real).',
        ],
    ],

];
