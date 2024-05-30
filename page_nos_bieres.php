<?php
//1 Données
$title = "nos_bieres";
$css = "nosbieres.css";

require_once "app/model/connexionBDD.php";

$pdo = getDatabaseConnection();
$bieres = getAllBieres($pdo);

$page_title = 'Catalogue';

//2 Générer Vue
$currentPage = 'nos_bieres';
ob_start();
include 'app/view/page_nos_bieres.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';  