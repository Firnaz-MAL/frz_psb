// public/js/navbar.js
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".navbar-toggle");
    const menu = document.querySelector(".navbar-menu");

    toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });
});
