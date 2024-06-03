<main>
    <a href="a_propos.php" class="boutonr2"><img class="fleche" src="public/images/fleche.png" alt="Flèche"></a>
    <div class="titre">
        <h2>QUI SOMMES-NOUS ?</h2>
    </div>
    <?php include 'database.php'; ?>

    <?php foreach ($trombi as $tromb) : ?>
        <div class="detail">
            <img class="photo" src="<?= $tromb['photo'] ?>" alt="Photo de <?= $tromb['prenom'] ?>">
            <p class="nom">Nom: <?= $tromb['prenom'] ?></p>
            <p class="age">Age: <?= $tromb['age'] ?></p>
            <p class="descriptif">Descriptif: <?= $tromb['descriptif'] ?></p>
        </div>
    <?php endforeach; ?>
</main>
</body>

</html>



</main>