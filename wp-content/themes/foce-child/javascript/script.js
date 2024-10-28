// Animation des titres //
function addAnimationTitre(titre) {
    var mots = titre.textContent.split(' '); // Sépare le texte du titre en mots
    titre.innerHTML = ''; // Vide le titre pour y injecter les spans

    // Ajoute un span pour chaque mot du titre
    mots.forEach((mot, i) => {
        var span = document.createElement('span');
        span.textContent = mot;
        span.classList.add('AnimationTitre__mot');
        span.classList.add('AnimationTitre__mot--' + i); // Classe unique pour chaque mot
        titre.appendChild(span);
        titre.appendChild(document.createTextNode(' ')); // Ajoute un espace après chaque mot
    });
}

const observerTitre = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            addAnimationTitre(entry.target); // Ajoute les spans et anime chaque mot
            return;
        }
    });
});

const sectionTitre = document.querySelectorAll('.AnimationTitre');
sectionTitre.forEach((element) => observerTitre.observe(element));


// Parallaxe entre la video et le titre dans la banner //

document.addEventListener('DOMContentLoaded', function () {
    const logo = document.querySelector('.banner_logo');
    let scrollTimeout;

    window.addEventListener('scroll', function () {
        let scrollPosition = window.scrollY;

        // Désactiver temporairement l'animation CSS pendant le scroll
        logo.style.animation = 'none';

        // Appliquer l'effet de parallaxe pour le logo (il remonte plus vite que le scroll)
        logo.style.transform = 'translateY(' + scrollPosition * -0.5 + 'px)';

        // Réactiver l'animation floatLogo après que le scroll s'arrête
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(function () {
            // Réinitialiser l'animation et la transformation
            logo.style.animation = '';  // Remet l'animation originale
            logo.style.transform = '';  // Réinitialise la transformation pour que l'animation fonctionne bien
        }, 150); // 150ms après la fin du scroll
    });
});

//SwiperJS Coverflow dans la section personnages //

const swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    direction: 'horizontal',
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        slideShadows: false,
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1, 
    },
});

// Effet de parallaxe sur les nuages dans la section lieux //

window.addEventListener('scroll', function () {
    const bigCloud = document.querySelector('.big-cloud');
    const littleCloud = document.querySelector('.little-cloud');
    const placeSection = document.querySelector('#place');

    // Récupère la position verticale de l'élément avec l'id 'place' par rapport au haut de la page.
    const sectionOffsetTop = placeSection.offsetTop;
    // Obtenez la position actuelle de défilement de la fenêtre.
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Vérifie si la position verticale de défilement a atteint ou est supérieur à la position de l'élément avec l'id 'place'
    if (scrollPosition >= sectionOffsetTop) {

    // Calculez la valeur de parallaxe, qui est la différence entre la position de défilement et le haut relatif, divisée par 4.
        const parallaxValue = (scrollPosition - sectionOffsetTop) / 4;
        const translationX = Math.min(parallaxValue, 300);

        bigCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
        littleCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
    }
});

// Menu burger //

const navbarBurger = document.querySelector('.navbar-burger');
const burgerOpen = document.querySelector('.burger-open');
const menuLinks = burgerOpen.querySelectorAll('a');

navbarBurger.addEventListener('click', () => {
    navbarBurger.classList.toggle('active');
    burgerOpen.classList.toggle('open');
});

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        burgerOpen.classList.remove('open');
        navbarBurger.classList.remove('active');
    });
});