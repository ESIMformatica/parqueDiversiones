const sidebar = document.getElementById("sidebar");
const btn = document.getElementById("sidebarToggle");

btn.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
});