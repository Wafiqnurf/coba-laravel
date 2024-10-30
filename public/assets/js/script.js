document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".menu");
    const navLink = document.querySelector(".nav-link");

    // Toggle mobile menu
    menu.addEventListener("click", () => {
        navLink.classList.toggle("active");
    });

    // Close mobile menu when clicking outside
    document.addEventListener("click", (e) => {
        if (!menu.contains(e.target) && !navLink.contains(e.target)) {
            navLink.classList.remove("active");
        }
    });

    // Hide/Show navbar on scroll
    let lastScroll = 0;
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        const navbar = document.querySelector(".navbarr");

        if (currentScroll <= 0) {
            navbar.style.transform = "translateY(0)";
            return;
        }

        if (currentScroll > lastScroll) {
            // Scrolling down
            navbar.style.transform = "translateY(-100%)";
        } else {
            // Scrolling up
            navbar.style.transform = "translateY(0)";
        }
        lastScroll = currentScroll;
    });
});
