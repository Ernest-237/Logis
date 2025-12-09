function handleSubmit(event) {
    event.preventDefault();
    
    // Récupérer les données du formulaire
    const formData = new FormData(event.target);
    const data = Object.fromEntries(formData);
    
    // Validation simple
    if (!data.name || !data.email || !data.message) {
        alert('Veuillez remplir tous les champs obligatoires.');
        return;
    }
    
    // Ici, vous pouvez ajouter l'envoi AJAX vers un backend
    // Pour l'instant, on simule l'envoi
    
    // Afficher un message de confirmation
    alert('Merci pour votre message ! Nous vous contacterons bientôt.');
    
    // Réinitialiser le formulaire
    event.target.reset();
    
    // Optionnel: Rediriger vers la page d'accueil après 2 secondes
    // setTimeout(() => {
    //     window.location.href = 'index.html';
    // }, 2000);
}

// Initialiser les formulaires
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', handleSubmit);
    });
});