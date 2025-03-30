document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("button-rub-menu");
    const menu = document.getElementById("rub-menu");

    button.addEventListener("click", () => {
        menu.classList.toggle("active");
    });
});
