document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});  

function toggleMenu() {
    const navLinks = document.getElementById('nav-links');
    const body = document.body;
    navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
    if (navLinks.style.display === 'flex') {
        body.classList.add('no-scroll');
    } else {
        body.classList.remove('no-scroll');
    }
}