<main>
    <a href="a_propos.php" class="boutonr2"><img class="fleche" src="public/images/fleche.png" alt="Flèche"></a>
    <div class="titre">
        <h2>QUI SOMMES-NOUS ?</h2>
    </div>
    <section class="profil">
        <div class="identite">
                <img class="photo-profil" src="<?($membre['photo']); ?>" alt="Photo de profil de <?($membre['prenom']); ?>">
        </div>
        <div class="informations">
            <h2><?$membre['prenom']; ?></h2>
            <h2><?$membre['descriptif']; ?></h2>
            <h2><?$membre['age']; ?></h2>
        </div>
    </section>
</main>
