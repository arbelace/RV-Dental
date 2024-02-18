/*==================== SHOW NAVBAR MOBILE VIEW====================*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show-menu')
        })
        document.addEventListener('click', (e) => {
            if (!toggle.contains(e.target) && !nav.contains(e.target)) {
                nav.classList.remove('show-menu');
            }
        });
    }
}
showMenu('nav-toggle', 'nav-menu');
const dropdownToggle = document.querySelectorAll('.dropdown-toggle');
dropdownToggle.forEach(item => {
    item.addEventListener('click', (e) => {
        const parent = e.target.parentElement;
        parent.classList.toggle('show-dropdown');
    });
});

// FUNC NG DROPDOWN KAPAG CLINICK SA LABAS
document.addEventListener('click', (e) => {
    dropdownToggle.forEach(item => {
        const parent = item.parentElement;
        if (!parent.contains(e.target)) {
            parent.classList.remove('show-dropdown');
        }
    });
});

const navLinks = document.querySelectorAll('.nav__link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        const dropdowns = document.querySelectorAll('.show-dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.classList.remove('show-dropdown');
        });
    });
});

/*==================== CHANGE COLOR NAVBAR ====================*/
window.addEventListener('scroll', function() {
    var header = document.getElementById('header');
    if (window.scrollY > 50) {
      header.classList.add('scroll');
    } else {
      header.classList.remove('scroll');
    }
});
/*==================== CAROUSEL FUNC ====================*/
// $('.main-carousel').flickity({
//     cellAlign: 'left',
//     autoPlay: true,
//     wrapAround: true,
//     freeScroll: true,
// });