/* ===================================================
   MIRROR MAZE — WII ZONE EDITION
   mirror.js
   Código organizado por módulos independientes.
   Cada módulo puede desactivarse comentando su llamada
   dentro de init() al final del archivo.
=================================================== */

(function () {
  "use strict";

  /* =================================================
     UTILIDADES
  ================================================= */
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));
  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  /* =================================================
     1. PANTALLA DE CARGA (DISCO)
  ================================================= */
  function initLoader() {
    const loader = $("#disc-loader");
    if (!loader) return;

    const hide = () => loader.classList.add("hide");
    // Da tiempo a apreciar la animación aunque cargue rápido
    window.addEventListener("load", () => setTimeout(hide, 900));
    // Failsafe: nunca dejar al usuario atascado en la carga
    setTimeout(hide, 3000);
  }

  /* =================================================
     2. RELOJ ESTILO WII MENU
  ================================================= */
  function initClock() {
    const clockEl = $("#wii-clock");
    if (!clockEl) return;

    const tick = () => {
      const now = new Date();
      const h = String(now.getHours()).padStart(2, "0");
      const m = String(now.getMinutes()).padStart(2, "0");
      clockEl.textContent = `${h}:${m}`;
    };
    tick();
    setInterval(tick, 1000 * 15);
  }

  /* =================================================
     3. BARRA DE PROGRESO DE SCROLL
  ================================================= */
  function initScrollProgress() {
    const bar = $("#scroll-progress");
    if (!bar) return;

    const update = () => {
      const scrollTop = window.scrollY;
      const docHeight =
        document.documentElement.scrollHeight - window.innerHeight;
      const pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
      bar.style.width = pct + "%";
    };
    document.addEventListener("scroll", update, { passive: true });
    update();
  }

  /* =================================================
     4. REVEAL ON SCROLL (IntersectionObserver)
  ================================================= */
  function initRevealOnScroll() {
    const items = $$(".reveal");
    if (!items.length) return;

    if (prefersReducedMotion) {
      items.forEach((el) => el.classList.add("in-view"));
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
          }
        });
      },
      { threshold: 0.15 }
    );

    items.forEach((el) => observer.observe(el));
  }

  /* =================================================
     5. CONTADORES ANIMADOS
  ================================================= */
  function animateCount(el) {
    const target = parseInt(el.dataset.count, 10) || 0;
    const duration = 1200;
    const start = performance.now();

    function step(now) {
      const progress = Math.min((now - start) / duration, 1);
      // easeOutCubic
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(eased * target);
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  function initCounters() {
    const counters = $$(".mini-stat-number");
    if (!counters.length) return;

    if (prefersReducedMotion) {
      counters.forEach((el) => (el.textContent = el.dataset.count));
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !entry.target.dataset.animated) {
            entry.target.dataset.animated = "true";
            animateCount(entry.target);
          }
        });
      },
      { threshold: 0.4 }
    );

    counters.forEach((el) => observer.observe(el));
  }

  /* =================================================
     6. LOGROS / ACHIEVEMENTS
     Se desbloquean al visitar cada sección y se
     guardan en localStorage para persistir la partida.
  ================================================= */
  const ACHIEVEMENT_INFO = {
    inicio: { icon: "🌟", name: "Bienvenida" },
    maze: { icon: "🪞", name: "Explorador del laberinto" },
    robot: { icon: "🤖", name: "Amigo de Slug Cat" },
    tech: { icon: "⚙️", name: "Mente técnica" },
    objetivos: { icon: "🎯", name: "Visionario" },
    stats: { icon: "📊", name: "Curioso de datos" },
    completo: { icon: "👑", name: "¡Maestro Wii!" },
  };
  const STORAGE_KEY = "mirrorMazeAchievements";

  function loadUnlocked() {
    try {
      return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
    } catch (e) {
      return [];
    }
  }

  function saveUnlocked(list) {
    try {
      localStorage.setItem(STORAGE_KEY, JSON.stringify(list));
    } catch (e) {
      /* almacenamiento no disponible: se ignora silenciosamente */
    }
  }

  function showToast(id) {
    const info = ACHIEVEMENT_INFO[id];
    if (!info) return;
    const container = $("#achievement-toast-container");
    if (!container) return;

    const toast = document.createElement("div");
    toast.className = "achievement-toast";
    toast.innerHTML = `<span class="toast-icon">${info.icon}</span> Logro desbloqueado: <strong>${info.name}</strong>`;
    container.appendChild(toast);
    playSound("achievement");

    setTimeout(() => toast.remove(), 4000);
  }

  function unlockAchievement(id, unlockedList) {
    if (unlockedList.includes(id)) return;
    unlockedList.push(id);
    saveUnlocked(unlockedList);

    const badge = $(`.achievement-badge[data-achievement="${id}"]`);
    if (badge) badge.classList.add("unlocked");

    showToast(id);

    // Logro final: cuando se desbloquean todos los demás
    const allIds = Object.keys(ACHIEVEMENT_INFO).filter(
      (k) => k !== "completo"
    );
    const allDone = allIds.every((k) => unlockedList.includes(k));
    if (allDone && !unlockedList.includes("completo")) {
      setTimeout(() => unlockAchievement("completo", unlockedList), 1200);
    }
  }

  function initAchievements() {
    const shelf = $("#achievements-shelf");
    if (!shelf) return;

    let unlocked = loadUnlocked();
    // Pintar estado ya guardado sin re-disparar el toast
    unlocked.forEach((id) => {
      const badge = $(`.achievement-badge[data-achievement="${id}"]`);
      if (badge) badge.classList.add("unlocked");
    });

    const sectionMap = {
      inicio: "#inicio",
      maze: "#maze",
      robot: "#robot",
      tech: "#tech",
      objetivos: "#objetivos",
      stats: "#stats",
    };

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const id = Object.keys(sectionMap).find(
              (key) => sectionMap[key] === "#" + entry.target.id
            );
            if (id) unlockAchievement(id, unlocked);
          }
        });
      },
      { threshold: 0.5 }
    );

    Object.values(sectionMap).forEach((sel) => {
      const el = $(sel);
      if (el) observer.observe(el);
    });
  }

  /* =================================================
     7. TARJETAS CON EFECTO 3D AL MOVER EL MOUSE
  ================================================= */
  function initTilt3D() {
    if (prefersReducedMotion) return;
    const cards = $$(".card-3d");
    if (!cards.length) return;

    cards.forEach((card) => {
      let rafId = null;

      card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = ((y - centerY) / centerY) * -4;
        const rotateY = ((x - centerX) / centerX) * 4;

        if (rafId) cancelAnimationFrame(rafId);
        rafId = requestAnimationFrame(() => {
          card.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-2px)`;
        });
      });

      card.addEventListener("mouseleave", () => {
        card.style.transform =
          "perspective(900px) rotateX(0) rotateY(0) translateY(0)";
      });
    });
  }

  /* =================================================
     8. CANAL / TILE WOBBLE + NAVEGACIÓN SUAVE
  ================================================= */
  function initChannelTiles() {
    const tiles = $$(".channel-tile");
    tiles.forEach((tile) => {
      tile.addEventListener("click", () => playSound("click"));
    });

    const startBtn = $("#start-btn");
    if (startBtn) {
      startBtn.addEventListener("click", () => {
        playSound("click");
        const menu = $(".channel-menu");
        if (menu) menu.scrollIntoView({ behavior: "smooth" });
      });
    }
  }

  /* =================================================
     9. SONIDO OPCIONAL (Web Audio API, sin archivos externos)
  ================================================= */
  let audioCtx = null;
  let soundEnabled = false;

    /* =================================================
     9.1 MÚSICA DE FONDO
  ================================================= */

  let musicPlaying = false;

  function initBackgroundMusic() {

    const music = $("#background-music");
    const btn = $("#sound-toggle");
    const startBtn = $("#start-btn");

    if (!music) return;

    music.volume = 0.3;

    function toggleMusic() {

      if (musicPlaying) {

        music.pause();
        musicPlaying = false;

        if (btn) {
          btn.querySelector(".icon-sound").textContent = "🔈";
          btn.setAttribute("aria-pressed", "false");
        }

      } else {

        music.play().catch(() => {
          console.log("El navegador bloqueó la reproducción automática");
        });

        musicPlaying = true;

        if (btn) {
          btn.querySelector(".icon-sound").textContent = "🔊";
          btn.setAttribute("aria-pressed", "true");
        }
      }
    }


    // Empieza cuando toca "Empezar aventura"
    if (startBtn) {
      startBtn.addEventListener("click", () => {

        if (!musicPlaying) {

          music.play().catch(() => {});

          musicPlaying = true;

          if (btn) {
            btn.querySelector(".icon-sound").textContent = "🔊";
            btn.setAttribute("aria-pressed", "true");
          }

        }
      });
    }


    // Botón de sonido superior
    if (btn) {
      btn.addEventListener("click", toggleMusic);
    }

  }

  function ensureAudioCtx() {
    if (!audioCtx) {
      const AudioContextClass =
        window.AudioContext || window.webkitAudioContext;
      if (AudioContextClass) audioCtx = new AudioContextClass();
    }
    return audioCtx;
  }

  function playSound(type) {
    if (!soundEnabled) return;
    const ctx = ensureAudioCtx();
    if (!ctx) return;

    const osc = ctx.createOscillator();
    const gain = ctx.createGain();
    osc.connect(gain);
    gain.connect(ctx.destination);

    const now = ctx.currentTime;
    let freq = 660;
    let duration = 0.12;

    if (type === "click") {
      freq = 740;
      duration = 0.1;
    } else if (type === "hover") {
      freq = 880;
      duration = 0.06;
    } else if (type === "achievement") {
      freq = 1046;
      duration = 0.35;
    }

    osc.type = "sine";
    osc.frequency.setValueAtTime(freq, now);
    gain.gain.setValueAtTime(0.001, now);
    gain.gain.exponentialRampToValueAtTime(0.15, now + 0.02);
    gain.gain.exponentialRampToValueAtTime(0.001, now + duration);

    osc.start(now);
    osc.stop(now + duration + 0.05);
  }

  function initSoundToggle() {
    const btn = $("#sound-toggle");
    if (!btn) return;

    btn.addEventListener("click", () => {
      soundEnabled = !soundEnabled;
      btn.setAttribute("aria-pressed", String(soundEnabled));
      btn.querySelector(".icon-sound").textContent = soundEnabled
        ? "🔊"
        : "🔈";
      if (soundEnabled) {
        ensureAudioCtx();
        playSound("click");
      }
    });

    // Pequeño "blip" al pasar el mouse por botones y tiles
    $$(".wii-button, .channel-tile, .tech-chip").forEach((el) => {
      el.addEventListener("mouseenter", () => playSound("hover"));
    });
  }

  /* =================================================
     10. FONDO ANIMADO — BURBUJAS FLOTANTES (canvas)
  ================================================= */
  function initBubbleBackground() {
    const canvas = $("#bubble-canvas");
    if (!canvas) return;
    const ctx = canvas.getContext("2d");
    if (!ctx) return;

    let width, height, bubbles;

    function resize() {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    }

    function createBubbles() {
      const count = window.innerWidth < 600 ? 14 : 26;
      bubbles = Array.from({ length: count }, () => ({
        x: Math.random() * width,
        y: Math.random() * height,
        r: 6 + Math.random() * 22,
        speed: 0.15 + Math.random() * 0.35,
        drift: (Math.random() - 0.5) * 0.3,
        alpha: 0.15 + Math.random() * 0.25,
      }));
    }

    function draw() {
      ctx.clearRect(0, 0, width, height);
      bubbles.forEach((b) => {
        ctx.beginPath();
        ctx.arc(b.x, b.y, b.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(255,255,255,${b.alpha})`;
        ctx.fill();

        b.y -= b.speed;
        b.x += b.drift;

        if (b.y + b.r < 0) {
          b.y = height + b.r;
          b.x = Math.random() * width;
        }
        if (b.x < -b.r) b.x = width + b.r;
        if (b.x > width + b.r) b.x = -b.r;
      });
      requestAnimationFrame(draw);
    }

    resize();
    createBubbles();
    window.addEventListener("resize", () => {
      resize();
      createBubbles();
    });

    if (!prefersReducedMotion) {
      draw();
    } else {
      // Dibuja un solo cuadro estático si se prefiere poco movimiento
      draw.once = true;
      ctx.clearRect(0, 0, width, height);
      bubbles.forEach((b) => {
        ctx.beginPath();
        ctx.arc(b.x, b.y, b.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(255,255,255,${b.alpha})`;
        ctx.fill();
      });
    }
  }

  /* =================================================
     INIT GENERAL
  ================================================= */
  function init() {
    initLoader();
    initClock();
    initScrollProgress();
    initRevealOnScroll();
    initCounters();
    initTilt3D();
    initChannelTiles();
    initSoundToggle();
    initBackgroundMusic();
    initAchievements();
    initBubbleBackground();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();