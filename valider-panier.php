<?php
session_start();
include_once("fonctions-panier.php");
creationPanier();

// Code to validate the cart and process the order
// ...

header('Location: confirmation-commande.php');
exit;
?>