<?php
session_start();
include_once("fonctions-panier.php");
creationPanier();

$libelleProduit = $_POST['libelleProduit'];
$nouvelleQte = $_POST['nouvelleQte'];

modifierQTeArticle($libelleProduit, $nouvelleQte);

header('Location: panier.php');
exit;
?>