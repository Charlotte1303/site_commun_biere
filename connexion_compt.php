<?php
//1 Données
$title = "connexion_compt";
$csspage = "create_compt.css";
$cssheaderfooter = "headerfooter.css";
require_once 'app/model/connexionBDD.php';

//2 Générer Vue
$currentPage = 'connexion_compt';
ob_start();
include 'app/view/connexion_compt.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';
