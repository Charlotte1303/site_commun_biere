document.addEventListener('DOMContentLoaded', function() {
    let content = document.querySelector('.content');
    let fleche = document.getElementById('fleche');

    content.addEventListener('scroll', function() {
        // Si la position de défilement verticale est supérieure à 100 pixels
        if (document.body.scrollHeight > 10) {
            // Ajouter la classe "invisible" pour cacher la flèche
            fleche.classList.add('invisible');
        } else {
            // Sinon, enlever la classe "invisible" pour montrer la flèche
            fleche.classList.remove('invisible');
        }
    });
});
