<style>
    /* Importer la police depuis une source externe ou localement */
    @font-face {
        font-family: "BodoniFLF-Bold";
        src: url(font/BodoniFLF-Bold.ttf);
    }

    /* Appliquer la police à la balise h1 */
    h1 {
        font-family: "BodoniFLF-Bold", sans-serif;
        /* Utiliser BodoniFLF-Bold, sinon une police de secours sans empattement */
    }

    /* Importer la police Robots-Black depuis une source externe ou localement */
    @font-face {
        font-family: "Robots-Black";
        src: url(font/Robots-Black.ttf);
    }

    /* Appliquer la police Robots-Black à la balise h2 */
    h2 {
        font-family: "Robots-Black", sans-serif;
        /* Utiliser Robots-Black, sinon une police de secours sans empattement */
    }

    /* Importer la police Roboto-Light depuis une source externe ou localement */
    @font-face {
        font-family: "Roboto-Light";
        src: url(font/Roboto-Light.ttf);
    }

    /* Appliquer la police Roboto-Light à la balise h3 */
    h3 {
        font-family: "Roboto-Light", sans-serif;
        /* Utiliser Roboto-Light, sinon une police de secours sans empattement */
    }
</style>
</head>

<main>
        <section class="container">
            <h1>INFINITÉ</h1>
            <h2>À PROPOS</h2>
            <h3>Infinité, c'est l'histoire de neuf jeunes passionnés par la bière et l'univers fantastique.
                <br>Nées d'une envie de créer des saveurs
                uniques et ensorcelantes, nos bières vous invitent à <br>un
                voyage gustatif et imaginaire sans limite.
            </h3>
            <img src="public/images/étoiles.png" alt="étoiles">
            <h2 class="nouveau-titre">QUI SOMMES-NOUS ?</h2>
            <div class="photos">
                <a href="membres.php"> <img class="photo_profil" src="public/images/photo_profil.png" alt="Photo profil 1"></a>
                <a href="index.html"> <img class="photo_profil" src="public/images/photo_profil.png" alt="Photo profil 2"></a>
                <a href="index.html"><img class="photo_profil" src="public/images/photo_profil.png" alt="Photo profil 3"></a>
                <a href="index.html"><img class="photo_profil" src="public/images/photo_profil.png" alt="Photo profil 4"></a>
                <a href="index.html"><img class="photo_profil" src="public/images/photo_profil.png" alt="Photo profil 5"></a>
            </div>
            <div class="nouvelle_photo">
                <a href="index.html"><img class="photo_profil" src="public/images/photo_profil.png" alt="Photo profil 6"></a>
                <a href="index.html"><img class="nouvelle_photo" src="public/images/photo_profil.png" alt="Photo profil 7"></a>
                <a href="index.html"><img class="nouvelle_photo" src="public/images/photo_profil.png" alt="Photo profil 8"></a>
                <a href="index.html"><img class="nouvelle_photo" src="public/images/photo_profil.png" alt="Photo profil 9"></a>
            </div>
            <div class="jeu">
                <h2 class="jeu2">NOTRE JEU</h2>
                <a class="lien" href="https://infiinite.alwaysdata.net/"><strong>Infinité le jeu !</strong></a>
            </div>
            <video class="video_backstage" src="video_backstage.mp4" controls></video>
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
