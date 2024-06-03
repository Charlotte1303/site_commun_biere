<?php
//1 Données
$title = "biere";
$css = "biere.css";

require_once "app/model/connexionBDD.php";
require_once "app/model/biere.model.php";

$pdo = getDatabaseConnection();
$bieres = getAllBieres($pdo);

//2 Générer Vue
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';
?>