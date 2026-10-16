/**
 * EMPIRE STATE BUILDING — CONTROL DE DESCENSO EN SCROLL SOBRE LA FACHADA
 * Calcula en tiempo real el piso (102 -> 01) y la altura (381m -> 0m)
 * a medida que el usuario se desliza hacia abajo por el documento.
 */

document.addEventListener('DOMContentLoaded', () => {
    const facadeShell = document.getElementById('fallFacadeShell');
    const dropProgress = document.getElementById('shaftDropProgress');
    const floorReadout = document.getElementById('scrollFloorReadout');
    const metersReadout = document.getElementById('scrollMetersReadout');
    const stateLabel = document.getElementById('scrollStateLabel');

    if (!facadeShell || !floorReadout || !metersReadout) {
        return;
    }

    const MAX_FLOOR = 102;
    const MIN_FLOOR = 1;
    const MAX_METERS = 381;

    function updateFacadeDescent() {
        const rect = facadeShell.getBoundingClientRect();
        const viewportHeight = window.innerHeight;
        const totalScrollable = Math.max(1, facadeShell.offsetHeight - viewportHeight);
        const scrolledDistance = Math.min(Math.max(0, -rect.top), totalScrollable);
        const progress = scrolledDistance / totalScrollable;

        const currentFloor = Math.max(
            MIN_FLOOR,
            Math.round(MAX_FLOOR - progress * (MAX_FLOOR - MIN_FLOOR))
        );
        const currentMeters = Math.max(
            0,
            Math.round(MAX_METERS - progress * MAX_METERS)
        );

        if (dropProgress) {
            dropProgress.style.height = `${(progress * 100).toFixed(1)}%`;
        }

        floorReadout.textContent = `PISO ${String(currentFloor).padStart(2, '0')}`;
        metersReadout.textContent = `${currentMeters} M`;

        if (stateLabel) {
            if (progress < 0.12) {
                stateLabel.textContent = 'CÚSPIDE • KONG';
            } else if (progress < 0.55) {
                stateLabel.textContent = 'CAÍDA EN CURSO';
            } else if (progress < 0.88) {
                stateLabel.textContent = 'TRAMO INFERIOR';
            } else {
                stateLabel.textContent = 'BASE • FRENADO';
            }
        }
    }

    window.addEventListener('scroll', updateFacadeDescent, { passive: true });
    window.addEventListener('resize', updateFacadeDescent);
    updateFacadeDescent();
});

