document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const navbar = document.getElementById('navbar');
    
    menuBtn.addEventListener('click', () => {
        if (navbar.style.left === '0px') {
            navbar.style.left = '-200px';
        } else {
            navbar.style.left = '0px';
        }
    });
});
