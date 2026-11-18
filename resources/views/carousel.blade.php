<x-layout.appMirror title="Carrusel Racing | ESIMPark">
    <x-slot:sidebar>
        <x-layout.attraction-sidebar theme="carousel" />
    </x-slot:sidebar>

    <x-slot:head>
        <meta name="description" content="Carrusel Racing, funcionamiento y medidas de seguridad.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Russo+One&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
    </x-slot:head>
    <div class="carrusel-page">
<!-- ===== NAVBAR ===== -->
  <header class="navbar">
    <div class="contenedor">
      <a href="#inicio" class="logo">🏁 Crazy Park </a>
      <nav>
        <ul>
          <li><a class="link" href="#inicio">Inicio</a></li>
          <li><a class="link" href="#en-vivo">En vivo</a></li>
          <li><a class="link" href="#que-es">La atracción</a></li>
          <li><a class="link" href="#como-usar">Cómo se usa</a></li>
          <li><a class="link" href="#seguridad">Seguridad</a></li>
          <!-- Acá después van los links de las demás atracciones de la web -->
        </ul>
      </nav>
    </div>
  </header>

  <main>

    <!-- ===== HERO ===== -->
    <section class="hero" id="inicio">
      <div class="sol"></div>
      <div class="mesetas"></div>
      <div class="ruta"></div>
      <div class="auto-ruta" aria-hidden="true">🏎️</div>

      <div class="hero-contenido">
        <span class="etiqueta">Atracción familiar</span>
        <h1>Carrusel</h1>
        <p class="lema">¡Arrancá los motores! Dá vueltas a toda velocidad en la pista más divertida del parque.</p>
        <a href="#que-es" class="boton">Largada 🏁</a>
      </div>
    </section>

    <div class="cuadros" aria-hidden="true"></div>

    <!-- ===== EN VIVO (cámara ESP32) ===== -->
    <section class="en-vivo" id="en-vivo">
      <div class="contenedor">
        <h2 class="titulo-seccion">Transmitiendo en vivo</h2>
        <p class="sub-seccion">Mirá el carrusel en tiempo real</p>

        <figure class="camara camara-doble">
          <div class="pantalla doble">
            <span class="badge-vivo">EN VIVO</span>
            <span class="estado-stream" data-estado>🔴 Sin señal</span>

            <div class="mitad">
              <div class="sin-senal" data-sin-senal>📷 Esperando conexión con la cámara...</div>
              <img data-frame alt="Transmisión en vivo del carrusel, vista izquierda">
            </div>
            <div class="mitad">
              <div class="sin-senal" data-sin-senal>📷 Esperando conexión con la cámara...</div>
              <img data-frame alt="Transmisión en vivo del carrusel, vista derecha">
            </div>
          </div>
          <figcaption>
            <span>Cámara en vivo · Vista doble</span>
            <button type="button" class="boton-ampliar" data-ampliar>⛶ Ampliar</button>
          </figcaption>
        </figure>
      </div>
    </section>

    <div class="cuadros" aria-hidden="true"></div>

    <!-- ===== QUÉ ES ===== -->
    <section class="que-es" id="que-es">
      <div class="contenedor grid">
        <div>
          <h2 class="titulo-seccion">¿Qué es el Carrusel?</h2>
          <p class="sub-seccion">La atracción</p>
          <p>
            El carrusel es una atracción diseñada para disfrutar de un paseo circular y compartir un momento con otras personas. Los asientos giran alrededor de un punto central, y el movimiento comienza suavemente, aumentando gradualmente hasta alcanzar una velocidad cómoda, acompañado de música que evoca la esencia del carrusel. Al final, disminuye lentamente la velocidad hasta detenerse y la música termina.
          </p>
          <p>
            Además, es una actividad que puede reunir a personas de diferentes edades, convirtiéndose en un espacio de entretenimiento y socialización. Más allá del movimiento en sí, el carrusel busca crear una experiencia agradable; cada persona puede vivirla de una manera diferente. Para algunos, será un momento de diversión; para otros, de tranquilidad, emoción o simplemente una oportunidad para disfrutar en un ambiente tranquilo.
          </p>

          <div class="datos">
            <div class="dato"><strong>5</strong> vehículos</div>
            <div class="dato"><strong>3 min</strong> por vuelta</div>
            <div class="dato"><strong>Todas</strong> las edades</div>
            <div class="dato"><strong>Baja</strong> intensidad</div>
          </div>
        </div>

        <div class="escena" aria-hidden="true">
          <div class="carrusel">
            <span style="--i:0">🏎️</span>
            <span style="--i:1">🚓</span>
            <span style="--i:2">🚕</span>
            <span style="--i:3">🚙</span>
            <span style="--i:4">🚒</span>
            <span style="--i:5">🚜</span>
          </div>
        </div>
      </div>
    </section>

    <div class="cuadros" aria-hidden="true"></div>

    <!-- ===== CÓMO SE USA ===== -->
    <section class="como-usar" id="como-usar">
      <div class="contenedor">
        <h2 class="titulo-seccion">¿Cómo se usa?</h2>
        <p class="sub-seccion">Seguí los pasos como un campeón</p>

        <div class="pasos">
          <article class="paso">
            <span class="icono">🎟️</span>
            <h3>Entrá a boxes</h3>
            <p>Hacé la fila ordenada y presentá tu entrada al operador de la atracción.</p>
          </article>

          <article class="paso">
            <span class="icono">🚗</span>
            <h3>Elegí tu auto</h3>
            <p>Esperá a que la plataforma se detenga por completo y subí al vehículo que más te guste.</p>
          </article>

          <article class="paso">
            <span class="icono">🔒</span>
            <h3>Abrochate el cinturón</h3>
            <p>Ajustá bien el cinturón. El operador va a revisar que todos estén asegurados.</p>
          </article>

          <article class="paso">
            <span class="icono">🚦</span>
            <h3>¡Luz verde!</h3>
            <p>Cuando suene la señal, el carrusel arranca. Mantenete sentado y disfrutá del viaje.</p>
          </article>

          <article class="paso">
            <span class="icono">🏁</span>
            <h3>Llegada</h3>
            <p>Esperá a que frene del todo, desabrochate y bajá por la salida indicada.</p>
          </article>
        </div>
      </div>
    </section>

    <div class="cuadros" aria-hidden="true"></div>

    <!-- ===== SEGURIDAD ===== -->
    <section class="seguridad" id="seguridad">
      <div class="contenedor">
        <h2 class="titulo-seccion">Seguridad</h2>
        <p class="sub-seccion">La seguridad es lo primero en la pista</p>

        <div class="grid-seg">
          <article class="cartel">
            <span class="icono">🔒</span>
            <h3>Cinturón siempre</h3>
            <p>Mantené el cinturón abrochado durante todo el recorrido.</p>
          </article>

          <article class="cartel">
            <span class="icono">🪑</span>
            <h3>Quedate sentado</h3>
            <p>No te pares ni cambies de lugar mientras el carrusel está en movimiento.</p>
          </article>

          <article class="cartel">
            <span class="icono">👶</span>
            <h3>Menores acompañados</h3>
            <p>Los niños pequeños deben subir con un adulto responsable.</p>
          </article>

          <article class="cartel">
            <span class="icono">🎒</span>
            <h3>Objetos bien guardados</h3>
            <p>Guardá mochilas, gorras y celulares para que no se caigan a la pista.</p>
          </article>

          <article class="cartel">
            <span class="icono">👷</span>
            <h3>Hacé caso al operador</h3>
            <p>Seguí siempre las indicaciones del personal de la atracción.</p>
          </article>

          <article class="cartel prohibido">
            <span class="icono">🚫</span>
            <h3>Prohibido</h3>
            <p>Bajarse con el carrusel en marcha, sacar los brazos o subir en mal estado de salud.</p>
          </article>
        </div>

        <div class="aviso">
          ⚠️ Si tenés problemas de salud, mareos o estás embarazada, consultá con el personal antes de subir.
        </div>
      </div>
    </section>

  </main>

  <!-- ===== FOOTER ===== -->
  <footer>
    <a href="#inicio" class="logo">🏁 Carrusel</a>
    <p>© 2026 Parque de Atracciones · Crazy Park</p>
  </footer>

  <!-- ===== VISOR (pantalla completa) ===== -->
  <div class="visor" id="visor" aria-hidden="true">
    <div class="visor-barra">
      <span class="visor-titulo">🔴 Transmitiendo en vivo</span>
      <div class="visor-botones">
        <button type="button" class="boton-ampliar" id="visorFs">⛶ Pantalla completa</button>
        <button type="button" class="boton-ampliar cerrar" id="visorCerrar">✕ Cerrar</button>
      </div>
    </div>
    <div class="pantalla doble visor-pantalla">
      <span class="badge-vivo">EN VIVO</span>
      <span class="estado-stream" data-estado>🔴 Sin señal</span>
      <div class="mitad">
        <div class="sin-senal" data-sin-senal>📷 Esperando conexión con la cámara...</div>
        <img data-frame alt="Transmisión ampliada, vista izquierda">
      </div>
      <div class="mitad">
        <div class="sin-senal" data-sin-senal>📷 Esperando conexión con la cámara...</div>
        <img data-frame alt="Transmisión ampliada, vista derecha">
      </div>
    </div>
  </div>

  <!-- ===== SCRIPT DE LA CÁMARA ===== -->
  <script>
    (() => {
      // ⚠️ Si el ESP32 cambia de IP, cambiala acá (la ves en el Monitor Serie).
      const ESP32_IP = '192.168.1.6';
      const WS_URL = 'ws://' + ESP32_IP + ':81';

      const frames   = document.querySelectorAll('[data-frame]');
      const estados  = document.querySelectorAll('[data-estado]');
      const sinSenal = document.querySelectorAll('[data-sin-senal]');
      let ws, timer, urlActual = null;

      function setEstado(online, mensaje) {
        document.querySelector('.carrusel-page').classList.toggle('stream-online', online);
        estados.forEach(e => e.textContent = online ? '🟢 En vivo' : '🔴 Sin señal');
        if (mensaje) sinSenal.forEach(p => p.textContent = mensaje);
      }

      function conectar() {
        clearTimeout(timer);
        if (ws) { ws.onclose = null; ws.close(); }

        ws = new WebSocket(WS_URL);
        ws.binaryType = 'arraybuffer';

        ws.onopen = () => setEstado(false, '📷 Conectado, esperando imagen...');

        ws.onclose = () => {
          setEstado(false, '📷 Cámara desconectada. Reconectando...');
          timer = setTimeout(conectar, 3000);
        };

        ws.onerror = () => ws.close();

        // Un solo WebSocket alimenta todas las vistas (así el ESP32 no se sobrecarga)
        ws.onmessage = (event) => {
          const url = URL.createObjectURL(new Blob([event.data], { type: 'image/jpeg' }));
          frames.forEach(img => img.src = url);
          if (urlActual) URL.revokeObjectURL(urlActual);
          urlActual = url;
          if (!document.querySelector('.carrusel-page').classList.contains('stream-online')) setEstado(true);
        };
      }
      conectar();

      // ----- Visor ampliado -----
      const visor = document.getElementById('visor');
      const abierto = () => visor.classList.contains('abierto');

      function abrirVisor() {
        visor.classList.add('abierto');
        visor.setAttribute('aria-hidden', 'false');
        document.querySelector('.carrusel-page').classList.add('visor-abierto');
        if (visor.requestFullscreen) visor.requestFullscreen().catch(() => {});
      }
      function cerrarVisor() {
        visor.classList.remove('abierto');
        visor.setAttribute('aria-hidden', 'true');
        document.querySelector('.carrusel-page').classList.remove('visor-abierto');
        if (document.fullscreenElement) document.exitFullscreen().catch(() => {});
      }
      function alternarPantallaCompleta() {
        if (document.fullscreenElement) document.exitFullscreen().catch(() => {});
        else if (visor.requestFullscreen) visor.requestFullscreen().catch(() => {});
      }

      document.querySelectorAll('[data-ampliar]').forEach(b => b.addEventListener('click', abrirVisor));
      document.getElementById('visorCerrar').addEventListener('click', cerrarVisor);
      document.getElementById('visorFs').addEventListener('click', alternarPantallaCompleta);
      visor.addEventListener('click', (e) => { if (e.target === visor) cerrarVisor(); });
      document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && abierto()) cerrarVisor(); });
    })();
  </script>
    </div>
</x-layout.appMirror>
