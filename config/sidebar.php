<?php

// Fuente única de verdad para el menú del sidebar.
// Cada item usa el NOMBRE de la ruta (no la URL) para que el estado
// "activo" se calcule solo, sin tocar el Blade cuando agregues páginas.
//
// 'method' es opcional y solo hace falta para acciones que deben ir
// por POST (ej: logout).

return [

    'sections' => [

        [

            'label' => 'Proyecto',

            'items' => [

                [
                    'label' => 'Mirror Maze',
                    'route' => 'mirror'
                ],

                [
                    'label' => 'Robot',
                    'route' => 'robot'
                ],

                [
                    'label' => 'Galería',
                    'route' => 'galeria'
                ]

            ]

        ]

    ]

];
