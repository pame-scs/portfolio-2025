document.addEventListener('DOMContentLoaded', function() {
    const navMenuIcon = document.querySelector('.nav-menu-icon');
    const traductionMenuIcon = document.querySelector('.traduction-menu-icon');
    const navUl = document.querySelector('nav ul.nav-a');
    const traductionUl = document.querySelector('nav ul.traduction');

    navMenuIcon.addEventListener('click', function() {
        navUl.classList.toggle('show');
    });

    traductionMenuIcon.addEventListener('click', function() {
        traductionUl.classList.toggle('show');
    });
});