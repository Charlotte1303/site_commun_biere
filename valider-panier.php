<?php
session_start();
include_once("fonctions-panier.php");
creationPanier();

//1 Données
$title = "validation";
$css = "valider-panier.css";
$cssheaderfooter = "headerfooter.css";

//2 Générer Vue
$currentPage = 'confirmation_commande';
ob_start();
include 'app\view\confirmation-commande.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  

// Code to validate the cart and process the order
// ...

header('Location: confirmation-commande.php');
exit;
?>