<?php
session_start();

// Récupération des données
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

require_once 'app/model/connexionBDD.php';
require_once 'app/model/biere.model.php';

$biere = [];
$search = $_GET['search']??'';

$biere = searchBieres(getDatabaseConnection(), $_GET['search']);

$page_title = "Bière - Recherche";

// Chargement de la vue
ob_start();
include 'app/view/biere1.view.php';
$content = ob_get_clean();

// Génération de la page HTML à partir du Layout
include 'app/view/common/layout.php';