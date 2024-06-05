<?php
include 'database.php';

// Récupérer l'ID du membre depuis l'URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Vérifier si l'ID existe dans la base de données
$membre = isset($trombi[$id]) ? $trombi[$id] : null;
?>

<main>
    <a href="a_propos.php" class="boutonr2"><img class="fleche" src="public/images/fleche.png" alt="Flèche"></a>
    <div class="titre">
        <h2>QUI SOMMES-NOUS ?</h2>
    </div>
    <section class="profil">
        <div class="identite">
            <?php if ($membre): ?>
                <img src="<?php echo htmlspecialchars($membre['photo']); ?>" alt="Photo de profil de <?php echo htmlspecialchars($membre['prenom']); ?>">
            <?php else: ?>
                <p>Membre non trouvé</p>
            <?php endif; ?>
        </div>
        <div class="informations">
            <?php if ($membre): ?>
                <p>Prénom: <?php echo htmlspecialchars($membre['prenom']); ?></p>
                <p>Âge: <?php echo htmlspecialchars($membre['age']); ?></p>
                <p>Descriptif: <?php echo nl2br(htmlspecialchars($membre['descriptif'])); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>
