<?php
$page_title = "Contact - KDL LOGIS-cargo";
$page_description = "Contactez KDL LOGIS-cargo pour vos besoins en transport, logistique, négoce international et voyages d'affaires.";
include 'includes/header.php';

$selected_service = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';
?>

<!-- Hero Contact -->
<section class="hero">
    <div class="hero-content">
        <h1>Contactez-Nous</h1>
        <p>Notre équipe est à votre disposition pour répondre à toutes vos questions</p>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="contact-wrapper">
        <!-- Informations de Contact -->
        <div class="contact-info-box">
            <h2>Nos Coordonnées</h2>
            
            <div class="contact-item">
                <div class="contact-icon">📍</div>
                <div>
                    <h3>Adresse</h3>
                    <p>Yaoundé, Cameroun</p>
                    <p style="font-size: 0.9rem; color: var(--gray-600);">Bureau principal</p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">📞</div>
                <div>
                    <h3>Téléphone</h3>
                    <p>+237 XXX XXX XXX</p>
                    <p style="font-size: 0.9rem; color: var(--gray-600);">Lun-Ven: 8h-18h</p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">✉️</div>
                <div>
                    <h3>Email</h3>
                    <p>contact@kdllogis.com</p>
                    <p style="font-size: 0.9rem; color: var(--gray-600);">Réponse sous 24h</p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">🕒</div>
                <div>
                    <h3>Horaires</h3>
                    <p>Lundi - Vendredi: 8h00 - 18h00</p>
                    <p>Samedi: 9h00 - 13h00</p>
                </div>
            </div>
            
            <!-- WhatsApp Button -->
            <a href="https://wa.me/237XXXXXXXXX" class="whatsapp-btn" target="_blank">
                💬 Chatter sur WhatsApp
            </a>
        </div>
        
        <!-- Formulaire de Contact -->
        <div class="contact-form-box">
            <h2>Envoyez un Message</h2>
            <p style="color: var(--gray-600); margin-bottom: 2rem;">
                Remplissez ce formulaire et nous vous répondrons rapidement
            </p>
            
            <form id="contactForm" method="POST" action="traitement.php">
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" required placeholder="Votre nom et prénom">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required placeholder="votre@email.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone">Téléphone *</label>
                        <input type="tel" id="telephone" name="telephone" required placeholder="+237 XXX XXX XXX">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="entreprise">Entreprise</label>
                    <input type="text" id="entreprise" name="entreprise" placeholder="Nom de votre entreprise (optionnel)">
                </div>
                
                <div class="form-group">
                    <label for="service">Service demandé *</label>
                    <select id="service" name="service" required>
                        <option value="">Sélectionnez un service</option>
                        <option value="transport" <?php echo ($selected_service == 'transport') ? 'selected' : ''; ?>>Transport & Dédouanement</option>
                        <option value="negoce" <?php echo ($selected_service == 'negoce') ? 'selected' : ''; ?>>Négoce International</option>
                        <option value="voyages" <?php echo ($selected_service == 'voyages') ? 'selected' : ''; ?>>Voyages d'Affaires</option>
                        <option value="billetterie" <?php echo ($selected_service == 'billetterie') ? 'selected' : ''; ?>>Billetterie Aérienne</option>
                        <option value="visa" <?php echo ($selected_service == 'visa') ? 'selected' : ''; ?>>Assistance Visa</option>
                        <option value="conseil" <?php echo ($selected_service == 'conseil') ? 'selected' : ''; ?>>Conseil Logistique</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Décrivez votre projet ou demande..."></textarea>
                </div>
                
                <div class="form-checkbox">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">
                        Je souhaite recevoir les actualités et offres de KDL LOGIS-cargo
                    </label>
                </div>
                
                <button type="submit" class="submit-btn">
                    Envoyer le Message
                </button>
                
                <p style="font-size: 0.9rem; color: var(--gray-600); margin-top: 1rem; text-align: center;">
                    * Champs obligatoires
                </p>
            </form>
        </div>
    </div>
</section>

<!-- Map Section -->
<section style="padding: 0;">
    <div style="width: 100%; height: 400px; background: var(--gray-50);">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6067167631035!2d11.502722!3d3.848202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwNTAnNTMuNSJOIDExwrAzMCcwOS44IkU!5e0!3m2!1sfr!2scm!4v1620000000000!5m2!1sfr!2scm" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const nom = document.getElementById('nom').value;
        const email = document.getElementById('email').value;
        const telephone = document.getElementById('telephone').value;
        const service = document.getElementById('service').value;
        const message = document.getElementById('message').value;
        
        if (!nom || !email || !telephone || !service || !message) {
            alert('Veuillez remplir tous les champs obligatoires.');
            return;
        }
        
        alert('Merci pour votre message ! Nous vous contacterons dans les plus brefs délais.');
        form.reset();
        
        // En production, décommentez pour envoyer réellement
        // form.submit();
    });
});
</script>

<?php include 'includes/footer.php'; ?>