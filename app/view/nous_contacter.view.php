<main>
<div class="titre">
    <h1>NOUS CONTACTER</h1>
</div>

<div class="contact">

    <div class="gauche">

        <div class="instagram">
            <h2>Instagram:</h2>
        </div>

        <div class="num">
            <h2>Numéro de téléphone:</h2>
        </div>

        <div class="mail">
            <h2>Adresse e-mail:</h2>
        </div>

</div>

    <div class="droite">

        <div class="insta">
            <a href="https://www.instagram.com/infinite_la_biere/"><strong>@infinite_la_biere ☜</strong></a>
        </div>

        <div class="tel">
            <p>06.23.56.41.27</p>
        </div>

        <div class="email">
            <p>infinite@gmail.com</p>
        </div>

</div>

</div>

<section class="form">
    <h2>Formulaire de Contact</h2>
    <form id="contactForm" action="nous_contacter.php" method="post">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</section>


<section class="confirmation" style="display: none;">
    <h2>Votre message a été envoyé avec succès !</h2>
    <!-- Ajoutez ici le contenu de votre section de confirmation -->
</section>

<script>
    // Obtenir la hauteur de la fenêtre du navigateur
    const windowHeight = window.innerHeight;

    // Définir la hauteur du corps pour couvrir toute la page
    document.body.style.height = `${windowHeight}px`;

    function generateStars() {
        const numStars = 100; // Nombre d'étoiles à générer
        const container = document.querySelector('body');

        for (let i = 0; i < numStars; i++) {
            const star = document.createElement('div');
            star.classList.add('star');

            // Position aléatoire
            const x = Math.random() * window.innerWidth;
            const y = Math.random() * window.innerHeight;

            // Taille aléatoire
            const size = Math.random() * 2; // Taille de l'étoile entre 0 et 2px
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;

            // Positionner l'étoile
            star.style.top = `${y}px`;
            star.style.left = `${x}px`;

            container.appendChild(star);
        }
    }

    // Appeler la fonction pour générer les étoiles une fois que la page est chargée
    window.onload = generateStars;
</script>
</main>