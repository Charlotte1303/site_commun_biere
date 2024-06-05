<?php
// 1. Données
$title = "Panier";
$css = "panier.css";
$cssheaderfooter = "headerfooter.css";
require_once 'app/model/connexionBDD.php';

// 2. Générer la vue
$currentPage = 'panier';
ob_start();
include 'app/view/panier.view.php';
$content = ob_get_clean();

// 3. Inclure le layout
include 'app/view/common/layout.php';
