<?php
//1 Données
$title = "panier";
$css = "panier.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'panier';
ob_start();
include 'app/view/panier.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app\view\common\layout.php';  