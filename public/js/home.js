document.addEventListener('DOMContentLoaded', () => {
    // Deklarasikan tombol hamburger-menu dan nav-list
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navList = document.querySelector('.nav-list');

    // Membuat event klik di hamburger menu
    hamburgerMenu.addEventListener('click', () => {
        navList.classList.toggle('active');
        event.stopPropagation();
});

document.addEventListener('click', (event) => {
        if(!hamburgerMenu.contains(event.target) && !navList.contains(event.target)){
            navList.classList.remove('active');
        }
    });
})

const accordionLabels = document.querySelectorAll('.accordion-label');

accordionLabels.forEach((label) => {
    label.addEventListener('click', () => {
        const content = label.nextElementSibling;
        content.classList.toggle('show');
        label.classList.toggle('active');
    });
});