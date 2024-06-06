<?php
//1 Données
$title = "confirmation_panier";
$css = "confirmation_panier.css";
$cssheaderfooter = "headerfooter.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'confirmation_panier';
ob_start();
include 'app/view/confirmation_panier.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';