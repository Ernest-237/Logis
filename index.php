<?php
// Définir les variables pour le header
$page_title = "KDL LOGIS-cargo Services - Transport et Logistique en Afrique";
$page_description = "Révolutionner le transport et la logistique en Afrique. Services de fret, dédouanement, négoce international et voyages d'affaires.";

// Inclure le header
include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url('assets/images/cargo.jpg') center/cover no-repeat;">
    <div class="hero-content">
        <h1>KDL LOGIS-cargo Services</h1>
        <p>Révolutionner le transport et la logistique en Afrique</p>
        <p style="font-size: 1.5rem; font-style: italic; margin-top: 1rem; color: white !important;">"Que l'Afrique avance sans frontières"</p>
        <a href="contact.php" class="cta-button">Contactez-nous</a>
    </div>
</section>

<!-- Services Preview -->
<section id="services-preview">
    <h2>Nos Services</h2>
    <div class="services-grid">
        <div class="service-card">
            <h3> Transport & Dédouanement</h3>
            <p>Solutions complètes de transport international</p>
            <ul>
                <li>Fret aérien : rapide et sécurisé</li>
                <li>Fret maritime : FCL et LCL</li>
                <li>Transport terrestre optimisé</li>
                <li>Dédouanement et exportation</li>
            </ul>
            <a href="services.php#transport" style="color: var(--primary-blue); text-decoration: none; font-weight: bold; display: inline-block; margin-top: 1rem;">En savoir plus →</a>
        </div>

        <div class="service-card">
            <h3> Négoce International</h3>
            <p>Approvisionnement mondial de qualité</p>
            <ul>
                <li>Chine, Nigeria, Europe et bien plus encore</li>
                <li>Sélection de fournisseurs</li>
                <li>Négociation des prix</li>
                <li>Gestion complète des achats</li>
            </ul>
            <a href="services.php#negoce" style="color: var(--primary-blue); text-decoration: none; font-weight: bold; display: inline-block; margin-top: 1rem;">En savoir plus →</a>
        </div>
    </div>
    <div style="text-align: center; margin-top: 2rem;">
        <a href="services.php" class="cta-button">Voir tous nos services</a>
    </div>
</section>

<!-- About Preview -->
<section id="apropos-preview" style="background: var(--gray);">
    <h2>Qui Sommes-Nous ?</h2>
    <div class="about-content">
        <p><strong>KDL LOGIS-cargo Services...</strong></p>
        <p>C'est l'histoire d'une équipe déterminée à révolutionner le transport et la logistique en Afrique.</p>
        <p>C'est l'histoire d'une synergie entre expertise, innovation et engagement, au service des particuliers et des entreprises.</p>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="apropos.php" class="cta-button">En savoir plus sur nous</a>
        </div>
    </div>
</section>

<?php
// Inclure le footer
include 'includes/footer.php';
?>