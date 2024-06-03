<?php
session_start();
include_once("fonctions-panier.php");
creationPanier();

$libelleProduit = $_POST['libelleProduit'];

supprimerArticle($libelleProduit);

header('Location: panier.php');
exit;
?>