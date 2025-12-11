<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'KDL LOGIS-cargo Services'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Transport et logistique en Afrique. Services de fret, dédouanement, négoce international et voyages d\'affaires.'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    
    <!-- Font Awesome pour icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="index.php" class="logo">
                <!-- Remplacez src par votre logo -->
                <img src="assets/logo.jpg" alt="KDL LOGIS-cargo" class="logo-img" onerror="this.style.display='none'">
                <span>KDL LOGIS-cargo</span>
            </a>
            <button class="menu-toggle" onclick="toggleMenu()" aria-label="Menu">
                <i class="fas fa-bars"></i>
            </button>
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                    <i class="fas fa-home"></i> Accueil
                </a></li>
                <li><a href="services.php" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">
                    <i class="fas fa-concierge-bell"></i> Services
                </a></li>
                <li><a href="apropos.php" class="<?php echo ($current_page == 'apropos.php') ? 'active' : ''; ?>">
                    <i class="fas fa-info-circle"></i> À Propos
                </a></li>
                <li><a href="equipe.php" class="<?php echo ($current_page == 'equipe.php') ? 'active' : ''; ?>">
                    <i class="fas fa-users"></i> Équipe
                </a></li>
                <li><a href="realisation.php" class="<?php echo ($current_page == 'realisation.php') ? 'active' : ''; ?>">
                    <i class="fas fa-trophy"></i> Nos Réalisations
                </a></li>
                <li><a href="contact.php" class="cta-nav">
                    <i class="fas fa-phone-alt"></i> Contact
                </a></li>
            </ul>
        </div>
    </nav>

    <script>
document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-links");

    toggle.addEventListener("click", (e) => {
        e.stopPropagation();
        nav.classList.toggle("show");
    });

    // Fermer le menu quand on clique ailleurs
    document.addEventListener("click", () => {
        nav.classList.remove("show");
    });

    // Empêcher le menu de se fermer quand on clique dedans
    nav.addEventListener("click", (e) => {
        e.stopPropagation();
    });
});
</script>