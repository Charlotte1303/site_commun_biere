<?php
//1 Données
$title = "brassage";
$css = "brassage.css";
$cssheaderfooter = "headerfooter.css";

//2 Générer Vue
$currentPage = 'brassage';
ob_start();
include 'app/view/brassage.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  