<?php
//1 Données
$title = "biere";
$css = "biere.css";

//2 Générer Vue
$currentPage = 'biere';
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  