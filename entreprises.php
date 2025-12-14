<?php
$page_title = "Espace Entreprises - KDL LOGIS-cargo";
$page_description = "Solutions logistiques sur mesure pour les entreprises. Demandez votre devis personnalisé.";
include 'includes/header.php';
?>

<style>
.entreprises-hero {
    background: linear-gradient(135deg, var(--primary) 0%, #1a4d7a 100%);
    color: white;
    padding: 6rem 2rem 4rem;
    text-align: center;
}

.entreprises-hero h1 {
    font-size: 2.8rem;
    margin-bottom: 1rem;
}

.entreprises-hero p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.95;
}

.entreprises-benefits {
    max-width: 1200px;
    margin: 4rem auto;
    padding: 0 2rem;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.benefit-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-card h3 {
    font-size: 1.2rem;
    color: var(--gray-900);
    margin-bottom: 0.5rem;
}

.benefit-card p {
    color: var(--gray-600);
    font-size: 0.95rem;
}

.form-container {
    max-width: 800px;
    margin: 4rem auto;
    padding: 0 2rem;
}

.form-card {
    background: white;
    padding: 3rem;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

.form-card h2 {
    text-align: center;
    color: var(--gray-900);
    margin-bottom: 0.5rem;
}

.form-subtitle {
    text-align: center;
    color: var(--gray-600);
    margin-bottom: 2rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    color: var(--gray-900);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.form-group label .required {
    color: var(--accent);
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.875rem;
    border: 2px solid var(--gray-300);
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary);
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.checkbox-group {
    margin-top: 1rem;
}

.checkbox-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
}

.checkbox-item input[type="checkbox"] {
    width: auto;
    margin-right: 0.5rem;
}

.submit-btn {
    width: 100%;
    padding: 1rem;
    background: var(--primary);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 1rem;
}

.submit-btn:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 86, 145, 0.3);
}

.submit-btn:disabled {
    background: var(--gray-400);
    cursor: not-allowed;
    transform: none;
}

/* Modal Success */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}

.modal-overlay.show {
    display: flex;
}

.modal-content {
    background: white;
    padding: 3rem;
    border-radius: 16px;
    max-width: 500px;
    width: 90%;
    text-align: center;
    animation: modalSlideIn 0.3s ease;
}

@keyframes modalSlideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.success-icon {
    font-size: 4rem;
    color: #10b981;
    margin-bottom: 1rem;
}

.modal-content h2 {
    color: var(--gray-900);
    margin-bottom: 1rem;
}

.modal-content p {
    color: var(--gray-600);
    margin-bottom: 2rem;
    line-height: 1.6;
}

.modal-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

.btn-download,
.btn-close {
    padding: 0.875rem 1.5rem;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
}

.btn-download {
    background: var(--primary);
    color: white;
}

.btn-download:hover {
    background: var(--primary-dark);
}

.btn-close {
    background: var(--gray-200);
    color: var(--gray-700);
}

.btn-close:hover {
    background: var(--gray-300);
}

@media (max-width: 768px) {
    .entreprises-hero h1 {
        font-size: 2rem;
    }
    
    .form-card {
        padding: 2rem 1.5rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .modal-buttons {
        flex-direction: column;
    }
}
</style>

<!-- Hero -->
<div class="entreprises-hero">
    <h1> Espace Entreprises</h1>
    <p>Solutions logistiques sur mesure pour professionnels. Demandez votre devis personnalisé en quelques clics.</p>
</div>

<!-- Avantages -->
<section class="entreprises-benefits">
    <h2 style="text-align: center; margin-bottom: 0.5rem;">Pourquoi choisir KDL LOGIS-cargo ?</h2>
    <p style="text-align: center; color: var(--gray-600); margin-bottom: 2rem;">
        Des solutions adaptées à vos besoins professionnels
    </p>
    
    <div class="benefits-grid">
        <div class="benefit-card">
            <div class="benefit-icon">⚡</div>
            <h3>Réponse Rapide</h3>
            <p>Devis sous 24h ouvrées</p>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">💼</div>
            <h3>Sur Mesure</h3>
            <p>Solutions adaptées à votre secteur</p>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">🤝</div>
            <h3>Accompagnement</h3>
            <p>Un conseiller dédié à votre projet</p>
        </div>
        <div class="benefit-card">
            <div class="benefit-icon">📊</div>
            <h3>Transparence</h3>
            <p>Suivi en temps réel de vos opérations</p>
        </div>
    </div>
</section>

<!-- Formulaire -->
<div class="form-container">
    <div class="form-card">
        <h2>Demande de Devis Entreprise</h2>
        <p class="form-subtitle">Remplissez ce formulaire et recevez une proposition personnalisée</p>
        
        <form id="entrepriseForm" onsubmit="handleSubmit(event)">
            <!-- Informations Entreprise -->
            <h3 style="color: var(--primary); margin-bottom: 1.5rem;">📋 Informations Entreprise</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Nom de l'entreprise <span class="required">*</span></label>
                    <input type="text" name="company_name" required>
                </div>
                <div class="form-group">
                    <label>Secteur d'activité <span class="required">*</span></label>
                    <select name="sector" required>
                        <option value="">Sélectionnez...</option>
                        <option value="boisons">Boissons & Liqueurs</option>
                        <option value="construction">Construction & BTP</option>
                        <option value="distribution">Distribution & Retail</option>
                        <option value="industrie">Industrie & Manufacturing</option>
                        <option value="agroalimentaire">Agroalimentaire</option>
                        <option value="technologies">Technologies & IT</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Taille de l'entreprise <span class="required">*</span></label>
                    <select name="company_size" required>
                        <option value="">Sélectionnez...</option>
                        <option value="1-10">1-10 employés</option>
                        <option value="11-50">11-50 employés</option>
                        <option value="51-200">51-200 employés</option>
                        <option value="200+">200+ employés</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pays <span class="required">*</span></label>
                    <input type="text" name="country" required>
                </div>
            </div>
            
            <!-- Contact -->
            <h3 style="color: var(--primary); margin: 2rem 0 1.5rem;">👤 Personne de Contact</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Nom complet <span class="required">*</span></label>
                    <input type="text" name="contact_name" required>
                </div>
                <div class="form-group">
                    <label>Fonction <span class="required">*</span></label>
                    <input type="text" name="position" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Email <span class="required">*</span></label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Téléphone <span class="required">*</span></label>
                    <input type="tel" name="phone" required>
                </div>
            </div>
            
            <!-- Services -->
            <h3 style="color: var(--primary); margin: 2rem 0 1.5rem;">📦 Services Souhaités</h3>
            
            <div class="checkbox-group">
                <div class="checkbox-item">
                    <input type="checkbox" name="services[]" value="Transport Maritime" id="maritime">
                    <label for="maritime">Transport Maritime</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="services[]" value="Transport Aérien" id="aerien">
                    <label for="aerien">Transport Aérien</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="services[]" value="Transport Terrestre" id="terrestre">
                    <label for="terrestre">Transport Terrestre</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="services[]" value="Dédouanement" id="dedouanement">
                    <label for="dedouanement">Dédouanement</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="services[]" value="Entreposage" id="entreposage">
                    <label for="entreposage">Entreposage</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="services[]" value="Négoce International" id="negoce">
                    <label for="negoce">Négoce International</label>
                </div>
            </div>
            
            <div class="form-group" style="margin-top: 1.5rem;">
                <label>Détails de votre projet <span class="required">*</span></label>
                <textarea name="project_details" required placeholder="Décrivez votre besoin, volume estimé, fréquence, destinations..."></textarea>
            </div>
            
            <div class="form-group">
                <label>Budget estimé (optionnel)</label>
                <select name="budget">
                    <option value="">Sélectionnez...</option>
                    <option value="< 5000€">Moins de 5 000 XFA</option>
                    <option value="5000-10000€">5 000 - 10 000 XAF</option>
                    <option value="10000-50000€">10 000 - 50 000 XAF</option>
                    <option value="50000+€">Plus de 50 000 XAF</option>
                </select>
            </div>
            
            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i> Envoyer ma demande
            </button>
        </form>
    </div>
</div>

<!-- Modal Success -->
<div class="modal-overlay" id="successModal">
    <div class="modal-content">
        <div class="success-icon">✅</div>
        <h2>Demande Envoyée avec Succès !</h2>
        <p>
            Votre demande de devis a été envoyée à notre équipe. 
            Un email de confirmation contenant le résumé de votre demande a été envoyé à votre adresse email.
        </p>
        <p style="color: var(--primary); font-weight: 600;">
            Nous vous répondrons sous 24h ouvrées.
        </p>
        <div class="modal-buttons">
            <button class="btn-download" onclick="downloadPDF()">
                <i class="fas fa-download"></i> Télécharger le résumé
            </button>
            <button class="btn-close" onclick="closeModal()">
                Fermer
            </button>
        </div>
    </div>
</div>

<script>
let formData = {};

function handleSubmit(event) {
    event.preventDefault();
    
    const form = event.target;
    const submitBtn = form.querySelector('.submit-btn');
    
    // Désactiver le bouton
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
    
    // Collecter les données
    formData = {
        company_name: form.company_name.value,
        sector: form.sector.value,
        company_size: form.company_size.value,
        country: form.country.value,
        contact_name: form.contact_name.value,
        position: form.position.value,
        email: form.email.value,
        phone: form.phone.value,
        services: Array.from(form.querySelectorAll('input[name="services[]"]:checked')).map(cb => cb.value),
        project_details: form.project_details.value,
        budget: form.budget.value || 'Non spécifié',
        date: new Date().toLocaleDateString('fr-FR')
    };
    
    // Envoyer l'email
    sendEmail();
}

function sendEmail() {
    const subject = `Demande de Devis - ${formData.company_name}`;
    const body = `
DEMANDE DE DEVIS ENTREPRISE
============================

INFORMATIONS ENTREPRISE
-----------------------
Entreprise: ${formData.company_name}
Secteur: ${formData.sector}
Taille: ${formData.company_size}
Pays: ${formData.country}

PERSONNE DE CONTACT
------------------
Nom: ${formData.contact_name}
Fonction: ${formData.position}
Email: ${formData.email}
Téléphone: ${formData.phone}

SERVICES SOUHAITÉS
-----------------
${formData.services.join(', ') || 'Aucun service sélectionné'}

DÉTAILS DU PROJET
----------------
${formData.project_details}

Budget estimé: ${formData.budget}
Date de la demande: ${formData.date}

---
Cette demande a été générée automatiquement depuis le formulaire Entreprises de KDL LOGIS-cargo.
    `.trim();
    
    // Email à l'entreprise KDL
    const mailtoKDL = `mailto:contact@kdllogiscargo.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    
    // Email de confirmation au client
    const confirmationSubject = `Confirmation de votre demande - ${formData.company_name}`;
    const confirmationBody = `
Bonjour ${formData.contact_name},

Nous avons bien reçu votre demande de devis pour ${formData.company_name}.

RÉCAPITULATIF DE VOTRE DEMANDE
===============================
Services demandés: ${formData.services.join(', ')}
Budget estimé: ${formData.budget}
Date: ${formData.date}

Notre équipe examinera votre demande et vous contactera sous 24h ouvrées.

Cordialement,
L'équipe KDL LOGIS-cargo

---
Ceci est un email automatique, merci de ne pas y répondre.
    `.trim();
    
    const mailtoClient = `mailto:${formData.email}?subject=${encodeURIComponent(confirmationSubject)}&body=${encodeURIComponent(confirmationBody)}`;
    
    // Ouvrir les mailto
    window.open(mailtoKDL, '_blank');
    
    setTimeout(() => {
        window.open(mailtoClient, '_blank');
        
        // Afficher le modal après un court délai
        setTimeout(() => {
            document.getElementById('successModal').classList.add('show');
            document.getElementById('entrepriseForm').reset();
            
            const submitBtn = document.querySelector('.submit-btn');
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Envoyer ma demande';
        }, 500);
    }, 500);
}

function closeModal() {
    document.getElementById('successModal').classList.remove('show');
}

function downloadPDF() {
    // Créer le contenu du PDF (format texte pour simplicité)
    const pdfContent = `
DEMANDE DE DEVIS - KDL LOGIS-CARGO
===================================

Date: ${formData.date}

INFORMATIONS ENTREPRISE
-----------------------
Entreprise: ${formData.company_name}
Secteur: ${formData.sector}
Taille: ${formData.company_size}
Pays: ${formData.country}

CONTACT
-------
Nom: ${formData.contact_name}
Fonction: ${formData.position}
Email: ${formData.email}
Téléphone: ${formData.phone}

SERVICES DEMANDÉS
-----------------
${formData.services.join('\n- ') || 'Aucun'}

DÉTAILS DU PROJET
-----------------
${formData.project_details}

Budget estimé: ${formData.budget}

---
Document généré automatiquement
KDL LOGIS-cargo Services
contact@kdllogiscargo.com
    `.trim();
    
    // Créer un blob et télécharger
    const blob = new Blob([pdfContent], { type: 'text/plain' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `Demande_Devis_${formData.company_name}_${new Date().getTime()}.txt`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);
}
</script>

<?php include 'includes/footer.php'; ?>