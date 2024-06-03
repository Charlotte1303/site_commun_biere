<?php
//1 Données
$title = "nos_bieres";
$css = "nosbieres.css";

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

require_once "app/model/connexionBDD.php";
require_once "app/model/biere.model.php";

$pdo = getDatabaseConnection();
$bieres = getAllBieres($pdo);

//2 Générer Vue
ob_start();
include 'app/view/nos_bieres.view.php';
$content = ob_get_clean();

//3 inclure le layout

include 'app/view/common/layout.php';