<?php

require_once "app/model/connexionBDD.php";
require_once "app/model/biere.model.php";
$idMembre = $_GET['id'];

$pdo = getDatabaseConnection();
$membres = getMembre($idMembre, $pdo);


$title = "Membre - " . $membres['Prenom'];
$csspage = "membres.css";
$cssheaderfooter = "headerfooter.css";

ob_start();
include 'app/view/membres.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>

