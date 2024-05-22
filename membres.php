<?php
//1 Données
$title = "membres";
$css = "membres.css";

//2 Générer Vue
$currentPage = 'membres';
ob_start();
include 'app/view/membres.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  