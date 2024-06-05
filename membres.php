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

require_once "app/model/connexionBDD.php";
require_once "app/model/biere.model.php";
$idMembre = $_GET['id'];

$pdo = getDatabaseConnection();
$membre = getBiere($idBiere, $pdo);


$title = "Membre - " . $member['prenom'];
$csspage = "membres.css";
$cssheaderfooter = "headerfooter.css";

ob_start();
include 'app/view/membres.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>

