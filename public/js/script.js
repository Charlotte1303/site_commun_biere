window.addEventListener('scroll', function() {
    var fleche = document.getElementById('fleche');
    // Si la position de défilement verticale est supérieure à 100 pixels
    if (window.scrollY > 100) {
        // Ajouter la classe "invisible" pour cacher la flèche
        fleche.classList.add('invisible');
    } else {
        // Sinon, enlever la classe "invisible" pour montrer la flèche
        fleche.classList.remove('invisible');
    }
});
