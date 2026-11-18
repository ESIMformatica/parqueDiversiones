<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crazy Worm Ride</title>



    <style>

        *{

            margin:0;

            padding:0;

            box-sizing:border-box;

            font-family: Arial, Helvetica, sans-serif;

        }



        body{

            background:#f4f4f4;

            color:#333;

        }



        header{

            position:relative;

            height:60vh;

            overflow:hidden;

        }



        header video{

            width:100%;

            height:100%;

            object-fit:cover;

        }



        .overlay{

            position:absolute;

            top:0;

            left:0;

            width:100%;

            height:100%;

            background:rgba(0,0,0,.45);

            display:flex;

            justify-content:center;

            align-items:center;

            text-align:center;

        }



        .overlay h1{

            color:white;

            font-size:55px;

            text-shadow:2px 2px 8px black;

        }



        .container{

            width:90%;

            max-width:1200px;

            margin:40px auto;

        }



        .content{

            display:grid;

            grid-template-columns:1fr 1fr;

            gap:40px;

            align-items:center;

        }



        .text h2{

            color:#0d6efd;

            margin-bottom:15px;

            font-size:32px;

        }



        .text p{

            margin-bottom:18px;

            text-align:justify;

            line-height:1.8;

            font-size:17px;

        }



        .gallery{

            margin-top:60px;

        }



        .gallery h2{

            text-align:center;

            color:#0d6efd;

            margin-bottom:30px;

            font-size:32px;

        }



        .images{

            display:grid;

            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

            gap:20px;

        }



        .image-box {

            height: 220px;

            background: white;

            border-radius: 12px;

            overflow: hidden;

        }



        .image-box img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

            transition: transform 0.3s ease;

        }



        .image-box img:hover {

            transform: scale(1.05);

        }



        .features{

            margin-top:60px;

        }



        .features h2{

            color:#0d6efd;

            margin-bottom:20px;

        }



        .features ul{

            padding-left:20px;

            line-height:2;

            font-size:17px;

        }



        footer{

            margin-top:60px;

            background:#222;

            color:white;

            text-align:center;

            padding:20px;

        }



        /* ✅ NUEVOS ESTILOS PARA EL STREAM VR (DUAL) */

        .live-stream-box{

            position: relative;

            width: 100%;

            background: #000;

            border-radius: 12px;

            overflow: hidden;

            border: 3px solid #0d6efd;

            box-shadow: 0 4px 20px rgba(13, 110, 253, 0.2);

        }



        /* Contenedor de los dos streams lado a lado */

        .vr-container {

            display: flex;

            width: 100%;

            aspect-ratio: 3 / 2; /* Proporción HVGA/QVGA */

        }



        /* Cada stream ocupa el 50% del ancho */

        .vr-eye {

            flex: 1;

            position: relative;

            background: #000;

            overflow: hidden;

        }



        /* Línea divisoria en el medio */

        .vr-eye:first-child {

            border-right: 2px solid #333;

        }



        .vr-eye canvas {

            width: 100%;

            height: 100%;

            display: block;

        }



        .live-badge{

            position: absolute;

            top: 12px;

            left: 12px;

            background: #dc3545;

            color: white;

            padding: 4px 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;

            letter-spacing: 1px;

            display: flex;

            align-items: center;

            gap: 6px;

            z-index: 2;

        }



        .live-badge::before{

            content: "";

            width: 8px;

            height: 8px;

            background: white;

            border-radius: 50%;

            animation: pulse 1.5s infinite;

        }



        @keyframes pulse{

            0%   { opacity: 1; }

            50%  { opacity: 0.3; }

            100% { opacity: 1; }

        }



        .stream-status{

            position: absolute;

            bottom: 12px;

            right: 12px;

            padding: 6px 14px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;

            z-index: 2;

        }



        .status-online{

            background: rgba(40, 167, 69, 0.9);

            color: white;

        }



        .status-offline{

            background: rgba(220, 53, 69, 0.9);

            color: white;

        }



        .stream-info{

            position: absolute;

            bottom: 12px;

            left: 12px;

            background: rgba(0,0,0,.65);

            color: #fff;

            font-family: monospace;

            font-size: 11px;

            padding: 4px 8px;

            border-radius: 6px;

            z-index: 2;

        }



        .stream-placeholder{

            position: absolute;

            top: 0; left: 0;

            width: 100%; height: 100%;

            display: flex;

            justify-content: center;

            align-items: center;

            color: #666;

            font-size: 16px;

            text-align: center;

            padding: 20px;

            z-index: 3;

        }




        /* SIDEBAR */
        :root {
            --sidebar-width: 270px;
            --sidebar-collapsed-width: 78px;
            --sidebar-blue: #0d6efd;
        }

        body {
            overflow-x: hidden;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: #fff;
            border-right: 1px solid #e3e8ef;
            box-shadow: 3px 0 18px rgba(0, 0, 0, 0.06);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            transition: width .25s ease, transform .25s ease;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .sidebar-header {
            min-height: 72px;
            padding: 16px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #edf0f4;
        }

        .sidebar-title {
            color: #0d6efd;
            font-size: 21px;
            font-weight: 700;
            white-space: nowrap;
        }

        .sidebar-collapse {
            width: 34px;
            height: 34px;
            border: 0;
            border-radius: 9px;
            background: #eef5ff;
            color: #0d6efd;
            font-size: 27px;
            line-height: 1;
            cursor: pointer;
            transition: background .2s ease;
        }

        .sidebar-collapse:hover {
            background: #dceaff;
        }

        .sidebar-menu {
            padding: 14px 12px 24px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .sidebar-item {
            width: 100%;
            min-height: 46px;
            padding: 10px 12px;
            display: flex;
            align-items: center;
            gap: 13px;
            border: 0;
            border-radius: 10px;
            background: transparent;
            color: #424b57;
            text-decoration: none;
            font-size: 15px;
            text-align: left;
            cursor: pointer;
            transition: background .2s ease, color .2s ease;
        }

        .sidebar-item:hover,
        .sidebar-subitem:hover {
            background: #eef5ff;
            color: #0d6efd;
        }

        .sidebar-item.active,
        .sidebar-subitem.active {
            background: #e7f1ff;
            color: #0d6efd;
            font-weight: 700;
        }

        .sidebar-icon {
            width: 23px;
            height: 23px;
            flex: 0 0 23px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #0d6efd;
        }

        .sidebar-icon svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .sidebar-label,
        .sidebar-chevron {
            white-space: nowrap;
        }

        .sidebar-label {
            flex: 1;
        }

        .sidebar-chevron {
            margin-left: auto;
            font-size: 18px;
            transition: transform .2s ease;
        }

        .sidebar-toggle[aria-expanded="true"] .sidebar-chevron,
        .sidebar-contact-toggle[aria-expanded="true"] .sidebar-chevron {
            transform: rotate(180deg);
        }

        .sidebar-submenu {
            margin: 4px 0 8px 36px;
            padding-left: 12px;
            border-left: 2px solid #dceaff;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .sidebar-submenu[hidden] {
            display: none;
        }

        .sidebar-subitem {
            display: block;
            padding: 9px 10px;
            border-radius: 8px;
            color: #596575;
            text-decoration: none;
            font-size: 14px;
            transition: background .2s ease, color .2s ease;
            overflow-wrap: anywhere;
        }

        .sidebar-contact-info p {
            padding: 8px 10px 2px;
            color: #333;
            font-size: 13px;
        }

        .sidebar-contact-info .sidebar-subitem {
            font-size: 13px;
        }

        .sidebar-overlay {
            display: none;
        }

        .sidebar-mobile-toggle {
            display: none;
        }

        .page-content {
            min-height: 100vh;
            margin-left: var(--sidebar-width);
            transition: margin-left .25s ease;
        }

        body.sidebar-collapsed .sidebar {
            width: var(--sidebar-collapsed-width);
        }

        body.sidebar-collapsed .page-content {
            margin-left: var(--sidebar-collapsed-width);
        }

        body.sidebar-collapsed .sidebar-header {
            justify-content: center;
            padding: 14px 8px;
        }

        body.sidebar-collapsed .sidebar-title,
        body.sidebar-collapsed .sidebar-label,
        body.sidebar-collapsed .sidebar-chevron,
        body.sidebar-collapsed .sidebar-submenu {
            display: none !important;
        }

        body.sidebar-collapsed .sidebar-menu {
            padding-right: 10px;
            padding-left: 10px;
        }

        body.sidebar-collapsed .sidebar-item {
            justify-content: center;
            padding-right: 8px;
            padding-left: 8px;
        }

        body.sidebar-collapsed .sidebar-collapse {
            transform: rotate(180deg);
        }

        @media (max-width: 768px) {
            .sidebar-mobile-toggle {
                display: flex;
                position: fixed;
                top: 12px;
                left: 12px;
                z-index: 998;
                width: 42px;
                height: 42px;
                align-items: center;
                justify-content: center;
                border: 0;
                border-radius: 10px;
                background: #0d6efd;
                color: #fff;
                font-size: 23px;
                box-shadow: 0 3px 12px rgba(0, 0, 0, .2);
                cursor: pointer;
            }

            .sidebar {
                width: min(290px, 85vw);
                transform: translateX(-100%);
            }

            .page-content,
            body.sidebar-collapsed .page-content {
                margin-left: 0;
            }

            body.sidebar-mobile-open .sidebar {
                transform: translateX(0);
            }

            .sidebar-overlay {
                position: fixed;
                inset: 0;
                z-index: 999;
                background: rgba(0, 0, 0, .45);
            }

            body.sidebar-mobile-open .sidebar-overlay {
                display: block;
            }

            body.sidebar-collapsed .sidebar {
                width: min(290px, 85vw);
            }

            body.sidebar-collapsed .sidebar-title,
            body.sidebar-collapsed .sidebar-label,
            body.sidebar-collapsed .sidebar-chevron {
                display: initial !important;
            }

            body.sidebar-collapsed .sidebar-submenu {
                display: flex !important;
            }

            body.sidebar-collapsed .sidebar-header {
                justify-content: space-between;
            }

            body.sidebar-collapsed .sidebar-item {
                justify-content: flex-start;
                padding: 10px 12px;
            }
        }

        @media(max-width:768px){



            .content{

                grid-template-columns:1fr;

            }



            .overlay h1{

                font-size:38px;

            }



        }



    </style>

</head>

<body>

<button class="sidebar-mobile-toggle" type="button"
    aria-label="Abrir menú lateral" aria-controls="sidebar" aria-expanded="false">☰</button>

<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <span class="sidebar-title">Explorar</span>
        <button class="sidebar-collapse" type="button"
            aria-label="Contraer menú lateral"
            aria-controls="sidebar" aria-expanded="true">
            <span>‹</span>
        </button>
    </div>

    <nav class="sidebar-menu" aria-label="Secciones del sitio">
        {{-- INICIO --}}
        <a href="{{ route('inicio') }}"
           class="sidebar-item {{ request()->routeIs('inicio', 'inicio.page') ? 'active' : '' }}"
           {{ request()->routeIs('inicio', 'inicio.page') ? 'aria-current=page' : '' }}>
            <span class="sidebar-icon icon-home">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 10.5 12 3l9 7.5"/>
                    <path d="M5.5 9v11h13V9M9 20v-7h6v7"/>
                </svg>
            </span>
            <span class="sidebar-label">Inicio</span>
        </a>

        {{-- ATRACCIONES --}}
        <div class="sidebar-group">
            <button class="sidebar-item sidebar-toggle" type="button"
                aria-expanded="{{ request()->routeIs('mirror', 'fall', 'roller', 'boo', 'carousel', 'pirate', 'worm', 'kamikaze') ? 'true' : 'false' }}"
                aria-controls="submenu-atracciones">
                <span class="sidebar-icon icon-rides">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 20h14M7 20l5-15 5 15M8.2 14h7.6M9.5 10h5M12 5v15"/>
                    </svg>
                </span>
                <span class="sidebar-label">Atracciones</span>
                <span class="sidebar-chevron" aria-hidden="true">⌄</span>
            </button>

            <div class="sidebar-submenu" id="submenu-atracciones"
                 {{ request()->routeIs('mirror', 'fall', 'roller', 'boo', 'carousel', 'pirate', 'worm', 'kamikaze') ? '' : 'hidden' }}>
                <a href="{{ route('mirror') }}" class="sidebar-subitem {{ request()->routeIs('mirror') ? 'active' : '' }}"
                   {{ request()->routeIs('mirror') ? 'aria-current=page' : '' }}>Mirror Maze</a>
                <a href="{{ route('fall') }}" class="sidebar-subitem {{ request()->routeIs('fall') ? 'active' : '' }}"
                   {{ request()->routeIs('fall') ? 'aria-current=page' : '' }}>Fall</a>
                <a href="{{ route('roller') }}" class="sidebar-subitem {{ request()->routeIs('roller') ? 'active' : '' }}"
                   {{ request()->routeIs('roller') ? 'aria-current=page' : '' }}>Roller Coaster</a>
                <a href="{{ route('boo') }}" class="sidebar-subitem {{ request()->routeIs('boo') ? 'active' : '' }}"
                   {{ request()->routeIs('boo') ? 'aria-current=page' : '' }}>Boo</a>
                <a href="{{ route('carousel') }}" class="sidebar-subitem {{ request()->routeIs('carousel') ? 'active' : '' }}"
                   {{ request()->routeIs('carousel') ? 'aria-current=page' : '' }}>Carousel</a>
                <a href="{{ route('pirate') }}" class="sidebar-subitem {{ request()->routeIs('pirate') ? 'active' : '' }}"
                   {{ request()->routeIs('pirate') ? 'aria-current=page' : '' }}>Pirate</a>
                <a href="{{ route('worm') }}" class="sidebar-subitem {{ request()->routeIs('worm') ? 'active' : '' }}"
                   {{ request()->routeIs('worm') ? 'aria-current=page' : '' }}>Worm</a>
                <a href="{{ route('kamikaze') }}" class="sidebar-subitem {{ request()->routeIs('kamikaze') ? 'active' : '' }}"
                   {{ request()->routeIs('kamikaze') ? 'aria-current=page' : '' }}>Kamikaze</a>
            </div>
        </div>

        {{-- PREGUNTAS FRECUENTES --}}
        <a href="{{ route('preguntas') }}"
           class="sidebar-item {{ request()->routeIs('preguntas') ? 'active' : '' }}"
           {{ request()->routeIs('preguntas') ? 'aria-current=page' : '' }}>
            <span class="sidebar-icon icon-help">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="8"/>
                    <path d="M9.8 9.5a2.3 2.3 0 1 1 3.1 2.2c-.9.4-.9 1-.9 1.8M12 17h.01"/>
                </svg>
            </span>
            <span class="sidebar-label">Preguntas frecuentes</span>
        </a>

        {{-- CONTACTO --}}
        <div class="sidebar-group">
            <button class="sidebar-item sidebar-contact-toggle" type="button"
                aria-expanded="false" aria-controls="submenu-contacto">
                <span class="sidebar-icon icon-contact">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M4 6h16v12H4zM4 7l8 6 8-6"/>
                    </svg>
                </span>
                <span class="sidebar-label">Contacto</span>
                <span class="sidebar-chevron" aria-hidden="true">⌄</span>
            </button>

            <div class="sidebar-submenu sidebar-contact-info" id="submenu-contacto" hidden>
                <p><strong>Teléfono</strong></p>
                <a href="tel:+543764123456" class="sidebar-subitem">+54 376 412-3456</a>
                <p><strong>Correo electrónico</strong></p>
                <a href="mailto:esimpark@esim.edu.ar" class="sidebar-subitem">esimpark@esim.edu.ar</a>
            </div>
        </div>

        @auth
            <a href="{{ route('profile.edit') }}"
               class="sidebar-item {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                <span class="sidebar-icon icon-help" aria-hidden="true">👤</span>
                <span class="sidebar-label">Mi perfil · {{ Auth::user()->name }}</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="sidebar-item">
                    <span class="sidebar-icon icon-contact" aria-hidden="true">↪</span>
                    <span class="sidebar-label">Cerrar sesión</span>
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="sidebar-item">
                <span class="sidebar-icon icon-help" aria-hidden="true">🔑</span>
                <span class="sidebar-label">Iniciar sesión</span>
            </a>
            <a href="{{ route('register') }}" class="sidebar-item">
                <span class="sidebar-icon icon-rides" aria-hidden="true">＋</span>
                <span class="sidebar-label">Crear cuenta</span>
            </a>
        @endauth
    </nav>
</aside>

<div class="sidebar-overlay" aria-hidden="true"></div>

<div class="page-content">



<header>



    <!-- Replace the source with your own video -->

    <video autoplay muted loop playsinline>

        <source src="{{ asset('imagesWorm/gusano.mp4') }}" type="video/mp4">

    </video>



    <div class="overlay">

        <h1>Crazy Worm Ride</h1>

    </div>



</header>



<div class="container">



    <section class="content">



        <div class="text">



            <h2>About the Ride</h2>



            <p>

                The Crazy Worm is one of the most popular family attractions in amusement

                parks around the world. Designed to provide excitement without being

                too intense, this roller coaster is perfect for children, teenagers,

                and adults who want to enjoy a fun and colorful adventure together.

            </p>



            <p>

                The ride follows a winding track with gentle hills, smooth curves,

                and exciting drops. The train is usually decorated to resemble a giant

                smiling caterpillar or worm, creating a friendly atmosphere that makes

                the attraction appealing to younger visitors.

            </p>



            <p>

                Bright colors, cheerful music, and quick turns create an entertaining

                experience suitable for the entire family. The Crazy Worm is often

                considered an ideal first roller coaster for children because it offers

                thrills while maintaining a comfortable level of speed and intensity.

            </p>



        </div>



        {{-- ✅ STREAM VR DUAL (DOS OJOS LADO A LADO) --}}

        <div class="live-stream-box">

            <div class="live-badge">VR LIVE</div>

            <div class="stream-status status-offline" id="streamStatus">🔴 Offline</div>

            <div class="stream-info" id="streamInfo">— × — · — KB</div>

            <div class="stream-placeholder" id="streamPlaceholder">

                📷 Esperando conexión con la cámara...

            </div>



            <div class="vr-container">

                <div class="vr-eye">

                    <canvas id="streamCanvasLeft"></canvas>

                </div>

                <div class="vr-eye">

                    <canvas id="streamCanvasRight"></canvas>

                </div>

            </div>

        </div>



    </section>



    <section class="gallery">



        <h2>Ride Gallery</h2>



        <div class="images">



            <div class="image-box">

                <img src="{{ asset('imagesWorm/worm1.jpeg') }}" alt="Crazy Worm 1">

            </div>



            <div class="image-box">

                <img src="{{ asset('imagesWorm/worm2.jpeg') }}" alt="Crazy Worm 2">

            </div>



            <div class="image-box">

                <img src="{{ asset('imagesWorm/worm3.jpeg') }}" alt="Crazy Worm 3">

            </div>



            <div class="image-box">

                <img src="{{ asset('imagesWorm/worm4.jpeg') }}" alt="Crazy Worm 4">

            </div>



        </div>



    </section>



    <section class="features">



        <h2>Ride Features</h2>



        <ul>

            <li>✔ Family-friendly roller coaster.</li>

            <li>✔ Gentle hills and smooth curves.</li>

            <li>✔ Colorful caterpillar-themed train.</li>

            <li>✔ Suitable for children and adults.</li>

            <li>✔ Safe and comfortable seating.</li>

            <li>✔ Perfect first coaster experience.</li>

            <li>✔ Fun for visitors of all ages.</li>

        </ul>



    </section>



</div>



<footer>

    Crazy Worm Ride • Family Fun • Amusement Park Experience

</footer>
</div><!-- /.page-content -->




{{-- ✅ SCRIPT PARA STREAM VR DUAL --}}


<script>
    // Comportamiento del menú lateral
    const sidebar = document.getElementById('sidebar');
    const collapseButton = document.querySelector('.sidebar-collapse');
    const sidebarOverlay = document.querySelector('.sidebar-overlay');
    const mobileMenuButton = document.querySelector('.sidebar-mobile-toggle');
    const ridesToggle = document.querySelector('.sidebar-toggle');
    const ridesSubmenu = document.getElementById('submenu-atracciones');
    const contactToggle = document.querySelector('.sidebar-contact-toggle');
    const contactSubmenu = document.getElementById('submenu-contacto');

    mobileMenuButton.addEventListener('click', () => {
        const isOpen = document.body.classList.toggle('sidebar-mobile-open');
        mobileMenuButton.setAttribute('aria-expanded', String(isOpen));
    });

    collapseButton.addEventListener('click', () => {
        if (window.matchMedia('(max-width: 768px)').matches) {
            document.body.classList.remove('sidebar-mobile-open');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        } else {
            document.body.classList.toggle('sidebar-collapsed');
        }
    });

    sidebarOverlay.addEventListener('click', () => {
        document.body.classList.remove('sidebar-mobile-open');
        mobileMenuButton.setAttribute('aria-expanded', 'false');
    });

    // En pantallas pequeñas, se abre el menú tocando el borde izquierdo.
    // Se puede abrir desde el botón de menú que se agrega al encabezado si se desea.
    ridesToggle.addEventListener('click', () => {
        const isExpanded = ridesToggle.getAttribute('aria-expanded') === 'true';
        ridesToggle.setAttribute('aria-expanded', String(!isExpanded));
        ridesSubmenu.hidden = isExpanded;
    });

    contactToggle.addEventListener('click', () => {
        const isExpanded = contactToggle.getAttribute('aria-expanded') === 'true';
        contactToggle.setAttribute('aria-expanded', String(!isExpanded));
        contactSubmenu.hidden = isExpanded;
    });

    // En móvil, tocar el encabezado de la página no debe dejar el menú abierto.
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            document.body.classList.remove('sidebar-mobile-open');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    });
</script>

<script>

    const ESP32_IP = '192.168.1.11'; // ⚠️ Cambia por tu IP del ESP32

    const wsUrl = 'ws://' + ESP32_IP + ':81';



    // ✅ DOS CANVAS (uno para cada ojo)

    const canvasLeft = document.getElementById('streamCanvasLeft');

    const canvasRight = document.getElementById('streamCanvasRight');

    const ctxLeft = canvasLeft.getContext('2d', { alpha: false });

    const ctxRight = canvasRight.getContext('2d', { alpha: false });



    const status = document.getElementById('streamStatus');

    const placeholder = document.getElementById('streamPlaceholder');

    const info = document.getElementById('streamInfo');



    let ws, reconnectTimeout;



    function conectar() {

        clearTimeout(reconnectTimeout);

        if (ws) { ws.onclose = null; ws.close(); }



        ws = new WebSocket(wsUrl);

        ws.binaryType = 'arraybuffer';



        ws.onopen = () => {

            status.className = 'stream-status status-online';

            status.textContent = '🟢 En vivo';

            placeholder.style.display = 'none';

            canvasLeft.style.display = 'block';

            canvasRight.style.display = 'block';

        };



        ws.onclose = () => {

            status.className = 'stream-status status-offline';

            status.textContent = '🔴 Offline';

            placeholder.style.display = 'flex';

            placeholder.textContent = '📷 Cámara desconectada. Reconectando...';

            canvasLeft.style.display = 'none';

            canvasRight.style.display = 'none';

            reconnectTimeout = setTimeout(conectar, 3000);

        };



        ws.onerror = () => ws.close();



        ws.onmessage = async (event) => {

            const blob = new Blob([event.data], { type: 'image/jpeg' });



            try {

                const imageBitmap = await createImageBitmap(blob);



                // Ajustamos el tamaño de ambos canvas la primera vez

                if (canvasLeft.width !== imageBitmap.width) {

                    canvasLeft.width = imageBitmap.width;

                    canvasLeft.height = imageBitmap.height;

                    canvasRight.width = imageBitmap.width;

                    canvasRight.height = imageBitmap.height;

                    info.textContent = imageBitmap.width + '×' + imageBitmap.height + ' · ' + (blob.size / 1024).toFixed(1) + ' KB';

                }



                // ✅ DIBUJAMOS EN AMBOS CANVAS SIMULTÁNEAMENTE

                ctxLeft.drawImage(imageBitmap, 0, 0, canvasLeft.width, canvasLeft.height);

                ctxRight.drawImage(imageBitmap, 0, 0, canvasRight.width, canvasRight.height);



                imageBitmap.close();

            } catch (e) {

                console.error("Error al decodificar frame:", e);

            }

        };

    }



    conectar();

</script>



</body>

</html>