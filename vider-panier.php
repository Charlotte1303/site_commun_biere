<?php
session_start();
include_once("fonctions-panier.php");
creationPanier();

supprimePanier();

header('Location: panier.php');
exit;
?>