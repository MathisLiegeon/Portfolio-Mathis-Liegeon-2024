// HEADER CONFIGURATION
document.addEventListener('DOMContentLoaded', function() {
    var burger = document.getElementById('burger');
    var headerMenu = document.getElementById('header-menu');

    burger.addEventListener('click', function() {
        headerMenu.classList.toggle('open');
        burger.classList.toggle('open');
    });
});