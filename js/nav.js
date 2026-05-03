document.addEventListener("DOMContentLoaded", function() {
    const adjustMenus = () => {
        const subMenus = document.querySelectorAll('.primary_nav .sub-menu');

        subMenus.forEach(menu => {
            // Reset class to check fresh on every resize
            menu.classList.remove('edge-flip');

            const rect = menu.getBoundingClientRect();
            const viewportWidth = window.innerWidth;

            // If the right edge of the menu is beyond the viewport
            if (rect.right > viewportWidth) {
                menu.classList.add('edge-flip');
            }
        });
    };

    // Run once on load and every time the window is resized
    adjustMenus();
    window.addEventListener('resize', adjustMenus);
});