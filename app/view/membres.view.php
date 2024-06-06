<main>
    <a href="a_propos.php" class="boutonr2"><img class="fleche" src="public/images/fleche.png" alt="Flèche"></a>
    <div class="titre">
        <h2>QUI SOMMES-NOUS ?</h2>
    </div>
    <section class="profil">
        <div class="identite">
                <img class="photo-profil" src="<?=$membres['photo']; ?>" alt="Photo de profil de <?=$membres['Prenom']; ?>">
        </div>
        <div class="informations">
            <h2><?=$membres['Prenom']; ?></h2>
            <h2><?=$membres['Description']; ?></h2>
            <h2><?=$membres['Age']; ?></h2>
        </div>
    </section>
</main>