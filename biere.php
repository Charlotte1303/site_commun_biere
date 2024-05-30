<?php
session_start();

// 1 - Récupérer, calculer ou déclarer les données
if (empty($_GET['id']) || !ctype_digit($_GET['id']) || $_GET['id'] < 1) {
    $_SESSION['message'] = "Cette bière n'est pas disponible.";
    header('Location: nos_bieres.php');
    exit;
}

$idbiere = $_GET['id'];

require_once 'app/model/connexionBDD.php';
require_once 'app/model/biere.model.php';

$bieres = getBiere($idBiere, getDatabaseConnection());

$title = 'Catalogue - ' . $biere['Nom']  . ' ' . $biere['Description'] . '' . $biere['Degre_d_alcool'] . ' ' . $biere['Contenance'] . '' . $biere['Prix'] . '' . $biere['Ingredients'] . '' . $biere['Valeurs_nutritionnelles'] . '' . $biere['Disponibilite'] . '' . $biere['Photo'];

// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

// 3 - Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';
