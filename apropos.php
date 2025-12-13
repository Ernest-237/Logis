<?php
$page_title = "À Propos - KDL LOGIS-cargo";
$page_description = "Découvrez l'histoire de KDL LOGIS-cargo, notre mission et nos valeurs au service du transport et de la logistique en Afrique.";
include 'includes/header.php';
?>

<!-- Hero À Propos -->
<section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url('assets/images/cargo.jpg') center/cover no-repeat;">
    <div class="hero-content">
        <h1>À Propos de Nous</h1>
        <p>Révolutionner le transport et la logistique en Afrique</p>
    </div>
</section>

<!-- Notre Histoire -->
<section>
    <h2>Notre Histoire</h2>
    <div class="about-content">
        <p><strong>KDL LOGIS-cargo Services...</strong></p>
        <p>C'est l'histoire d'une équipe déterminée à révolutionner le transport et la logistique en Afrique.</p>
        <p>C'est l'histoire d'une synergie entre expertise, innovation et engagement, au service des particuliers et des entreprises.</p>
        <p>Depuis notre création, nous nous sommes donnés pour mission de faciliter les échanges commerciaux à travers l'Afrique et au-delà, en offrant des solutions logistiques fiables, efficaces et adaptées aux réalités du continent.</p>
    </div>
</section>

<!-- Mission & Vision -->
<section style="background: var(--gray-50);">
    <div style="max-width: 1100px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="mission-card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🎯</div>
                <h3>Notre Mission</h3>
                <p>Faciliter le commerce et les échanges en Afrique en fournissant des solutions logistiques innovantes, fiables et accessibles à tous.</p>
            </div>
            
            <div class="mission-card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">👁️</div>
                <h3>Notre Vision</h3>
                <p>Devenir le partenaire logistique de référence en Afrique, reconnu pour notre excellence opérationnelle et notre engagement envers nos clients.</p>
            </div>
            
            <div class="mission-card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">💡</div>
                <h3>Nos Valeurs</h3>
                <p>intégrité ,Excellence,innovation et engagement. Nous plaçons la satisfaction client au cœur de toutes nos actions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi Nous Choisir -->
<section>
    <h2>Pourquoi Nous Choisir ?</h2>
    <div style="max-width: 900px; margin: 3rem auto 0;">
        <div class="why-choose-list">
            <div class="why-item">
                <div class="why-number">01</div>
                <div>
                    <h3>Expertise Approfondie</h3>
                    <p>Une équipe de professionnels expérimentés maîtrisant les spécificités du marché africain et international.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-number">02</div>
                <div>
                    <h3>Solutions Sur Mesure</h3>
                    <p>Nous adaptons nos services à vos besoins spécifiques, qu'ils soient ponctuels ou récurrents.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-number">03</div>
                <div>
                    <h3>Réseau Étendu</h3>
                    <p>Des partenaires de confiance en Afrique, Asie, Europe et Amérique pour assurer vos opérations partout dans le monde.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-number">04</div>
                <div>
                    <h3>Engagement Qualité</h3>
                    <p>Nous garantissons la sécurité de vos marchandises et le respect des délais convenus.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-number">05</div>
                <div>
                    <h3>Support 24/7</h3>
                    <p>Une équipe disponible à tout moment pour répondre à vos questions et suivre vos opérations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="background: var(--gray-50); text-align: center;">
    <h2>Prêt à Commencer ?</h2>
    <p style="color: var(--gray-600); max-width: 600px; margin: 1rem auto 2rem;">
        Rejoignez les entreprises qui nous font confiance pour leurs opérations logistiques
    </p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="contact.php" class="cta-button">Contactez-nous</a>
        <a href="services.php" class="cta-button" style="background: var(--white); color: var(--primary); border: 1px solid var(--primary);">Voir nos services</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>