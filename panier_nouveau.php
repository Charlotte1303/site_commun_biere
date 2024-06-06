<?php
// Affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1 Données
$title = "panier_nouveau";
$css = "panier_nouveau.css";
$cssheaderfooter = "headerfooter.css";
require_once 'app/model/connexionBDD.php';

// Si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 2.1 Récupérer les données du formulaire
    $prix_unitaire = 5;
    $bières = [
        'sichuanais' => isset($_POST['sichuanais']) ? intval($_POST['sichuanais']) : 0,
        'venin' => isset($_POST['venin']) ? intval($_POST['venin']) : 0,
        'menthe' => isset($_POST['menthe']) ? intval($_POST['menthe']) : 0,
        'pavot' => isset($_POST['pavot']) ? intval($_POST['pavot']) : 0,
        'soleil' => isset($_POST['soleil']) ? intval($_POST['soleil']) : 0,
        'lavande' => isset($_POST['lavande']) ? intval($_POST['lavande']) : 0,
    ];

    // 2.2 Calculer le total
    $total = 0;
    foreach ($bières as $quantité) {
        $total += $quantité * $prix_unitaire;
    }

    // Débogage
    echo "Total calculé : " . $total . "€";
    
    // Rediriger vers la page de confirmation
    header("Location: confirmation_panier.php?total=$total");
    exit;
}

// 2 Générer Vue
$currentPage = 'panier_nouveau';
ob_start();
include 'app/view/panier_nouveau.view.php';
$content = ob_get_clean();

// 3 inclure le layout
include 'app/view/common/layout.php';
