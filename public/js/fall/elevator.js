/**
 * LA CAÍDA DEL EMPIRE STATE — ASCENSOR
 * Lee la posición real de la cabina dentro del hueco y actualiza
 * el indicador de piso, el dial Art Déco y el contrapeso.
 */
(() => {
    const shaft = document.querySelector('[data-esb-shaft]');

    if (!shaft) {
        return;
    }

    const rig = shaft.querySelector('[data-esb-rig]');
    const needle = shaft.querySelector('[data-esb-needle]');
    const floorReadout = shaft.querySelector('[data-esb-floor]');
    const metersReadout = shaft.querySelector('[data-esb-meters]');
    const counterweight = shaft.querySelector('[data-esb-counterweight]');

    const TOP_FLOOR = 102;
    const HEIGHT_METERS = 381;
    const DIAL_SWEEP = 75;

    let paddingTop = 0;
    let paddingBottom = 0;
    let ticking = false;
    let moveTimer = null;

    function measure() {
        const styles = getComputedStyle(shaft);
        paddingTop = parseFloat(styles.paddingTop);
        paddingBottom = parseFloat(styles.paddingBottom);
    }

    function render() {
        ticking = false;

        const innerHeight = shaft.clientHeight - paddingTop - paddingBottom;
        const travel = innerHeight - rig.offsetHeight;

        if (travel <= 0) {
            return;
        }

        const offset = rig.getBoundingClientRect().top - shaft.getBoundingClientRect().top - paddingTop;
        const progress = Math.min(1, Math.max(0, offset / travel));

        const floor = Math.max(1, Math.round(TOP_FLOOR - progress * (TOP_FLOOR - 1)));
        const meters = Math.round(HEIGHT_METERS * (1 - progress));
        const angle = DIAL_SWEEP - progress * DIAL_SWEEP * 2;

        floorReadout.textContent = String(floor).padStart(2, '0');
        metersReadout.textContent = `${meters} m`;
        needle.setAttribute('transform', `rotate(${angle.toFixed(2)} 70 138)`);

        if (counterweight) {
            const lane = innerHeight - counterweight.offsetHeight;
            counterweight.style.transform = `translateY(${(lane * (1 - progress)).toFixed(1)}px)`;
        }
    }

    function onScroll() {
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(render);
        }

        rig.classList.add('is-moving');
        clearTimeout(moveTimer);
        moveTimer = setTimeout(() => rig.classList.remove('is-moving'), 180);
    }

    measure();
    render();

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', () => {
        measure();
        render();
    });
})();

