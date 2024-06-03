<?php
include 'database.php';

// Vérifier si l'ID est passé en paramètre d'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Vérifier si l'ID existe dans la base de données
    if (isset($trombi[$id])) {
        $member = $trombi[$id];
    } else {
        echo "Membre non trouvé.";
        exit;
    }
} else {
    echo "ID invalide.";
    exit;
}

$title = "Membre - " . $member['prenom'];
$css = "membres.css";

ob_start();
include 'app/view/membres.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>

<main>
    <a href="a_propos.php" class="boutonr2"><img class="fleche" src="public/images/fleche.png" alt="Flèche"></a>
        <div class="informations">
            <h2><?php echo $member['prenom']; ?></h2>
            <h2><?php echo $member['descriptif']; ?></h2>
            <h2><?php echo $member['age']; ?> ans</h2>
        </div>
    </section>
</main>
