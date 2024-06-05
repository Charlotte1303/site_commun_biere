<?php
//1 Données
$title = "comptes";
$csspage = "comptes.css";
$cssheaderfooter = "headerfooter.css";

//2 Générer Vue
$currentPage = 'comptes';
ob_start();
include 'app/view/comptes.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';
