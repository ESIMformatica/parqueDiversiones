<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Roller Coaster Adventure</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/tokens.css') }}">
<link rel="stylesheet" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/layout/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/layout/sidebar-collapsed.css') }}">
<link rel="stylesheet" href="{{ asset('css/layout/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/overlay.css') }}">
<link rel="stylesheet" href="{{ asset('css/utilities/responsive.css') }}">
<style>

  :root{
    --black:#0b0b0c;
    --black-soft:#17171a;
    --red:#d62828;
    --red-dark:#8f1b1b;
    --yellow:#ffd60a;
    --yellow-dark:#d9ad00;
    --cream:#fff6df;
    --white:#ffffff;
    --font-display:'Fredoka', sans-serif;
    --font-body:'Poppins', sans-serif;
    --bg:var(--black);
    --panel:var(--black-soft);
    --green:var(--yellow);
    --orange:var(--red);
    --purple:var(--red-dark);
    --ink:var(--black);
  }

  *{margin:0;padding:0;box-sizing:border-box;}

  body{
    font-family:var(--font-body);
    background:
      radial-gradient(ellipse at 50% -10%, #2a0d0d 0%, transparent 55%),
      var(--black);
    color:var(--cream);
    overflow-x:hidden;
  }

  a{color:inherit;}

  /* ---------- MARQUEE LIGHT BORDER ---------- */
  .lights{
    display:flex;
    justify-content:space-evenly;
    padding:10px 0;
    background:var(--black);
  }
  .lights span{
    width:10px;height:10px;border-radius:50%;
    background:var(--yellow);
    box-shadow:0 0 8px var(--yellow);
    animation:blink 1.4s infinite ease-in-out;
  }
  .lights span:nth-child(odd){ animation-delay:.7s; background:var(--white); box-shadow:0 0 8px var(--white); }
  @keyframes blink{
    0%,100%{opacity:1; transform:scale(1);}
    50%{opacity:.25; transform:scale(.7);}
  }

  /* ---------- HERO ---------- */
  header.hero{
    position:relative;
    background:
      linear-gradient(180deg, rgba(11,11,12,.4), var(--black) 85%),
      repeating-linear-gradient(115deg, var(--red-dark) 0 40px, var(--red) 40px 80px);
    background-blend-mode:multiply;
    text-align:center;
    padding:70px 20px 50px;
    border-bottom:6px solid var(--yellow);
  }

  .eyebrow-ticket{
    display:inline-flex;
    align-items:center;
    gap:8px;
    background:var(--yellow);
    color:var(--black);
    font-family:var(--font-display);
    font-weight:600;
    font-size:13px;
    letter-spacing:3px;
    padding:6px 18px;
    border-radius:30px;
    text-transform:uppercase;
    margin-bottom:22px;
  }

  header.hero h1{
    font-family:var(--font-display);
    font-weight:700;
    font-size:clamp(38px, 7vw, 72px);
    color:var(--white);
    -webkit-text-stroke:2px var(--red);
    text-shadow:5px 5px 0 var(--red), 5px 5px 18px rgba(0,0,0,.6);
    line-height:1.05;
  }

  header.hero p.tagline{
    max-width:560px;
    margin:22px auto 0;
    font-size:18px;
    color:var(--cream);
    opacity:.9;
  }

  /* signature: animated rail with cart */
  .rail{
    position:relative;
    max-width:520px;
    margin:40px auto 10px;
    height:14px;
    border-top:3px dashed var(--yellow);
  }
  .rail .cart{
    position:absolute;
    top:-13px;
    font-size:22px;
    animation:ride 5s linear infinite;
  }
  @keyframes ride{
    0%{left:-4%;}
    50%{left:98%; transform:scaleX(1);}
    50.01%{transform:scaleX(-1);}
    100%{left:-4%; transform:scaleX(-1);}
  }

  .btn{
    position:relative;
    display:inline-flex;
    align-items:center;
    gap:10px;
    margin-top:34px;
    background:var(--yellow);
    color:var(--black);
    text-decoration:none;
    font-family:var(--font-display);
    font-weight:600;
    padding:16px 34px 16px 26px;
    border-radius:8px;
    box-shadow:0 6px 0 var(--yellow-dark);
    transition:.2s ease;
  }
  .btn::before{
    content:"";
    position:absolute;
    left:-10px; top:50%; transform:translateY(-50%);
    width:20px;height:20px;border-radius:50%;
    background:var(--black);
  }
  .btn:hover{
    transform:translateY(3px);
    box-shadow:0 3px 0 var(--yellow-dark);
  }

  /* ---------- TRACK DIVIDER (signature motif) ---------- */
  .track-divider{
    display:block;
    width:100%;
    height:46px;
  }

  /* ---------- LAYOUT ---------- */
  main{
    max-width:1180px;
    margin:0 auto;
    padding:10px 24px 0;
  }

  section{padding:60px 0;}

  .section-title{
    font-family:var(--font-display);
    font-size:clamp(26px,4vw,38px);
    color:var(--yellow);
    margin-bottom:8px;
  }
  .section-sub{
    color:rgba(255,246,223,.65);
    font-size:15px;
    margin-bottom:34px;
    max-width:560px;
  }

  /* ---------- TICKET CARD ---------- */
  .ticket-grid{
    display:grid;
    grid-template-columns:1.1fr .9fr;
    gap:36px;
    align-items:start;
  }

  .ticket{
    position:relative;
    background:var(--black-soft);
    border:2px solid var(--red);
    border-radius:16px;
    padding:32px;
    box-shadow:0 10px 30px rgba(0,0,0,.5);
  }

  .ticket p{
    line-height:1.75;
    color:rgba(255,246,223,.88);
    margin-bottom:14px;
    font-size:15px;
  }

  .ticket h3{
    font-family:var(--font-display);
    color:var(--white);
    font-size:22px;
    margin-bottom:16px;
  }

  .coaster-art{
    width:100%;
    border-radius:14px;
    display:block;
    background:linear-gradient(180deg,#1c1c1f, var(--black-soft));
  }

  /* ---------- MEMBERS TICKET STRIP ---------- */
  .members{
    margin-top:26px;
    background:var(--red);
    border-radius:14px;
    padding:22px 22px 10px;
  }
  .members h4{
    font-family:var(--font-display);
    color:var(--yellow);
    font-size:14px;
    letter-spacing:2px;
    text-transform:uppercase;
    margin-bottom:14px;
  }
  .members ul{list-style:none;}
  .members li{
    position:relative;
    display:flex;
    align-items:center;
    gap:12px;
    padding:12px 10px 12px 4px;
    color:var(--white);
    font-size:14px;
    border-bottom:2px dashed rgba(255,255,255,.35);
  }
  .members li:last-child{border-bottom:none;}
  .members li .num{
    font-family:var(--font-display);
    background:var(--yellow);
    color:var(--black);
    width:26px;height:26px;
    border-radius:50%;
    display:flex;align-items:center;justify-content:center;
    font-size:12px;
  }

  /* ---------- BLUEPRINT / BUILD SECTION ---------- */
  .blueprint{
    position:relative;
    background:
      linear-gradient(rgba(255,214,10,.06) 1px, transparent 1px) 0 0/28px 28px,
      linear-gradient(90deg, rgba(255,214,10,.06) 1px, transparent 1px) 0 0/28px 28px,
      var(--black-soft);
    border:2px dashed var(--yellow);
    border-radius:16px;
    padding:40px;
  }
  .blueprint .tag{
    display:inline-block;
    font-family:var(--font-display);
    font-size:12px;
    letter-spacing:3px;
    color:var(--black);
    background:var(--yellow);
    padding:4px 12px;
    border-radius:4px;
    margin-bottom:20px;
  }
  .blueprint p{
    color:rgba(255,246,223,.85);
    line-height:1.8;
    font-size:15px;
    margin-bottom:16px;
  }
  .blueprint p:last-child{margin-bottom:0;}

  /* ---------- STATS ---------- */
  .stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-top:36px;
  }
  .box{
    text-align:center;
    background:repeating-linear-gradient(135deg, var(--red) 0 14px, var(--red-dark) 14px 28px);
    border:3px solid var(--yellow);
    border-radius:16px;
    padding:26px 14px;
    transition:.3s;
  }
  .box:hover{transform:translateY(-8px);}
  .box .num{
    font-family:var(--font-display);
    font-size:30px;
    color:var(--yellow);
    display:block;
  }
  .box .label{
    font-size:12px;
    letter-spacing:1.5px;
    text-transform:uppercase;
    color:var(--white);
    margin-top:4px;
    display:block;
  }
  .stats-note{
    font-size:12px;
    color:rgba(255,246,223,.5);
    margin-top:14px;
  }

  /* ---------- FOOTER ---------- */
  footer{
    background:var(--black);
    border-top:6px solid var(--yellow);
    text-align:center;
    padding:44px 20px 30px;
  }
  footer h3{
    font-family:var(--font-display);
    color:var(--yellow);
    font-size:24px;
    margin-bottom:10px;
  }
  footer p{
    color:rgba(255,246,223,.6);
    font-size:13px;
  }

  .vr-container {
    display: flex;
    gap: 10px;
    width: 100%;
}

.vr-container {
    display: flex;
    width: 100%;
    gap: 10px;
    align-items: stretch;
}

.vr-eye {
    flex: 1;
    min-width: 0;
    overflow: hidden;
    background: #000;
    border-radius: 10px;
}

.vr-eye canvas {
    display: none;
    width: 100%;
    height: auto;
    object-fit: contain;
}

  @media(max-width:860px){
    .ticket-grid{grid-template-columns:1fr;}
    .stats{grid-template-columns:repeat(2,1fr);}
  }

  .main-content.roller-content{padding:0;}

  body.roller-page .sidebar{
    background:linear-gradient(180deg,var(--black-soft),var(--black));
    border-right-color:var(--yellow);
  }
  body.roller-page .sidebar-title{
    color:var(--black);
    background:var(--yellow);
    border-color:var(--yellow-dark);
  }
  body.roller-page .sidebar-item{color:var(--cream);}
  body.roller-page .sidebar-item.active{
    color:var(--black);
    background:var(--yellow);
    border-color:var(--yellow-dark);
  }
  body.roller-page .sidebar-item:hover{background:rgba(255,214,10,.12);}
  body.roller-page .sidebar-icon{border-color:var(--yellow-dark);}

  @media(max-width:760px){
    .main-content.roller-content{margin-left:0;padding:62px 0 0;}
  }
</style>
</head>
<body class="roller-page">
@include('partials.sidebar')
<div class="main-content roller-content">

<div class="lights">
  <span></span><span></span><span></span><span></span><span></span>
  <span></span><span></span><span></span><span></span><span></span>
  <span></span><span></span><span></span><span></span><span></span>
</div>

<header class="hero">
  <span class="eyebrow-ticket">🎫 Admit One · Front Row</span>
  <h1>🎢 Roller Coaster🎢</h1>
  <p class="tagline">Feel the adrenaline, enjoy every twist and create unforgettable memories!</p>
  <div class="rail"><span class="cart">🎢</span></div>
  <a href="#" class="btn">Ride Now</a>
</header>

<div class="lights">
  <span></span><span></span><span></span><span></span><span></span>
  <span></span><span></span><span></span><span></span><span></span>
  <span></span><span></span><span></span><span></span><span></span>
</div>

<svg class="track-divider" viewBox="0 0 1200 46" preserveAspectRatio="none">
  <polyline points="0,40 100,10 200,40 300,10 400,40 500,10 600,40 700,10 800,40 900,10 1000,40 1100,10 1200,40"
    fill="none" stroke="#d62828" stroke-width="4"/>
  <polyline points="0,46 100,16 200,46 300,16 400,46 500,16 600,46 700,16 800,46 900,16 1000,46 1100,16 1200,46"
    fill="none" stroke="#ffd60a" stroke-width="2" stroke-dasharray="6 6"/>
</svg>

<main>

  <section id="welcome">
    <h2 class="section-title">Welcome!</h2>
    <p class="section-sub">Fasten your seatbelt — the adventure starts the moment you step in line.</p>

    <div class="ticket-grid">
      <div class="ticket">
        <p>Welcome to the Roller Coaster Adventure! Prepare yourself for one of the most exciting attractions you'll ever experience.</p>
        <p>Hold on tight as you speed through incredible drops, thrilling loops and breathtaking turns. Whether you come with your friends or your family, every ride promises excitement, laughter and unforgettable memories.</p>
        <p>Adventure begins the moment you fasten your seatbelt. Are you ready for the ride?</p>

        <div class="members">
          <h4>👨‍💻 Project Members</h4>
          <ul>
            <li><span class="num">1</span> Sofia Sottile</li>
            <li><span class="num">2</span> Nicol Silva</li>
            <li><span class="num">3</span> Camila Feltan</li>
            <li><span class="num">4</span> Tadeo Sosa</li>
          </ul>
        </div>
      </div>

      <div class="ticket">
        <svg class="coaster-art" viewBox="0 0 400 260" xmlns="http://www.w3.org/2000/svg">
          <rect width="400" height="260" fill="#17171a"/>
          <circle cx="330" cy="55" r="26" fill="#ffd60a" opacity=".9"/>
          <path d="M0 230 C 40 150, 90 150, 130 210 C 160 250, 190 130, 230 150 C 270 170, 280 90, 320 110 C 350 125, 370 180, 400 190"
            fill="none" stroke="#d62828" stroke-width="6" stroke-linecap="round"/>
          <path d="M0 236 C 40 156, 90 156, 130 216 C 160 256, 190 136, 230 156 C 270 176, 280 96, 320 116 C 350 131, 370 186, 400 196"
            fill="none" stroke="#ffd60a" stroke-width="2" stroke-dasharray="4 6"/>
          <circle cx="235" cy="152" r="7" fill="#fff6df"/>
          <circle cx="252" cy="146" r="7" fill="#fff6df"/>
          <rect x="230" y="140" width="30" height="10" rx="3" fill="#fff6df"/>
          <rect x="0" y="230" width="400" height="30" fill="#0b0b0c"/>
        </svg>
        <h3 style="margin-top:20px;">Thrills &amp; Excitement</h3>
        <p>Our roller coasters are designed to provide maximum excitement. From the first drop to the last loop, every moment is filled with adrenaline and fun. Experience high speeds, sharp turns, and breathtaking views — it's an adventure you won't forget.</p>
        <p>Safety is our top priority. Our rides are regularly inspected and maintained, so gather your courage, scream, laugh, and enjoy every second of the ride!</p>
      </div>
    </div>
  </section>

  <svg class="track-divider" viewBox="0 0 1200 46" preserveAspectRatio="none">
    <polyline points="0,40 100,10 200,40 300,10 400,40 500,10 600,40 700,10 800,40 900,10 1000,40 1100,10 1200,40"
      fill="none" stroke="#ffd60a" stroke-width="4"/>
    <polyline points="0,46 100,16 200,46 300,16 400,46 500,16 600,46 700,16 800,46 900,16 1000,46 1100,16 1200,46"
      fill="none" stroke="#d62828" stroke-width="2" stroke-dasharray="6 6"/>
  </svg>

  <section id="build">
    <h2 class="section-title">Description of our project</h2>
    <p class="section-sub">The real engineering behind the miniature ride — built by the team, piece by piece.</p>

    <div class="blueprint">
      <span class="tag">Technical Specs</span>
      <p>Our roller coaster is a functional prototype designed to combine entertainment, creativity and technology. The main structure was built with reinforced cardboard, ice cream sticks, crocheted sticks, wire, gutter and LEGO pieces, achieving a strong and stable base. The displacement system uses wheels, axles, pulleys and gears, powered by a DC motor with reducer that provides smooth and controlled movement.</p>
      <p>The electronic control is based on an ESP32-S3 board, which works together with an OV3660 camera to incorporate monitoring and viewing functions of the course. In addition, the circuit includes a L298N driver to control the motor, a servomotor for specific movements of the mechanism, a transistor, a voltage regulator, pushbuttons for user interaction, a protoboard and connection cables. The system is powered by batteries and can be supplemented with LED lights to enhance visual experience.</p>
      <p>Tools such as a silicone gun, welder, hammer, cutter, pliers, tweezers and brushes were used during construction, as well as fastening materials such as silicone, adhesive tape and pulley tape. The paint and fabric were used to give it a more attractive finish and represent a miniature amusement park.</p>
      <p>This project aims to demonstrate how the integration of mechanics, electronics and programming can give rise to an interactive model capable of simulating the operation of a real roller coaster, offering a dynamic, safe and innovative experience.</p>
    </div>

    <div class="stats">
      <div class="box"><span class="num">30cm</span><span class="label">Track Height</span></div>
      <div class="box"><span class="num">1</span><span class="label">DC Motor</span></div>
      <div class="box"><span class="num">4</span><span class="label">Builders</span></div>
      <div class="box"><span class="num">ESP32-S3</span><span class="label">Control Board</span></div>
    </div>
    <p class="stats-note">* Ajustá estos datos con las medidas y specs reales de tu prototipo.</p>
  </section>

  <svg class="track-divider" viewBox="0 0 1200 46" preserveAspectRatio="none">
    <polyline points="0,40 100,10 200,40 300,10 400,40 500,10 600,40 700,10 800,40 900,10 1000,40 1100,10 1200,40"
      fill="none" stroke="#d62828" stroke-width="4"/>
    <polyline points="0,46 100,16 200,46 300,16 400,46 500,16 600,46 700,16 800,46 900,16 1000,46 1100,16 1200,46"
      fill="none" stroke="#ffd60a" stroke-width="2" stroke-dasharray="6 6"/>
  </svg>

  <section id="learn">
    <h2 class="section-title">Learn the Science</h2>
    <p class="section-sub">Every hill, loop and drop is physics in disguise.</p>
    <div class="ticket">
      <p>Delve into the world of roller coasters and discover the engineering marvels that make these rides possible. From design to construction, every detail is meticulously planned to ensure a thrilling yet safe experience.</p>
      <p>Learn about the history of roller coasters and how they've evolved — from wooden classics to modern steel giants, each ride has its own unique story and charm.</p>
      <p>Explore the different types of roller coasters, from inverted to launched, and understand the physics behind the thrills: how speed, gravity, and momentum work together to create an unforgettable ride.</p>
      <p>{{-- ✅ STREAM VR DUAL (DOS OJOS LADO A LADO) --}}
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
        {{-- ✅ SCRIPT PARA STREAM VR DUAL --}}



<script>
      (() => {
          "use strict";

          // Tiene que coincidir con la IP que muestra el Monitor Serie.
          const ESP32_IP = "192.168.1.10";
          const WS_URL = `ws://${ESP32_IP}:81`;

          // true  = imagen más pareja (buffer de ~2 frames, +50-80 ms de retraso)
          // false = mínimo retraso, pero se nota más cualquier irregularidad de la red
          const SUAVIZADO = true;
          const PREBUFFER = 2;      // frames a juntar antes de empezar a mostrar
          const MAX_COLA = 4;       // máximo de frames guardados (los más viejos se descartan)
          const STALL_MS = 3000;    // sin frames durante este tiempo => reconectar

          const box = document.querySelector(".live-stream-box");
          const btnFull = document.getElementById("btnFullscreen");
          const canvasLeft = document.getElementById("streamCanvasLeft");
          const canvasRight = document.getElementById("streamCanvasRight");
          const CTX_OPTS = { alpha: false, desynchronized: true };
          const ctxLeft = canvasLeft.getContext("2d", CTX_OPTS);
          const ctxRight = canvasRight.getContext("2d", CTX_OPTS);
          const status = document.getElementById("streamStatus");
          const placeholder = document.getElementById("streamPlaceholder");
          const info = document.getElementById("streamInfo");

          const DECODE_OPTS = { premultiplyAlpha: "none", colorSpaceConversion: "none" };

          let ws = null;
          let reconnectTimer = null;
          let reconnectDelay = 1000;

          let blobs = [];           // JPEG recibidos, esperando decodificarse
          let cola = [];            // bitmaps decodificados, esperando mostrarse
          let decoding = false;
          let started = false;
          let online = false;

          let lastArrival = 0;
          let arrivalEma = 40;      // intervalo medio entre frames recibidos (ms)
          let lastShown = 0;
          let lastBytes = 0;
          let lastFrameAt = 0;
          let count = 0;
          let fpsStart = performance.now();

          function setStatus(cls, text) {
              if (status.textContent !== text) {
                  status.className = cls;
                  status.textContent = text;
              }
          }

          function limpiar() {
              for (const b of cola) b.close();
              cola = [];
              blobs = [];
              started = false;
          }

          function offline(message) {
              online = false;
              limpiar();
              setStatus("stream-status status-offline", "🔴 Offline");
              placeholder.style.display = "flex";
              placeholder.textContent = message;
              canvasLeft.style.display = "none";
              canvasRight.style.display = "none";
          }

          // Decodifica los frames en orden; si la decodificación se atrasa, los viejos se descartan.
          async function decodeLoop() {
              if (decoding) return;
              decoding = true;
              try {
                  while (blobs.length > 0) {
                      const blob = blobs.shift();
                      try {
                          const bmp = await createImageBitmap(blob, DECODE_OPTS);
                          if (!bmp.width || !bmp.height) { bmp.close(); continue; }
                          cola.push(bmp);
                          lastBytes = blob.size;
                          while (cola.length > MAX_COLA) cola.shift().close();
                      } catch (err) {
                          console.error("Error decodificando frame:", err);
                      }
                  }
              } finally {
                  decoding = false;
              }
          }

          function draw(bmp, now) {
              if (canvasLeft.width !== bmp.width || canvasLeft.height !== bmp.height) {
                  canvasLeft.width = canvasRight.width = bmp.width;
                  canvasLeft.height = canvasRight.height = bmp.height;
              }
              ctxLeft.drawImage(bmp, 0, 0);
              ctxRight.drawImage(bmp, 0, 0);
              count++;

              if (!online) {
                  online = true;
                  placeholder.style.display = "none";
                  canvasLeft.style.display = "block";
                  canvasRight.style.display = "block";
                  setStatus("stream-status status-online", "🟢 En vivo");
              }

              const elapsed = now - fpsStart;
              if (elapsed >= 1000) {
                  const fps = Math.round(count * 1000 / elapsed);
                  count = 0;
                  fpsStart = now;
                  info.textContent =
                      `${bmp.width} × ${bmp.height} · ${fps} FPS · ${(lastBytes / 1024).toFixed(1)} KB`;
              }
          }

          // Un único bucle, sincronizado con el refresco del monitor, decide qué frame se muestra.
          function tick(now) {
              requestAnimationFrame(tick);

              if (cola.length === 0) {
                  // Si se quedó sin frames un buen rato, vuelve a juntar el buffer inicial.
                  if (started && now - lastShown > 300) started = false;
                  return;
              }

              let mostrar = false;

              if (!SUAVIZADO) {
                  while (cola.length > 1) cola.shift().close();   // siempre el más nuevo
                  mostrar = true;
              } else if (!started) {
                  if (cola.length >= PREBUFFER) { started = true; mostrar = true; }
              } else {
                  // Ritmo parejo = ritmo medio de llegada; si se acumulan frames, acelera un poco.
                  let intervalo = Math.min(Math.max(arrivalEma, 16), 100);
                  if (cola.length >= 3) intervalo *= 0.75;
                  if (now - lastShown >= intervalo - 4) mostrar = true;
              }

              if (!mostrar) return;

              const bmp = cola.shift();
              draw(bmp, now);
              bmp.close();
              lastShown = now;
          }

          function connect() {
              clearTimeout(reconnectTimer);
              if (ws) {
                  ws.onclose = null;
                  ws.close();
              }

              offline("📷 Conectando con la cámara...");
              setStatus("stream-status status-offline", "🟡 Conectando...");
              ws = new WebSocket(WS_URL);
              ws.binaryType = "blob";

              ws.onopen = () => {
                  console.log("ESP32 conectada:", WS_URL);
                  reconnectDelay = 1000;
                  lastArrival = 0;
                  lastFrameAt = performance.now();
                  setStatus("stream-status status-offline", "🟡 Conectado; esperando imagen...");
              };

              ws.onmessage = (event) => {
                  if (!(event.data instanceof Blob)) return;
                  const now = performance.now();
                  lastFrameAt = now;

                  // Pestaña oculta: no se gasta CPU decodificando lo que nadie ve.
                  if (document.hidden) return;

                  if (lastArrival) {
                      const dt = Math.min(now - lastArrival, 200);
                      arrivalEma += (dt - arrivalEma) * 0.1;
                  }
                  lastArrival = now;

                  blobs.push(event.data);
                  while (blobs.length > MAX_COLA) blobs.shift();
                  decodeLoop();
              };

              ws.onerror = (err) => console.error("WebSocket:", err);

              ws.onclose = () => {
                  offline("📷 Cámara desconectada. Reconectando...");
                  reconnectTimer = setTimeout(connect, reconnectDelay);
                  reconnectDelay = Math.min(reconnectDelay * 1.5, 5000);
              };
          }

          // Si la conexión sigue "abierta" pero no llega video, reconecta sola.
          setInterval(() => {
              if (ws && ws.readyState === WebSocket.OPEN &&
                  performance.now() - lastFrameAt > STALL_MS) {
                  console.warn("Sin frames; reconectando...");
                  ws.close();
              }
          }, 1000);

          // Al volver a la pestaña, descarta frames viejos y arranca con imagen fresca.
          document.addEventListener("visibilitychange", () => {
              if (!document.hidden) { limpiar(); lastArrival = 0; }
          });

          // Pantalla completa (útil para visor VR con el celular en horizontal).
          if (btnFull && box && box.requestFullscreen) {
              btnFull.addEventListener("click", () => {
                  if (document.fullscreenElement) document.exitFullscreen();
                  else box.requestFullscreen().catch(() => {});
              });
          } else if (btnFull) {
              btnFull.style.display = "none";
          }

          window.addEventListener("beforeunload", () => {
              clearTimeout(reconnectTimer);
              if (ws) {
                  ws.onclose = null;
                  ws.close();
              }
          });

          if (!("createImageBitmap" in window)) {
              offline("El navegador no admite createImageBitmap.");
              return;
          }
          requestAnimationFrame(tick);
          connect();
      })();
      </script>

        <p>
    </div>
  </section>

</main>
 
<div class="lights">
  <span></span><span></span><span></span><span></span><span></span>
  <span></span><span></span><span></span><span></span><span></span>
  <span></span><span></span><span></span><span></span><span></span>
</div>

<footer>
  <h3>🎢 Roller Coaster Adventure 🎢</h3>
  <p>&copy; 2026 Roller Coaster Adventure. All rights reserved.</p>
</footer>

 </div>
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>