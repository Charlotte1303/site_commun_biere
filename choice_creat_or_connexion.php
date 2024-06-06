<?php
//1 Données
$title = "choice_creat_or_connexion";
$csspage = "choice_creat_or_connexion.css";
$cssheaderfooter = "headerfooter.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'choice_creat_or_connexion';
ob_start();
include 'app/view/choice_creat_or_connexion.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';
