/**
 * LA CAÍDA DEL EMPIRE STATE — ASCENSOR Y DIRECTORIO DE PISOS
 * Lee la posición real de la cabina dentro del hueco y actualiza
 * el indicador de piso, el dial Art Déco, la polea, el contrapeso,
 * el readout móvil y el enlace activo del directorio de pisos.
 */
(() => {
    const shaft = document.querySelector('[data-esb-shaft]');
    const mobileFloor = document.querySelector('[data-esb-mobile-floor]');
    const mobileMeters = document.querySelector('[data-esb-mobile-meters]');
    const floorLinks = Array.from(document.querySelectorAll('[data-floor-link]'));
    const building = document.querySelector('.esb');

    if (!shaft && !mobileFloor && floorLinks.length === 0) {
        return;
    }

    const rig = shaft ? shaft.querySelector('[data-esb-rig]') : null;
    const needle = shaft ? shaft.querySelector('[data-esb-needle]') : null;
    const floorReadout = shaft ? shaft.querySelector('[data-esb-floor]') : null;
    const metersReadout = shaft ? shaft.querySelector('[data-esb-meters]') : null;
    const dirReadout = shaft ? shaft.querySelector('[data-esb-dir]') : null;
    const counterweight = shaft ? shaft.querySelector('[data-esb-counterweight]') : null;
    const sheave = shaft ? shaft.querySelector('[data-esb-sheave]') : null;

    const TOP_FLOOR = 102;
    const HEIGHT_METERS = 381;
    const DIAL_SWEEP = 75;

    let paddingTop = 0;
    let paddingBottom = 0;
    let ticking = false;
    let moveTimer = null;
    let lastScrollY = window.scrollY;

    function measure() {
        if (!shaft) {
            return;
        }
        const styles = getComputedStyle(shaft);
        paddingTop = parseFloat(styles.paddingTop);
        paddingBottom = parseFloat(styles.paddingBottom);
    }

    function computeFallbackProgress() {
        if (!building) {
            return 0;
        }
        const rect = building.getBoundingClientRect();
        const scrollable = Math.max(1, building.offsetHeight - window.innerHeight);
        return Math.min(1, Math.max(0, -rect.top / scrollable));
    }

    function updateActiveFloorLink() {
        if (floorLinks.length === 0) {
            return;
        }

        const triggerLine = 160;
        let activeId = floorLinks[0].dataset.floorLink;

        const atBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 24;
        if (atBottom) {
            activeId = floorLinks[floorLinks.length - 1].dataset.floorLink;
        } else {
            for (const link of floorLinks) {
                const target = document.getElementById(link.dataset.floorLink);
                if (target && target.getBoundingClientRect().top <= triggerLine) {
                    activeId = link.dataset.floorLink;
                }
            }
        }

        for (const link of floorLinks) {
            const isActive = link.dataset.floorLink === activeId;
            link.classList.toggle('is-active', isActive);
            if (isActive) {
                link.setAttribute('aria-current', 'location');
            } else {
                link.removeAttribute('aria-current');
            }
        }
    }

    function render() {
        ticking = false;

        let progress = null;

        if (shaft && rig) {
            const innerHeight = shaft.clientHeight - paddingTop - paddingBottom;
            const travel = innerHeight - rig.offsetHeight;

            if (travel > 0 && shaft.offsetParent !== null) {
                const offset = rig.getBoundingClientRect().top - shaft.getBoundingClientRect().top - paddingTop;
                progress = Math.min(1, Math.max(0, offset / travel));

                if (counterweight) {
                    const lane = innerHeight - counterweight.offsetHeight;
                    counterweight.style.transform = `translateY(${(lane * (1 - progress)).toFixed(1)}px)`;
                }
            }
        }

        if (progress === null) {
            progress = computeFallbackProgress();
        }

        const floor = Math.max(1, Math.round(TOP_FLOOR - progress * (TOP_FLOOR - 1)));
        const meters = Math.round(HEIGHT_METERS * (1 - progress));
        const floorText = String(floor).padStart(2, '0');
        const metersText = `${meters} m`;

        if (floorReadout) {
            floorReadout.textContent = floorText;
        }
        if (metersReadout) {
            metersReadout.textContent = metersText;
        }
        if (mobileFloor) {
            mobileFloor.textContent = floorText;
        }
        if (mobileMeters) {
            mobileMeters.textContent = metersText;
        }

        if (needle) {
            const angle = DIAL_SWEEP - progress * DIAL_SWEEP * 2;
            needle.setAttribute('transform', `rotate(${angle.toFixed(2)} 70 138)`);
        }

        if (sheave) {
            sheave.style.transform = `rotate(${(progress * 1080).toFixed(1)}deg)`;
        }

        updateActiveFloorLink();
    }

    function onScroll() {
        const currentY = window.scrollY;
        const delta = currentY - lastScrollY;
        lastScrollY = currentY;

        if (!ticking) {
            ticking = true;
            requestAnimationFrame(render);
        }

        if (dirReadout && Math.abs(delta) > 0) {
            dirReadout.textContent = delta > 0 ? '▼' : '▲';
        }

        if (rig) {
            rig.classList.add('is-moving');
        }

        clearTimeout(moveTimer);
        moveTimer = setTimeout(() => {
            if (rig) {
                rig.classList.remove('is-moving');
            }
            if (dirReadout) {
                dirReadout.textContent = '•';
            }
        }, 180);
    }

    measure();
    render();

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', () => {
        measure();
        render();
    });
})();
