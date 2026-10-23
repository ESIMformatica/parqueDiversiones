const body = document.body;
const sidebar = document.querySelector('.sidebar');
const collapseButton = document.querySelector('.sidebar-collapse');
const mobileButton = document.querySelector('.mobile-menu-button');
const overlay = document.querySelector('.sidebar-overlay');

function isMobile() {
    return window.innerWidth <= 760;
}

function toggleDesktopSidebar() {
    if (isMobile()) {
        return;
    }

    body.classList.toggle('sidebar-collapsed');

    const isCollapsed = body.classList.contains('sidebar-collapsed');

    collapseButton.setAttribute(
        'aria-label',
        isCollapsed
            ? 'Expandir menú lateral'
            : 'Contraer menú lateral'
    );
}

function toggleMobileSidebar() {
    const isOpen = sidebar.classList.toggle('mobile-open');

    overlay.classList.toggle('show', isOpen);
    body.classList.toggle('menu-open', isOpen);

    if (mobileButton) {
        mobileButton.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );
    }
}

function closeMobileSidebar() {
    sidebar.classList.remove('mobile-open');
    overlay.classList.remove('show');
    body.classList.remove('menu-open');

    if (mobileButton) {
        mobileButton.setAttribute('aria-expanded', 'false');
    }
}

if (collapseButton) {
    collapseButton.addEventListener(
        'click',
        toggleDesktopSidebar
    );
}

if (mobileButton) {
    mobileButton.addEventListener(
        'click',
        toggleMobileSidebar
    );
}

if (overlay) {
    overlay.addEventListener(
        'click',
        closeMobileSidebar
    );
}

window.addEventListener('resize', () => {
    if (!isMobile()) {
        closeMobileSidebar();
    }
});


const contactToggle = document.querySelector('.sidebar-contact-toggle');
const contactSubmenu = document.querySelector('#submenu-contacto');

if (contactToggle && contactSubmenu) {
    contactToggle.addEventListener('click', function () {
        const isExpanded = contactToggle.getAttribute('aria-expanded') === 'true';

        contactToggle.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
        contactSubmenu.hidden = isExpanded;
    });
}

const attractionToggle = document.querySelector('.sidebar-toggle');
const attractionSubmenu = document.querySelector('#submenu-atracciones');

if (attractionToggle && attractionSubmenu) {
    attractionToggle.addEventListener('click', function () {
        const isExpanded =
            attractionToggle.getAttribute('aria-expanded') === 'true';

        attractionToggle.setAttribute(
            'aria-expanded',
            isExpanded ? 'false' : 'true'
        );

        attractionSubmenu.hidden = isExpanded;
    });
}