/**
 * LA CAÍDA DEL EMPIRE STATE — RESPALDO DE MEDIOS
 * Si una foto o un video todavía no existe en /public, muestra
 * un recuadro indicando la ruta donde hay que guardarlo.
 */
(() => {
    document.querySelectorAll('[data-esb-media]').forEach((frame) => {
        const markMissing = () => frame.classList.add('is-missing');

        const image = frame.querySelector('img');
        const video = frame.querySelector('video');

        if (image) {
            if (image.complete && image.naturalWidth === 0) {
                markMissing();
            }

            image.addEventListener('error', markMissing);
        }

        if (video) {
            const source = video.querySelector('source');

            if (video.networkState === HTMLMediaElement.NETWORK_NO_SOURCE) {
                markMissing();
            }

            video.addEventListener('error', markMissing);

            if (source) {
                source.addEventListener('error', markMissing);
            }
        }
    });
})();

