<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'KDL LOGIS-cargo Services'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Transport et logistique en Afrique. Services de fret, dédouanement, négoce international et voyages d\'affaires.'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Font Awesome pour icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="index.php" class="logo">
                <!-- Remplacez src par votre logo -->
                <img src="assets/logo.jpg" alt="KDL LOGIS-cargo" class="logo-img" onerror="this.src='data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><rect width=\"100\" height=\"100\" fill=\"%230066cc\"/><text x=\"50\" y=\"60\" font-family=\"Arial\" font-size=\"30\" fill=\"white\" text-anchor=\"middle\">KDL</text></svg>';">
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
                <li><a href="contact.php" class="cta-nav">
                    <i class="fas fa-phone-alt"></i> Contact
                </a></li>
            </ul>
        </div>
    </nav>