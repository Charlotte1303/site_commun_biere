<?php
//1 Données
$title = "nous_contacter";
$css = "nous_contacter.css";

//2 Générer Vue
$currentPage = 'nous_contacter';
ob_start();
include 'app/view/nous_contacter.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  