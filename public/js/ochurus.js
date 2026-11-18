(() => {
    'use strict';

    const loader = document.getElementById('ochurus-loader');
    const progress = document.getElementById('ochurus-progress');
    const clock = document.getElementById('ochurus-clock');
    const toastArea = document.getElementById('ochurus-toast-area');
    const achievementCount = document.getElementById('achievement-count');
    const achievementFill = document.getElementById('achievement-fill');
    const canvas = document.getElementById('confetti-canvas');

    const unlocked = new Set();
    const allSections = ['atraccion', 'experiencia', 'partes', 'tecnologia', 'objetivos'];
    let confetti = [];
    let animationFrame = null;

    window.addEventListener('load', () => {
        window.setTimeout(() => loader?.classList.add('done'), 500);
        unlock('inicio', false);
    });

    // Reloj de la barra superior.
    const updateClock = () => {
        if (!clock) return;
        clock.textContent = new Intl.DateTimeFormat('es-AR', {
            hour: '2-digit', minute: '2-digit'
        }).format(new Date());
    };
    updateClock();
    window.setInterval(updateClock, 30000);

    // Barra de progreso de lectura.
    const updateProgress = () => {
        const max = document.documentElement.scrollHeight - window.innerHeight;
        const percentage = max > 0 ? (window.scrollY / max) * 100 : 0;
        if (progress) progress.style.width = `${Math.min(100, percentage)}%`;
    };
    window.addEventListener('scroll', updateProgress, { passive: true });
    updateProgress();

    // Aparición progresiva de las secciones.
    const sections = document.querySelectorAll('.reveal-section');
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                const id = entry.target.id;
                if (id && unlocked.has(id) === false && allSections.includes(id)) {
                    unlock(id);
                }
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.16 });
        sections.forEach(section => revealObserver.observe(section));
    } else {
        sections.forEach(section => section.classList.add('is-visible'));
    }

    // Animación de los contadores cuando entran en pantalla.
    const counters = document.querySelectorAll('[data-count]');
    const countObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const element = entry.target;
            const target = Number(element.dataset.count || 0);
            const duration = 900;
            const start = performance.now();
            const tick = now => {
                const t = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - t, 3);
                element.textContent = Math.round(target * eased);
                if (t < 1) requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
            countObserver.unobserve(element);
        });
    }, { threshold: 0.6 });
    counters.forEach(counter => countObserver.observe(counter));

    // Los accesos del menú también pueden desbloquear su medalla.
    document.querySelectorAll('[data-achievement]').forEach(link => {
        link.addEventListener('click', () => unlock(link.dataset.achievement));
    });

    function unlock(id, showToast = true) {
        if (!id || unlocked.has(id)) return;
        unlocked.add(id);
        const medal = document.querySelector(`[data-medal="${id}"]`);
        medal?.classList.remove('locked');
        medal?.classList.add('unlocked');
        updateAchievementProgress();
        if (showToast) showAchievementToast(medal?.querySelector('strong')?.textContent || 'Nuevo logro');

        const completed = allSections.every(section => unlocked.has(section));
        if (completed && !unlocked.has('completo')) {
            unlocked.add('completo');
            const finalMedal = document.querySelector('[data-medal="completo"]');
            finalMedal?.classList.remove('locked');
            finalMedal?.classList.add('unlocked');
            updateAchievementProgress();
            showAchievementToast('¡Maestro Ochurus! Completaste el recorrido');
            launchConfetti();
        }
    }

    function updateAchievementProgress() {
        const count = document.querySelectorAll('.achievement.unlocked').length;
        if (achievementCount) achievementCount.textContent = `${count} / 7 logros`;
        if (achievementFill) achievementFill.style.width = `${(count / 7) * 100}%`;
    }

    function showAchievementToast(message) {
        if (!toastArea) return;
        const toast = document.createElement('div');
        toast.className = 'ochurus-toast';
        const star = document.createElement('span');
        star.textContent = '✦';
        toast.append(star, document.createTextNode(`Logro desbloqueado: ${message}`));
        toastArea.appendChild(toast);
        window.setTimeout(() => toast.remove(), 3400);
    }

    // Pequeña celebración al completar todas las secciones.
    function launchConfetti() {
        if (!canvas || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        const ctx = canvas.getContext('2d');
        if (!ctx) return;
        canvas.width = window.innerWidth * devicePixelRatio;
        canvas.height = window.innerHeight * devicePixelRatio;
        ctx.scale(devicePixelRatio, devicePixelRatio);
        const colors = ['#bd2448', '#ffc547', '#579d78', '#4a8bc4', '#ffffff'];
        confetti = Array.from({ length: 115 }, () => ({
            x: Math.random() * window.innerWidth,
            y: -Math.random() * window.innerHeight,
            size: 4 + Math.random() * 6,
            speed: 2 + Math.random() * 4,
            drift: (Math.random() - 0.5) * 2,
            rotation: Math.random() * Math.PI,
            color: colors[Math.floor(Math.random() * colors.length)]
        }));
        const start = performance.now();
        const draw = now => {
            ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
            confetti.forEach(piece => {
                piece.y += piece.speed;
                piece.x += piece.drift;
                piece.rotation += .04;
                ctx.save();
                ctx.translate(piece.x, piece.y);
                ctx.rotate(piece.rotation);
                ctx.fillStyle = piece.color;
                ctx.fillRect(-piece.size / 2, -piece.size / 2, piece.size, piece.size * .65);
                ctx.restore();
            });
            if (now - start < 3300) animationFrame = requestAnimationFrame(draw);
            else {
                cancelAnimationFrame(animationFrame);
                ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
            }
        };
        cancelAnimationFrame(animationFrame);
        animationFrame = requestAnimationFrame(draw);
    }
})();
