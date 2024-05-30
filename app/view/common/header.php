<?php
session_start();
if (!isset($_SESSION['age_verified']) || $_SESSION['age_verified'] !== true) {
    header('Location: age_verification.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/<?= $css ?>">
</head>

<body>

    <header>
        <a href="index.php"><img class="logo" src="public/images/Logo.png"></a>
        <nav class="menu">
            <ul>
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="a_propos.php">A propos</a>
                </li>
                <li>
                    <a href="nos_bieres.php">Nos bières</a>
                </li>
                <li>
                    <a href="brassage.php">Brassage</a>
                </li>
                <li>
                    <a href="nous_contacter.php">Contact</a>
                </li>
                <li>
                    <a href=""><img class="panier" src="public/images/Panier_logo.png"></a>
                </li>
            </ul>

        </nav>
    </header>