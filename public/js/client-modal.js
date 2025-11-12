// DEVENEZ CLIENT : ouvrir le formulaire
document.getElementById('openClientForm').addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('clientForm').classList.add('active');
    document.getElementById('clientOverlay').classList.add('active');
});

// DEVENEZ CLIENT : ouvrir le formulaire
document.getElementById('openClientForm').addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('clientForm').classList.add('active');
    document.getElementById('clientOverlay').classList.add('active');
});

// Fermer le formulaire
document.getElementById('clientOverlay').addEventListener('click', () => {
    document.getElementById('clientForm').classList.remove('active');
    document.getElementById('clientOverlay').classList.remove('active');
});