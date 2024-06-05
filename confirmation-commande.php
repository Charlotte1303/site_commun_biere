<?php
//1 Données
$title = "confirmation-commande";
$csspage = "confirmation-commande.css";
$cssheaderfooter = "headerfooter.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'confirmation-commande';
ob_start();
include 'app/view/confirmation-commande.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  