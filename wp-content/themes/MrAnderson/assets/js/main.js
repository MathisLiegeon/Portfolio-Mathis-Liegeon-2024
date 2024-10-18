// HEADER CONFIGURATION
document.addEventListener('DOMContentLoaded', function() {
    var burger = document.getElementById('burger');
    var mobileMenu = document.getElementById('mobile-menu');

    burger.addEventListener('click', function() {
        mobileMenu.classList.toggle('open');
    });
});