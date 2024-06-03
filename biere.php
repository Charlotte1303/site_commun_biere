<?php

//1 Données

if (empty($_GET['id']) || !ctype_digit($_GET['id']) || $_GET['id'] < 1) {
    $_SESSION['message'] = "La bière n'est pas disponible.";
    header('Location: nos_bieres.php');
    exit;
}

$title = "biere";
$css = "biere.css";

require_once "app/model/connexionBDD.php";
require_once "app/model/biere.model.php";
$idBiere = $_GET['id'];

$pdo = getDatabaseConnection();
$bieres = getBiere($idBiere, $pdo);

//2 Générer Vue
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';
?>