<?php
//1 Données
$title = "mentions_legales";
$csspage = "mentions_legales.css";
$cssheaderfooter = "headerfooter.css";

//2 Générer Vue
$currentPage = 'mentions_legales';
ob_start();
include 'app/view/mentions_legales.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  