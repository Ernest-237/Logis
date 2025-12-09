<?php
$page_title = "Nos Services - KDL LOGIS-cargo";
$page_description = "Découvrez tous nos services : transport maritime et aérien, dédouanement, négoce international, voyages d'affaires et assistance visa.";
include 'includes/header.php';
?>

<!-- Hero Services -->
<section class="hero">
    <div class="hero-content">
        <h1>Nos Services</h1>
        <p>Des solutions complètes pour vos besoins en transport et logistique</p>
    </div>
</section>

<!-- Services Détails -->
<section id="services-details">
    <h2>Solutions Sur Mesure</h2>
    <p style="text-align: center; color: var(--gray-600); max-width: 700px; margin: 0 auto 4rem;">
        Nous offrons une gamme complète de services adaptés aux besoins des entreprises et particuliers
    </p>
    
    <div class="services-grid">
        <!-- Transport & Dédouanement -->
        <div class="service-card" id="transport">
            <h3>🚢 Transport & Dédouanement</h3>
            <p>Solutions logistiques complètes pour le transport international de marchandises.</p>
            <ul>
                <li>Fret Aérien : Transport rapide et sécurisé avec suivi en temps réel</li>
                <li>Fret Maritime : Conteneurs FCL/LCL, transport intermodal</li>
                <li>Transport Terrestre : Réseau panafricain avec optimisation des trajets</li>
                <li>Dédouanement : Procédures accélérées et conformité douanière</li>
                <li>Logistique : Stockage, manutention et distribution</li>
            </ul>
            <a href="contact.php?service=transport">Demander un devis →</a>
        </div>

        <!-- Négoce International -->
        <div class="service-card" id="negoce">
            <h3>🌍 Négoce International</h3>
            <p>Approvisionnement mondial et gestion de la chaîne d'approvisionnement.</p>
            <ul>
                <li>Sourcing : Chine, Nigeria, Europe, Moyen-Orient</li>
                <li>Négociation : Optimisation des coûts et conditions</li>
                <li>Contrôle Qualité : Inspection avant expédition</li>
                <li>Gestion : Suivi des commandes et relations fournisseurs</li>
                <li>Conseil : Stratégies d'approvisionnement optimisées</li>
            </ul>
            <a href="contact.php?service=negoce">Parler à un expert →</a>
        </div>

        <!-- Voyages d'Affaires -->
        <div class="service-card" id="voyages">
            <h3>✈️ Voyages d'Affaires</h3>
            <p>Package complet pour vos déplacements professionnels internationaux.</p>
            <ul>
                <li>Assistance Visa : Toutes destinations (Chine, Canada, Europe...)</li>
                <li>Billets d'Avion : Tarifs négociés, toutes compagnies</li>
                <li>Hébergement : Hôtels adaptés aux voyageurs d'affaires</li>
                <li>Accompagnement : Visite des marchés et rendez-vous</li>
                <li>Logistique : Transferts, interprétariat, support 24/7</li>
            </ul>
            <a href="contact.php?service=voyages">Planifier un voyage →</a>
        </div>

        <!-- Billetterie Aérienne -->
        <div class="service-card" id="billetterie">
            <h3>🎫 Billetterie Aérienne</h3>
            <p>Réservation de billets d'avion à prix compétitifs pour toutes destinations.</p>
            <ul>
                <li>Tarifs Avantageux : Négociés avec les compagnies</li>
                <li>Toutes Destinations : Nationales et internationales</li>
                <li>Service Rapide : Réservation en moins de 24h</li>
                <li>Modification : Flexibilité pour vos plans</li>
                <li>Assistance : Support avant, pendant et après le voyage</li>
            </ul>
            <a href="contact.php?service=billetterie">Réserver un vol →</a>
        </div>

        <!-- Assistance Visa -->
        <div class="service-card" id="visa">
            <h3>📋 Assistance Visa</h3>
            <p>Accompagnement complet pour l'obtention de vos visas.</p>
            <ul>
                <li>Destinations : Canada, Chine, Allemagne, France, Belgique</li>
                <li>Documents : Préparation du dossier complet</li>
                <li>Rendez-vous : Prise de rendez-vous aux ambassades</li>
                <li>Suivi : Accompagnement jusqu'à l'obtention</li>
                <li>Urgence : Traitement express disponible</li>
            </ul>
            <a href="contact.php?service=visa">Obtenir un visa →</a>
        </div>

        <!-- Conseil Logistique -->
        <div class="service-card" id="conseil">
            <h3>📊 Conseil Logistique</h3>
            <p>Optimisation de votre chaîne logistique et réduction des coûts.</p>
            <ul>
                <li>Audit : Analyse de votre chaîne logistique actuelle</li>
                <li>Optimisation : Réduction des coûts et délais</li>
                <li>Implémentation : Mise en place des solutions</li>
                <li>Formation : Équipes opérationnelles</li>
                <li>Suivi : KPIs et reporting régulier</li>
            </ul>
            <a href="contact.php?service=conseil">Demander un audit →</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: var(--gray-50); text-align: center;">
    <h2>Besoin d'un Devis Personnalisé ?</h2>
    <p style="color: var(--gray-600); max-width: 600px; margin: 1rem auto 2rem;">
        Contactez-nous pour une analyse gratuite de vos besoins
    </p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="contact.php" class="cta-button">Prendre Rendez-vous</a>
        <a href="tel:+237XXXXXXXXX" class="cta-button" style="background: var(--white); color: var(--primary); border: 1px solid var(--primary);">Nous Appeler</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>