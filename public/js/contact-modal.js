// CONTACT : ouvrir les moyens de contact
document.getElementById('openContactModal').addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('contactModal').classList.add('active');
    document.getElementById('contactOverlay').classList.add('active');
});

// Fermer les moyens de contact
document.getElementById('contactOverlay').addEventListener('click', () => {
    document.getElementById('contactModal').classList.remove('active');
    document.getElementById('contactOverlay').classList.remove('active');
});