<main>
        <section class="container">
            <h1>INFINITÉ</h1>
            <h2>À PROPOS</h2>
            <h3>Infinité, c'est l'histoire de neuf jeunes passionnés par la bière et l'univers fantastique.
                <br>Nées d'une envie de créer des saveurs
                uniques et ensorcelantes, nos bières vous invitent à <br>un
                voyage gustatif et imaginaire sans limite.
            </h3>
            <img src="public/images/étoiles.png" class="etoi" alt="étoiles">
            <h2 class="nouveau-titre">QUI SOMMES-NOUS ?</h2>
            <div class="photos">
                <a href="membres.php?id=1"><img class="photo_profil" src="public/images/Ambre.png" alt="Photo profil Ambre"></a>
                <a href="membres.php?id=2"><img class="photo_profil" src="public/images/charlotte.png" alt="Photo profil Charlotte"></a>
                <a href="membres.php?id=3"><img class="photo_profil" src="public/images/ahinoa.png" alt="Photo profil Ahinoa"></a>
                <a href="membres.php?id=4"><img class="photo_profil" src="public/images/alexandre.png" alt="Photo profil Alexandre"></a>
                <a href="membres.php?id=5"><img class="photo_profil" src="public/images/ando.png" alt="Photo profil Ando"></a>
                <a href="membres.php?id=6"><img class="photo_profil" src="public/images/guillaume.png" alt="Photo profil Guillaume"></a>
                <a href="membres.php?id=7"><img class="photo_profil" src="public/images/lou.png" alt="Photo profil Lou"></a>
                <a href="membres.php?id=8"><img class="photo_profil" src="public/images/maïna.png" alt="Photo profil Maïna"></a>
                <a href="membres.php?id=9"><img class="photo_profil" src="public/images/ruben.png" alt="Photo profil Ruben"></a>
            </div>

    <!-- Add group images here -->
    <div class="group-photos">
            <img src="public/images/groupe_1.png" alt="Groupe 1">
            <img src="public/images/groupe_2.png" alt="Groupe 2">
        </div>

            <div class="jeu">
                <h2 class="jeu2">NOTRE JEU</h2>
                <a class="lien" href="https://infiinite.alwaysdata.net/"><strong>Infinité le jeu !</strong></a>
            </div>
            <video class="video_backstage" src="video_backstage.mp4" controls></video>
        </section>
    </main>
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
