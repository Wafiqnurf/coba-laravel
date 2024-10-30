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
});
