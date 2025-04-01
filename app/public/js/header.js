document.addEventListener("DOMContentLoaded", () => {
    const button = document.getElementById("button-rub-menu");
    const menu = document.getElementById("rub-menu");
    //menu account log
    const button_account = document.getElementById("icon-person");
    const account_menu = document.getElementById("account");

    button.addEventListener("click", () => {
        menu.classList.toggle("active");
    });

    button_account.addEventListener("click", () => {
        account_menu.classList.toggle("active");
    });
});
