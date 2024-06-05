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
            <?php if ($membre) : ?>
                <img class="photo-profil" src="<?php echo htmlspecialchars($membre['photo']); ?>" alt="Photo de profil de <?php echo htmlspecialchars($membre['prenom']); ?>">
            <?php else : ?>
                <p>Membre non trouvé</p>
            <?php endif; ?>
        </div>
        <div class="informations">
            <h2><?php echo $membre['prenom']; ?></h2>
            <h2><?php echo $membre['descriptif']; ?></h2>
            <h2><?php echo $membre['age']; ?> ans</h2>
        </div>
    </section>
</main>
