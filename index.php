<?php
//1 Données
$title = "accueil";
$css = "index.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'accueil';
ob_start();
include 'app/view/index.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  