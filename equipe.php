<?php
$page_title = "Notre Équipe - KDL LOGIS-cargo";
$page_description = "Rencontrez l'équipe de KDL LOGIS-cargo, des professionnels passionnés au service de votre logistique.";
include 'includes/header.php';
?>

<!-- Hero Équipe -->
<section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url('assets/images/cargo.jpg') center/cover no-repeat;">
    <div class="hero-content">
        <h1>Notre Équipe</h1>
        <p>Des professionnels dévoués à votre service</p>
    </div>
</section>


<!-- Équipe -->
<section>
    <h2>Rencontrez Notre Équipe</h2>
    <p style="text-align: center; color: var(--gray-600); max-width: 700px; margin: 0 auto 4rem;">
        Une équipe d'experts passionnés et engagés dans la réussite de vos projets logistiques
    </p>
    
    <div class="team-grid">
        <!-- Membre 1 -->
        <div class="team-card">
            <div class="team-avatar">
                <img src="assets/team/membre1.jpg" alt="Directeur Général" onerror="this.parentElement.innerHTML='<div class=\'avatar-placeholder\'>👤</div>'">
            </div>
            <h3>Nom du Membre</h3>
            <p class="team-role">Directeur Général</p>
            <p class="team-description">
                Expert en logistique avec plus de 15 ans d'expérience dans le transport international et le commerce en Afrique.
            </p>
        </div>
        
        <!-- Membre 2 -->
        <div class="team-card">
            <div class="team-avatar">
                <img src="assets/team/membre2.jpg" alt="Responsable Opérations" onerror="this.parentElement.innerHTML='<div class=\'avatar-placeholder\'>👤</div>'">
            </div>
            <h3>Nom du Membre</h3>
            <p class="team-role">Responsable Opérations</p>
            <p class="team-description">
                Spécialiste en gestion des opérations logistiques et optimisation des chaînes d'approvisionnement.
            </p>
        </div>
        
        <!-- Membre 3 -->
        <div class="team-card">
            <div class="team-avatar">
                <img src="assets/team/membre3.jpg" alt="Responsable Commercial" onerror="this.parentElement.innerHTML='<div class=\'avatar-placeholder\'>👤</div>'">
            </div>
            <h3>Nom du Membre</h3>
            <p class="team-role">Responsable Commercial</p>
            <p class="team-description">
                Expert en développement commercial et relations clients, avec un réseau étendu en Afrique et en Asie.
            </p>
        </div>
        
        <!-- Membre 4 -->
        <div class="team-card">
            <div class="team-avatar">
                <img src="assets/team/membre4.jpg" alt="Responsable Dédouanement" onerror="this.parentElement.innerHTML='<div class=\'avatar-placeholder\'>👤</div>'">
            </div>
            <h3>Nom du Membre</h3>
            <p class="team-role">Responsable Dédouanement</p>
            <p class="team-description">
                Spécialiste des procédures douanières avec une connaissance approfondie des réglementations internationales.
            </p>
        </div>
        
        <!-- Membre 5 -->
        <div class="team-card">
            <div class="team-avatar">
                <img src="assets/team/membre5.jpg" alt="Responsable Voyages" onerror="this.parentElement.innerHTML='<div class=\'avatar-placeholder\'>👤</div>'">
            </div>
            <h3>Nom du Membre</h3>
            <p class="team-role">Responsable Voyages</p>
            <p class="team-description">
                Expert en voyages d'affaires et assistance visa, facilitant vos déplacements professionnels.
            </p>
        </div>
        
        <!-- Membre 6 -->
        <div class="team-card">
            <div class="team-avatar">
                <img src="assets/team/membre6.jpg" alt="Responsable Négoce" onerror="this.parentElement.innerHTML='<div class=\'avatar-placeholder\'>👤</div>'">
            </div>
            <h3>Nom du Membre</h3>
            <p class="team-role">Responsable Négoce</p>
            <p class="team-description">
                Spécialiste du sourcing international et de la négociation avec les fournisseurs mondiaux.
            </p>
        </div>
    </div>
</section>

<!-- Valeurs d'Équipe -->
<section style="background: var(--primary-light);">
    <h2>Ce Qui Nous Anime</h2>
    <div style="max-width: 1000px; margin: 3rem auto 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
        <div class="value-card">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🤝</div>
            <h3>Collaboration</h3>
            <p>Nous travaillons ensemble pour atteindre vos objectifs</p>
        </div>
        
        <div class="value-card">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">⚡</div>
            <h3>Réactivité</h3>
            <p>Nous répondons rapidement à vos besoins</p>
        </div>
        
        <div class="value-card">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">🎯</div>
            <h3>Excellence</h3>
            <p>Nous visons l'excellence dans chaque projet</p>
        </div>
        
        <div class="value-card">
            <div style="font-size: 2.5rem; margin-bottom: 1rem;">💪</div>
            <h3>Engagement</h3>
            <p>Nous nous engageons pour votre réussite</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="text-align: center;">
    <h2>Rejoignez Notre Équipe</h2>
    <p style="color: var(--gray-600); max-width: 600px; margin: 1rem auto 2rem;">
        Nous sommes toujours à la recherche de talents passionnés pour renforcer notre équipe
    </p>
    <a href="contact.php" class="cta-button">Envoyez votre candidature</a>
</section>

<?php include 'includes/footer.php'; ?>