<?php
//1 Données
$title = "confirmation";
$csspage = "confirmation.css";
$cssheaderfooter = "headerfooter.css";


//2 Générer Vue
$currentPage = 'confirmation';
ob_start();
include 'app/view/confirmation.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  