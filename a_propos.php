<?php
//1 Données
$title = "a_propos";
$css = "page_a_propos.css";

//2 Générer Vue
$currentPage = 'a_propos';
ob_start();
include 'app/view/page_a_propos.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  