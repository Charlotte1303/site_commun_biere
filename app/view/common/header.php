<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="public/css/<?= htmlspecialchars($css) ?>">
    <script src="public/js/script.js" defer></script>
</head>
<body>
    <header>
        <a href="index.php"><img class="logo" src="public/images/Logo.png" alt="Logo"></a>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="a_propos.php">À propos</a></li>
                <li><a href="nos_bieres.php">Nos bières</a></li>
                <li><a href="brassage.php">Brassage</a></li>
                <li><a href="nous_contacter.php">Contact</a></li>
                <li><a href="panier.php"><img class="panier" src="public/images/Panier_logo.png" alt="Panier"></a></li>
            </ul>
        </nav>
    </header>
