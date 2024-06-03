
<body>

    <section class="message">
        <h1>Merci !</h1>
        <p>Votre message a été envoyé avec succès.</p>
        <img src="public/images/Logo.png">
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

