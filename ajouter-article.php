<?php
session_start();
include_once("fonctions-panier.php");
creationPanier();

$libelleProduit = $_POST['libelleProduit'];
$qteProduit = $_POST['qteProduit'];
$prixProduit = $_POST['prixProduit'];

ajouterArticle($libelleProduit, $qteProduit, $prixProduit);

header('Location: panier.php');
exit;
?>