// ===================================
// NAVIGATION MOBILE - JavaScript
// ===================================

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const body = document.body;
    const navLinksItems = document.querySelectorAll('.nav-links a');

    // Fonction pour ouvrir/fermer le menu
    function toggleMenu(event) {
        if (event) {
            event.stopPropagation();
        }

        const isActive = navLinks.classList.contains('active');
        
        if (isActive) {
            // Fermer le menu
            closeMenu();
        } else {
            // Ouvrir le menu
            openMenu();
        }
    }

    // Fonction pour ouvrir le menu
    function openMenu() {
        navLinks.classList.add('active');
        body.classList.add('menu-open');
        
        // Changer l'icône en X
        const icon = menuToggle.querySelector('i');
        if (icon) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }
    }

    // Fonction pour fermer le menu
    function closeMenu() {
        navLinks.classList.remove('active');
        body.classList.remove('menu-open');
        
        // Remettre l'icône hamburger
        const icon = menuToggle.querySelector('i');
        if (icon) {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    }

    // Événement sur le bouton hamburger
    if (menuToggle) {
        menuToggle.addEventListener('click', toggleMenu);
    }

    // Fermer le menu quand on clique sur un lien (seulement sur mobile)
    navLinksItems.forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                closeMenu();
            }
        });
    });

    // Fermer le menu si on clique en dehors (sur l'overlay)
    navLinks.addEventListener('click', function(event) {
        // Si on clique sur le fond (pas sur un lien)
        if (event.target === navLinks) {
            closeMenu();
        }
    });

    // Empêcher la propagation des clics à l'intérieur du menu
    const navItems = navLinks.querySelectorAll('li, a');
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });

    // Fermer le menu avec la touche Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navLinks.classList.contains('active')) {
            closeMenu();
        }
    });

    // Gérer le redimensionnement de la fenêtre
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Si on passe en desktop, fermer le menu mobile
            if (window.innerWidth > 768 && navLinks.classList.contains('active')) {
                closeMenu();
            }
        }, 250);
    });
});

// Animation au scroll (pour les cartes)
window.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.service-card, .team-card, .project-card, .mission-card');
    
    const fadeInOnScroll = () => {
        fadeElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('fade-in');
            }
        });
    };
    
    window.addEventListener('scroll', fadeInOnScroll);
    fadeInOnScroll(); // Exécuter au chargement
});