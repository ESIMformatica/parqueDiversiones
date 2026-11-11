const sidebar = document.getElementById("sidebar");
const sidebarToggle = document.getElementById("sidebarToggle");

if (sidebar && sidebarToggle) {

    // Botón ☰: contrae / expande el sidebar
    sidebarToggle.addEventListener("click", () => {
        const collapsed = sidebar.classList.toggle("collapsed");
        sidebarToggle.setAttribute("aria-expanded", String(!collapsed));
    });

    // Desplegable "Atracciones"
    sidebar.querySelectorAll(".retro-sidebar__trigger").forEach((trigger) => {
        trigger.addEventListener("click", () => {
            const group = trigger.closest(".retro-sidebar__group");

            // Si el sidebar está contraído, lo expande y abre el grupo
            if (sidebar.classList.contains("collapsed")) {
                sidebar.classList.remove("collapsed");
                sidebarToggle.setAttribute("aria-expanded", "true");
                group.classList.add("is-open");
                trigger.setAttribute("aria-expanded", "true");
                return;
            }

            const open = group.classList.toggle("is-open");
            trigger.setAttribute("aria-expanded", String(open));
        });
    });
}