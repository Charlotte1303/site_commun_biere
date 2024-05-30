<?php
//1 Données
$title = "a_propos";
$css = "a_propos.css";

//2 Générer Vue
ob_start();
include 'app/view/a_propos.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  