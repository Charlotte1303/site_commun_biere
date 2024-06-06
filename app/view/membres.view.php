<main>
    <div class="fleche">
        <a href="a_propos.php"><img src="public/images/fleche.png" alt="Flèche"></a>
    </div>

    <div class="titre">
        <h2>QUI SOMMES-NOUS ?</h2>
    </div>
    <div class="photo">
        <img class="photo-profil" src="public/images/<?= $membres['photo']; ?>" alt="Photo de profil de <?= $membres['Prenom']; ?>">
    </div>
    <div class="texte">

        <h2><?= $membres['Prenom']; ?></h2>
        <h3><?= $membres['Description']; ?></h3>
        <h3><?= $membres['Age']; ?> ans</h3>
    </div>
    </div>
</main>