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

    // Get the beer list items
    var beerListItems = document.querySelectorAll('.beer-list-item');

    // Set the current index to 0
    var currentIndex = 0;

    // Set the timer for the carousel
    setInterval(function() {
        // Move to the next item
        currentIndex++;

        // If we reached the end of the list, wrap around to the beginning
        if (currentIndex >= beerListItems.length) {
            currentIndex = 0;
        }

        // Scroll to the current item
        beerListItems[currentIndex].scrollIntoView();
    }, 3000); // 3 seconds
});
