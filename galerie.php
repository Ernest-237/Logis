<?php
// Récupération du secteur depuis l'URL
$sector = isset($_GET['sector']) ? $_GET['sector'] : 'boisons';

// Configuration des secteurs
$sectors = [
    'boisons' => [
        'title' => 'Boissons & Liqueurs',
        'icon' => '🍾',
        'description' => 'Nos réalisations dans l\'importation et la distribution de boissons et liqueurs de qualité',
        'images' => [
            ['src' => 'assets/images/sectors/boisons-1.jpg', 'title' => 'Import de vins premium', 'desc' => 'Conteneur de vins français'],
            ['src' => 'assets/images/sectors/boisons-2.jpg', 'title' => 'Spiritueux italiens', 'desc' => 'Livraison de liqueurs italiennes'],
            ['src' => 'assets/images/sectors/boisons-3.jpg', 'title' => 'Bières artisanales', 'desc' => 'Import de bières européennes'],
            ['src' => 'assets/images/sectors/boisons-4.jpg', 'title' => 'Champagnes', 'desc' => 'Stockage en entrepôt climatisé'],
            ['src' => 'assets/images/sectors/boisons-5.jpg', 'title' => 'Distribution régionale', 'desc' => 'Livraison multi-sites'],
            ['src' => 'assets/images/sectors/boisons-6.jpg', 'title' => 'Dédouanement express', 'desc' => 'Procédures accélérées'],
        ]
    ],
    'construction' => [
        'title' => 'Construction & BTP',
        'icon' => '🏗️',
        'description' => 'Transport et logistique de matériaux de construction et équipements BTP',
        'images' => [
            ['src' => 'assets/images/sectors/construction-1.jpg', 'title' => 'Matériaux lourds', 'desc' => 'Transport de poutrelles métalliques'],
            ['src' => 'assets/images/sectors/construction-2.jpg', 'title' => 'Ciment et agrégats', 'desc' => 'Livraison en vrac'],
            ['src' => 'assets/images/sectors/construction-3.jpg', 'title' => 'Équipements BTP', 'desc' => 'Import de machines de chantier'],
            ['src' => 'assets/images/sectors/construction-4.jpg', 'title' => 'Matériaux de finition', 'desc' => 'Carrelage et revêtements'],
            ['src' => 'assets/images/sectors/construction-5.jpg', 'title' => 'Quincaillerie', 'desc' => 'Fournitures diverses'],
            ['src' => 'assets/images/sectors/construction-6.jpg', 'title' => 'Livraison chantier', 'desc' => 'Transport sur site'],
        ]
    ],
    'distribution' => [
        'title' => 'Distribution & Retail',
        'icon' => '🛒',
        'description' => 'Solutions logistiques pour la grande distribution et le commerce de détail',
        'images' => [
            ['src' => 'assets/images/sectors/distribution-1.jpg', 'title' => 'E-commerce', 'desc' => 'Préparation de commandes'],
            ['src' => 'assets/images/sectors/distribution-2.jpg', 'title' => 'Cross-docking', 'desc' => 'Plateforme de distribution'],
            ['src' => 'assets/images/sectors/distribution-3.jpg', 'title' => 'Last-mile', 'desc' => 'Livraison dernier kilomètre'],
            ['src' => 'assets/images/sectors/distribution-4.jpg', 'title' => 'Retail supply chain', 'desc' => 'Approvisionnement magasins'],
            ['src' => 'assets/images/sectors/distribution-5.jpg', 'title' => 'Entreposage', 'desc' => 'Gestion de stock'],
            ['src' => 'assets/images/sectors/distribution-6.jpg', 'title' => 'Distribution urbaine', 'desc' => 'Livraisons en ville'],
        ]
    ],
    'industrie' => [
        'title' => 'Industrie & Manufacturing',
        'icon' => '🏭',
        'description' => 'Transport de machines industrielles et équipements manufacturiers',
        'images' => [
            ['src' => 'assets/images/sectors/industrie-1.jpg', 'title' => 'Machines-outils', 'desc' => 'Import depuis la Chine'],
            ['src' => 'assets/images/sectors/industrie-2.jpg', 'title' => 'Équipements lourds', 'desc' => 'Transport spécialisé'],
            ['src' => 'assets/images/sectors/industrie-3.jpg', 'title' => 'Pièces détachées', 'desc' => 'Logistique industrielle'],
            ['src' => 'assets/images/sectors/industrie-4.jpg', 'title' => 'Installation sur site', 'desc' => 'Mise en service'],
            ['src' => 'assets/images/sectors/industrie-5.jpg', 'title' => 'Maintenance', 'desc' => 'Support après-vente'],
            ['src' => 'assets/images/sectors/industrie-6.jpg', 'title' => 'Solutions clé en main', 'desc' => 'Projet complet'],
        ]
    ],
    'agroalimentaire' => [
        'title' => 'Agroalimentaire',
        'icon' => '🌾',
        'description' => 'Logistique spécialisée pour les produits alimentaires et agricoles',
        'images' => [
            ['src' => 'assets/images/sectors/agro-1.jpg', 'title' => 'Produits frais', 'desc' => 'Chaîne du froid'],
            ['src' => 'assets/images/sectors/agro-2.jpg', 'title' => 'Denrées sèches', 'desc' => 'Import en conteneur'],
            ['src' => 'assets/images/sectors/agro-3.jpg', 'title' => 'Équipements agricoles', 'desc' => 'Machines et outils'],
            ['src' => 'assets/images/sectors/agro-4.jpg', 'title' => 'Conditionnement', 'desc' => 'Emballage alimentaire'],
            ['src' => 'assets/images/sectors/agro-5.jpg', 'title' => 'Certification', 'desc' => 'Conformité sanitaire'],
            ['src' => 'assets/images/sectors/agro-6.jpg', 'title' => 'Distribution', 'desc' => 'Réseau de livraison'],
        ]
    ],
    'technologies' => [
        'title' => 'Technologies & IT',
        'icon' => '💻',
        'description' => 'Import et distribution d\'équipements informatiques et technologiques',
        'images' => [
            ['src' => 'assets/images/sectors/tech-1.jpg', 'title' => 'Matériel informatique', 'desc' => 'Serveurs et équipements'],
            ['src' => 'assets/images/sectors/tech-2.jpg', 'title' => 'Électronique', 'desc' => 'Composants et devices'],
            ['src' => 'assets/images/sectors/tech-3.jpg', 'title' => 'Télécoms', 'desc' => 'Équipements réseau'],
            ['src' => 'assets/images/sectors/tech-4.jpg', 'title' => 'Smart devices', 'desc' => 'Appareils connectés'],
            ['src' => 'assets/images/sectors/tech-5.jpg', 'title' => 'Stockage sécurisé', 'desc' => 'Entrepôt high-tech'],
            ['src' => 'assets/images/sectors/tech-6.jpg', 'title' => 'Installation', 'desc' => 'Mise en place technique'],
        ]
    ],
];

// Vérifier si le secteur existe
if (!isset($sectors[$sector])) {
    $sector = 'boisons';
}

$currentSector = $sectors[$sector];
$page_title = $currentSector['title'] . " - Galerie - KDL LOGIS-cargo";
$page_description = $currentSector['description'];

include 'includes/header.php';
?>

<style>
/* Styles pour la galerie */
.gallery-hero {
    background: linear-gradient(135deg, var(--primary) 0%, #1a4d7a 100%);
    color: white;
    padding: 6rem 2rem 4rem;
    text-align: center;
}

.gallery-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.gallery-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.gallery-hero p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.95;
}

.breadcrumb {
    background: var(--gray-100);
    padding: 1rem 0;
}

.breadcrumb-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
}

.breadcrumb a {
    color: var(--primary);
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.gallery-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 4rem 2rem;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.gallery-item {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    cursor: pointer;
}

.gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.gallery-image {
    width: 100%;
    height: 250px;
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--gray-200) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
    position: relative;
    overflow: hidden;
}

.gallery-image::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0);
    transition: background 0.3s ease;
}

.gallery-item:hover .gallery-image::after {
    background: rgba(0, 0, 0, 0.1);
}

.gallery-content {
    padding: 1.5rem;
}

.gallery-content h3 {
    font-size: 1.3rem;
    color: var(--gray-900);
    margin-bottom: 0.5rem;
}

.gallery-content p {
    color: var(--gray-600);
    font-size: 0.95rem;
    line-height: 1.6;
}

.gallery-tag {
    display: inline-block;
    background: var(--primary-light);
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-top: 0.75rem;
}

/* Modal pour l'image en grand */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.modal-content {
    position: relative;
    margin: 5% auto;
    max-width: 90%;
    max-height: 85%;
    text-align: center;
}

.modal-image {
    max-width: 100%;
    max-height: 80vh;
    border-radius: 8px;
}

.modal-caption {
    color: white;
    padding: 1rem;
    text-align: center;
}

.modal-caption h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.modal-caption p {
    opacity: 0.8;
}

.close-modal {
    position: absolute;
    top: -40px;
    right: 0;
    color: white;
    font-size: 2.5rem;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.close-modal:hover {
    color: var(--primary-light);
}

.other-sectors {
    background: var(--gray-50);
    padding: 3rem 0;
}

.other-sectors h2 {
    text-align: center;
    margin-bottom: 2rem;
}

.sectors-nav {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    padding: 0 2rem;
}

.sector-nav-item {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
    text-decoration: none;
    color: var(--gray-900);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.sector-nav-item:hover {
    transform: translateY(-5px);
    border-color: var(--primary);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.sector-nav-item.active {
    background: var(--primary);
    color: white;
}

.sector-nav-icon {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.sector-nav-item h3 {
    font-size: 1rem;
    margin: 0;
}

@media (max-width: 768px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-hero h1 {
        font-size: 2rem;
    }
    
    .sectors-nav {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<!-- Hero Section -->
<div class="gallery-hero">
    <div class="gallery-hero-icon"><?php echo $currentSector['icon']; ?></div>
    <h1><?php echo $currentSector['title']; ?></h1>
    <p><?php echo $currentSector['description']; ?></p>
</div>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="breadcrumb-content">
        <a href="index.php">Accueil</a>
        <span>›</span>
        <a href="realisations.php">Réalisations</a>
        <span>›</span>
        <span><?php echo $currentSector['title']; ?></span>
    </div>
</div>

<!-- Galerie -->
<div class="gallery-container">
    <div class="gallery-grid">
        <?php foreach ($currentSector['images'] as $index => $image): ?>
        <div class="gallery-item" onclick="openModal(<?php echo $index; ?>)">
            <div class="gallery-image">
                <?php echo $currentSector['icon']; ?>
            </div>
            <div class="gallery-content">
                <h3><?php echo $image['title']; ?></h3>
                <p><?php echo $image['desc']; ?></p>
                <span class="gallery-tag">Projet réalisé</span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Autres secteurs -->
<div class="other-sectors">
    <h2>Découvrez nos autres secteurs d'activité</h2>
    <div class="sectors-nav">
        <?php foreach ($sectors as $key => $sectorData): ?>
        <a href="galerie.php?sector=<?php echo $key; ?>" 
           class="sector-nav-item <?php echo $key === $sector ? 'active' : ''; ?>">
            <div class="sector-nav-icon"><?php echo $sectorData['icon']; ?></div>
            <h3><?php echo $sectorData['title']; ?></h3>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<!-- CTA -->
<section style="background: var(--primary-light); text-align: center; padding: 4rem 2rem;">
    <h2>Intéressé par nos services dans ce secteur ?</h2>
    <p style="color: var(--gray-600); max-width: 600px; margin: 1rem auto 2rem;">
        Contactez-nous pour discuter de votre projet et découvrir comment nous pouvons vous accompagner
    </p>
    <a href="contact.php" class="cta-button">Demander un Devis</a>
</section>

<!-- Modal -->
<div id="imageModal" class="modal" onclick="closeModal()">
    <span class="close-modal">&times;</span>
    <div class="modal-content" onclick="event.stopPropagation()">
        <div class="modal-image" id="modalImage"></div>
        <div class="modal-caption">
            <h3 id="modalTitle"></h3>
            <p id="modalDesc"></p>
        </div>
    </div>
</div>

<script>
const images = <?php echo json_encode($currentSector['images']); ?>;
const sectorIcon = '<?php echo $currentSector['icon']; ?>';

function openModal(index) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    
    modalImage.innerHTML = `<div style="font-size: 10rem; padding: 3rem;">${sectorIcon}</div>`;
    modalTitle.textContent = images[index].title;
    modalDesc.textContent = images[index].desc;
    
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Fermer avec la touche Escape
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});
</script>

<?php include 'includes/footer.php'; ?>