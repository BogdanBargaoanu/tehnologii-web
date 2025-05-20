// Funcția pentru gestionarea click-ului pe text
function deschideLink() {
    // Link-ul care va fi deschis
    const url = 'https://aut.utcluj.ro/';
    
    // Deschide link-ul într-o fereastră/tab nou
    window.open(url, '_blank');
}

// Adaugă listener de eveniment pentru click pe textul specificat
document.getElementById('clickText').addEventListener('click', deschideLink);

// Alternativ, se poate implementa și direct în HTML folosind onclick:
// <p onclick="window.open('https://aut.utcluj.ro/', '_blank')">Please click here!</p>